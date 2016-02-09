<?php namespace OrangeBike\Repositories;

use OrangeBike\Entities\GalleryPhoto;

class GalleryPhotoRepo extends BaseRepo {

    public function getModel()
    {
        return new GalleryPhoto;
    }

    //BUSCAR FOTOS DE GALERIA
    public function findPhotosGallery($galeria, $paginate)
    {
    	return $this->getModel()
    				->where('gallery_id', $galeria)
    				->orderBy('orden', 'asc')
    				->paginate($paginate);
    }

}