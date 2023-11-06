@extends('layouts.recepcionista')
@section('dashName', 'MESAS')
@section('mainContent')
<!-- Page Content-->
<div class="card mb-4">
    <div class="card-header">
        <form class="form-inline my-2" method="get">
            <div class="container-fluid h-100">
                <div class="row w-100 align-items-center">
                    {{-- Registrar --}}
                    <div class="col-6">
                        <a href="{{route('createMesa')}}" class="btn btn-primary"><i class="fas fa-plus"></i>Nuevo Registro</a>
                    </div>
                    {{-- Buscador --}}
                    <div class="col-6">
                        <div class="row">
                            <div class="col-9">
                                <input class="form-control" name="buscarpor" type="search" placeholder="Buscar: libre/ocupado" aria-label="Search" value="{{$buscarpor ?? ''}}">
                            </div>
                            <div class="col-3">
                                <button class="btn btn-warning" type="submit">Buscar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="card-body">
    {{-- Tabla --}}
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>#</h6></th>
                    <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>Numero</h6></th>
                    <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>Capacidad</h6></th>
                    <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>Estado</h6></th>
                    <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>Opciones</h6></th>
                </tr>
            </thead>

            <tbody>
                @if ($mesa->count() == 0)
                    <tr>
                        <td colspan="3">No hay registros</td>
                    </tr>
                @endif

                @foreach ($mesa as $item)
                    <tr>
                        <td>{{$item->idMesa}}</td>
                        <td>{{$item->numero}}</td>
                        <td>{{$item->capacidad}}</td>
                        <td>{{$item->estado}}</td>
                        <td>
                            <a href="{{route('editMesa', [$item->id])}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Editar</a>
                            &nbsp; &nbsp; &nbsp;

                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$item->id}}">
                                        <i class="fas fa-trash"></i> Eliminar
                            </button>

                            <div class="modal fade" id="exampleModal-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <form action="{{route('eliminarMesa', $item->id)}}" method="post">
                                            @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Eliminacion de la mesa</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>

                                            <div class="modal-body">
                                                ¿Está seguro que desea eliminar este registro?<br>
                                                <i>Se eliminará toda la información de la mesa</i>
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
