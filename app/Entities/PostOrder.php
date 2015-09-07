<?php namespace OrangeBike\Entities;

class PostOrder extends BaseEntity{

    protected $fillable = ['titulo','orden'];

    public function user()
    {
        return $this->belongsTo('OrangeBike\Entities\User', 'user_id');
    }

    public function post()
    {
        return $this->hasMany('OrangeBike\Entities\Post');
    }

} 