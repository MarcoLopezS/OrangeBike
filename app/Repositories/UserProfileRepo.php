<?php namespace OrangeBike\Repositories;

use OrangeBike\Entities\UserProfile;

class UserProfileRepo extends BaseRepo{

    public function getModel()
    {
        return new UserProfile;
    }

}