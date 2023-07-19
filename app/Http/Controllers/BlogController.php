<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $blog = Blog::all();
        return view('marketing.contenido.blog', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
    
        return view('marketing.contenido.crearBlog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->titulo = $request->titulo;
        $blog->contenido = $request->contenido;
        $blog->fecha = $request->fecha;
        $blog->save();
        return redirect()->route('blog');
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
    public function edit(string $id)
    {
        $blog = Blog::find($id);
        return view('marketing.contenido.editarBlog', compact('blog', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blog = Blog::find($id);
        $blog->titulo = $request->titulo;
        $blog->contenido = $request->contenido;
        $blog->fecha = $request->fecha;
        $blog->save();
        return redirect()->route('blog');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->route('blog');
    }
}
