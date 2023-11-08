<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HorarioEntrega extends Model
{
    use HasFactory;
    protected $table='horario_entregas';
    protected $primaryKey='id';
    protected $fillabed =  ['fecha', 'transporte_id', 'hora_salida', 'hora_esperada'];
    public $timestamps = false;
}
