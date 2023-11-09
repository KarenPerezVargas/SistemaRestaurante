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
                        <h3><i>Reportes</i></h3>
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
                            <th>Opciones</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if ($personal->count() == 0)
                                <tr><td>No hay personal</td></tr>
                            @endif
                            @php
                                $nb=1;
                            @endphp
                            @foreach ($personal as $item)
                                <tr>
                                    <td>{{$nb++}}</td>
                                    <td>{{$item->apellidos}}</td>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{$item->DNI}}</td>
                                    <td>
                                        <a href="{{route('desarrollo', [$item->idEmpleado])}}" class="btn btn-info btn-sm"><i class="fas fa-table"></i> Capacitaciones</a> &nbsp;
                                        {{-- <a href="{{route('valoracion', [$item->idEmpleado])}}" class="btn btn-info btn-sm"><i class="fas fa-table"></i> Evaluaciones</a> --}}
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
