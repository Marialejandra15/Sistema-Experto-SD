<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;


class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model =Image::class;

    public function definition()
    {
        return [
            'url'=> 'courses/' . $this->faker->image('public\storage\courses',640,480,null,false),
            'imageable_id'=>null,
            'imageable_type'=>null,
        ];
    }
}
