<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'price' => $this->faker->numberBetween($min = 1, $max = 1000), 
            'title' => $this->faker->text($maxNbChars = 10),
            'description' => $this->faker->text($maxNbChars = 200),
            'stock' => $this->faker->randomDigitNotNull,
            'solds' => $this->faker->randomDigitNotNull,
            'image' => $this->faker->imageUrl($width = 640, $height = 480)
            
            

        ];
    }
}
