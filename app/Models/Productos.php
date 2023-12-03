<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    protected $table='productos';
    protected $primaryKey='id';
    protected $fillabed =  ['producto_codigo', 'producto_categoria', 'producto_nombre','producto_precio','producto_foto','descripcion','cantidad'];
    public $timestamps = false;

}
