<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\CapacitacionController;
use App\Http\Controllers\EvaluacionController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\TransporteController;
use App\Http\Controllers\HorarioEntregaController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\KardexController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\HojaCostosController;
use App\Http\Controllers\HojaPresupuestoController;
use App\Http\Controllers\ZonaController;
use App\Http\Controllers\HorariooController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\PromocionController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CapacidadController;
use App\Http\Controllers\BlogController;
use App\Models\Blog;


//----------------SISTEMA PEDIDOS-------------------
use App\Http\Controllers\CostosController;
use App\Http\Controllers\procesarPedidosController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\PagosController;
use App\Http\Controllers\AsesoramientoController;
use App\Http\Controllers\BebidasController;
use App\Http\Controllers\ProductosController;
use App\Models\HorarioEntrega;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [RegisterController::class, 'index'])->name('index');

Route::get('/register', [RegisterController::class, 'show'])->name('registro');

Route::post('/register', [RegisterController::class, 'register'])->name('registrar');

Route::get('/login', [LoginController::class, 'show'])->name('inicio');

Route::post('/login', [LoginController::class, 'login'])->name('iniciar');

Route::get('/logout', [LoginController::class,'logout'])->name('salir');

Route::get('/home', [UserController::class, 'index'])->name('home');

Route::get('/roles', [RoleController::class, 'index'])->name('roles');
Route::get('/crearRol', [RoleController::class, 'create'])->name('crearRol');
Route::post('/guardarRol', [RoleController::class, 'store'])->name('guardarRol');
Route::get('/editarRol/{id}', [RoleController::class, 'edit'])->name('editarRol');
Route::post('/actualizarRol/{id}', [RoleController::class, 'update'])->name('actualizarRol');
Route::post('/eliminarRol/{id}', [RoleController::class, 'destroy'])->name('eliminarRol');

Route::get('/permisos', [PermisoController::class, 'index'])->name('permisos');
Route::get('/crearPermiso', [PermisoController::class, 'create'])->name('crearPermiso');
Route::post('/guardarPermiso', [PermisoController::class, 'store'])->name('guardarPermiso');
Route::get('/editarPermiso/{id}', [PermisoController::class, 'edit'])->name('editarPermiso');
Route::post('/actualizarPermiso/{id}', [PermisoController::class, 'update'])->name('actualizarPermiso');
Route::post('/eliminarPermiso/{id}', [PermisoController::class, 'destroy'])->name('eliminarPermiso');

Route::get('/personal', [PersonalController::class, 'index'])->name('personal');
Route::get('/registrarPersonal', [PersonalController::class, 'create1'])->name('crearEmpleado');
Route::post('/registrarPersonal/paso1', [PersonalController::class, 'store1'])->name('guardarEmpleado');
Route::get('/registrarPersonal/paso2', [PersonalController::class, 'create2'])->name('personaldos');
Route::post('/registrarPersonal/paso2', [PersonalController::class, 'store2'])->name('guardardos');
Route::get('/registrarPersonal/paso3', [PersonalController::class, 'create3'])->name('personaltres');
Route::post('/registrarPersonal/paso3', [PersonalController::class, 'store3'])->name('guardartres');
Route::get('/editarEmpleado/{id}', [PersonalController::class, 'edit'])->name('editarEmpleado');
Route::post('/actualizarEmpleado/{id}', [PersonalController::class, 'update'])->name('actualizarEmpleado');
Route::post('/eliminarEmpleado/{id}', [PersonalController::class, 'destroy'])->name('eliminarEmpleado');

Route::get('/contratos', [ContratoController::class, 'index'])->name('contratos');
Route::get('/crearContrato', [ContratoController::class, 'create'])->name('crearContrato');
Route::post('/guardarContrato', [ContratoController::class, 'store'])->name('guardarContrato');

Route::get('/capacitaciones', [CapacitacionController::class, 'index'])->name('capacitaciones');
Route::get('/crearCapacitacion', [CapacitacionController::class, 'create'])->name('crearCapacitacion');
Route::post('/guardarCapacitacion', [CapacitacionController::class, 'store'])->name('guardarCapacitacion');
//Route::get('/capacitacion/{id}', [CapacitacionController::class, 'show'])->name('capacitacion');
Route::get('/editarCapacitacion/{id}', [CapacitacionController::class, 'edit'])->name('editarCapacitacion');
Route::post('/actualizarCapacitacion/{id}', [CapacitacionController::class, 'update'])->name('actualizarCapacitacion');
Route::post('/eliminarCapacitacion/{id}', [CapacitacionController::class, 'destroy'])->name('eliminarCapacitacion');

