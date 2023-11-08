<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table='reservas';
    protected $primaryKey='idReserva';
    protected $fillabed =  [
        'fecha_reserva',
        'fecha_comida',
        'num_comensales',
        'cliente_id',
        'mesa_id',
        'estado',
        'observaciones',
        'eliminado'];
    public $timestamps = true;

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function mesa()
    {
        return $this->belongsTo(Mesa::class, 'mesa_id');
    }
}
