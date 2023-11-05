<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HojaCostos extends Model
{
    use HasFactory;

    protected $table='hojaCostos';
    protected $primaryKey='id';
    protected $fillabed =  ['fecha','nombre_producto', 'unidad_medida', 'cantidad', 'precio_unit', 'precio_total', 'mano_obra', 'indirectos', 'margen_beneficio'];
    public $timestamps = false;
}
