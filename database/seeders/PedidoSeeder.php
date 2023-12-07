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

        $productos = [
            [
                'producto_codigo' => '001',
                'producto_categoria' => 'Entrada',
                'producto_nombre' => 'Ensalada César',
                'producto_precio' => 8.99,
                'producto_foto' => 'ensalada_cesar.jpg',
                'descripcion' => 'Clásica ensalada César con pollo a la parrilla, lechuga romana, aderezo y crutones.',
                'cantidad' => 1
            ],
            [
                'producto_codigo' => '002',
                'producto_categoria' => 'Plato Principal',
                'producto_nombre' => 'Filete Mignon',
                'producto_precio' => 24.99,
                'producto_foto' => 'filete_mignon.jpg',
                'descripcion' => 'Exquisito filete mignon acompañado de puré de papas y espárragos.',
                'cantidad' => 1
            ],
            [
                'producto_codigo' => '003',
                'producto_categoria' => 'Postre',
                'producto_nombre' => 'Tarta de Chocolate',
                'producto_precio' => 6.99,
                'producto_foto' => 'tarta_chocolate.jpg',
                'descripcion' => 'Deliciosa tarta de chocolate con ganache y fresas frescas.',
                'cantidad' => 1
            ],
            [
                'producto_codigo' => '004',
                'producto_categoria' => 'Entrada',
                'producto_nombre' => 'Bruschetta de Tomate',
                'producto_precio' => 6.50,
                'producto_foto' => 'bruschetta_tomate.jpg',
                'descripcion' => 'Pan tostado con tomate fresco, albahaca y aceite de oliva.',
                'cantidad' => 1
            ],
            [
                'producto_codigo' => '005',
                'producto_categoria' => 'Plato Principal',
                'producto_nombre' => 'Pasta Alfredo con Camarones',
                'producto_precio' => 18.99,
                'producto_foto' => 'pasta_alfredo_camarones.jpg',
                'descripcion' => 'Fettuccine en salsa Alfredo cremosa con camarones tiernos.',
                'cantidad' => 1
            ],
            [
                'producto_codigo' => '006',
                'producto_categoria' => 'Bebida',
                'producto_nombre' => 'Margarita de Mango',
                'producto_precio' => 7.50,
                'producto_foto' => 'margarita_mango.jpg',
                'descripcion' => 'Refrescante margarita con puré de mango y borde de sal.',
                'cantidad' => 1
            ],
            [
                'producto_codigo' => '007',
                'producto_categoria' => 'Postre',
                'producto_nombre' => 'Helado de Vainilla con Caramelo',
                'producto_precio' => 5.99,
                'producto_foto' => 'helado_vainilla.jpg',
                'descripcion' => 'Helado de vainilla cubierto con deliciosa salsa de caramelo.',
                'cantidad' => 1
            ],
            [
                'producto_codigo' => '008',
                'producto_categoria' => 'Plato Principal',
                'producto_nombre' => 'Sushi Variado',
                'producto_precio' => 22.50,
                'producto_foto' => 'suchi_variado.jpg',
                'descripcion' => 'Selección de sushi con nigiri, sashimi y rollos variados.',
                'cantidad' => 1
            ],
            [
                'producto_codigo' => '009',
                'producto_categoria' => 'Bebida',
                'producto_nombre' => 'Smoothie de Frutas Tropicales',
                'producto_precio' => 6.99,
                'producto_foto' => 'smoothie_fruta.jpg',
                'descripcion' => 'Batido refrescante con mezcla de frutas tropicales y yogur.',
                'cantidad' => 1
            ],
            [
                'producto_codigo' => '010',
                'producto_categoria' => 'Entrada',
                'producto_nombre' => 'Tacos de Pescado',
                'producto_precio' => 9.50,
                'producto_foto' => 'tacos_pescado.jpg',
                'descripcion' => 'Tacos de pescado fresco con repollo rallado y salsa de aguacate.',
                'cantidad' => 1
            ],
        ];

        // Insertar los datos en la tabla "mesas"
        DB::table('pedidos')->insert($pedido);
        DB::table('zona')->insert($zona);
        DB::table('horarioo')->insert($horarioo);
        DB::table('productos')->insert($productos);

    }

}
