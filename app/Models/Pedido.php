<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $table='pedidos';
    protected $primaryKey='idpedido';
    protected $fillable=['descripcion','precio','cantidad','tipo','fecha','estado', 'idCliente'];
    public $timestamps=false;
}
