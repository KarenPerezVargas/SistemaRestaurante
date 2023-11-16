<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $pedido = [
            ['descripcion' => 'Arroz con pato','precio' => 25.00,'cantidad' => 2,'tipo' => 'Segundo','fecha' => now(),'estado' => 1,'idCliente' => 1],
            ['descripcion' => 'Pollo frito','precio' => 20.00,'cantidad' => 3,'tipo' => 'Segundo','fecha' => now(),'estado' => 1,'idCliente' => 2],
            ['descripcion' => 'Cuy frito','precio' => 28.00,'cantidad' => 2,'tipo' => 'Segundo','fecha' => now(),'estado' => 1,'idCliente' => 3],
            ['descripcion' => 'Arroz con pollo','precio' => 18.00,'cantidad' => 1,'tipo' => 'Segundo','fecha' => now(),'estado' => 2,'idCliente' => 4],
            ['descripcion' => 'Caldo de gallina','precio' => 7.00,'cantidad' => 4,'tipo' => 'Entrada','fecha' => now(),'estado' => 2,'idCliente' => 5],
            ['descripcion' => 'Papa huancaina','precio' => 7.00,'cantidad' => 3,'tipo' => 'Entrada','fecha' => now(),'estado' => 1,'idCliente' => 6],
            ['descripcion' => 'Jarra de Cebada','precio' => 12.00,'cantidad' => 2,'tipo' => 'Refresco','fecha' => now(),'estado' => 2,'idCliente' => 7],
            ['descripcion' => 'Arroz con pato','precio' => 25.00,'cantidad' => 1,'tipo' => 'Segundo','fecha' => now(),'estado' => 2,'idCliente' => 8],
            ['descripcion' => 'Ensalada','precio' => 5.00,'cantidad' => 6,'tipo' => 'Entrada','fecha' => now(),'estado' => 2,'idCliente' => 9],
            ['descripcion' => 'Arroz con chancho','precio' => 26.00,'cantidad' => 2,'tipo' => 'Segundo','fecha' => now(),'estado' => 1,'idCliente' => 10],
        ];

        $zona = [
            ['provincia' => 'Lima', 'distrito' => 'Miraflores', 'especificaciones' => 'Céntrico, zona comercial'],
            ['provincia' => 'Lima', 'distrito' => 'San Isidro', 'especificaciones' => 'Área financiera, accesible'],
            ['provincia' => 'Lima', 'distrito' => 'Barranco', 'especificaciones' => 'Bohemio, cultural'],
            ['provincia' => 'Lima', 'distrito' => 'Chorrillos', 'especificaciones' => 'Residencial, espacios verdes'],
            ['provincia' => 'Lima', 'distrito' => 'Breña', 'especificaciones' => 'Mixto, diversidad comercial'],
            ['provincia' => 'Lima', 'distrito' => 'San Borja', 'especificaciones' => 'Residencial, parques'],
            ['provincia' => 'Lima', 'distrito' => 'Lince', 'especificaciones' => 'Céntrico, comercios variados'],
            ['provincia' => 'Lima', 'distrito' => 'La Molina', 'especificaciones' => 'Residencial, universidades cercanas'],
            ['provincia' => 'Lima', 'distrito' => 'Jesús María', 'especificaciones' => 'Comercial, accesible'],
            ['provincia' => 'Lima', 'distrito' => 'Chorrillos', 'especificaciones' => 'Playas, zona turística'],
            ['provincia' => 'Lima', 'distrito' => 'Barranco', 'especificaciones' => 'Bohemio, cultural'],
            ['provincia' => 'Lima', 'distrito' => 'Chorrillos', 'especificaciones' => 'Residencial, espacios verdes'],
            ['provincia' => 'Lima', 'distrito' => 'Breña', 'especificaciones' => 'Mixto, diversidad comercial'],
            ['provincia' => 'Lima', 'distrito' => 'Chorrillos', 'especificaciones' => 'Residencial, espacios verdes'],
        ];

        $horarioo = [
            ['fecha' => '2023-11-16', 'hora' => '14:00'],
            ['fecha' => '2023-11-17', 'hora' => '10:45'],
            ['fecha' => '2023-11-18', 'hora' => '16:20'],
            ['fecha' => '2023-11-19', 'hora' => '09:15'],
            ['fecha' => '2023-11-20', 'hora' => '11:30'],
            ['fecha' => '2023-11-21', 'hora' => '13:45'],
            ['fecha' => '2023-11-22', 'hora' => '17:00'],
            ['fecha' => '2023-11-23', 'hora' => '12:10'],
            ['fecha' => '2023-11-24', 'hora' => '15:40'],
            ['fecha' => '2023-11-21', 'hora' => '10:45'],
            ['fecha' => '2023-11-21', 'hora' => '08:25'],
            ['fecha' => '2023-11-22', 'hora' => '11:30'],
            ['fecha' => '2023-11-21', 'hora' => '15:05'],
            ['fecha' => '2023-11-22', 'hora' => '14:50'],
        ];

        // Insertar los datos en la tabla "mesas"
        DB::table('pedidos')->insert($pedido);
        DB::table('zona')->insert($zona);
        DB::table('horarioo')->insert($horarioo);
    } 
    
}
