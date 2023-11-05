<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    use HasFactory;

    protected $table='promocion';
    protected $primaryKey='id';
    protected $fillable = ['codigo_promocion','nombre_promocion','descripcion_promocion','tipo_promocion','fecha_inicio','fecha_fin'];

}
