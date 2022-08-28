<?php

namespace Database\Factories;

use App\Models\Klub;
use Illuminate\Database\Eloquent\Factories\Factory;

class StrelacFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName($gender = 'male'),
            'prezime' => $this->faker->lastName($gender = 'male'),
            'pozicija' => $this->faker->randomElement($array = array('Odbrana', 'Sredina', 'Napad')),
            'broj_dres' => $this->faker->numberBetween($min = 0, $max = 99),
            'broj_golova' => $this->faker->numberBetween($min = 1, $max = 60),
            'klub_id' => Klub::factory()
        ];
    }
}
