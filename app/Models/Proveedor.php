<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $table='proveedor';
    protected $primaryKey='id';
    protected $fillable = ['pro_nombre', 'pro_ruc', 'pro_codigo', 'pro_correo', 'pro_descripcion', 'pro_direccion', 'pro_movil', 'pro_forma_pago'];
    public $timestamps = false;
}
