<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'ventas';

    protected $fillable = [
        'cliente_id',
        'descuento',
        'total',
        'operacion_gravada',
        'igv',
        'total_pagar',
        'importe_pagado',
        'vuelto',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function productos()
    {
        return $this->belongsToMany(Productos::class, 'venta_productos', 'venta_id', 'producto_id')
            ->withPivot('cantidad', 'precio_unitario')
            ->withTimestamps();
    }
}
