<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table='productos';
    protected $primaryKey='idproducto';
    protected $fillable=['descripcion','precio','cantidad','tipo','estado'];
    public $timestamps=false;
}
