<?php namespace OrangeBike\Entities;

class PostHistory extends BaseEntity{

    protected $fillable = ['post_id','user_id'];

    public function user()
    {
        return $this->belongsTo('OrangeBike\Entities\User', 'user_id');
    }

    public function post()
    {
        return $this->belongsTo('OrangeBike\Entities\Post', 'post_id');
    }

} 