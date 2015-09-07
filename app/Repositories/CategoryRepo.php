<?php namespace OrangeBike\Repositories;

use Illuminate\Http\Request;

use OrangeBike\Entities\Category;

class CategoryRepo extends BaseRepo {

    public function getModel()
    {
        return new Category;
    }
}