<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table='cliente';
    protected $primaryKey='id';
    protected $fillabed =  ['nombre', 'apellido', 'telefono', 'correo'];
    public $timestamps = false;
}
