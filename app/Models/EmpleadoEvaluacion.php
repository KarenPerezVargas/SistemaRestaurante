<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpleadoEvaluacion extends Model
{
    use HasFactory;
    protected $table='emple_eval';
    protected $primaryKey='idEE';
    protected $fillable = ['idemple', 'ideval', 'calificacion'];
    public $timestamps = false;
}
