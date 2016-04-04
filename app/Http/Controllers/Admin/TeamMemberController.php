<?php namespace OrangeBike\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use OrangeBike\Http\Controllers\Controller;

use OrangeBike\Repositories\TeamMemberRepo;

class TeamMemberController extends Controller {

    protected $rules = [
        'titulo' => 'required',
        'publicar' => 'required|in:1,0'
    ];

    protected $teamMemberRepo;

    public function __construct(TeamMemberRepo $teamMemberRepo)
    {
        $this->middleware('auth');
        $this->teamMemberRepo = $teamMemberRepo;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index(Request $request)
    {
        $posts = $this->teamMemberRepo->findAndPaginate($request);

        return view('admin.team-member.list', compact('posts'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.team-member.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->rules);
        
        //GUARDAR DATOS
        $tag = new Tag($request->all());
        $tag->user_id = Auth::user()->id;
        $this->teamMemberRepo->create($tag, $request->all());

        //MENSAJE
        flash()->success('El registro se agregó satisfactoriamente.');

        //REDIRECCIONAR A PAGINA PARA VER DATOS
        return redirect()->route('admin.team-member.index');
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
        $tag = $this->teamMemberRepo->findOrFail($id);

        return view('admin.team-member.edit', compact('tag'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $tag = $this->teamMemberRepo->findOrFail($id);

        //VALIDACION DE DATOS
        $this->validate($request, $this->rules);

        //GUARDAR DATOS
        $tag->user_id = Auth::user()->id;
        $this->teamMemberRepo->update($tag,$request->all());

        //MENSAJE
        flash()->success('El registro se actualizó satisfactoriamente.');

        //REDIRECCIONAR A PAGINA PARA VER DATOS
        return redirect()->route('admin.team-member.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id, Request $request)
    {
        $post = $this->teamMemberRepo->findOrFail($id);
        $post->delete();

        $message = 'El registro se eliminó satisfactoriamente.';

        if ($request->ajax()) {
            return response()->json([
                'message' => $message
            ]);
        }

        return redirect()->route('admin.team-member.index');
    }

}