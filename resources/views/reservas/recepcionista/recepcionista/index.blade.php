@extends('layouts.recepcionista')

@section('puntos', '../')

@section('dashName', 'Recepcionista')

@section('mainContent')

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

    {{-- <li class="nav-item">
        <a href="{{ route('pago') }}" class="nav-link">
        <i class="nav-icon fas fa-table"></i>
        <p>Pagos</p>
        </a>
    </li> --}}
@endsection
