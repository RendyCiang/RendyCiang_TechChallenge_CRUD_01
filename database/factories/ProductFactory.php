<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'Product_Name' => $this->faker->word,
            'Product_Type' => $this->faker->word,
            'Model_Number' => $this->faker->word,
            'Price' => $this->faker->randomNumber(2),

        ];
    }
}
