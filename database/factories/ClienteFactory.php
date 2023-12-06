<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cliente;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    protected $model = Cliente::class;

    public function definition()
    {
        return [
            'nombres' => $this->faker->firstName,
            'apellidos' => $this->faker->lastName,
            'dni' => sprintf('%08d', mt_rand(10000000, 99999999)), // Genera un número de 8 dígitos
            'correo' => $this->faker->unique()->safeEmail,
            'telefono' => $this->faker->numerify('9########'), // Genera un número de 9 dígitos
            'eliminado' => 1, // Puedes ajustar según tu lógica
        ];
    }
}
