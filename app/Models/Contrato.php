<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;
    protected $table='contratos';
    protected $primaryKey='idContrato';
    protected $fillable = ['fechaInicio, duracionMeses, sueldo, idRole', 'idHorario'];
    public $timestamps = false;
}
