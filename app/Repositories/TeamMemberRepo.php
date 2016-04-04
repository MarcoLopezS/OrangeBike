<?php namespace OrangeBike\Repositories;

use Illuminate\Http\Request;
use OrangeBike\Entities\TeamMember;

class TeamMemberRepo extends BaseRepo {

    public function getModel()
    {
        return new TeamMember;
    }

    //BUSQUEDA DE REGISTROS
    public function findAndPaginate(Request $request)
    {
        return $this->getModel()
            ->nombre($request->get('nombre'))
            ->publicar($request->get('publicar'))
            ->orderBy('nombre', 'asc')
            ->paginate();
    }
}