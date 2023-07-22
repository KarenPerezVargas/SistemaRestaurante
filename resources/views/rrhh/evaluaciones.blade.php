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
                        <h3><i>Evaluaciones</i></h3>
                        <a href="{{route('crearEvaluacion')}}" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp;Crear Evaluacion</a>
                    </div>
                </div>
                <div class="text-center">
                    <table class="table">
                        <thead class="table-dark">
                          <tr>
                            <th>#</th>
                            <th>Asunto</th>
                            <th>Área</th>
                            <th>Fecha</th>
                            <th>Supervisor</th>
                            <th>Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if ($evaluaciones->count() == 0)
                                <tr><td>No hay evaluaciones</td></tr>
                            @endif
                            @php
                                $nb=1;
                            @endphp
                            @foreach ($evaluaciones as $item)
                                <tr>
                                    <td>{{$nb++}}</td>
                                    <td>{{$item->asuntoEvaluacion}}</td>
                                    <td>{{$item->areaEvaluacion}}</td>
                                    <td>{{$item->fechaEvaluacion}}</td>
                                    <td>{{($personal->find($item->idEmpleado))->apellidos}} {{($personal->find($item->idEmpleado))->nombre}}</td>
                                    <td>
                                        <a href="{{route('editarEvaluacion', [$item->idEvaluacion])}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Editar</a>
                                        &nbsp; &nbsp; &nbsp;

                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$item->idEvaluacion}}">
                                            <i class="fas fa-trash"></i> Eliminar
                                        </button>
                                    
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal-{{$item->idEvaluacion}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <form action="{{route('eliminarEvaluacion', $item->idEvaluacion)}}" method="post">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Eliminacion de Evaluacion</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ¿Esta seguro que desea eliminar <b>{{$item->asuntoEvaluacion}}</b>? <br>
                                                            <i>Se eliminara todo el contenido de la evaluacion</i>
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