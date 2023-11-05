<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table='producto';
    protected $primaryKey='id';
    protected $fillabed =  ['producto_codigo', 'producto_categoria', 'producto_nombre'];
    public $timestamps = false;

}
