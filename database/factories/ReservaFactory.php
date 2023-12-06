<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Reserva;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reserva>
 */
class ReservaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fecha_reserva' => $this->faker->dateTimeBetween('-10 month', '+1 month'),
            'fecha_comida' => $this->faker->dateTimeBetween('+1 day', '+4 week'),
            'num_comensales' => $this->faker->numberBetween(1, 4),
            'cliente_id' => $this->faker->numberBetween(1, 10), // Reemplaza con la lógica de tus clientes
            'mesa_id' => $this->faker->numberBetween(1, 20), // Reemplaza con la lógica de tus mesas
            'precio' => round($this->faker->randomFloat(2, 20, 100), 1),
            'estado' => $this->faker->randomElement(['Confirmada', 'Pendiente', 'Cancelada']),
            'observaciones' => $this->faker->sentence,
            // 'pagado' => $this->faker->boolean(),
            'pagado' => 1,
            'eliminado' => 1,
        ];
    }
}
