<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capacitacion extends Model
{
    use HasFactory;
    protected $table='capacitaciones';
    protected $primaryKey='idCapacitacion';
    protected $fillable = [
        'temaCapacitacion',
        'idEmpleado',
        'areaCapacitacion',
        'fechaCapacitacion',
        'idInstructor',
        'estadoCapacitacion'
    ];
    public $timestamps = false;


    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'idEmpleado');
    }


    protected static function boot()
    {
            parent::boot();

            // Evento "deleting" para eliminar registros asociados antes de eliminar el empleado
            static::deleting(function ($capacitacion) {
                    
            // Eliminar los registros en la tabla "emple_capa" asociados si existen
            $capacitacion->empleadoCapacitaciones->each->delete();
        });
    }

    public function empleadoCapacitaciones()
    {
        return $this->hasMany(EmpleadoCapacitacion::class, 'idCapacitacion');
    }

}
