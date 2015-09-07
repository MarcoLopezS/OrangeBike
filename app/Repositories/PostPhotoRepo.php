<?php namespace OrangeBike\Repositories;

use OrangeBike\Entities\PostPhoto;

class PostPhotoRepo extends BaseRepo{

    public function getModel()
    {
        return new PostPhoto;
    }
}