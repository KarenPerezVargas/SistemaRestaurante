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
                        <h3><i>Personal</i></h3>
                        <a href="{{route('crearEmpleado')}}" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp;Nuevo Registro</a>
                    </div>
                </div>
                <div class="text-center">
                    <table class="table">
                        <thead class="table-dark">
                          <tr>
                            <th>#</th>
                            <th>Apellidos</th>
                            <th>Nombre</th>
                            <th>DNI</th>
                            <th>Telefono</th>
                            <th>Rol</th>
                            <th>Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if ($personal->count() == 0)
                                <tr><td>No hay capacitaciones</td></tr>
                            @endif
                            @php
                                $nb=1;
                            @endphp
                            @foreach ($personal as $item)
                                @if (($contratos->find($item->idContrato))->idRole != 1)
                                    <tr>
                                        <td>{{$nb++}}</td>
                                        <td>{{$item->nombre}}</td>
                                        <td>{{$item->apellidos}}</td>
                                        <td>{{$item->DNI}}</td>
                                        <td>{{$item->telefono}}</td>
                                        <td>{{($roles->find(($contratos->find($item->idContrato))->idRole))->nmRole}}</td>
                                        <td>
                                            <a href="{{-- {{route('editarUsuario', [$item->id])}} --}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Editar</a>
                                            &nbsp; &nbsp; &nbsp;
                                            
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$item->id}}">
                                                <i class="fas fa-trash"></i> Eliminar
                                            </button>
        
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <form action="{{-- {{route('eliminarUsuario', $item->id)}} --}}" method="post">
                                                            @csrf
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Eliminacion de Usuario</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                ¿Esta seguro que desea eliminar a <b>{{$item->name}}</b>? <br>
                                                                <i>Se eliminara todo el contenido del usuario</i>
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
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection