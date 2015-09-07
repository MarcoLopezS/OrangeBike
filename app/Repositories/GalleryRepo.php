<?php namespace OrangeBike\Repositories;

use Illuminate\Http\Request;

use OrangeBike\Entities\Gallery;

class GalleryRepo extends BaseRepo {

    public function getModel()
    {
        return new Gallery;
    }

    //BUSQUEDA DE REGISTROS
    public function findAndPaginate(Request $request)
    {
        return $this->getModel()
                    ->titulo($request->get('titulo'))
                    ->publicar($request->get('publicar'))
                    ->orderBy('published_at', 'desc')
                    ->paginate();
    }
}