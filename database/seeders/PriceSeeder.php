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
                'name'=>'50 bs (Nivel 1)',
                'value'=> 500
                ]);

                Price::create([
                    'name'=>'100 bs (Nivel 2)',
                    'value'=> 100
                    ]);

                    Price::create([
                        'name'=>'150 bs (Nivel 3)',
                        'value'=> 150
                        ]);
    }
}
