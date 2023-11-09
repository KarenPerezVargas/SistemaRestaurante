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

        // Insertar los datos en la tabla "mesas"
        DB::table('pedidos')->insert($pedido);
    } 
    
}
