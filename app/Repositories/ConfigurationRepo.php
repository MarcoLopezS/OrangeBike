<?php namespace OrangeBike\Repositories;

use OrangeBike\Entities\Configuration;

class ConfigurationRepo extends BaseRepo{

    public function getModel()
    {
        return new Configuration;
    }

}