<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    protected $table = 'productos';
    protected $primaryKey = 'id';
    protected $fillable = ['producto_codigo', 'producto_categoria', 'producto_nombre', 'producto_precio', 'producto_foto', 'descripcion', 'cantidad'];
    public $timestamps = false;

    public function ventas()
    {
        return $this->belongsToMany(Venta::class, 'venta_productos', 'producto_id', 'venta_id')
            ->withPivot('cantidad', 'precio_unitario')
            ->withTimestamps();
    }
}
