@extends('layouts.admin')
@section('mainContent')
    <form action="{{route('guardarRol')}}" method="post">
        @csrf
        <h5 ><center>Crear Nuevo Rol</center></h5>
        <div class="mb-3">
            <label for="" class="form-label">Descripcion</label>
            <input type="text" class="form-control" id="" name="nmRole">
        </div>
        <button type="button" class="btn btn-secondary" onclick="location.href='{{route('roles')}}'">Cancelar</button>
        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
@endsection