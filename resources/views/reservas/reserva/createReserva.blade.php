@extends('layouts.recepcionista')
@section('puntos', '../')
@section('mainContent')
<div class="container">
    <div class="row justify-content-center">
        <form action="{{ route('guardarReserva') }}" method="post" class="col-md-8">
            <h5 class="title" style="font-family: Verdana, Geneva, Tahoma, sans-serif">
                <strong>
                    <center>Registrar datos de la reserva </center>
                </strong>
            </h5>
            @csrf

            <div class="col-md-12 m-5">
                <div class="mb-3">
                    <label for="" class="form-label">Fecha y hora a reservar</label>
                    <input type="datetime-local" class="form-control" name="fecha_comida" id="" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Numero de comensales</label>
                    <input type="number" class="form-control" name="num_comensales" max="4" id="" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Cliente</label>
                    <select class="form-select" aria-label="Default select example" name="cliente_id" required>
                        @foreach ($clientes as $cliente)
                        <option value="{{ $cliente->idCliente}}">{{ $cliente->nombres }} {{ $cliente->apellidos }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Mesa</label>
                    <select class="form-select" aria-label="Default select example" name="mesa_id" required>
                        @foreach ($mesas as $mesa)
                        <option value="{{ $mesa->idMesa }}">{{ $mesa->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Precio de reserva</label>
                    <input type="number" class="form-control" step="0.10" id="precio" name="precio" required>
                </div>
                {{-- <div class="mb-3">
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
                </div> --}}
                <div class="mb-3">
                    <label for="" class="form-label">Observaciones</label>
                    <textarea class="form-control" id="observaciones" name="observaciones" rows="4"></textarea>
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
@endsection

