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

use OrangeBike\Traits\CaptchaTrait;

class HomeController extends Controller{

    use CaptchaTrait;

    private $galleryRepo;
    private $galleryPhotoRepo;
    private $postRepo;
    private $sliderRepo;

    public function __construct(GalleryRepo $galleryRepo,
                                GalleryPhotoRepo $galleryPhotoRepo,
                                PostRepo $postRepo,
                                SliderRepo $sliderRepo)
    {
        $this->galleryRepo = $galleryRepo;
        $this->galleryPhotoRepo = $galleryPhotoRepo;
        $this->postRepo = $postRepo;
        $this->sliderRepo = $sliderRepo;
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

    public function fotos()
    {
    	return view('frontend.fotos');
    }

    public function fotosNota()
    {
    	return view('frontend.fotos-nota');
    }

    public function videos()
    {
    	return view('frontend.videos');
    }

}