<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Permiso;
use App\Models\Role;

class PermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permisos = Permiso::all();
        $roles = Role::all();
        return view('admin.permisos', compact('permisos', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.crearPermiso', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Permiso::create(['nmPermiso' => $request->nmPermiso, 'idRole' => $request->idRole]);
        return redirect()->route('permisos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $permiso = Permiso::find($id);
        $roles = Role::all();
        return view('admin.editarPermiso', compact('permiso', 'roles', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Permiso::where('idPermiso', $id)->update(['nmPermiso' => $request->nmPermiso, 'idRole' => $request->idRole]);
        return redirect()->route('permisos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Permiso::where('idPermiso', $id)->delete();
        return redirect()->route('permisos');
    }
}
