@extends('layouts.admin')
@section('puntos', '../')
@section('mainContent')
    <form action="{{route('guardardos')}}" method="post">
        @csrf
        <h5 ><center>Datos de Contrato</center></h5>
        <div class="mb-3">
            <label for="" class="form-label">Fecha de Inicio</label>
            <input type="date" class="form-control" name="fechaInicio" id="" value="{{ $fechaInicio ?? '' }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Duracion en Meses</label>
            <input type="number" class="form-control" name="duracionMeses" id="" value="{{ $duracionMeses ?? '' }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Sueldo</label>
            <input type="number" class="form-control" name="sueldo" id="" value="{{ $sueldo ?? '' }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Rol</label>
            <select class="form-select" name="idRole" aria-label="Default select example">
                @foreach ($roles as $item)
                    @if ($item->idRole != 1)
                        <option value="{{$item->idRole}}" @if ($item->idRole == $idRole) selected @endif>{{$item->nmRole}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Horario</label>
            <select class="form-select" name="idHorario" aria-label="Default select example">
                @foreach ($horarios as $item)
                    <option value="{{$item->idHorario}}" @if ($item->idHorario == $idHorario) selected @endif>
                        @if ($item->lunes == 1)
                            Lunes - 
                        @endif
                        @if ($item->martes == 1)
                            Martes - 
                        @endif
                        @if ($item->miercoles == 1)
                            Miercoles - 
                        @endif
                        @if ($item->jueves == 1)
                            Jueves - 
                        @endif
                        @if ($item->viernes == 1)
                            Viernes - 
                        @endif
                        @if ($item->sabado == 1)
                            Sabado - 
                        @endif
                        @if ($item->domingo == 1)
                            Domingo - 
                        @endif
                        ({{$item->horaEntrada}} - {{$item->horaSalida}})
                    </option>
                @endforeach
            </select>
        </div>
        <button type="button" class="btn btn-secondary" onclick="location.href='{{route('crearEmpleado')}}'">Atras</button>
        <input type="submit" class="btn btn-primary" value="Siguiente">
    </form>
@endsection