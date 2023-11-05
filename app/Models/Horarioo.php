<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horarioo extends Model
{
    use HasFactory;

    protected $table='horarioo';
    protected $primaryKey='id';
    protected $fillable = ['fecha', 'hora'];
}
