<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = 'reservas'; // Nombre de la tabla en la base de datos
    protected $primaryKey='id';
    protected $fillabed =  [
        'fecha_reserva',
        'fecha_comida',
        'num_comensales',
        'cliente_id', // Clave foránea hacia el cliente
        'mesa_id',    // Clave foránea hacia la mesa
        'precio',
        'estado',
        'observaciones',
        'eliminado'];
    public $timestamps = true;

    // Relación con el modelo Cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    // Relación con el modelo Mesa
    public function mesa()
    {
        return $this->belongsTo(Mesa::class, 'mesa_id');
    }
}
