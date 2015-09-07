<?php namespace OrangeBike\Repositories;

use OrangeBike\Entities\Tag;

class TagRepo extends BaseRepo {

    public function getModel()
    {
        return new Tag;
    }
}