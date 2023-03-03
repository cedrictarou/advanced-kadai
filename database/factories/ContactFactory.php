<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullname' => $this->faker->lastName() . $this->faker->firstName(),
            'gender' => $this->faker->numberBetween(1, 2),
            'email' => $this->faker->safeEmail(),
            'postcode' => substr_replace($this->faker->postcode, '-', 3, 0),
            'address' => $this->faker->streetAddress(),
            'building_name' => $this->faker->secondaryAddress(),
            'opinion' => $this->faker->realText(120),
            'created_at' => $this->faker->dateTimeBetween('-1 week', Carbon::now()),
        ];
    }
}
