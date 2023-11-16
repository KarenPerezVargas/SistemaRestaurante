<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Proveedor;
use App\Models\Producto;
use App\Models\Transporte;
use App\Models\HojaCostos;
use App\Models\HojaPresupuesto;

class InventarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        //Crear proveedores
        $proveedor1 = new Proveedor();
        $proveedor1->codigo_proveedor = '001P';
        $proveedor1->nombre_proveedor = 'TOTUS';
        $proveedor1->ciudad_proveedor = 'Chepen';
        $proveedor1->direccion_proveedor = 'Calle Juan Pablo II';
        $proveedor1->email_proveedor = 'totus@gmail.com';
        $proveedor1->telefono_proveedor = '989223400';
        $proveedor1->id = 1; // Asocia el usuario al Proveedor
        $proveedor1->save();

        $proveedor2 = new Proveedor();
        $proveedor2->codigo_proveedor = '002P';
        $proveedor2->nombre_proveedor = 'Food Service';
        $proveedor2->ciudad_proveedor = 'Pacasmayo';
        $proveedor2->direccion_proveedor = 'Avenida Pacasmayo';
        $proveedor2->email_proveedor = 'foods@gmail.com';
        $proveedor2->telefono_proveedor = '998234098';
        $proveedor2->id = 2; // Asocia el usuario al Proveedor
        $proveedor2->save();

        $proveedor3 = new Proveedor();
        $proveedor3->codigo_proveedor = '003P';
        $proveedor3->nombre_proveedor = 'Yaussa SA';
        $proveedor3->ciudad_proveedor = 'Chiclayo';
        $proveedor3->direccion_proveedor = 'Jiron Chiclayo';
        $proveedor3->email_proveedor = 'yaussa@gmail.com';
        $proveedor3->telefono_proveedor = '909823445';
        $proveedor3->id = 3; // Asocia el usuario al Proveedor
        $proveedor3->save();

        $proveedor4 = new Proveedor();
        $proveedor4->codigo_proveedor = '003P';
        $proveedor4->nombre_proveedor = 'Fresh Food';
        $proveedor4->ciudad_proveedor = 'Chepen';
        $proveedor4->direccion_proveedor = 'Av. 2 de Mayo';
        $proveedor4->email_proveedor = 'fresh@hotmail.com';
        $proveedor4->telefono_proveedor = '908373456';
        $proveedor4->id = 4; // Asocia el usuario al Proveedor
        $proveedor4->save();

        $proveedor5 = new Proveedor();
        $proveedor5->codigo_proveedor = '004P';
        $proveedor5->nombre_proveedor = 'Ricks Food';
        $proveedor5->ciudad_proveedor = 'Guadalupe';
        $proveedor5->direccion_proveedor = 'Av. Los Angeles';
        $proveedor5->email_proveedor = 'food@gmail.com';
        $proveedor5->telefono_proveedor = '993820834';
        $proveedor5->id = 5; // Asocia el usuario al Proveedor
        $proveedor5->save();


        //Crear transporte
        $transporte1 = new Transporte();
        $transporte1->trans_codigo = '001T';
        $transporte1->trans_descripcion = 'Bebidas gaseosas';
        $transporte1->trans_capacidad = '4^2';
        $transporte1->trans_conductor = 'Juan Dionicio';
        $transporte1->id = 1; // Asocia el usuario al transporte
        $transporte1->save();

        $transporte2 = new Transporte();
        $transporte2->trans_codigo = '002T';
        $transporte2->trans_descripcion = 'Alimentos lacteos';
        $transporte2->trans_capacidad = '4^2';
        $transporte2->trans_conductor = 'Fernando Romero';
        $transporte2->id = 2; // Asocia el usuario al transporte
        $transporte2->save();

        $transporte3 = new Transporte();
        $transporte3->trans_codigo = '003T';
        $transporte3->trans_descripcion = 'Vegetales y hortalizas';
        $transporte3->trans_capacidad = '5^2';
        $transporte3->trans_conductor = 'Agustin Paredes';
        $transporte3->id = 3; // Asocia el usuario al transporte
        $transporte3->save();

        $transporte4 = new Transporte();
        $transporte4->trans_codigo = '004T';
        $transporte4->trans_descripcion = 'Frutas y verduras';
        $transporte4->trans_capacidad = '5^2';
        $transporte4->trans_conductor = 'Sara Acero';
        $transporte4->id = 4; // Asocia el usuario al transporte
        $transporte4->save();

        $transporte5 = new Transporte();
        $transporte5->trans_codigo = '005T';
        $transporte5->trans_descripcion = 'Tubérculos y raíces';
        $transporte5->trans_capacidad = '5^2';
        $transporte5->trans_conductor = 'Ignacio Aguilar';
        $transporte5->id = 5; // Asocia el usuario al transporte
        $transporte5->save();


        //Crear productos
        $producto1 = new Producto();
        $producto1->producto_codigo = '001PR';
        $producto1->producto_categoria = 'Bebidas gaseosas';
        $producto1->producto_nombre = 'Coca Cola';
        $producto1->id = 1;
        $producto1->save();

        $producto2 = new Producto();
        $producto2->producto_codigo = '002PR';
        $producto2->producto_categoria = 'Bebidas gaseosas';
        $producto2->producto_nombre = 'Inca Kola';
        $producto2->id = 2;
        $producto2->save();

        $producto3 = new Producto();
        $producto3->producto_codigo = '003PR';
        $producto3->producto_categoria = 'Bebidas lácteas';
        $producto3->producto_nombre = 'Leche';
        $producto3->id = 3;
        $producto3->save();

        $producto4 = new Producto();
        $producto4->producto_codigo = '004PR';
        $producto4->producto_categoria = 'Bebidas lácteas';
        $producto4->producto_nombre = 'Yogurt';
        $producto4->id = 4;
        $producto4->save();

        $producto5 = new Producto();
        $producto5->producto_codigo = '005PR';
        $producto5->producto_categoria = 'Vegetales y hortalizas';
        $producto5->producto_nombre = 'Tomate';
        $producto5->id = 5;
        $producto5->save();

        $producto6 = new Producto();
        $producto6->producto_codigo = '006PR';
        $producto6->producto_categoria = 'Vegetales y hortalizas';
        $producto6->producto_nombre = 'Cebolla';
        $producto6->id = 6;
        $producto6->save();

        $producto7 = new Producto();
        $producto7->producto_codigo = '007PR';
        $producto7->producto_categoria = 'Frutas y verduras';
        $producto7->producto_nombre = 'Manzana';
        $producto7->id = 7;
        $producto7->save();

        $producto8 = new Producto();
        $producto8->producto_codigo = '008PR';
        $producto8->producto_categoria = 'Limpieza';
        $producto8->producto_nombre = 'Jabón';
        $producto8->id = 8;
        $producto8->save();


        //Crear hoja de costos
        $hojaCostos1 = new HojaCostos();
        $hojaCostos1->fecha = '2022-05-01';
        $hojaCostos1->nombre_producto = 'Coca Cola';
        $hojaCostos1->unidad_medida = 'Litros';
        $hojaCostos1->cantidad = '100';
        $hojaCostos1->precio_unit = '2.50';
        $hojaCostos1->precio_total = '250.00';
        $hojaCostos1->mano_obra = '50.00';
        $hojaCostos1->indirectos = '25.00';
        $hojaCostos1->margen_beneficio = '10.00';
        $hojaCostos1->id = 1;
        $hojaCostos1->save();

        $hojaCostos2 = new HojaCostos();
        $hojaCostos2->fecha = '2022-08-12';
        $hojaCostos2->nombre_producto = 'Inca Kola';
        $hojaCostos2->unidad_medida = 'Litros';
        $hojaCostos2->cantidad = '100';
        $hojaCostos2->precio_unit = '2.50';
        $hojaCostos2->precio_total = '250.00';
        $hojaCostos2->mano_obra = '50.00';
        $hojaCostos2->indirectos = '25.00';
        $hojaCostos2->margen_beneficio = '25%';
        $hojaCostos2->id = 2;
        $hojaCostos2->save();

        $hojaCostos3 = new HojaCostos();
        $hojaCostos3->fecha = '2023-06-01';
        $hojaCostos3->nombre_producto = 'Leche';
        $hojaCostos3->unidad_medida = 'Litros';
        $hojaCostos3->cantidad = '50';
        $hojaCostos3->precio_unit = '2.00';
        $hojaCostos3->precio_total = '100.00';
        $hojaCostos3->mano_obra = '25.00';
        $hojaCostos3->indirectos = '20.00';
        $hojaCostos3->margen_beneficio = '30%';
        $hojaCostos3->id = 3;
        $hojaCostos3->save();

        $hojaCostos4 = new HojaCostos();
        $hojaCostos4->fecha = '2023-09-11';
        $hojaCostos4->nombre_producto = 'Yogurt';
        $hojaCostos4->unidad_medida = 'Litros';
        $hojaCostos4->cantidad = '50';
        $hojaCostos4->precio_unit = '2.00';
        $hojaCostos4->precio_total = '100.00';
        $hojaCostos4->mano_obra = '25.00';
        $hojaCostos4->indirectos = '20.00';
        $hojaCostos4->margen_beneficio = '30%';
        $hojaCostos4->id = 4;
        $hojaCostos4->save();

        $hojaCostos5 = new HojaCostos();
        $hojaCostos5->fecha = '2023-10-01';
        $hojaCostos5->nombre_producto = 'Tomate';
        $hojaCostos5->unidad_medida = 'Kilogramos';
        $hojaCostos5->cantidad = '100';
        $hojaCostos5->precio_unit = '2.50';
        $hojaCostos5->precio_total = '250.00';
        $hojaCostos5->mano_obra = '50.00';
        $hojaCostos5->indirectos = '25.00';
        $hojaCostos5->margen_beneficio = '25%';
        $hojaCostos5->id = 5;
        $hojaCostos5->save();

        $hojaCostos6 = new HojaCostos();
        $hojaCostos6->fecha = '2023-10-10';
        $hojaCostos6->nombre_producto = 'Cebolla';
        $hojaCostos6->unidad_medida = 'Kilogramos';
        $hojaCostos6->cantidad = '200';
        $hojaCostos6->precio_unit = '2.50';
        $hojaCostos6->precio_total = '500.00';
        $hojaCostos6->mano_obra = '50.00';
        $hojaCostos6->indirectos = '50.00';
        $hojaCostos6->margen_beneficio = '20%';
        $hojaCostos6->id = 6;
        $hojaCostos6->save();


        //Crear hoja de presupuesto
        $hojaPresupuesto1 = new HojaPresupuesto();
        $hojaPresupuesto1->codigo = '001HP';
        $hojaPresupuesto1->fecha = '2021-05-01';
        $hojaPresupuesto1->tiempo_validez = '30';
        $hojaPresupuesto1->descripcion = 'Bebidas gaseosas';
        $hojaPresupuesto1->precio = '250.00';
        $hojaPresupuesto1->igv = '18%';
        $hojaPresupuesto1->presupuesto_total = '295.00';
        $hojaPresupuesto1->id = 1;
        $hojaPresupuesto1->save();

        $hojaPresupuesto2 = new HojaPresupuesto();
        $hojaPresupuesto2->codigo = '002HP';
        $hojaPresupuesto2->fecha = '2021-08-12';
        $hojaPresupuesto2->tiempo_validez = '30';
        $hojaPresupuesto2->descripcion = 'Bebidas gaseosas';
        $hojaPresupuesto2->precio = '250.00';
        $hojaPresupuesto2->igv = '18%';
        $hojaPresupuesto2->presupuesto_total = '295.00';
        $hojaPresupuesto2->id = 2;
        $hojaPresupuesto2->save();

        $hojaPresupuesto3 = new HojaPresupuesto();
        $hojaPresupuesto3->codigo = '003HP';
        $hojaPresupuesto3->fecha = '2021-06-01';
        $hojaPresupuesto3->tiempo_validez = '30';
        $hojaPresupuesto3->descripcion = 'Bebidas lácteas';
        $hojaPresupuesto3->precio = '100.00';
        $hojaPresupuesto3->igv = '18%';
        $hojaPresupuesto3->presupuesto_total = '118.00';
        $hojaPresupuesto3->id = 3;
        $hojaPresupuesto3->save();

        $hojaPresupuesto4 = new HojaPresupuesto();
        $hojaPresupuesto4->codigo = '004HP';
        $hojaPresupuesto4->fecha = '2021-09-11';
        $hojaPresupuesto4->tiempo_validez = '30';
        $hojaPresupuesto4->descripcion = 'Bebidas lácteas';
        $hojaPresupuesto4->precio = '100.00';
        $hojaPresupuesto4->igv = '18%';
        $hojaPresupuesto4->presupuesto_total = '118.00';
        $hojaPresupuesto4->id = 4;
        $hojaPresupuesto4->save();

        $hojaPresupuesto5 = new HojaPresupuesto();
        $hojaPresupuesto5->codigo = '005HP';
        $hojaPresupuesto5->fecha = '2021-10-01';
        $hojaPresupuesto5->tiempo_validez = '30';
        $hojaPresupuesto5->descripcion = 'Vegetales y hortalizas';
        $hojaPresupuesto5->precio = '250.00';
        $hojaPresupuesto5->igv = '18%';
        $hojaPresupuesto5->presupuesto_total = '295.00';
        $hojaPresupuesto5->id = 5;
        $hojaPresupuesto5->save();

        $hojaPresupuesto6 = new HojaPresupuesto();
        $hojaPresupuesto6->codigo = '006HP';
        $hojaPresupuesto6->fecha = '2021-10-10';
        $hojaPresupuesto6->tiempo_validez = '30';
        $hojaPresupuesto6->descripcion = 'Vegetales y hortalizas';
        $hojaPresupuesto6->precio = '500.00';
        $hojaPresupuesto6->igv = '18%';
        $hojaPresupuesto6->presupuesto_total = '590.00';
        $hojaPresupuesto6->id = 6;
        $hojaPresupuesto6->save();

    }
}
