<?php namespace OrangeBike\Repositories;

use Illuminate\Http\Request;

use OrangeBike\Entities\ContactoMensaje;

class ContactoMensajeRepo extends BaseRepo {

    public function getModel()
    {
        return new ContactoMensaje;
    }

    //BUSQUEDA DE REGISTROS
    public function findMessageAndPaginate($type, Request $request)
    {
        return $this->getModel()
                    ->where('type', $type)
                    ->datefrom($request->get('from'))
                    ->dateto($request->get('to'))
                    ->leido($request->get('leido'))
                    ->orderBy('created_at', 'desc')
                    ->paginate();
    }
    
}