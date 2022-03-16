<?php

namespace Database\Factories;

use App\Models\brand;
use App\Models\category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //insert fake products
            'vendor_id'=> $this->faker->randomElement(User::pluck('id')->toArray()),
            'category_id'=> $this->faker->randomElement(category::where('is_parent', 1)->pluck('id')->toArray()),
            'child_category_id' => $this->faker->randomElement(category::where('is_parent', 0)->pluck('id')->toArray()),
            'brand_id' =>  $this->faker->randomElement(brand::pluck('id')->toArray()),
            'title'=> $this->faker->word,
            'slug'=> $this->faker->unique()->slug,
            'summary'=> $this->faker->text,
            'description'=> $this->faker->text,
            'stock'=> $this->faker->numberBetween(2.10),
            'price'=> $this->faker->numberBetween(100,1000),
            'offer_price'=> $this->faker->numberBetween(10,100),
            'discound'=> $this->faker->numberBetween(1,70),
            'conditions'=> $this->faker->randomElement(['new','popular','winter']),
            'status'=> $this->faker->randomElement([true, false]),
            'size'=> $this->faker->randomElement(['S','M','L']),
            'image'=> $this->faker->imageUrl('400','200'),
        ];
    }
}