Route::get('/inscripciones/{id}', [CapacitacionController::class, 'inscripciones'])->name('inscripciones');
Route::post('/inscribir/{id}', [CapacitacionController::class, 'inscribir'])->name('inscribir');
Route::get('/inscritos/{id}', [CapacitacionController::class, 'inscritos'])->name('inscritos');
Route::post('/puntuar/{id}', [CapacitacionController::class, 'puntuar'])->name('puntuar');

Route::get('/evaluaciones', [EvaluacionController::class, 'index'])->name('evaluaciones');
Route::get('/crearEvaluacion', [EvaluacionController::class, 'create'])->name('crearEvaluacion');
Route::post('/guardarEvaluacion', [EvaluacionController::class, 'store'])->name('guardarEvaluacion');
//Route::get('/capacitacion/{id}', [EvaluacionController::class, 'show'])->name('capacitacion');
Route::get('/editarEvaluacion/{id}', [EvaluacionController::class, 'edit'])->name('editarEvaluacion');
Route::post('/actualizarEvaluacion/{id}', [EvaluacionController::class, 'update'])->name('actualizarEvaluacion');
Route::post('/eliminarEvaluacion/{id}', [EvaluacionController::class, 'destroy'])->name('eliminarEvaluacion');

Route::get('/asignaciones/{id}', [EvaluacionController::class, 'asignaciones'])->name('asignaciones');
Route::post('/asignar/{id}', [EvaluacionController::class, 'asignar'])->name('asignar');
Route::get('/asignados/{id}', [EvaluacionController::class, 'asignados'])->name('asignados');
Route::post('/calificar/{id}', [EvaluacionController::class, 'calificar'])->name('calificar');

Route::get('/reportes', [ReporteController::class, 'index'])->name('reportes');
Route::get('/reporteDesarrollo/{id}', [ReporteController::class, 'show1'])->name('desarrollo');
Route::get('/reporteDesarrollo/{id}/pdf', [ReporteController::class, 'pdf1'])->name('desarrollopdf');
Route::get('/reporteValoracion/{id}', [ReporteController::class, 'show2'])->name('valoracion');
Route::get('/reporteValoracion/{id}/pdf', [ReporteController::class, 'pdf2'])->name('valoracionpdf');

Route::get('/verPerfil', [UserController::class, 'showPerfil'])->name('perfil');
Route::get('/editarPerfil', [UserController::class, 'editPerfil'])->name('editar');
Route::post('/actualizarPerfil', [UserController::class, 'updatePerfil'])->name('actualizar');
Route::post('/eliminarPerfil/{id}', [UserController::class, 'destroyPerfil'])->name('eliminar');


//========================PEDIDOS==============================
Route::get('/costos', [CostosController::class, 'index'])->name('costos');
Route::resource('procesarPedido', procesarPedidosController::class);

// -------------------
Route::resource('pedido', PedidosController::class);
Route::get('cancelar-pedido',function(){
    return redirect()->route('pedido.index')->with('datos','Acción Cancelada');
})->name('cancelar-pedido');
Route::get('pedido/{id}/confirmar',[PedidosController::class,'confirmar'
])->name('pedido.confirmar');

Route::get('graficos',[PedidosController::class,'graficos'
])->name('pedido.graficos');

// -------------------
Route::resource('pago', PagosController::class);
Route::get('cancelar-pago',function(){
    return redirect()->route('pago.index')->with('datos','Acción Cancelada');
})->name('cancelar-pago');
Route::get('pago/{id}/confirmar',[PagosController::class,'confirmar'
])->name('pago.confirmar');
Route::get('pago/{id}/anular',[PagosController::class,'anular'
])->name('pago.anular');

Route::get('pagos',[PagosController::class,'pagos'
])->name('pago.pagos');

Route::get('boletas',[PagosController::class,'boletas'
])->name('pago.boletas');

// ----------------------
Route::resource('asesoramiento', AsesoramientoController::class);

