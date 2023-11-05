<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $table='evento';
    protected $primaryKey='id';
    protected $fillabed =  ['fecha_evento','nombre_evento','descripcion_evento','direccion_evento'];
    public $timestamps = false;
}
