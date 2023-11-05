<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    use HasFactory;

    protected $table = 'zona';
    protected $primaryKey='id';
    protected $fillabed =  ['fecha','provincia', 'distrito', 'especificaciones'];
    public $timestamps = false;
}
