@extends('layouts.personalPedidos')
@section('dashName', 'CLIENTES')
@section('mainContent')
<!-- Page Content-->
<div class="card mb-4">
    <div class="card-header">
        <form class="form-inline my-2" method="get">
            <div class="container-fluid h-100">
                <div class="row w-100 align-items-center">
                    {{-- Registrar --}}
                    <div class="col-7">
                        <a href="{{route('createClientePedido')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Nuevo Registro</a>
                    </div>
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
                    <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>nombres</h6></th>
                    <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>apellidos</h6></th>
                    <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>dni</h6></th>
                    <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>correo</h6></th>
                    <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>telefono</h6></th>
                    <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>Opciones</h6></th>
                </tr>
            </thead>

            <tbody>
                @if ($cliente->count() == 0)
                    <tr>
                        <td colspan="3">No hay registros</td>
                    </tr>
                @endif

                @foreach ($cliente as $item)
                    <tr>
                        <td class="text-xxs mb-0 text-center">{{$item->idCliente}}</td>
                        <td class="text-xxs mb-0 text-center">{{$item->nombres}}</td>
                        <td class="text-xxs mb-0 text-center">{{$item->apellidos}}</td>
                        <td class="text-xxs mb-0 text-center">{{$item->dni}}</td>
                        <td class="text-xxs mb-0 text-center">{{$item->correo}}</td>
                        <td class="text-xxs mb-0 text-center">{{$item->telefono}}</td>
                        <td class="text-xxs mb-0 text-center">
                            <a href="{{route('editClientePedido', [$item->idCliente])}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Editar</a>
                            &nbsp;

                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$item->idCliente}}">
                                        <i class="fas fa-trash"></i> Eliminar
                            </button>

                            <div class="modal fade" id="exampleModal-{{$item->idCliente}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <form action="{{route('eliminarClientePedido', $item->idCliente)}}" method="post">
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
        <a href="{{ route('clientePedido') }}" class="nav-link">
        <i class="nav-icon fas fa-table"></i>
        <p>Clientes</p>
        </a>
    </li>
@endsection
