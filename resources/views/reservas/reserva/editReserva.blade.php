@extends('layouts.recepcionista')
@section('puntos', '../')
@section('mainContent')
<div class="container">
    <div class="row justify-content-center">
        <form action="{{ route('actualizarReserva', $id) }}" method="post" class="col-md-8">
            <h5 class="title" style="font-family: Verdana, Geneva, Tahoma, sans-serif">
                <strong>
                    <center>Datos de la reserva </center>
                </strong>
            </h5>
            @csrf

            <div class="col-md-12 m-5">
                <div class="mb-3">
                    <label for="" class="form-label">Fecha y hora para cuando se reserva la comida</label>
                    <input type="datetime-local" class="form-control" name="fecha_comida" id="" value="{{$reserva->fecha_comida}}" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Numero de comensales</label>
                    <input type="number" class="form-control" name="num_comensales" max="4" id="" value="{{$reserva->num_comensales}}" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Cliente</label>
                    <select name="cliente_id" id="cliente_id" class="form-select">
                        @foreach ($clientes as $cliente)
                            <option value="{{ $cliente->idCliente }}" {{ $reserva->cliente_id === $cliente->idCliente ? 'selected' : '' }}>
                                {{ $cliente->nombres }} {{ $cliente->apellidos }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Mesa</label>
                    <select name="mesa_id" id="mesa_id" class="form-select">
                        @foreach ($mesas as $mesa)
                            <option value="{{ $mesa->idMesa }}" {{ $reserva->mesa_id === $mesa->idMesa ? 'selected' : '' }}>
                                {{ $mesa->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Estado</label>
                    <select class="form-select" aria-label="Default select example" name="estado" required>
                        <option value="Pendiente">Pendiente</option>
                        <option value="Confirmada">Confirmada</option>
                        <option value="Cancelada">Cancelada</option>
                        <option value="No presentado">No presentado</option>
                        <option value="En proceso">En proceso</option>
                        <option value="Completada">Completada</option>
                        <option value="En espera">En espera</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Observaciones</label>
                    <textarea name="observaciones" id="observaciones" class="form-control">{{ $reserva->observaciones }}</textarea>
                </div>
            </div>

            <div class="mb-2" style="text-align: center">
                <button type="button" class="btn btn-secondary" onclick="location.href='{{ route('reserva') }}'">Atrás</button>
                <input type="submit" class="btn btn-primary" value="Guardar">
            </div>
        </form>
    </div>
</div>
@endsection

@section('sidebarMenu')
    <li class="nav-item">
        <a href="{{ route('cliente') }}" class="nav-link">
        <i class="nav-icon fas fa-table"></i>
        <p>Clientes</p>
        </a>
    </li>

    <li class="nav-item">
        <a href="{{ route('mesa') }}" class="nav-link">
        <i class="nav-icon fas fa-table"></i>
        <p>Mesas</p>
        </a>
    </li>

    <li class="nav-item">
        <a href="{{ route('reserva') }}" class="nav-link">
        <i class="nav-icon fas fa-table"></i>
        <p>Reservas</p>
        </a>
    </li>

    <li class="nav-item">
        <a href="{{ route('pagoReserva') }}" class="nav-link">
        <i class="nav-icon fas fa-table"></i>
        <p>Pagos de reservas</p>
        </a>
    </li>

    <li class="nav-item">
        <a href="{{ route('graficos') }}" class="nav-link">
        <i class="nav-icon fas fa-table"></i>
        <p>Gráficos</p>
        </a>
    </li>

@endsection

