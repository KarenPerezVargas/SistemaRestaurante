@extends('layouts.admin')
@section('puntos', '../')
@section('mainContent')
    <form action="{{route('actualizarCapacitacion')}}" method="post">
        @csrf
        <div class="mb-3">
            <input type="hidden" name="idCapacitacion" value="{{$capacitacion->idCapacitacion}}">
            <label for="" class="form-label">Tema</label>
            <input type="text" class="form-control" name="temaCapacitacion" id="" value="{{$capacitacion->temaCapacitacion}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Area</label>
            <input type="text" class="form-control" name="areaCapacitacion" id="" value="{{$capacitacion->areaCapacitacion}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Fecha</label>
            <input type="date" class="form-control" name="fechaCapacitacion" id="" value="{{$capacitacion->fechaCapacitacion}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Instructor</label>
            <select class="form-select" name="idEmpleado" aria-label="Default select example">
                @foreach ($personal as $item)
                    @if (($contratos->find($item->idContrato))->idRole == 2)
                        <option value="{{$item->idEmpleado}}" @if ($item->idEmpleado == $capacitacion->idEmpleado) selected @endif>{{$item->apellidos}} {{$item->nombre}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Actualizar">
    </form>
@endsection