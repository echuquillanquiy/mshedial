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
            'firstname' => $this->faker->firstName(),
            'secondname' => $this->faker->name(),
            'surname' => $this->faker->lastName(),
            'lastname' => $this->faker->lastName(),
            'birthday' => $this->faker->date(),
            'sex' => $this->faker->randomElement(['M', 'F']),
            'age' => $this->faker->randomDigit(2),
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'civil_state' => $this->faker->randomElement(['CASADO', 'SOLTERO', 'CONVIVIENTE', 'DIVORCIADO']),
            'education' => $this->faker->randomElement(['ANALFABETO', 'SECUNDARIA COMPLETA', 'TECNICO COMPLETO', 'UNIVERSITARIO COMPLETO']),
            'condition' => $this->faker->paragraph(1),
            'code' => '2-' . $this->faker->randomNumber(8)
        ];
    }
}
