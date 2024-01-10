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
    public function definition()
    {
        return [
            'name' => fake()->word,
            'barcode' => fake()->word,
            'stock_count' => fake()->randomNumber(3),
            'price' => fake()->randomFloat(1, 100, 2000),
            'currency' => 'TRY',
            'status' => 'active'
        ];
    }
}
