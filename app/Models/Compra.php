<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    protected $table='compra';
    protected $primaryKey='id';
    protected $fillabed =  ['ruc', 'fecha', 'empresa', 'direccion', 'email', 'contacto', 'total'];
    public $timestamps = false;
}
