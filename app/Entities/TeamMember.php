<?php namespace OrangeBike\Entities;

class TeamMember extends BaseEntity{

    protected $fillable = ['titulo','descripcion','imagen','imagen_carpeta','publicar','fecha_nacimiento','lugar_nacimiento','modality','publicar','user_id'];

    public function user()
    {
        return $this->belongsTo('OrangeBike\Entities\User', 'user_id');
    }

} 