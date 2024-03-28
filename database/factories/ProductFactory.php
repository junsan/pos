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
            'name' => fake()->word(2, true),
            'status' => rand(0,1),
            'price' => fake()->randomFloat(), 
            'image' => fake()->word(),
            'description' => fake()->paragraph()
        ];
    }
}
