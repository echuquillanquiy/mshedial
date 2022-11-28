<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dni' => $this->faker->unique()->randomNumber(8),
            'name' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'birthday' => $this->faker->date(),
            'sex' => $this->faker->randomElement(['M', 'F']),
            'age' => $this->faker->randomDigit(2),
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'civil_state' => $this->faker->randomElement(['CASADO', 'SOLTERO', 'CONVIVIENTE', 'DIVORCIADO']),
            'education' => $this->faker->randomElement(['ANALFABETO', 'SECUNDARIA COMPLETA', 'TECNICO COMPLETO', 'UNIVERSITARIO COMPLETO']),
            'ocupation' => $this->faker->jobTitle(),
            'condition' => $this->faker->paragraph(1),
            'last_work' => $this->faker->date(),
            'origin' => $this->faker->city(),
            'code' => $this->faker->randomNumber(8)
        ];
    }
}
