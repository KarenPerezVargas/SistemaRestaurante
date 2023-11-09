@extends('layouts.recepcionista')
@section('dashName', 'PAGOS RESERVAS')
@section('mainContent')
<!-- Page Content-->
<div class="card mb-4">
    <div class="card-header">
        <form class="form-inline my-2" method="get">
            <div class="container-fluid h-100">
                <div class="row w-100 align-items-center">
                    {{-- Registrar
                    <div class="col-7">
                        <a href="{{route('createPagoReserva')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Nuevo Registro</a>
                    </div> --}}
                </div>
            </div>
        </form>
    </div>

    <div class="card-body">
    {{-- Tabla --}}
        <table id="mi-tabla" class="table">
            <thead class="table-dark">
                <tr>
                    <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>#</h6></th>
                    <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6># reserva</h6></th>
                    <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>cliente</h6></th>
                    <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>metodo pago</h6></th>
                    <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>fecha pago</h6></th>
                    <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>monto</h6></th>
                    <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>vuelto</h6></th>
                    <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>Opciones</h6></th>
                </tr>
            </thead>

            <tbody>
                @if ($pagoReservas->count() == 0)
                    <tr>
                        <td colspan="3">No hay registros</td>
                    </tr>
                @endif

                @foreach ($pagoReservas as $item)
                    <tr>
                        <td class="text-xxs mb-0 text-center">{{$item->id}}</td>
                        <td class="text-xxs mb-0 text-center">{{$item->reserva_id}}</td>
                        {{-- Aqui va el cliente --}}
                        <td class="text-xxs mb-0 text-center">{{$item->reserva->cliente->nombres}} {{$item->cliente->apellidos}}</td>

                        <td class="text-xxs mb-0 text-center">{{$item->metodo_pago}}</td>
                        <td class="text-xxs mb-0 text-center">{{$item->fecha_pago}}</td>
                        <td class="text-xxs mb-0 text-center">{{$item->monto}}</td>
                        <td class="text-xxs mb-0 text-center">{{$item->vuelto}}</td>
                        <td class="text-xxs mb-0 text-center">
                            <a href="{{route('editPagoReserva', [$item->id])}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Editar</a>
                            &nbsp;

                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$item->id}}">
                                        <i class="fas fa-trash"></i> Eliminar
                            </button>

                            <div class="modal fade" id="exampleModal-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <form action="{{route('eliminarPagoReserva', $item->id)}}" method="post">
                                            @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Registro eliminado</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>

                                            <div class="modal-body">
                                                ¿Está seguro que desea eliminar este registro?<br>
                                                <i>Se eliminará toda la información registrada</i>
                                            </div>

                                            <div class="modal-footer m-2">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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
