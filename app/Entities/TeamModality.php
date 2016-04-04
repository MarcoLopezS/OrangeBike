<?php namespace OrangeBike\Entities;

class TeamModality extends BaseEntity{

    protected $fillable = ['titulo','slug_url','descripcion','publicar'];

    public function user()
    {
        return $this->belongsTo('OrangeBike\Entities\User', 'user_id');
    }

} 