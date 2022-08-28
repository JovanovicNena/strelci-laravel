<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LigaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'drzava' => $this->faker->country(),
            'naziv' => $this->faker->cityPrefix(),
            'broj_klubova' => $this->faker->numberBetween($min = 1, $max = 30)
        ];
    }
}
