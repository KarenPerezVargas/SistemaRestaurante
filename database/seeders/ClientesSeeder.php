<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Datos de ejemplo para poblar la tabla "clientes"
        $clientes = [
            ['nombres' => 'Juan', 'apellidos' => 'Pérez Medina', 'dni' => '71254785', 'correo' => 'juan@example.com', 'telefono' => '989898989', 'eliminado' => 1],
            ['nombres' => 'Roxana Karina', 'apellidos' => 'Rojas Tarillo', 'dni' => '74587458', 'correo' => 'roxana@example.com', 'telefono' => '978457989', 'eliminado' => 1],
            ['nombres' => 'Carlos', 'apellidos' => 'Arrascue Muñoz', 'dni' => '71265478', 'correo' => 'carlos@example.com', 'telefono' => '965413547', 'eliminado' => 1],
            ['nombres' => 'Elizabeth', 'apellidos' => 'Rios Del toro', 'dni' => '79451348', 'correo' => 'elizabeth@example.com', 'telefono' => '987456984', 'eliminado' => 1],
            ['nombres' => 'Luz Maria', 'apellidos' => 'Vasquez Delgado', 'dni' => '72548777', 'correo' => 'luz@example.com', 'telefono' => '978463152', 'eliminado' => 1],
            ['nombres' => 'Carla', 'apellidos' => 'Rojas De la Cruz', 'dni' => '34587461', 'correo' => 'carla@example.com', 'telefono' => '987654321', 'eliminado' => 1],
            ['nombres' => 'Mario Jose', 'apellidos' => 'Castañeda Lopes', 'dni' => '79878749', 'correo' => 'mario@example.com', 'telefono' => '945612340', 'eliminado' => 1],
            ['nombres' => 'Eduardo', 'apellidos' => 'Quiñones Jara', 'dni' => '73548751', 'correo' => 'eduardo@example.com', 'telefono' => '901470540', 'eliminado' => 1],
            ['nombres' => 'Jaime Julio', 'apellidos' => 'Pérez Medina', 'dni' => '15479647', 'correo' => 'jaime@example.com', 'telefono' => '904706040', 'eliminado' => 1],
            ['nombres' => 'Gerson Fabrizzio', 'apellidos' => 'Castañeda Castroloman', 'dni' => '45698731', 'correo' => 'gerson@example.com', 'telefono' => '999450100', 'eliminado' => 1],

            // Agrega más datos según sea necesario
        ];

        // Insertar los datos en la tabla "clientes"
        DB::table('clientes')->insert($clientes);
    }
}
