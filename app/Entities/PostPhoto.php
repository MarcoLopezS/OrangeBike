<?php namespace OrangeBike\Entities;

class PostPhoto extends BaseEntity {
    protected $fillable = ['titulo'];

    public function post()
    {
        return $this->belongsTo('OrangeBike\Entities\Post', 'post_id');
    }
} 