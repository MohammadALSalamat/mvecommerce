<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class brandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // insert fake data to brand table
            'title'=>$this->faker->word,
            'slug' =>$this->faker->unique()->slug,
            'image'=>$this->faker->imageUrl('100','70'),
            'status'=>$this->faker->randomElement(['1','0'])
        ];
    }
}