// --------BEBIDAS-----------
Route::resource('bebida', BebidasController::class);
Route::get('cancelar-bebida',function(){
    return redirect()->route('bebida.index')->with('datos','Acción Cancelada');
})->name('cancelar-bebida');
Route::get('bebida/{id}/confirmar',[BebidasController::class,'confirmar'
])->name('bebida.confirmar');


// --------ZONAS-----------
Route::get('/zona', [ZonaController::class, 'index'])->name('zona');
Route::get('/createZona', [ZonaController::class, 'create'])->name('createZona');
Route::post('/guardarZona', [ZonaController::class, 'store'])->name('guardarZona');
Route::get('/editZona/{id}', [ZonaController::class, 'edit'])->name('editZona');
Route::post('/actualizarZona/{id}', [ZonaController::class, 'update'])->name('actualizarZona');
Route::post ('/eliminarZona/{id}', [ZonaController::class, 'destroy'])->name('eliminarZona');


// --------HORARIOS-----------
Route::get('/horarioo', [HorariooController::class, 'index'])->name('horarioo');
Route::get('/createHorarioo', [HorariooController::class, 'create'])->name('createHorarioo');
Route::post('/guardarHorarioo', [HorariooController::class, 'store'])->name('guardarHorarioo');
Route::get('/editHorarioo/{id}', [HorariooController::class, 'edit'])->name('editHorarioo');
Route::post('/actualizarHorarioo/{id}', [HorariooController::class, 'update'])->name('actualizarHorarioo');
Route::post('/eliminarHorarioo/{id}', [HorariooController::class, 'destroy'])->name('eliminarHorarioo');

// --------PRODUCTOS-----------
//Route::resource('producto', ProductosController::class);
//Route::get('cancelar-producto',function(){
//    return redirect()->route('producto.index')->with('datos','Acción Cancelada');
//})->name('cancelar-producto');
//Route::get('producto/{id}/confirmar',[ProductosController::class,'confirmar'
//])->name('producto.confirmar');

////////////////////////////////////////////////////////////////

Route::get('/asistencia', [CapacidadController::class, 'index'])->name('asistencia');
Route::get('/registrarCliente', [CapacidadController::class, 'create'])->name('crearCliente');
Route::post('/cearCliente', [CapacidadController::class, 'store'])->name('guardarAsistencia');
Route::get('/editarCliente/{id}', [CapacidadController::class, 'edit'])->name('editarCliente');
Route::post('/actualizarCliente/{id}', [CapacidadController::class, 'update'])->name('actualizarCliente');
Route::post('/eliminarCliente/{id}', [CapacidadController::class, 'destroy'])->name('eliminarCliente');
//
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/crearBlog', [BlogController::class, 'create'])->name('crearBlog');
Route::post('/guardarBlog', [BlogController::class, 'store'])->name('guardarBlog');
Route::get('/editarBlog/{id}', [BlogController::class, 'edit'])->name('editarBlog');
Route::post('/actualizarBlog/{id}', [BlogController::class, 'update'])->name('actualizarBlog');
Route::post('/eliminarBlog/{id}', [BlogController::class, 'destroy'])->name('eliminarBlog');

//------------------------INVENTARIO------------------------//
Route::get('/proveedor', [ProveedorController::class, 'index'])->name('proveedor');
Route::get('/createProveedor', [ProveedorController::class, 'create'])->name('createProveedor');
Route::post('/guardarProveedor', [ProveedorController::class, 'store'])->name('guardarProveedor');
Route::get('/editProveedor/{id}', [ProveedorController::class, 'edit'])->name('editProveedor');
Route::post('/actualizarProveedor/{id}', [ProveedorController::class, 'update'])->name('actualizarProveedor');
Route::post('/eliminarProveedor/{id}', [ProveedorController::class, 'destroy'])->name('eliminarProveedor');

Route::get('/transporte', [TransporteController::class, 'index'])->name('transporte');
Route::get('/createTransporte', [TransporteController::class, 'create'])->name('createTransporte');
Route::post('/guardarTransporte', [TransporteController::class, 'store'])->name('guardarTransporte');
Route::get('/editTransporte/{id}', [TransporteController::class, 'edit'])->name('editTransporte');
Route::post('/actualizarTransporte/{id}', [TransporteController::class, 'update'])->name('actualizarTransporte');
Route::post('/eliminarTransporte/{id}', [TransporteController::class, 'destroy'])->name('eliminarTransporte');

