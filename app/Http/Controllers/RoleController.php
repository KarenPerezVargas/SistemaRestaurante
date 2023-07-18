<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.crearRol');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Role::create(['nmRole' => $request->nmRole]);
        return redirect()->route('roles');
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
        $rol = Role::find($id);
        return view('admin.editarRol', compact('rol', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Role::where('idRole', $id)->update(['nmRole' => $request->nmRole]);
        return redirect()->route('roles');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Role::where('idRole', $id)->delete();
        return redirect()->route('roles');
    }
}
