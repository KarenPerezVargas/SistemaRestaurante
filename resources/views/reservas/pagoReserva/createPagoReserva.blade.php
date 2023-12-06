@extends('layouts.recepcionista')
@section('puntos', '../')
@section('mainContent')
<div class="container">
    <div class="row justify-content-center">
        <form action="{{ route('guardarPagoReserva') }}" method="post" class="col-md-8">
            <h5 class="title" style="font-family: Verdana, Geneva, Tahoma, sans-serif">
                <strong>
                    <center>Registrar pago de la reserva </center>
                </strong>
            </h5>
            @csrf

            <div class="col-md-12 m-5">
                <div class="mb-3">
                    <label for="" class="form-label">Reserva ID</label>
                    <input type="text" class="form-control" name="reserva_id" id="" value="{{$reserva->id}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Cliente</label>
                    <input type="text" class="form-control" name="cliente_id" id="" value="{{$reserva->cliente->nombres}} {{$reserva->cliente->apellidos}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Precio a pagar</label>
                    <input type="number" class="form-control" step="0.10" id="" name="precio" value="{{$reserva->precio}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Monto pagado</label>
                    <input type="number" class="form-control" step="0.1" id="" min="{{$reserva->precio}}" name="monto" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Metodo de pago</label>
                    <select class="form-select" aria-label="Default select example" name="metodo_pago" required>
                        <option value="Efectivo">Efectivo</option>
                        {{-- <option value="Tarjeta">Tarjeta</option> --}}
                    </select>
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

