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
                        <h3><i>Contratos</i></h3>
                        <a href="{{route('crearContrato')}}" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp;Nuevo Contrato</a>
                    </div>
                </div>
                <div class="text-center">
                    <table class="table">
                        <thead class="table-dark">
                          <tr>
                            <th>#</th>
                            <th>Empleado</th>
                            <th>Fecha de Inicio</th>
                            <th>Duracion en Meses</th>
                            <th>Fin de Contrato</th>
                            <th>Sueldo</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if ($contratos->count() == 0)
                                <tr><td>No hay contratos</td></tr>
                            @endif
                            @php
                                $nb=1;
                            @endphp
                            @foreach ($contratos as $item)
                                @if ($personal->where('idContrato', $item->idContrato)->isNotEmpty())
                                    <tr>
                                        <td>{{$nb++}}</td>
                                        <td>{{(($personal->where('idContrato', $item->idContrato))->first())->nombre}} {{(($personal->where('idContrato', $item->idContrato))->first())->apellidos}}</td>
                                        <td>{{$item->fechaInicio}}</td>
                                        <td>{{$item->duracionMeses}}</td>
                                        <td>{{ date('Y-m-d', strtotime("$item->fechaInicio + $item->duracionMeses months")) }}</td>
                                        <td>{{$item->sueldo}}</td>
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