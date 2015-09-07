<?php

use Illuminate\Database\Seeder;
use OrangeBike\Entities\PostOrder;

class PostOrderTableSeeder extends Seeder {

    public function run()
    {
        PostOrder::create([
            'titulo'    => 'Primero',
            'orden'     => '1'
        ]);
    }

} 