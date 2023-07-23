@extends('layouts.admin')
@section('dashName', 'Dashboard')
@section('puntos', '../')
@section('mainContent')
    <!-- Page Content-->
    <section class="pt-4">
        <div class="container px-lg-5">
            <!-- Page Features-->
            <div class="row gx-lg-5">
                <div class="navbar">
                    <div class="container-fluid">
                        <h3><i><b>{{$empleado->apellidos}} {{$empleado->nombre}}</b> Evaluaciones</i></h3>
                        <a href="{{route('valoracionpdf', $empleado->idEmpleado)}}" class="btn btn-primary"><i class="fas fa-file-pdf"></i>&nbsp;Generar PDF</a>
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
                            <th>Calificacion</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if ($registros->count() == 0)
                                <tr><td>No hay Evaluaciones</td></tr>
                            @endif
                            @php
                                $nb=1;
                            @endphp
                            @foreach ($registros as $item)
                                <tr>
                                    <td>{{$nb++}}</td>
                                    <td>{{($evaluaciones->find($item->ideval))->asuntoEvaluacion}}</td>
                                    <td>{{($evaluaciones->find($item->ideval))->areaEvaluacion}}</td>
                                    <td>{{($evaluaciones->find($item->ideval))->fechaEvaluacion}}</td>
                                    <td>{{$item->calificacion}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-grid gap-2 col-2 mx-auto">
                    <button class="btn btn-secondary" type="button" onclick="location.href='{{route('reportes')}}'">Atras</button>
                </div>
            </div>
        </div>
    </section>
@endsection