<?php namespace OrangeBike\Repositories;

use Illuminate\Http\Request;

use OrangeBike\Entities\Post;

class PostRepo extends BaseRepo{

    public function getModel()
    {
        return new Post;
    }

    //BUSQUEDAS DE REGISTROS ELIMINADOS
    public function findAndPaginateDeletes(Request $request)
    {
        return $this->getModel()
                    ->onlyTrashed()
                    ->titulo($request->get('titulo'))
                    ->category($request->get('category'))
                    ->orderBy('deleted_at', 'desc')
                    ->paginate();
    }

    //BUSQUEDA DE REGISTROS
    public function findAndPaginate(Request $request)
    {
        return $this->getModel()
                    ->titulo($request->get('titulo'))
                    ->category($request->get('category'))
                    ->publicar($request->get('publicar'))
                    ->orderBy('published_at', 'desc')
                    ->paginate();
    }

    //FUNCION PARA MOSTRAR NOTICIAS Y PAGINARLAS
    public function postPaginate($paginate)
    {
        return $this->getModel()->where('publicar','1')->orderBy('published_at','desc')->paginate($paginate);
    }

    //NOTICIA SELECCIONADA
    public function postSelect($id, $url)
    {
        return $this->getModel()->where('id',$id)->where('slug_url',$url)->first();
    }
}