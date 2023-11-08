<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    protected $table='compra';
    protected $primaryKey='id';
    protected $fillabed =  ['ruc', 'proveedor_id','transporte_id', 'fecha', 'indicaciones', 'origen', 'destino', 'total'];
    public $timestamps = false;
}
