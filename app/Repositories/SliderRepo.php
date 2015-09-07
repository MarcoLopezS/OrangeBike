<?php namespace OrangeBike\Repositories;

use OrangeBike\Entities\Slider;

class SliderRepo extends BaseRepo{

    public function getModel()
    {
        return new Slider;
    }

}