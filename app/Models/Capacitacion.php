<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capacitacion extends Model
{
    use HasFactory;
    protected $table='capacitaciones';
    protected $primaryKey='idCapacitacion';
    // protected $fillable = ['temaCapacitacion', 'fechaCapacitacion', 'areaCapacitacion', 'idEmpleado'];
    protected $fillable = [
        'temaCapacitacion',
        'idEmpleado',
        'areaCapacitacion',
        'fechaCapacitacion',
        'idInstructor',
        'estadoCapacitacion'
    ];
    public $timestamps = false;
}
