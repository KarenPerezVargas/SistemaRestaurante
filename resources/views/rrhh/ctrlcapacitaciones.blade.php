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
                                        <a href="{{route('inscripciones', [$item->idCapacitacion])}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Inscribir</a>
                                        <a href="{{route('inscritos', [$item->idCapacitacion])}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Puntuar</a>
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
