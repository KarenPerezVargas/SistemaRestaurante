@extends('layouts.admin')
@section('mainContent')
    <form action="{{route('guardarContrato')}}" method="post">
        @csrf
        <h5 ><center>Datos de Contrato</center></h5>
        <div class="mb-3">
            <label for="" class="form-label">Empleado</label>
            <select class="form-select" name="idEmpleado" aria-label="Default select example">
                @foreach ($personal as $item)
                    <option value="{{$item->idEmpleado}}">{{$item->apellidos}} {{$item->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Fecha de Inicio</label>
            <input type="date" class="form-control" name="fechaInicio" id="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Duracion en Meses</label>
            <input type="number" class="form-control" name="duracionMeses" id="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Sueldo</label>
            <input type="number" class="form-control" name="sueldo" id="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Rol</label>
            <select class="form-select" name="idRole" aria-label="Default select example">
                @foreach ($roles as $item)
                    <option value="{{$item->idRole}}">{{$item->nmRole}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Horario</label>
            <select class="form-select" name="idHorario" aria-label="Default select example">
                @foreach ($horarios as $item)
                    <option value="{{$item->idHorario}}">
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
        <button type="button" class="btn btn-secondary" onclick="location.href='{{route('contratos')}}'">Cancelar</button>
        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
@endsection