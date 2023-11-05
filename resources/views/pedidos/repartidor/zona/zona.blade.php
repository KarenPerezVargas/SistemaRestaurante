@extends('layouts.repartidor')
@section('dashName', 'Dashboard')
@section('mainContent')
<!-- Page Content-->
<section class="pt-4">
    <div class="container px-lg-5">
        <!-- Page Features-->
        <div class="row gx-lg-5">
            <div class="navbar">
                <div class="container-fluid">
                    <h3><i>Zonas de entrega</i></h3>
                    <a href="{{route('createZona')}}" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp;Nuevo Registro</a>
                </div>
            </div>
            <div class="text-center">
                <table class="table">
                    <thead class="table-dark">
                      <tr>
                        <th>#</th>
                        <th>Fecha</th>
                        <th>Provincia</th>
                        <th>Distrito</th>
                        <th>Especificaciones</th>
                        <th>Opción</th>
                      </tr>
                    </thead>

                    <tbody>
                        @if ($zona->count() == 0)
                            <tr><td>No hay zonas de entrega registradas</td></tr>
                        @endif
                        @foreach ($zona as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->fecha}}</td>
                                <td>{{$item->provincia}}</td>
                                <td>{{$item->distrito}}</td>
                                <td>{{$item->especificaciones}}</td>
                                <td>
                                    <a href="{{route('editZona', [$item->id])}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Editar</a>
                                    &nbsp; &nbsp; &nbsp;

                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$item->id}}">
                                        <i class="fas fa-trash"></i> Eliminar
                                    </button>
                                    <div>
                                        <div class="modal fade" id="exampleModal-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <form action="{{route('eliminarZona', $item->id)}}" method="post">
                                                    @csrf
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Eliminacion de la zona</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ¿Esta seguro que desea eliminar este registro<b></b>? <br>
                                                        <i>Se eliminará toda la información de la zona</i>
                                                    </div>
                                                    <div class="modal-footer m-2">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                                    </div>
                                                </form>
                                            </div>
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
