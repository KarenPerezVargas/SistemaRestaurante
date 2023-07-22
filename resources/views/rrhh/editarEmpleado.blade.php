@extends('layouts.admin')
@section('puntos', '../')
@section('mainContent')
    <form action="{{route('actualizarEmpleado', $id)}}" method="post">
        @csrf
        <h5 ><center>Datos de Empleado</center></h5>
        <div class="mb-3">
            <label for="" class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="apellidos" id="" value="{{$empleado->apellidos}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="" value="{{$empleado->nombre}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">DNI</label>
            <input type="tel" class="form-control" name="dni" id="" value="{{$empleado->DNI}}" max="8">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input type="tel" class="form-control" name="telefono" id="" value="{{$empleado->telefono}}" maxlength="9">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Direccion</label>
            <input type="text" class="form-control" name="direccion" id="" value="{{$empleado->direccion}}">
        </div>
        <button type="button" class="btn btn-secondary" onclick="location.href='{{route('personal')}}'">Cancelar</button>
        <input type="submit" class="btn btn-primary" value="Actualizar">
    </form>
@endsection