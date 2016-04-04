<?php

use Illuminate\Database\Seeder;

class ConfigTableSeeder extends Seeder {

    public function run()
    {
        \DB::table('configurations')->insert([
    		'id' 			=> 1,
            'titulo'		=> 'Orange Bike Perú',
            'dominio'		=> 'http://orange.dev/',
            'keywords'		=> 'administrador, cms',
            'description'	=> 'Administrador de contenido en L5',
            'email'		=> 'orangebikeperu@gmail.com',
        ]);

        \DB::table('sliders')->insert([
            'id' => 1,
            'header' => '',
            'body'  => '',
            'footer' => ''
        ]);
    }

}