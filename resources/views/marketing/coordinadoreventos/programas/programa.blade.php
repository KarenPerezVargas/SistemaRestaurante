@extends('layouts.coordinador')
@section('dashName', 'Dashboard')
@section('mainContent')
<!-- Page Content-->
<section class="pt-4">
    <div class="container px-lg-5">
        <!-- Page Features-->
        <div class="row gx-lg-5">
            <div class="navbar">
                <div class="container-fluid">
                    <h3><i>Lista de Programas</i></h3>
                    <a href="{{route('createPrograma')}}" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp;Nuevo Registro</a>
                </div>
            </div>
            <div class="text-center">
                <table class="table">
                    <thead class="table-dark">
                      <tr>
                        <th>#</th>
                        <th>Fecha</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Requisitos</th>
                        <th>Recompensas</th>
                        <th>Opción</th>
                      </tr>
                    </thead>

                    <tbody>
                        @if ($programa->count() == 0)
                            <tr><td>No hay programas</td></tr>
                        @endif
                        @foreach ($programa as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->programa_fecha}}</td>
                                <td>{{$item->programa_nombre}}</td>
                                <td>{{$item->programa_descripcion}}</td>
                                <td>{{$item->programa_requisitos}}</td>
                                <td>{{$item->programa_recompensas}}</td>
                                <td>
                                    <a href="{{route('editPrograma', [$item->id])}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Editar</a>
                                    &nbsp; &nbsp; &nbsp;

                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$item->id}}">
                                        <i class="fas fa-trash"></i> Eliminar
                                    </button>

                                    <div class="modal fade" id="exampleModal-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <form action="{{route('eliminarPrograma', $item->id)}}" method="post">
                                                    @csrf
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Eliminacion del transporte</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ¿Esta seguro que desea eliminar este registro<b>{{$item->nombre}}</b>? <br>
                                                        <i>Se eliminara toda la información del programa</i>
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
    </div>
</section>
@endsection
