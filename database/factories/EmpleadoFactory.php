<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleado>
 */
class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->firstName,
            'apellidos' => $this->faker->lastName,
            'DNI' => $this->faker->unique()->randomNumber(8),
            'telefono' => $this->faker->phoneNumber,
            'direccion' => $this->faker->address,
            // 'idContrato' => function () {
            //     return \App\Models\Contrato::factory()->create()->id;
            // },
            'idContrato' => 1
            
        ];
    }
}
