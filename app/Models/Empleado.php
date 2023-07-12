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
}
