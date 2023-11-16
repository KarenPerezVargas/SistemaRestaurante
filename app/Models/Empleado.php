<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $table='personal';
    protected $primaryKey='idEmpleado';
    protected $fillable = ['nombre', 'apellidos', 'DNI', 'telefono', 'direccion', 'idContrato'];
    public $timestamps = false;

    protected static function boot()
    {
        parent::boot();

        // Evento "deleting" para eliminar registros asociados antes de eliminar el empleado
        static::deleting(function ($empleado) {
            // Eliminar el usuario asociado si existe
            if ($empleado->usuario) {
                $empleado->usuario->delete();
            }

            // Eliminar las Capacitaciones asociadas si existen
            $empleado->capacitaciones->each->delete();

            // Eliminar las Evaluaciones asociadas si existen
            $empleado->evaluaciones->each->delete();

            // Eliminar los registros en la tabla "emple_capa" asociados si existen
            $empleado->empleadoCapacitaciones->each->delete();

            // Eliminar los registros en la tabla "emple_eval" asociados si existen
            // $empleado->empleadoEvaluaciones->each->delete();
        });
    }

    public function usuario()
    {
        return $this->hasOne(User::class, 'idEmpleado');
    }

    public function capacitaciones()
    {
        return $this->hasMany(Capacitacion::class, 'idEmpleado');
    }

    public function evaluaciones()
    {
        return $this->hasMany(Evaluacion::class, 'idEmpleado');
    }

    public function empleadoCapacitaciones()
    {
        return $this->hasMany(EmpleadoCapacitacion::class, 'idEmpleado');
    }

    public function empleadoEvaluaciones()
    {
        // return $this->hasMany(EmpleadoEvaluacion::class, 'idEmpleado');
    }

    public function contrato()
    {
        return $this->belongsTo(Contrato::class, 'idContrato', 'idContrato');
    }


    
}
