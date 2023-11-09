<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagoReserva extends Model
{
    use HasFactory;

    protected $table = 'pagos_reservas'; // Nombre de la tabla en la base de datos
    protected $primaryKey='id';
    protected $fillable =  [
        'reserva_id', // Clave foránea hacia la reserva asociada
        'monto',
        'metodo_pago',
        'fecha_pago',
        'eliminado'];
    public $timestamps = true;

    // Relación con el modelo Reserva
    public function reserva()
    {
        return $this->belongsTo(Reserva::class, 'reserva_id');
    }
}
