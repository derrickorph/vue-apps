<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence();

        return [
            'name' => $name,
            'description' => $this->faker->sentences(rand(2, 5), true),
            'image' => '1.jpg',
            'price' => rand(500, 10000),
            'active' => $this->faker->boolean(80)
        ];
    }
}
