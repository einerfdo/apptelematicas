<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => fake()->unique()->sentence($nbWords = 3, $variableNbWords = true),
            'tipo' => fake()->randomElement($array = ['RED','PC','GAMMING']),
            'cantidad' => fake()->numberBetween($min = 1, $max = 1000),
        ];
    }
}
