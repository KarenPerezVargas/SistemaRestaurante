<?php

namespace App\Http\Controllers;
use App\Models\Proveedor;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class ProveedorController extends Controller
{
    public function index()
    {
        $proveedor = Proveedor::all();
        return view('inventario.proveedor.proveedor', compact('proveedor'));
    }

    public function create()
    {
        return view('inventario.proveedor.createProveedor');
    }

    public function store(Request $request)
    {
        $proveedor = new Proveedor();
        $proveedor->pro_nombre = $request->pro_nombre;
        $proveedor->pro_ruc = $request->pro_ruc;
        $proveedor->pro_codigo = $request->pro_codigo;
        $proveedor->pro_correo = $request->pro_correo;
        $proveedor->pro_descripcion = $request->pro_descripcion;
        $proveedor->pro_direccion = $request->pro_direccion;
        $proveedor->pro_movil = $request->pro_movil;
        $proveedor->pro_forma_pago = $request->pro_forma_pago;
        $proveedor->save();
        return redirect()->route('proveedor');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $proveedor = Proveedor::find($id);
        return view('inventario.proveedor.editProveedor', compact('proveedor', 'id'));
    }

    public function update(Request $request, string $id)
    {
        $proveedor = Proveedor::find($id);
        $proveedor->pro_nombre = $request->pro_nombre;
        $proveedor->pro_ruc = $request->pro_ruc;
        $proveedor->pro_codigo = $request->pro_codigo;
        $proveedor->pro_correo = $request->pro_correo;
        $proveedor->pro_descripcion = $request->pro_descripcion;
        $proveedor->pro_direccion = $request->pro_direccion;
        $proveedor->pro_movil = $request->pro_movil;
        $proveedor->pro_forma_pago = $request->pro_forma_pago;
        $proveedor->save();
        return redirect()->route('proveedor');
    }

    public function destroy(string $id)
    {
        $proveedor = Proveedor::find($id);
        $proveedor->delete();
        return redirect()->route('proveedor');
    }
}
