<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kardex extends Model
{
    use HasFactory;
    protected $table='kardex';
    protected $primaryKey='id';
    protected $fillabed =  ['kardex_fecha','kardex_movimiento','producto_id','kardex_cantidad','kardex_precio','kardex_total'];
    public $timestamps = false;
}
