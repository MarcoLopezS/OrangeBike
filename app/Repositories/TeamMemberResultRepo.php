<?php namespace OrangeBike\Repositories;

use OrangeBike\Entities\TeamMemberResult;

class TeamMemberResultRepo extends BaseRepo {

    public function getModel()
    {
        return new TeamMemberResult;
    }
}