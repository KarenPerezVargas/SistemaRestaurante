@extends('layouts.admin')
@section('puntos', '../')
@section('mainContent')
    <form action="{{ route('actualizarBlog', $id)}}" method="post">
        <h5><center>Datos del Cliente</center></h5>
        @csrf <!-- Mover esta etiqueta dentro del formulario -->
        <div class="mb-3">
            <label for="" class="form-label">Titulo</label>
            <input type="text" class="form-control" name="titulo" id="" value="{{ $blog->titulo }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Contenido</label>
            <input type="text" class="form-control" name="contenido" id="" value="{{ $blog->contenido }}">

        </div>
        <div class="mb-3">
            <label for="" class="form-label">Fecha</label>
            <input type="date" class="form-control" name="fecha" id="" value="{{ $blog->fecha }}">
        </div>
        
        <button type="button" class="btn btn-secondary" onclick="location.href='{{ route('blog') }}'">Atras</button>
        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
@endsection
