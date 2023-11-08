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
                        <h3><i><b>{{$empleado->apellidos}} {{$empleado->nombre}}</b> Capacitaciones</i></h3>
                        <a href="{{route('desarrollopdf', $empleado->idEmpleado)}}" class="btn btn-primary"><i class="fas fa-file-pdf"></i>&nbsp;Generar PDF</a>
                    </div>
                </div>
                <div class="text-center">
                    <table class="table">
                        <thead class="table-dark">
                          <tr>
                            <th>#</th>
                            <th>Tema</th>
                            <th>Área</th>
                            <th>Fecha</th>
                            <th>Instructor</th>
                            <th>Estado</th>
                            {{-- <th>Puntuacion</th> --}}
                          </tr>
                        </thead>
                        <tbody>
                            @if ($registros->count() == 0)
                                <tr><td>No hay Capacitaciones</td></tr>
                            @endif
                            @php
                                $nb=1;
                            @endphp
                            @foreach ($registros as $item)
                                <tr>
                                    <td>{{$nb++}}</td>
                                    <td>{{($capacitaciones->find($item->idcapa))->temaCapacitacion}}</td>
                                    <td>{{($capacitaciones->find($item->idcapa))->areaCapacitacion}}</td>
                                    <td>{{($capacitaciones->find($item->idcapa))->fechaCapacitacion}}</td>
                                    <td>{{($capacitaciones->find($item->idcapa))->idInstructor}}</td>
                                    <td>{{($capacitaciones->find($item->idcapa))->estadoCapacitacion}}</td>
                                    {{-- <td>{{$item->puntuacion}}</td> --}}
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