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
                        <h3><i>Asignaciones para Supervision</i></h3>
                    </div>
                </div>
                <div class="text-center">
                    <form action="{{ route('asignar', $id) }}" method="post">
                        @csrf
                        <table class="table">
                            <thead class="table-dark">
                              <tr>
                                <th>#</th>
                                <th>Apellidos</th>
                                <th>Nombre</th>
                                <th>DNI</th>
                                <th>Asignar</th>
                              </tr>
                            </thead>
                            <tbody>
                                @if ($personal->count() == 0)
                                    <tr><td>No hay empleados</td></tr>
                                @endif
                                @php
                                    $nb=1;
                                @endphp
                                @foreach ($personal as $item)
                                    @php
                                        $contrato = $contratos->find($item->idContrato);
                                    @endphp
                                    @if ($contrato->idRole != 1 && $contrato->idRole != 3)
                                        @php
                                            $inscrito = false;
                                        @endphp
                                        @if ($registrados->isNotEmpty())
                                            @foreach ($registrados as $emp)
                                                @if ($item->idEmpleado == $emp->idemple)
                                                    @php
                                                        $inscrito = true;
                                                        break;
                                                    @endphp
                                                @endif
                                            @endforeach
                                        @endif
                                        @if (!$inscrito)
                                            <tr>
                                                <td>{{$nb++}}</td>
                                                <td>{{$item->apellidos}}</td>
                                                <td>{{$item->nombre}}</td>
                                                <td>{{$item->DNI}}</td>
                                                <td><input type="checkbox" name="asignados[]" value="{{ $item->idEmpleado }}"></td>
                                            </tr>
                                        @endif
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-secondary" onclick="location.href='{{route('evaluaciones')}}'">Atras</button>
                        <input type="submit" class="btn btn-primary" value="Finalizar">
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection