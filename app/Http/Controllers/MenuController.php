<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menu = Menu::all();

        return view('marketing.disenadorpubli.menu.menu', compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('marketing.disenadorpubli.menu.createMenu');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $menu = new Menu();
        $menu->menu_nombre = $request->menu_nombre;
        $menu->menu_descripcion = $request->menu_descripcion;
        $menu->menu_precio = $request->menu_precio;
        $menu->save();
        return redirect()->route('menu');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,string $id)
    {
        $menu = Menu::find($id);
        return view('marketing.disenadorpubli.menu.editMenu', compact('menu', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $menu = Menu::find($id);
        $menu->menu_nombre = $request->menu_nombre;
        $menu->menu_descripcion = $request->menu_descripcion;
        $menu->menu_precio = $request->menu_precio;
        $menu->save();
        return redirect()->route('menu');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        return redirect()->route('menu');
    }
}
