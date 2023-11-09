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
                        <h3><i>Eventos</i></h3>
                        <a href="{{ route('reporteEvento') }}" class="btn btn-secundary"><i
                                class="fas fa-file-pdf"></i>&nbsp;Generar PDF</a>
                    </div>
            </div>
            <div class="text-center">
                    <div align="left">
                        <a style="align:left" href="{{ route('createEvento') }}" class="btn btn-primary"><i
                                class="fas fa-plus"></i>&nbsp;Nuevo
                            Registro</a>
                    </div>
                <table class="table" style="margin-top: 1rem">
                    <thead class="table-dark">
                      <tr>
                        <th>#</th>
                        <th>Fecha</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Direccion</th>
                        <th>Opción</th>
                      </tr>
                    </thead>

                    <tbody>
                        @if ($evento->count() == 0)
                            <tr><td>No hay eventos</td></tr>
                        @endif
                        @foreach ($evento as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->fecha_evento}}</td>
                                <td>{{$item->nombre_evento}}</td>
                                <td>{{$item->descripcion_evento}}</td>
                                <td>{{$item->direccion_evento}}</td>
                                <td>
                                    <a href="{{route('editEvento', [$item->id])}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Editar</a>
                                    &nbsp; &nbsp; &nbsp;

                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$item->id}}">
                                        <i class="fas fa-trash"></i> Eliminar
                                    </button>

                                    <div class="modal fade" id="exampleModal-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <form action="{{route('eliminarEvento', $item->id)}}" method="post">
                                                    @csrf
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Eliminacion de la promoción</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ¿Esta seguro que desea eliminar este registro<b>{{$item->nombre}}</b>? <br>
                                                        <i>Se eliminara toda la información de la promoción</i>
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
