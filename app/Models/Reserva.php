<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $table='reservas';
    protected $primaryKey='idreserva';
    protected $fillable=['nombre','direccion','telefono','correo','fecha','hora','nroPersonas','area','solicitudesAdicionales','estadoReserva','mesa','historial','empleado','menu','pago','estado'];
    public $timestamps=false;
}
