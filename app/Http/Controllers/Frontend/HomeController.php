<?php namespace OrangeBike\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use OrangeBike\Http\Controllers\Controller;

use OrangeBike\Entities\Configuration;
use OrangeBike\Entities\ContactoMensaje;
use OrangeBike\Repositories\GalleryRepo;
use OrangeBike\Repositories\GalleryPhotoRepo;
use OrangeBike\Repositories\PostRepo;
use OrangeBike\Repositories\SliderRepo;
use OrangeBike\Repositories\TeamModalityRepo;

use OrangeBike\Traits\CaptchaTrait;

class HomeController extends Controller{

    use CaptchaTrait;

    protected $galleryRepo;
    protected $galleryPhotoRepo;
    protected $postRepo;
    protected $sliderRepo;
    protected $teamModalityRepo;

    public function __construct(GalleryRepo $galleryRepo,
                                GalleryPhotoRepo $galleryPhotoRepo,
                                PostRepo $postRepo,
                                SliderRepo $sliderRepo,
                                TeamModalityRepo $teamModalityRepo)
    {
        $this->galleryRepo = $galleryRepo;
        $this->galleryPhotoRepo = $galleryPhotoRepo;
        $this->postRepo = $postRepo;
        $this->sliderRepo = $sliderRepo;
        $this->teamModalityRepo = $teamModalityRepo;
    }

    public function index()
    {
        //NOTICIAS
        $noticias = $this->postRepo->postPaginate(4);

        //GALERIA DE FOTOS
        $galeria = $this->galleryRepo->findGalleryLast();
        $fotos = $this->galleryPhotoRepo->findPhotosGallery($galeria->id, 6);

        //SLIDER
        $slider = $this->sliderRepo->where('id',1)->first();

        return view('frontend.index', compact('noticias','galeria','fotos','slider'));
    }

    public function fotos()
    {
        //GALERIA
        $galeria = $this->galleryRepo->orderByPagination('published_at', 'desc', 3);

        return view('frontend.galerias', compact('galeria', 'fotos'));
    }

    public function fotosGaleria($id, $galeria)
    {
        //GALERIA
        $galerias = $this->galleryRepo->findOrFail($id);

        //FOTOS
        $fotos = $this->galleryPhotoRepo->findPhotosGallery($id, 100);

        return view('frontend.galerias-fotos', compact('galerias', 'fotos'));
    }

    public function blog()
    {
        $noticias = $this->postRepo->postPaginate(6);

    	return view('frontend.blog', compact('noticias'));
    }

    public function noticia($id, $url)
    {
        $noticia = $this->postRepo->postSelect($id, $url);

        $ultimas = $this->postRepo->lastPost();

    	return view('frontend.blog-nota', compact('noticia','ultimas'));
    }

    public function contacto()
    {
        return view('frontend.contacto');
    }

    public function postContacto(Request $request)
    {
        //CONTACTO
        $contacto = Configuration::whereId(1)->first();

        //REGLAS
        $rules = [
            'nombre'  => 'required',
            'email'   => 'required|email',
            'mensaje' => 'required',
            'g-recaptcha-response'  => 'required'
        ];

        //VALIDACION
        $this->validate($request, $rules);

        //VALIDACION DE CAPTCHA
        if($this->captchaCheck() == false)
        {
            return redirect()->back()
                ->withErrors(['Error de captcha'])
                ->withInput();
        }

        //GUARDAR EN BD
        $contMensaje = new ContactoMensaje($request->all());
        $contMensaje->type = 'contacto';
        $contMensaje->save();

        $mensaje = 'Tu mensaje ha sido enviado.';

        if($request->ajax())
        {
            return response()->json([
                'message' => $mensaje
            ]);
        }
    }

    public function team()
    {
        //MODALIDAD
        $modality = $this->teamModalityRepo->orderBy('titulo', 'desc')->all();

    	return view('frontend.team', compact('modality'));
    }

}