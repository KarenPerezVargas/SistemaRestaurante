@extends('layouts.admin')
@section('puntos', '../')
@section('mainContent')
    <form action="{{route('actualizarCliente', $id)}}" method="post">
        @csrf
        <h5 ><center>Datos del Cliente</center></h5>
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="" value="{{ $asistencia->nombre }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">DNI</label>
            <input type="tel" class="form-control" name="dni" id="" value="{{ $asistencia->dni }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input type="tel" class="form-control" name="telefono" id="" value="{{ $asistencia->telefono }}">
        </div>
        
        <button type="button" class="btn btn-secondary" onclick="location.href='{{route('asistencia')}}'">Atras</button>
        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
@endsection