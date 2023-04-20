<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
    

       // $faker = Factory::create('es_VE');
        return [
            'name' => fake()->name(),
            'lastname' => fake()->lastName(),
            'dni' => fake()->dni(),
            'birthdate' =>fake()->date('Y_m_d'),
            'status' => fake()->boolean(),



        ];
    }
}
