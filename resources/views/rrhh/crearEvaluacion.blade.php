@extends('layouts.admin')
@section('mainContent')
    <form action="{{route('guardarEvaluacion')}}" method="post">
        @csrf
        <h5 ><center>Crear Nueva Evaluacion</center></h5>
        <div class="mb-3">
            <label for="" class="form-label">Asunto</label>
            <input type="text" class="form-control" name="asuntoEvaluacion" id="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Área</label>
            <input type="text" class="form-control" name="areaEvaluacion" id="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Fecha</label>
            <input type="date" class="form-control" name="fechaEvaluacion" id="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Supervisor</label>
            <select class="form-select" name="idEmpleado" aria-label="Default select example">
                @foreach ($personal as $item)
                    @if (($contratos->find($item->idContrato))->idRole == 3)
                        <option value="{{$item->idEmpleado}}">{{$item->apellidos}} {{$item->nombre}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <button type="button" class="btn btn-secondary" onclick="location.href='{{route('evaluaciones')}}'">Cancelar</button>
        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
@endsection