<?php namespace OrangeBike\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends BaseEntity{

	use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['titulo','descripcion','contenido','imagen','published_at','publicar'];

} 