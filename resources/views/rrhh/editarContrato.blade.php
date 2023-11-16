@extends('layouts.admin')
@section('puntos', '../')
@section('mainContent')
    <form action="{{route('actualizarContrato', $id)}}" method="post">
        @csrf
        <h5 ><center>Datos de Contrato</center></h5>
        <div class="mb-3">      
            <label for="" class="form-label">Empleado</label>
            <select class="form-select" name="idEmpleado" aria-label="Default select example" disabled>
                @foreach ($personal as $item)
                    @if ($item->idEmpleado == $id)
                        <option value="{{$item->idEmpleado}}">{{$item->nombre}} {{$item->apellidos}}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Fecha de Inicio</label>
            <input type="date" class="form-control" name="fechaInicio" id="" value="{{$contrato->fechaInicio}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Duracion en Meses</label>
            <input type="number" class="form-control" name="duracionMeses" id="" value="{{$contrato->duracionMeses}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Sueldo</label>
            <input type="number" class="form-control" name="sueldo" id="" value="{{$contrato->sueldo}}">
        </div>

   

        <div class="mb-3">
            <label for="" class="form-label">Rol</label>
            <select class="form-select" name="idRole" aria-label="Default select example">
                @foreach ($roles as $item)
                    @if ($item->idRole != 1)
                        <option value="{{$item->idRole}}" {{ $item->idRole == $contrato->idRole ? $item->nmRole : '' }}>{{ $item->nmRole }}</option>
                    @endif

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
        <input type="submit" class="btn btn-primary" value="Actualizar">
    </form>
@endsection