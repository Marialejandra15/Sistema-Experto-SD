<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'=>'Fantasia'
        ]);
        Category::create([
            'name'=>'Suspenso'
        ]);
        Category::create([
            'name'=>'Terror'
        ]);
        Category::create([
            'name'=>'Distopia'
        ]);
        Category::create([
            'name'=>'Ciencia Ficcion'
        ]);
    }
}
