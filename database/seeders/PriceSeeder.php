<?php

namespace Database\Seeders;

use App\Models\Price;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Price::create([ 
            'name'=>'Gratis',
            'value'=> 0
            ]);

            Price::create([ 
                'name'=>'500 bs (Nivel 1)',
                'value'=> 500
                ]);

                Price::create([ 
                    'name'=>'1000 bs (Nivel 2)',
                    'value'=> 1000
                    ]);

                    Price::create([ 
                        'name'=>'1200bs (Nivel 3)',
                        'value'=> 1200
                        ]);
    }
}
