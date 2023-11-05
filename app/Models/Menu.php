<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table='menu';
    protected $primaryKey='id';
    protected $fillabed =  ['menu_nombre', 'menu_descripcion', 'menu_precio'];
    public $timestamps = false;
}
