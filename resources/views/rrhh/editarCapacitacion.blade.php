@extends('layouts.admin')
@section('puntos', '../')
@section('mainContent')

<form action="{{route('actualizarCapacitacion', $id)}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Tema</label>
        <input type="text" class="form-control" name="temaCapacitacion" id="" value="{{$capacitacion->temaCapacitacion}}">
    </div>

    <div class="mb-3">
        <label for="idEmpleado" class="form-label">Empleado</label>
        <select class="form-select" name="idEmpleado" aria-label="Default select example">
            @foreach ($personal as $item)
                <option value="{{ $item->idEmpleado }}" {{ $capacitacion->idEmpleado == $item->idEmpleado ? 'selected' : '' }}>{{ $item->apellidos }} {{ $item->nombre }}</option>
            @endforeach
        </select>
    </div>


    <div class="mb-3">
        <label for="areaCapacitacion" class="form-label">Área</label>
        <select class="form-select" name="areaCapacitacion" id="areaCapacitacion">
            <option value="Recursos Humanos" {{ old('areaCapacitacion') == 'Recursos Humanos' ? 'selected' : '' }}>Recursos Humanos</option>
            <option value="Marketing" {{ old('areaCapacitacion') == 'Marketing' ? 'selected' : '' }}>Marketing</option>
            <option value="Reservas" {{ old('areaCapacitacion') == 'Reservas' ? 'selected' : '' }}>Reservas</option>
            <option value="Pedido" {{ old('areaCapacitacion') == 'Pedido' ? 'selected' : '' }}>Pedido</option>
            <option value="Inventario" {{ old('areaCapacitacion') == 'Inventario' ? 'selected' : '' }}>Inventario</option>
        </select>
    </div>


    <div class="mb-3">
        <label for="" class="form-label">Fecha</label>
        <input type="date" class="form-control" name="fechaCapacitacion" id="" value="{{$capacitacion->fechaCapacitacion}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Instructor</label>
        <select class="form-select" name="idInstructor" aria-label="Default select example">
            @foreach ($personal as $item)
                @if (($contratos->find($item->idContrato))->idRole == 2)
                    <option value="{{$item->idEmpleado}}" {{ $capacitacion->idInstructor == $item->idEmpleado ? 'selected' : '' }}>{{ $item->apellidos }} {{ $item->nombre }}</option>
                @endif
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="estadoCapacitacion" class="form-label">Estado</label>
        <select class="form-select" name="estadoCapacitacion" aria-label="Default select example">
            <option value="pendiente" {{ $capacitacion->estadoCapacitacion == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
            <option value="en curso" {{ $capacitacion->estadoCapacitacion == 'en curso' ? 'selected' : '' }}>En curso</option>
            <option value="finalizada" {{ $capacitacion->estadoCapacitacion == 'finalizada' ? 'selected' : '' }}>Finalizada</option>
        </select>
    </div>

    <button type="button" class="btn btn-secondary" onclick="location.href='{{route('capacitaciones')}}'">Cancelar</button>
    <input type="submit" class="btn btn-primary" value="Actualizar">
</form>

@endsection
