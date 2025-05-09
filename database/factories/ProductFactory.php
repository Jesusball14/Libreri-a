<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

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
            'title' => $this->faker->sentence(3),
            
            'description' => $this->faker->text(),
            
            'price' => $this->faker->randomFloat(2, 10, 1000),
            // 'stock' => $this->faker->numberBetween(1, 100),
        ];
    }
}