Route::get('/horario', [HorarioEntregaController::class, 'index'])->name('horario');
Route::get('/createHorario', [HorarioEntregaController::class, 'create'])->name('createHorario');
Route::post('/guardarHorario', [HorarioEntregaController::class, 'store'])->name('guardarHorario');
Route::get('/editHorario/{id}', [HorarioEntregaController::class, 'edit'])->name('editHorario');
Route::post('/actualizarHorario/{id}', [HorarioEntregaController::class, 'update'])->name('actualizarHorario');
Route::post('/eliminarHorario/{id}', [HorarioEntregaController::class, 'destroy'])->name('eliminarHorario');

Route::get('/compra', [CompraController::class, 'index'])->name('compra');
Route::get('/createCompra', [CompraController::class, 'create'])->name('createCompra');
Route::post('/guardarCompra', [CompraController::class, 'store'])->name('guardarCompra');
Route::get('/editCompra/{id}', [CompraController::class, 'edit'])->name('editCompra');
Route::post('/actualizarCompra/{id}', [CompraController::class, 'update'])->name('actualizarCompra');
Route::post('/eliminarCompra/{id}', [CompraController::class, 'destroy'])->name('eliminarCompra');

Route::get('/kardex', [KardexController::class, 'index'])->name('kardex');
Route::get('/createKardex', [KardexController::class, 'create'])->name('createKardex');
Route::post('/guardarKardex', [KardexController::class, 'store'])->name('guardarKardex');
Route::get('/editKardex/{id}', [KardexController::class, 'edit'])->name('editKardex');
Route::post('/actualizarKardex/{id}', [KardexController::class, 'update'])->name('actualizarKardex');
Route::post('/eliminarKardex/{id}', [KardexController::class, 'destroy'])->name('eliminarKardex');

Route::get('/producto', [ProductoController::class, 'index'])->name('producto');
Route::get('/createProducto', [ProductoController::class, 'create'])->name('createProducto');
Route::post('/guardarProducto', [ProductoController::class, 'store'])->name('guardarProducto');
Route::get('/editProducto/{id}', [ProductoController::class, 'edit'])->name('editProducto');
Route::post('/actualizarProducto/{id}', [ProductoController::class, 'update'])->name('actualizarProducto');
Route::post('/eliminarProducto/{id}', [ProductoController::class, 'destroy'])->name('eliminarProducto');

Route::get('/hojaCostos', [HojaCostosController::class, 'index'])->name('hojaCostos');
Route::get('/createHojaCostos', [HojaCostosController::class, 'create'])->name('createHojaCostos');
Route::post('/guardarHojaCostos', [HojaCostosController::class, 'store'])->name('guardarHojaCostos');
Route::get('/editHojaCostos/{id}', [HojaCostosController::class, 'edit'])->name('editHojaCostos');
Route::post('/actualizarHojaCostos/{id}', [HojaCostosController::class, 'update'])->name('actualizarHojaCostos');
Route::post('/eliminarHojaCostos/{id}', [HojaCostosController::class, 'destroy'])->name('eliminarHojaCostos');

Route::get ('/hojaPresupuesto', [HojaPresupuestoController::class, 'index'])->name('hojaPresupuesto');
Route::get ('/createHojaPresupuesto', [HojaPresupuestoController::class, 'create'])->name('createHojaPresupuesto');
Route::post ('/guardarHojaPresupuesto', [HojaPresupuestoController::class, 'store'])->name('guardarHojaPresupuesto');
Route::get ('/editHojaPresupuesto/{id}', [HojaPresupuestoController::class, 'edit'])->name('editHojaPresupuesto');
Route::post ('/actualizarHojaPresupuesto/{id}', [HojaPresupuestoController::class, 'update'])->name('actualizarHojaPresupuesto');
Route::post ('/eliminarHojaPresupuesto/{id}', [HojaPresupuestoController::class, 'destroy'])->name('eliminarHojaPresupuesto');

