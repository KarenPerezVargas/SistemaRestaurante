<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contrato; // Agrega esta línea de importación
use App\Models\User;
use App\Models\Empleado;
use Database\Factories\ContratoFactory;
use Database\Factories\EmpleadoFactory;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //ADMIN

        // Crear un contrato utilizando la fábrica ContratoFactory
        $contrato = Contrato::factory()->create([
            'fechaInicio' => now(),
            'duracionMeses' => 12,
            'sueldo' => 3000,
            'idRole' => 1, // Asigna el valor deseado para idRole
            'idHorario' => 1,
        ]);

        // Crear un registro de empleado utilizando la fábrica EmpleadoFactory y asociarlo al contrato
        $empleado = Empleado::factory()->create([
            'nombre' => 'Bryan',
            'apellidos' => 'Amaya',
            'DNI' => '73685364',
            'telefono' => '946847394',
            'direccion' => 'Adolfo King',
            // 'idContrato' => $contrato->id, // Asocia el contrato al empleado
            'idContrato' => 1, // Asocia el contrato al empleado
        ]);

        // Crear un usuario y asociarlo al empleado
        $user = new User();
        $user->username = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = '12345'; // Hashea la contraseña
        //$user->idEmpleado = $empleado->id; // Asocia el usuario al empleado
        $user->idEmpleado = 1; // Asocia el usuario al empleado
        $user->save();

        //INSTRUCTOR

        // Crear un contrato utilizando la fábrica ContratoFactory
        $contrato2 = Contrato::factory()->create([
            'fechaInicio' => now(),
            'duracionMeses' => 12,
            'sueldo' => 1500,
            'idRole' => 2, // Asigna el valor deseado para idRole
            'idHorario' => 1,
        ]);

        // Crear un registro de empleado utilizando la fábrica EmpleadoFactory y asociarlo al contrato
        $empleado2 = Empleado::factory()->create([
            'nombre' => 'Luis',
            'apellidos' => 'Zapata',
            'DNI' => '23438412',
            'telefono' => '457475475',
            'direccion' => 'Alamiro',
            'idContrato' => 2, // Asocia el contrato al empleado
        ]);

        // Crear un usuario y asociarlo al empleado
        $user2 = new User();
        $user2->username = 'zapata';
        $user2->email = 'zapata@gmail.com';
        $user2->password = '123456';
        $user2->idEmpleado = 2; // Asocia el usuario al empleado
        $user2->save();

        //INSTRUCTOR

        // Crear un contrato utilizando la fábrica ContratoFactory
        $contrato3 = Contrato::factory()->create([
            'fechaInicio' => now(),
            'duracionMeses' => 6,
            'sueldo' => 1500,
            'idRole' => 2, // Asigna el valor deseado para idRole
            'idHorario' => 2,
        ]);

        // Crear un registro de empleado utilizando la fábrica EmpleadoFactory y asociarlo al contrato
        $empleado3 = Empleado::factory()->create([
            'nombre' => 'José',
            'apellidos' => 'Collao',
            'DNI' => '76384638',
            'telefono' => '937472632',
            'direccion' => 'Palmeras',
            'idContrato' => 3, // Asocia el contrato al empleado
        ]);

        // Crear un usuario y asociarlo al empleado
        $user3 = new User();
        $user3->username = 'jose';
        $user3->email = 'jose@gmail.com';
        $user3->password = '123456';
        $user3->idEmpleado = 3; // Asocia el usuario al empleado
        $user3->save();

        //SUPERVISOR

        // Crear un contrato utilizando la fábrica ContratoFactory
        $contrato4 = Contrato::factory()->create([
            'fechaInicio' => now(),
            'duracionMeses' => 12,
            'sueldo' => 2500,
            'idRole' => 3, // Asigna el valor deseado para idRole
            'idHorario' => 2,
        ]);


        // Crear un registro de empleado utilizando la fábrica EmpleadoFactory y asociarlo al contrato
        $empleado4 = Empleado::factory()->create([
            'nombre' => 'Mariano',
            'apellidos' => 'Castro',
            'DNI' => '83764812',
            'telefono' => '972648243',
            'direccion' => 'Junín',
            'idContrato' => 4, // Asocia el contrato al empleado
        ]);

        // Crear un usuario y asociarlo al empleado
        $user4 = new User();
        $user4->username = 'castro';
        $user4->email = 'castro@gmail.com';
        $user4->password = '123456';
        $user4->idEmpleado = 4; // Asocia el usuario al empleado
        $user4->save();

        //GERENTE DE RECURSOS HUMANOS

        // Crear un contrato utilizando la fábrica ContratoFactory
        $contrato5 = Contrato::factory()->create([
            'fechaInicio' => now(),
            'duracionMeses' => 24,
            'sueldo' => 4000,
            'idRole' => 5, // Asigna el valor deseado para idRole
            'idHorario' => 1,
        ]);


        // Crear un registro de empleado utilizando la fábrica EmpleadoFactory y asociarlo al contrato
        $empleado5 = Empleado::factory()->create([
            'nombre' => 'Sofia',
            'apellidos' => 'Garcia',
            'DNI' => '18127237',
            'telefono' => '927848424',
            'direccion' => 'Ladislao',
            'idContrato' => 5, // Asocia el contrato al empleado
        ]);

        // Crear un usuario y asociarlo al empleado
        $user5 = new User();

        $user5->username = 'steve';
        $user5->email = 'steve@gmail.com';
        $user5->password = '123456';
        $user5->idEmpleado = 5; // Asocia el usuario al empleado
        $user5->save();

        //PERSONAL DE PEDIDOS

        // Crear un contrato utilizando la fábrica ContratoFactory
        $contrato6 = Contrato::factory()->create([
            'fechaInicio' => now(),
            'duracionMeses' => 6,
            'sueldo' => 1100,
            'idRole' => 6, // Asigna el valor deseado para idRole
            'idHorario' => 1,
        ]);

        // Crear un registro de empleado utilizando la fábrica EmpleadoFactory y asociarlo al contrato
        $empleado6 = Empleado::factory()->create([
            'nombre' => 'Richard',
            'apellidos' => 'Bances',
            'DNI' => '67124253',
            'telefono' => '948967595',
            'direccion' => 'Torbellino',
            'idContrato' => 6, // Asocia el contrato al empleado
        ]);

        // Crear un usuario y asociarlo al empleado
        $user6 = new User();
        $user6->username = 'bances';
        $user6->email = 'bances@gmail.com';
        $user6->password = '123456';
        $user6->idEmpleado = 6; // Asocia el usuario al empleado
        $user6->save();

        //PERSONAL DE PEDIDOS

        // Crear un contrato utilizando la fábrica ContratoFactory
        $contrato7 = Contrato::factory()->create([
            'fechaInicio' => now(),
            'duracionMeses' => 6,
            'sueldo' => 1100,
            'idRole' => 6, // Asigna el valor deseado para idRole
            'idHorario' => 2,
        ]);


        // Crear un registro de empleado utilizando la fábrica EmpleadoFactory y asociarlo al contrato
        $empleado7 = Empleado::factory()->create([
            'nombre' => 'Emanuel',
            'apellidos' => 'Quispe',
            'DNI' => '16188568',
            'telefono' => '932879984',
            'direccion' => 'Trinchera',
            'idContrato' => 7, // Asocia el contrato al empleado
        ]);

        // Crear un usuario y asociarlo al empleado
        $user7 = new User();
        $user7->username = 'moises';
        $user7->email = 'moises@gmail.com';
        $user7->password = '123456';
        $user7->idEmpleado = 7; // Asocia el usuario al empleado
        $user7->save();

        //REPARTIDOR

        // Crear un contrato utilizando la fábrica ContratoFactory
        $contrato8 = Contrato::factory()->create([
            'fechaInicio' => now(),
            'duracionMeses' => 6,
            'sueldo' => 1300,
            'idRole' => 7, // Asigna el valor deseado para idRole
            'idHorario' => 1,
        ]);


        // Crear un registro de empleado utilizando la fábrica EmpleadoFactory y asociarlo al contrato
        $empleado8 = Empleado::factory()->create([
            'nombre' => 'Claudio',
            'apellidos' => 'Angulo',
            'DNI' => '24371117',
            'telefono' => '972734257',
            'direccion' => 'Progeso',
            'idContrato' => 8, // Asocia el contrato al empleado
        ]);

        // Crear un usuario y asociarlo al empleado
        $user8 = new User();
        $user8->username = 'mario';
        $user8->email = 'mario@gmail.com';
        $user8->password = '123456';
        $user8->idEmpleado = 8; // Asocia el usuario al empleado
        $user8->save();

        //REPARTIDOR

        // Crear un contrato utilizando la fábrica ContratoFactory
        $contrato9 = Contrato::factory()->create([
            'fechaInicio' => now(),
            'duracionMeses' => 6,
            'sueldo' => 1300,
            'idRole' => 7, // Asigna el valor deseado para idRole
            'idHorario' => 2,
        ]);


        // Crear un registro de empleado utilizando la fábrica EmpleadoFactory y asociarlo al contrato
        $empleado9 = Empleado::factory()->create([
            'nombre' => 'Raúl',
            'apellidos' => 'Arias',
            'DNI' => '63337213',
            'telefono' => '966257819',
            'direccion' => 'Cajamarca',
            'idContrato' => 9, // Asocia el contrato al empleado
        ]);

        // Crear un usuario y asociarlo al empleado
        $user9 = new User();
        $user9->username = 'arias';
        $user9->email = 'arias@gmail.com';
        $user9->password = '123456';
        $user9->idEmpleado = 9; // Asocia el usuario al empleado
        $user9->save();

        // Gerente de ALmacén

        // Crear un contrato utilizando la fábrica ContratoFactory
        $contrato10 = Contrato::factory()->create([
            'fechaInicio' => now(),
            'duracionMeses' => 6,
            'sueldo' => 1500,
            'idRole' => 13, // Asigna el valor deseado para idRole
            'idHorario' => 2,
        ]);

        // Crear un registro de empleado utilizando la fábrica EmpleadoFactory y asociarlo al contrato
        $empleado10 = Empleado::factory()->create([
            'nombre' => 'Lionel',
            'apellidos' => 'Perez',
            'DNI' => '74622345',
            'telefono' => '989334500',
            'direccion' => 'Chepen',
            'idContrato' => 10, // Asocia el contrato al empleado
        ]);

        // Crear un usuario y asociarlo al empleado
        $user10 = new User();
        $user10->username = 'Lionel';
        $user10->email = 'lionel@gmail.com';
        $user10->password = '123456';
        $user10->idEmpleado = 10; // Asocia el usuario al empleado
        $user10->save();

        // Personal de Almacén

        // Crear un contrato utilizando la fábrica ContratoFactory
        $contrato11 = Contrato::factory()->create([
            'fechaInicio' => now(),
            'duracionMeses' => 6,
            'sueldo' => 1500,
            'idRole' => 14, // Asigna el valor deseado para idRole
            'idHorario' => 2,
        ]);

        // Crear un registro de empleado utilizando la fábrica EmpleadoFactory y asociarlo al contrato
        $empleado11 = Empleado::factory()->create([
            'nombre' => 'Violeta',
            'apellidos' => 'Rios',
            'DNI' => '74622225',
            'telefono' => '983833009',
            'direccion' => 'Chepen',
            'idContrato' => 11, // Asocia el contrato al empleado
        ]);

        // Crear un usuario y asociarlo al empleado
        $user11 = new User();
        $user11->username = 'Viole';
        $user11->email = 'viole@gmail.com';
        $user11->password = '123456';
        $user11->idEmpleado = 11; // Asocia el usuario al empleado
        $user11->save();


        // Contador

        // Crear un contrato utilizando la fábrica ContratoFactory
        $contrato12 = Contrato::factory()->create([
            'fechaInicio' => now(),
            'duracionMeses' => 6,
            'sueldo' => 1500,
            'idRole' => 15, // Asigna el valor deseado para idRole
            'idHorario' => 3,
        ]);

        // Crear un registro de empleado utilizando la fábrica EmpleadoFactory y asociarlo al contrato
        $empleado12 = Empleado::factory()->create([
            'nombre' => 'Karen',
            'apellidos' => 'Vargas',
            'DNI' => '73883989',
            'telefono' => '908378733',
            'direccion' => 'Guadalupe',
            'idContrato' => 12, // Asocia el contrato al empleado
        ]);

        // Crear un usuario y asociarlo al empleado
        $user12 = new User();
        $user12->username = 'Karen';
        $user12->email = 'karen@gmail.com';
        $user12->password = '123456';
        $user12->idEmpleado = 12; // Asocia el usuario al empleado
        $user12->save();


        // Personal de Almacén

        // Crear un contrato utilizando la fábrica ContratoFactory
        $contrato13 = Contrato::factory()->create([
            'fechaInicio' => now(),
            'duracionMeses' => 8,
            'sueldo' => 1500,
            'idRole' => 14, // Asigna el valor deseado para idRole
            'idHorario' => 1,
        ]);


        // Crear un registro de empleado utilizando la fábrica EmpleadoFactory y asociarlo al contrato
        $empleado13 = Empleado::factory()->create([
            'nombre' => 'Ines',
            'apellidos' => 'Mora',
            'DNI' => '81248176',
            'telefono' => '928179291',
            'direccion' => 'La fora',
            'idContrato' => 13, // Asocia el contrato al empleado
        ]);

        // Crear un usuario y asociarlo al empleado
        $user13 = new User();
        $user13->username = 'mora';
        $user13->email = 'mora@gmail.com';
        $user13->password = '123456';
        $user13->idEmpleado = 13; // Asocia el usuario al empleado
        $user13->save();


        // Personal de Almacén

        // Crear un contrato utilizando la fábrica ContratoFactory
        $contrato14 = Contrato::factory()->create([
            'fechaInicio' => now(),
            'duracionMeses' => 8,
            'sueldo' => 1500,
            'idRole' => 14, // Asigna el valor deseado para idRole
            'idHorario' => 1,
        ]);


        // Crear un registro de empleado utilizando la fábrica EmpleadoFactory y asociarlo al contrato
        $empleado14 = Empleado::factory()->create([
            'nombre' => 'David ',
            'apellidos' => 'Rial',
            'DNI' => '58844458',
            'telefono' => '966899711',
            'direccion' => 'El fato',
            'idContrato' => 14, // Asocia el contrato al empleado
        ]);

        // Crear un usuario y asociarlo al empleado
        $user14 = new User();
        $user14->username = 'rial';
        $user14->email = 'rial@gmail.com';
        $user14->password = '123456';
        $user14->idEmpleado = 14; // Asocia el usuario al empleado
        $user14->save();


        // Personal de Almacén

        // Crear un contrato utilizando la fábrica ContratoFactory
        $contrato15 = Contrato::factory()->create([
            'fechaInicio' => now(),
            'duracionMeses' => 8,
            'sueldo' => 1500,
            'idRole' => 14, // Asigna el valor deseado para idRole
            'idHorario' => 2,
        ]);


        // Crear un registro de empleado utilizando la fábrica EmpleadoFactory y asociarlo al contrato
        $empleado15 = Empleado::factory()->create([
            'nombre' => 'Denis ',
            'apellidos' => 'Quintana',
            'DNI' => '32563721',
            'telefono' => '963623157',
            'direccion' => 'El faro',
            'idContrato' => 14, // Asocia el contrato al empleado
        ]);

        // Crear un usuario y asociarlo al empleado
        $user15 = new User();
        $user15->username = 'quintana';
        $user15->email = 'quintana@gmail.com';
        $user15->password = '123456';
        $user15->idEmpleado = 15; // Asocia el usuario al empleado
        $user15->save();


        // Recepcionista

        // Crear un contrato utilizando la fábrica ContratoFactory
        $contrato16 = Contrato::factory()->create([
            'fechaInicio' => now(),
            'duracionMeses' => 12,
            'sueldo' => 1800,
            'idRole' => 16, // Asigna el valor deseado para idRole
            'idHorario' => 2,
        ]);


        // Crear un registro de empleado utilizando la fábrica EmpleadoFactory y asociarlo al contrato
        $empleado16 = Empleado::factory()->create([
            'nombre' => 'Edward ',
            'apellidos' => 'Faichin',
            'DNI' => '84148846',
            'telefono' => '919976148',
            'direccion' => 'San josé',
            'idContrato' => 16, // Asocia el contrato al empleado
        ]);

        // Crear un usuario y asociarlo al empleado
        $user16 = new User();
        $user16->username = 'edward';
        $user16->email = 'edward@gmail.com';
        $user16->password = '123456';
        $user16->idEmpleado = 16; // Asocia el usuario al empleado
        $user16->save();
    }
}
