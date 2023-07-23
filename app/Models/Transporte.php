<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transporte extends Model
{
    use HasFactory;

    protected $table='transporte';
    protected $primaryKey='id';
    protected $fillabed =  ['trans_coigo', 'trans_descripcion', 'trans_capacidad', 'trans_conductor'];
    public $timestamps = false;
}
