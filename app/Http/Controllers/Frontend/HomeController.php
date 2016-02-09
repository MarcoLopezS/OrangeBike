<?php namespace OrangeBike\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use OrangeBike\Http\Controllers\Controller;

use OrangeBike\Repositories\GalleryRepo;
use OrangeBike\Repositories\GalleryPhotoRepo;
use OrangeBike\Repositories\PostRepo;

class HomeController extends Controller{

    private $galleryRepo;
    private $galleryPhotoRepo;
    private $postRepo;

    public function __construct(GalleryRepo $galleryRepo,
                                GalleryPhotoRepo $galleryPhotoRepo,
                                PostRepo $postRepo)
    {
        $this->galleryRepo = $galleryRepo;
        $this->galleryPhotoRepo = $galleryPhotoRepo;
        $this->postRepo = $postRepo;
    }

    public function index()
    {
        //NOTICIAS
        $noticias = $this->postRepo->postPaginate(3);

        //GALERIA DE FOTOS
        $galeria = $this->galleryRepo->findGalleryLast();
        $fotos = $this->galleryPhotoRepo->findPhotosGallery($galeria->id, 6);

        return view('frontend.home', compact('noticias','galeria','fotos'));
    }

    public function blog()
    {
        $noticias = $this->postRepo->postPaginate(6);

    	return view('frontend.blog', compact('noticias'));
    }

    public function noticia($id, $url)
    {
        $noticia = $this->postRepo->postSelect($id, $url);

    	return view('frontend.blog-nota', compact('noticia'));
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