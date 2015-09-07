<?php namespace OrangeBike\Entities;

class Category extends BaseEntity{

    protected $fillable = ['titulo','slug_url','publicar'];

    protected $perPage = 10;

    public function user()
    {
        return $this->belongsTo('OrangeBike\Entities\User', 'user_id');
    }

    public function post()
    {
        return $this->hasMany('OrangeBike\Entities\Post');
    }

} 