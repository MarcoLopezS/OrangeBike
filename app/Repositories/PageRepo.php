<?php namespace OrangeBike\Repositories;

use OrangeBike\Entities\Page;

class PageRepo extends BaseRepo{

    public function getModel()
    {
        return new Page;
    }

    public $filters = ['search', 'publicar'];

    public function filterByCategory($q, $value)
    {
        $q->where('category_id', $value);
    }
}