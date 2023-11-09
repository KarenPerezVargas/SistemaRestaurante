@extends('layouts.personalPedidos')
@section('puntos', '../')
@section('mainContent')
<div class="container">
    <div class="row justify-content-center">
        <form action="{{ route('actualizarClientePedido', $id) }}" method="post" class="col-md-8">
            <h5 class="title" style="font-family: Verdana, Geneva, Tahoma, sans-serif">
                <strong>
                    <center>Registro de datos del cliente</center>
                </strong>
            </h5>
            @csrf

            <div class="col-md-12 m-5">
                <div class="mb-3">
                    <label for="" class="form-label">Nombres</label>
                    <input type="text" class="form-control" name="nombres" value="{{$cliente->nombres}}" id="" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" name="apellidos" value="{{$cliente->apellidos}}" id="" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">DNI</label>
                    <input type="text" class="form-control" name="dni" value="{{$cliente->dni}}" id="" maxlength="8" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Telefono</label>
                    <input type="text" class="form-control" name="telefono" value="{{$cliente->telefono}}" id="" maxlength="9" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" name="correo" value="{{$cliente->correo}}" id="" required
                    pattern=".+@.+\.(com)">
                </div>
            </div>

            <div class="mb-2" style="text-align: center">
                <button type="button" class="btn btn-secondary" onclick="location.href='{{ route('clientePedido') }}'">Atrás</button>
                <input type="submit" class="btn btn-primary" value="Guardar">
            </div>
        </form>
    </div>
</div>
@endsection

@section('sidebarMenu')
    <li class="nav-item">
        <a href="{{ route('clientePedido') }}" class="nav-link">
        <i class="nav-icon fas fa-table"></i>
        <p>Clientes</p>
        </a>
    </li>

@endsection
