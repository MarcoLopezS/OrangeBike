<?php namespace OrangeBike\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use OrangeBike\Http\Controllers\Controller;

use OrangeBike\Entities\TeamModality;
use OrangeBike\Repositories\TeamModalityRepo;

class TeamModalityController extends Controller {

    protected $rules = [
        'titulo' => 'required',
        'descripcion' => 'string',
        'publicar' => 'required|in:0,1'
    ];

    protected $teamModalityRepo;

    public function __construct(TeamModalityRepo $teamModalityRepo)
    {
        $this->middleware('auth');
        $this->teamModalityRepo = $teamModalityRepo;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index(Request $request)
    {
        $tags = $this->teamModalityRepo->findAndPaginate($request);

        return view('admin.team-modality.list', compact('tags'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.team-modality.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->rules);

        //VARIABLES
        $titulo = $request->input('titulo');
        $slug_url = $this->teamModalityRepo->SlugUrl($titulo);

        //GUARDAR DATOS
        $team = new TeamModality($request->all());
        $team->slug_url = $slug_url;
        $team->user_id = Auth::user()->id;
        $this->teamModalityRepo->create($team, $request->all());

        //MENSAJE
        flash()->success('El registro se agregó satisfactoriamente.');

        //REDIRECCIONAR A PAGINA PARA VER DATOS
        return redirect()->route('admin.team-modality.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $tag = $this->teamModalityRepo->findOrFail($id);

        return view('admin.team-modality.edit', compact('tag'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $team = $this->teamModalityRepo->findOrFail($id);

        //VALIDACION DE DATOS
        $this->validate($request, $this->rules);

        //VARIABLES
        $titulo = $request->input('titulo');
        $slug_url = $this->teamModalityRepo->SlugUrl($titulo);

        //GUARDAR DATOS
        $team->slug_url = $slug_url;
        $team->user_id = Auth::user()->id;
        $this->teamModalityRepo->update($team, $request->all());

        //MENSAJE
        flash()->success('El registro se actualizó satisfactoriamente.');

        //REDIRECCIONAR A PAGINA PARA VER DATOS
        return redirect()->route('admin.team-modality.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id, Request $request)
    {
        $post = $this->tagRepo->findOrFail($id);
        $post->delete();       

        $message = 'El registro se eliminó satisfactoriamente.';

        if($request->ajax())
        {
            return response()->json([
                'message' => $message
            ]);
        }

        return redirect()->route('admin.team-modality.index');
    }

}