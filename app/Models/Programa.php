<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    use HasFactory;

    protected $table='programa';
    protected $primaryKey='id';
    protected $fillable = ['programa_fecha','programa_nombre','programa_descripcion','programa_requisitos','programa_recompensas'];
}
