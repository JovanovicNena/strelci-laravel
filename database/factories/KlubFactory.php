<?php

namespace Database\Factories;

use App\Models\Liga;
use Illuminate\Database\Eloquent\Factories\Factory;

class KlubFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->company(),
            'grad' => $this->faker->city(),
            'predsednik' => $this->faker->name($gender = 'male'),
            'trener' => $this->faker->name($gender = 'male'),
            'liga_id' => Liga::factory()
        ];
    }
}
