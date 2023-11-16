@extends('layouts.admin')
@section('mainContent')
    <form action="{{route('guardarCapacitacion')}}" method="post">
        @csrf
        <h5 ><center>Crear Nueva Capacitacion</center></h5>

        <div class="mb-3">
            <label for="" class="form-label">Tema</label>
            <input type="text" class="form-control" name="temaCapacitacion" id="">
        </div>

        <div class="mb-3">
            <label for="idEmpleado" class="form-label">Empleado</label>
            <select class="form-select" name="idEmpleado" aria-label="Default select example">
                @foreach ($personal as $item)
                    <option value="{{ $item->idEmpleado }}">{{ $item->apellidos }} {{ $item->nombre }}</option>
                @endforeach
            </select>
        </div>


        <div class="mb-3">
            <label for="areaCapacitacion" class="form-label">Área</label>
            <select class="form-select" name="areaCapacitacion" id="areaCapacitacion">
                <option value="Recursos Humanos">Recursos Humanos</option>
                <option value="Marketing">Marketing</option>
                <option value="Reservas">Reservas</option>
                <option value="Pedido">Pedido</option>
                <option value="Inventario">Inventario</option>
            </select>
        </div>


        <div class="mb-3">
            <label for="" class="form-label">Fecha</label>
            <input type="date" class="form-control" name="fechaCapacitacion" id="">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Instructor</label>
            <select class="form-select" name="idInstructor" aria-label="Default select example">
                @foreach ($personal as $item)
                    @if (($contratos->find($item->idContrato))->idRole == 2)
                        <option value="{{$item->idEmpleado}}">{{$item->apellidos}} {{$item->nombre}}</option>
                    @endif
                @endforeach
            </select>
        </div>


        <button type="button" class="btn btn-secondary" onclick="location.href='{{route('capacitaciones')}}'">Cancelar</button>
        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
@endsection
