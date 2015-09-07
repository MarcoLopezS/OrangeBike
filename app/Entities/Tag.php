<?php namespace OrangeBike\Entities;

class Tag extends BaseEntity{

    protected $fillable = ['titulo','slug_url','publicar'];

    public function user()
    {
        return $this->belongsTo('OrangeBike\Entities\User', 'user_id');
    }

} 