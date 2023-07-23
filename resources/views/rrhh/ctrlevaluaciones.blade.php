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
                                        <a href="{{route('asignaciones', [$item->idEvaluacion])}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Asignar</a>
                                        <a href="{{route('asignados', [$item->idEvaluacion])}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Calificar</a>
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