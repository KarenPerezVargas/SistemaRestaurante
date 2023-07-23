<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    use HasFactory;
    protected $table='evaluaciones';
    protected $primaryKey='idEvaluacion';
    protected $fillable = ['asuntoEvaluacion', 'fechaEvaluacion', 'areaEvaluacion', 'idEmpleado'];
    public $timestamps = false;
}
