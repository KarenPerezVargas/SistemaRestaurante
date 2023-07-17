@extends('layouts.admin')
@section('mainContent')
    <form action="{{route('guardarEmpleado')}}" method="post">
        @csrf
        <h5 ><center>Datos de Empleado</center></h5>
        <div class="mb-3">
            <label for="" class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="apellidos" id="" value="{{ $apellidos ?? '' }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="" value="{{ $nombre ?? '' }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">DNI</label>
            <input type="tel" class="form-control" name="dni" id="" value="{{ $dni ?? '' }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input type="tel" class="form-control" name="telefono" id="" value="{{ $telefono ?? '' }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Direccion</label>
            <input type="text" class="form-control" name="direccion" id="" value="{{ $direccion ?? '' }}">
        </div>
        <button type="button" class="btn btn-secondary" onclick="location.href='{{route('personal')}}'">Atras</button>
        <input type="submit" class="btn btn-primary" value="Siguiente">
    </form>
@endsection