<?php namespace OrangeBike\Entities;

class ContactoMensaje extends BaseEntity{

    protected $fillable = ['nombre','apellidos','email','telefono','telefono_whatsapp','mensaje','leido'];

}