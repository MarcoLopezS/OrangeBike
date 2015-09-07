<?php namespace OrangeBike\Repositories;

use Illuminate\Http\Request;

use OrangeBike\Entities\PostHistory;

class PostHistoryRepo extends BaseRepo{

    public function getModel()
    {
        return new PostHistory;
    }

}