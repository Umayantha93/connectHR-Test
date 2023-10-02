<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'employee_count' => $this->faker->numberBetween(1, 100),
        ];
    }
}
