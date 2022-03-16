<?php

namespace Database\Factories;

use App\Models\category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // add the fake data
            'title'=>$this->faker->title,
            'description'=>$this->faker->sentences(3,true),
            'slug'=>$this->faker->unique()->slug,
            'image' => $this->faker->imageUrl('100','70'),
            'is_parent'=>$this->faker->randomElement([true,false]),
            'status' => $this->faker->randomElement([true, false]),
            'parent_id' => $this->faker->randomElement(category::pluck('id')->toArray()),
        ];
    }
}
