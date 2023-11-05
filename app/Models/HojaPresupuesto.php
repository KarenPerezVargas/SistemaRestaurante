<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HojaPresupuesto extends Model
{
    use HasFactory;

    protected $table='hojaPresupuesto';
    protected $primaryKey='id';
    protected $fillabed =  ['codigo','fecha','tiempo_validez','descripcion','precio','igv','presupuesto_total'];
    public $timestamps = false;
}
