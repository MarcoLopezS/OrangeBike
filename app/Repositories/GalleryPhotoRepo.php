<?php namespace OrangeBike\Repositories;

use OrangeBike\Entities\GalleryPhoto;

class GalleryPhotoRepo extends BaseRepo {

    public function getModel()
    {
        return new GalleryPhoto;
    }
}