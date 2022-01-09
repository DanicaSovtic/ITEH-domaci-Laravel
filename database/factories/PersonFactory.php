<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'gender' => $this->faker->boolean() ? 'male' : 'female',
            'nationality' => $this->faker->word,
            'city_id' => $this->faker->numberBetween(1, 20),
            'citizenship_id' => $this->faker->numberBetween(1, 4)
        ];
    }
}
