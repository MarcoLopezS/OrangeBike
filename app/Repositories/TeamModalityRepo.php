<?php namespace OrangeBike\Repositories;

use OrangeBike\Entities\TeamModality;

class TeamModalityRepo extends BaseRepo {

    public function getModel()
    {
        return new TeamModality;
    }
}