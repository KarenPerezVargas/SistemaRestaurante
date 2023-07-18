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
                        <h3><i>Inscritos</i></h3>
                    </div>
                </div>
                <div class="text-center">
                    <form action="{{ route('puntuar', $id) }}" method="post">
                        @csrf
                        <table class="table">
                            <thead class="table-dark">
                              <tr>
                                <th>#</th>
                                <th>Apellidos</th>
                                <th>Nombre</th>
                                <th>DNI</th>
                                <th>Puntuacion</th>
                              </tr>
                            </thead>
                            <tbody>
                                @if ($registrados->count() == 0)
                                    <tr><td>No hay inscritos</td></tr>
                                @endif
                                @php
                                    $nb=1;
                                @endphp
                                @foreach ($registrados as $item)
                                    <tr>
                                        <td>{{$nb++}}</td>
                                        <td>{{($personal->find($item->idemple))->apellidos}}</td>
                                        <td>{{($personal->find($item->idemple))->nombre}}</td>
                                        <td>{{($personal->find($item->idemple))->DNI}}</td>
                                        <td><input type="number" name="puntuaciones[{{ $item->idemple }}]" value="{{ old('puntuaciones.' . $item->idemple) }}"></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-secondary" onclick="location.href='{{route('capacitaciones')}}'">Atras</button>
                        <input type="submit" class="btn btn-primary" value="Finalizar">
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection