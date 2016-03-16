<?php namespace OrangeBike\Entities;

use Illuminate\Database\Eloquent\Model;

use Jenssegers\Date\Date;

class BaseEntity extends Model {

	public function scopeTitulo($query, $titulo)
    {
        if(trim($titulo) != "")
        {
            $query->where('titulo', 'LIKE', "%$titulo%");
        }           
    }

    public function scopePublicar($query, $publicar)
    {
        if($publicar != "")
        {
            $query->where('publicar', $publicar);
        }
    }

    public function fechaTexto($datetime)
    {
        Date::setLocale('es');
        $fecha = Date::create($datetime->year, $datetime->month, $datetime->day, $datetime->hour, $datetime->minute, $datetime->second);
        $fecha = $fecha->format('d \\d\\e F \\d\\e\\l Y');
        return $fecha;
    }

}