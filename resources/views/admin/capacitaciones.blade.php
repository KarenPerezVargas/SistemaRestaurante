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
                        <h3><i>Capacitaciones</i></h3>
                        @if ($rol == 1)
                            <a href="{{route('crearCapacitacion')}}" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp;Nuevo Registro</a>
                        @endif
                    </div>
                </div>
                <div class="text-center">
                    <table class="table">
                        <thead class="table-dark">
                          <tr>
                            <th>#</th>
                            <th>Tema</th>
                            <th>Area</th>
                            <th>Fecha</th>
                            <th>Instructor</th>
                            <th>Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if ($capacitaciones->count() == 0)
                                <tr><td>No hay capacitaciones</td></tr>
                            @endif
                            @php
                                $nb=1;
                            @endphp
                            @foreach ($capacitaciones as $item)
                                <tr>
                                    <td>{{$nb++}}</td>
                                    <td>{{$item->temaCapacitacion}}</td>
                                    <td>{{$item->areaCapacitacion}}</td>
                                    <td>{{$item->fechaCapacitacion}}</td>
                                    <td>{{($personal->find($item->idEmpleado))->apellidos}} {{($personal->find($item->idEmpleado))->nombre}}</td>
                                    <td>
                                        @if ($rol == 1)
                                            <a href="{{route('editarCapacitacion', [$item->idCapacitacion])}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Editar</a>
                                            &nbsp; &nbsp; &nbsp;

                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$item->idCapacitacion}}">
                                                <i class="fas fa-trash"></i> Eliminar
                                            </button>
                                        
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal-{{$item->idCapacitacion}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <form action="{{route('eliminarCapacitacion', $item->idCapacitacion)}}" method="post">
                                                            @csrf
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Eliminacion de Capacitacion</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                ¿Esta seguro que desea eliminar <b>{{$item->temaCapacitacion}}</b>? <br>
                                                                <i>Se eliminara todo el contenido de la capacitacion</i>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <a href="{{-- {{route('editarCapacitacion', [$item->idCapacitacion])}} --}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Inscribir</a>
                                            <a href="{{-- {{route('editarCapacitacion', [$item->idCapacitacion])}} --}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Puntuar</a>
                                        @endif
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