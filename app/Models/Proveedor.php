<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $table='proveedor';
    protected $primaryKey='id';
    protected $fillabed =  ['codigo_proveedor', 'nombre_proveedor', 'ciudad_proveedor', 'direccion_proveedor', 'email_proveedor', 'telefono_proveedor'];
    public $timestamps = false;
}
