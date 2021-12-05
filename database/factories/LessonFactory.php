<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'url'=> 'https://youtu.be/AV8fPO0VN14',
            'iframe'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/AV8fPO0VN14" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'plataform_id'=> 1
        ];
    }
}
