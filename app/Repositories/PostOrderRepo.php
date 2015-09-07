<?php namespace OrangeBike\Repositories;

use OrangeBike\Entities\PostOrder;

class PostOrderRepo extends BaseRepo{

    public function getModel()
    {
        return new PostOrder;
    }

}