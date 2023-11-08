<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contrato>
 */
class ContratoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fechaInicio' => $this->faker->date,
            'duracionMeses' => $this->faker->numberBetween(1, 24),
            'sueldo' => $this->faker->numberBetween(100, 8000),
            'idRole' => $this->faker->numberBetween(1, 8), // Asigna el valor deseado para idRole
            'idHorario' => $this->faker->numberBetween(1, 4), // Asigna el valor deseado para idHorario
        ];
    }
}
