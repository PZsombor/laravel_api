<?php

namespace Database\Factories;

use App\Models\Brands;
use App\Models\Categories;
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
            'category_id' => Categories::factory(),
            'brand_id' => Brands::factory(),
            'name' => str_random(8),
            'cost' => random(1000,10000),
            'amount' => random(10,100),
            'description' => str_random(50)
        ];
    }
}
