@extends('layouts.admin')
@section('dashName', 'Dashboard')
@section('mainContent')
    <!-- Page Content-->
    <section class="pt-4">
        <div class="container px-lg-5">
            <!-- Page Features-->
            <div class="row gx-lg-5">
                <div class="navbar">
                    <div class="container-fluid">
                        <h3><i>Permisos</i></h3>
                        <a href="{{route('crearPermiso')}}" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp;Nuevo Permiso</a>
                    </div>
                </div>
                <div class="text-center">
                    <table class="table">
                        <thead class="table-dark">
                          <tr>
                            <th>#</th>
                            <th>Descripcion</th>
                            <th>Rol</th>
                            <th>Opciones</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if ($permisos->count() == 0)
                                <tr><td>No hay permisos</td></tr>
                            @endif
                            @foreach ($permisos as $item)
                                <tr>
                                    <td>{{$item->idPermiso}}</td>
                                    <td>{{$item->nmPermiso}}</td>
                                    <td>{{($roles->find($item->idRole))->nmRole}}</td>
                                    <td>
                                        <a href="{{route('editarPermiso', [$item->idPermiso])}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Editar</a>
                                        &nbsp; &nbsp; &nbsp;

                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$item->idPermiso}}">
                                            <i class="fas fa-trash"></i> Eliminar
                                        </button>
                                    
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal-{{$item->idPermiso}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <form action="{{route('eliminarPermiso', $item->idPermiso)}}" method="post">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Eliminacion de Permiso</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ¿Esta seguro que desea eliminar <b>{{$item->nmPermiso}}</b>? <br>
                                                            <i>Se eliminara todo el contenido del permiso</i>
                                                        </div>
                                                        <div class="modal-footer">
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