<?php namespace OrangeBike\Entities;

class Timezone extends Eloquent {
	protected $fillable = [];

    public function Configuration()
    {
        return $this->hasMany('Configuration');
    }
}