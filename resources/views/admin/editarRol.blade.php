@extends('layouts.admin')
@section('puntos', '../')
@section('mainContent')
    <form action="{{route('actualizarRol', $id)}}" method="post">
        @csrf
        <h5 ><center>Actualizar Rol</center></h5>
        <div class="mb-3">
            <label for="" class="form-label">Descripcion</label>
            <input type="text" class="form-control" id="" name="nmRole" value="{{$rol->nmRole}}">
        </div>
        <button type="button" class="btn btn-secondary" onclick="location.href='{{route('roles')}}'">Cancelar</button>
        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
@endsection