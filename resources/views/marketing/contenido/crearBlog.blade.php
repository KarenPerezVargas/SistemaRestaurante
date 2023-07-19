@extends('layouts.admin')
@section('mainContent')
    <form action="{{ route('guardarBlog') }}" method="post">
        <h5><center>Datos del Cliente</center></h5>
        @csrf <!-- Mover esta etiqueta dentro del formulario -->
        <div class="mb-3">
            <label for="" class="form-label">Titulo</label>
            <input type="text" class="form-control" name="titulo" id="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Contenido</label>
            <textarea name="contenido" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Fecha</label>
            <input type="date" class="form-control" name="fecha" id="">
        </div>
        
        <button type="button" class="btn btn-secondary" onclick="location.href='{{ route('blog') }}'">Atras</button>
        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
@endsection
