<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bebida extends Model
{
    use HasFactory;
    protected $table='bebidas';
    protected $primaryKey='idbebida';
    protected $fillable=['descripcion','precio','cantidad','tipo','estado'];
    public $timestamps=false;
}
