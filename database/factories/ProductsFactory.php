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
    public function definition()
    {

        $nameproduct = array("sopaipillas", "empanadas", "berlines", "pan", "carne",
         "leche", "huevos");

        return [
            'name' => $nameproduct[rand(0, 6)],
            'type' => fake()->firstNameMale(),
            'cost' => fake()->numberBetween(200, 6000)



        ];
    }
}
