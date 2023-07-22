@extends('layouts.admin')
@section('puntos', '../')
@section('mainContent')
    <form action="{{route('actualizarEvaluacion', $id)}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Asunto</label>
            <input type="text" class="form-control" name="asuntoEvaluacion" id="" value="{{$evaluacion->asuntoEvaluacion}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Área</label>
            <input type="text" class="form-control" name="areaEvaluacion" id="" value="{{$evaluacion->areaEvaluacion}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Fecha</label>
            <input type="date" class="form-control" name="fechaEvaluacion" id="" value="{{$evaluacion->fechaEvaluacion}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Supervisor</label>
            <select class="form-select" name="idEmpleado" aria-label="Default select example">
                @foreach ($personal as $item)
                    @if (($contratos->find($item->idContrato))->idRole == 3)
                        <option value="{{$item->idEmpleado}}" @if ($item->idEmpleado == $evaluacion->idEmpleado) selected @endif>{{$item->apellidos}} {{$item->nombre}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <button type="button" class="btn btn-secondary" onclick="location.href='{{route('evaluaciones')}}'">Cancelar</button>
        <input type="submit" class="btn btn-primary" value="Actualizar">
    </form>
@endsection