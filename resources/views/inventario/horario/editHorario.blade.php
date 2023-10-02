@extends('layouts.gerentealmacen')
@section('puntos', '../')
@section('mainContent')
    <div class="">
        <form action="{{ route('actualizarHorario', $id) }}" method="post">
            <h5 class="title" style="font-family:Verdana, Geneva, Tahoma, sans-serif">
                <strong>
                    <center>Editar horario del transporte</center>
            </h5>
            @csrf
            <!-- Mover esta etiqueta dentro del formulario -->
            <div class="row m-5">
                <div class="mb-3">
                    <label for="" class="form-label">Fecha</label>
                    <input type="date" class="form-control" name="fecha" id="" value="{{ $horario->fecha }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Hora de salida</label>
                    <input type="time" class="form-control" name="hora_salida" id=""
                        value="{{ $horario->hora_salida }}" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Hora de llegada</label>
                    <input type="time" class="form-control" name="hora_esperada" id=""
                        value="{{ $horario->hora_esperada }}" required>
                </div>
            </div>
            <div class="mb-2" style="text-align: center">
                <button type="button" class="btn btn-secondary"
                    onclick="location.href='{{ route('horario') }}'">Atrás</button>
                <input type="submit" class="btn btn-primary" value="Guardar">
            </div>
        </form>
    </div>
@endsection
