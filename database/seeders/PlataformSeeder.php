<?php

namespace Database\Seeders;

use App\Models\Plataform;
use Illuminate\Database\Seeder;

class PlataformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plataform::create([ 
            'name'=>'YouTube'
        ]);

        Plataform::create([ 
            'name'=>'Vimeo'
        ]);
    }
}
