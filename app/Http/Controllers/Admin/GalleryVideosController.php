<?php namespace OrangeBike\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use OrangeBike\Http\Controllers\Controller;

use OrangeBike\Entities\Video;
use OrangeBike\Repositories\VideoRepo;

class GalleryVideosController extends Controller {

    protected $rules = [
        'titulo' => 'required',
        'slug_url' => 'required',
        'descripcion' => 'required|min:10|max:255',
        'contenido' => 'required',
        'imagen' => 'mimes:jpeg,jpg,png',
        'video' => 'required',
        'published_at' => 'required',
        'publicar' => 'required|in:1,0'
    ];

    protected $videoRepo;

    public function __construct(VideoRepo $videoRepo)
    {
        $this->middleware('auth');
        $this->videoRepo = $videoRepo;

    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $posts = $this->videoRepo->findAndPaginate($request);
        return view('admin.videos.list', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
         return view('admin.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->rules);

        //CREAR CARPETA CON FECHA Y MOVER IMAGEN
        if($request->hasFile('imagen'))
        {
            $this->videoRepo->CrearCarpeta();
            $ruta = "upload/".$this->videoRepo->FechaCarpeta();
            $archivo = $request->file('imagen');
            $imagen = $this->videoRepo->FileMove($archivo, $ruta);
            $imagen_carpeta = $this->videoRepo->FechaCarpeta();
        }else{
            $imagen = "";
            $imagen_carpeta = "";
        }        

        //VARIABLES
        $titulo = $request->input('titulo');
        $slug_url = $request->input('slug_url');
        $video = $request->input('video');

        //GUARDAR DATOS
        $post = new Video($request->all());
        $post->slug_url = $slug_url;
        $post->video = $video;
        $post->imagen = $imagen;
        $post->imagen_carpeta = $imagen_carpeta;
        $post->user_id = Auth::user()->id;
        $this->videoRepo->create($post, $request->all());

        //MENSAJE
        \Session::flash('mensaje', 'El registro se agregó satisfactoriamente.');

        //REDIRECCIONAR A PAGINA PARA VER DATOS
        return redirect()->route('admin.gallery.video.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $post = $this->videoRepo->findOrFail($id);
        return view('admin.videos.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        //BUSCAR ID
        $post = $this->videoRepo->findOrFail($id);

        //VALIDACION DE DATOS
        $this->validate($request, $this->rules);

        //VARIABLES
        $titulo = $request->input('titulo');
        $slug_url = $request->input('slug_url');
        $video = $request->input('video');

        //VERIFICAR SI SUBIO IMAGEN
        if($request->hasFile('imagen'))
        {
            $this->videoRepo->CrearCarpeta();
            $ruta = "upload/".$this->videoRepo->FechaCarpeta();
            $archivo = $request->file('imagen');
            $imagen = $this->videoRepo->FileMove($archivo, $ruta);
            $imagen_carpeta = $this->videoRepo->FechaCarpeta();
        }else{
            $imagen = $request->input('imagen_actual');
            $imagen_carpeta = $request->input('imagen_actual_carpeta');
        }

        //GUARDAR DATOS
        $post->slug_url = $slug_url;
        $post->imagen = $imagen;
        $post->imagen_carpeta = $imagen_carpeta;
        $post->video = $video;
        $this->videoRepo->update($post, $request->except('imagen'));

        //MENSAJE
        \Session::flash('mensaje', 'El registro se actualizó satisfactoriamente.');

        //REDIRECCIONAR A PAGINA PARA VER DATOS
        return redirect()->route('admin.gallery.video.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id, Request $request)
    {
        $post = $this->videoRepo->findOrFail($id);
        $post->delete();       

        $message = 'El registro se eliminó satisfactoriamente.';

        if($request->ajax())
        {
            return response()->json([
                'message' => $message
            ]);
        }

        return redirect()->route('admin.post.index');
    }


    /**
     * Generar URL a partir de Titulo de Noticia
     *
     * @param  int  $id
     * @return Response
     */
    public function slugUrl(Request $request)
    {
        $url = $this->videoRepo->SlugUrl($request->input('ajaxTitulo'));

        if($request->ajax())
        {
            return response()->json([
                'url' => $url
            ]);
        }
    }

    /**
     * Lista de noticias Eliminadas
     */
    public function listsDeletes(Request $request)
    {
        $posts = $this->videoRepo->findAndPaginateDeletes($request);
        return view('admin.videos.list-deletes', compact('posts'));
    }


    /**
     * Eliminacion completa de Noticia
     */
    public function destroyTotal($id, Request $request)
    {
        $post = $this->videoRepo->findTrash($id);
        $post->forceDelete();

        $message = 'El registro se eliminó satisfactoriamente.';

        if($request->ajax())
        {
            return response()->json([
                'message' => $message
            ]);
        }

        return redirect()->route('admin.gallery.videos.listsDeletes');
    }


    /**
     * Restaurar noticia
     */
    public function restore($id, Request $request)
    {
        $post = $this->videoRepo->findTrash($id);
        $post->restore();

        $message = 'El registro se restauró satisfactoriamente.';

        if($request->ajax())
        {
            return response()->json([
                'message' => $message
            ]);
        }

        return redirect()->route('admin.gallery.videos.listsDeletes');
    }
}