//---------------------------RESERVAS-------------------------//
Route::get('/reserva', [ReservaController::class, 'index'])->name('reserva');
Route::get('/createReserva', [ReservaController::class, 'create'])->name('createReserva');
Route::post('/guardarReserva', [ReservaController::class, 'store'])->name('guardarReserva');
Route::get('/editReserva/{id}', [ReservaController::class, 'edit'])->name('editReserva');
Route::post('/actualizarReserva/{id}', [ReservaController::class, 'update'])->name('actualizarReserva');
Route::post('/eliminarReserva/{id}', [ReservaController::class, 'destroy'])->name('eliminarReserva');


Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente');
Route::get('/createCliente', [ClienteController::class, 'create'])->name('createCliente');
Route::post('/guardarCliente', [ClienteController::class, 'store'])->name('guardarCliente');
Route::get('/editCliente/{id}', [ClienteController::class, 'edit'])->name('editCliente');
Route::post('/actualizarCliente/{id}', [ClienteController::class, 'update'])->name('actualizarCliente');
Route::post('/eliminarCliente/{id}', [ClienteController::class, 'destroy'])->name('eliminarCliente');

Route::get('/mesa', [MesaController::class, 'index'])->name('mesa');
Route::get('/createMesa', [MesaController::class, 'create'])->name('createMesa');
Route::post('/guardarMesa', [MesaController::class, 'store'])->name('guardarMesa');
Route::get('/editMesa/{id}', [MesaController::class, 'edit'])->name('editMesa');
Route::post('/actualizarMesa/{id}', [MesaController::class, 'update'])->name('actualizarMesa');
Route::post('/eliminarMesa/{id}', [MesaController::class, 'destroy'])->name('eliminarMesa');


Route::get('/reserva', [ReservaController::class, 'index'])->name('reserva');
Route::get('/createReserva', [ReservaController::class, 'create'])->name('createReserva');
Route::post('/guardarReserva', [ReservaController::class, 'store'])->name('guardarReserva');
Route::get('/editReserva/{id}', [ReservaController::class, 'edit'])->name('editReserva');
Route::post('/actualizarReserva/{id}', [ReservaController::class, 'update'])->name('actualizarReserva');
Route::post('/eliminarReserva/{id}', [ReservaController::class, 'destroy'])->name('eliminarReserva');


//---------------------------MARKETING-------------------------//
Route::get('/promocion', [PromocionController::class, 'index'])->name('promocion');
Route::get('/createPromocion', [PromocionController::class, 'create'])->name('createPromocion');
Route::post('/guardarPromocion', [PromocionController::class, 'store'])->name('guardarPromocion');
Route::get('/editPromocion/{id}', [PromocionController::class, 'edit'])->name('editPromocion');
Route::post('/actualizarPromocion/{id}', [PromocionController::class, 'update'])->name('actualizarPromocion');
Route::post('/eliminarPromocion/{id}', [PromocionController::class, 'destroy'])->name('eliminarPromocion');

Route::get('/evento', [EventoController::class, 'index'])->name('evento');
Route::get('/createEvento', [EventoController::class, 'create'])->name('createEvento');
Route::post('/guardarEvento', [EventoController::class, 'store'])->name('guardarEvento');
Route::get('/editEvento/{id}', [EventoController::class, 'edit'])->name('editEvento');
Route::post('/actualizarEvento/{id}', [EventoController::class, 'update'])->name('actualizarEvento');
Route::post('/eliminarEvento/{id}', [EventoController::class, 'destroy'])->name('eliminarEvento');

Route::get('/programa', [ProgramaController::class, 'index'])->name('programa');
Route::get('/createPrograma', [ProgramaController::class, 'create'])->name('createPrograma');
Route::post('/guardarPrograma', [ProgramaController::class, 'store'])->name('guardarPrograma');
Route::get('/editPrograma/{id}', [ProgramaController::class, 'edit'])->name('editPrograma');
Route::post('/actualizarPrograma/{id}', [ProgramaController::class, 'update'])->name('actualizarPrograma');
Route::post('/eliminarPrograma/{id}', [ProgramaController::class, 'destroy'])->name('eliminarPrograma');

Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/createMenu', [MenuController::class, 'create'])->name('createMenu');
Route::post('/guardarMenu', [MenuController::class, 'store'])->name('guardarMenu');
Route::get('/editMenu/{id}', [MenuController::class, 'edit'])->name('editMenu');
Route::post('/actualizarMenu/{id}', [MenuController::class, 'update'])->name('actualizarMenu');
Route::post('/eliminarMenu/{id}', [MenuController::class, 'destroy'])->name('eliminarMenu');
