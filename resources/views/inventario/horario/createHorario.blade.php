@extends('layouts.gerentealmacen')
@section('mainContent')
<div class="container">
    <div class="row justify-content-center">
        <form action="{{ route('guardarHorario') }}" method="post" class="col-md-8">
            <h5 class="title" style="font-family: Verdana, Geneva, Tahoma, sans-serif">
                <strong>
                    <center>Registro de horario del transporte</center>
                </strong>
            </h5>
            @csrf

            <div class="col-md-12 m-5">
                <div class="mb-3">
                    <label for="" class="form-label">Fecha</label>
                    <input type="date" class="form-control" name="fecha" id="" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Hora de salida</label>
                    <input type="time" class="form-control" name="hora_salida" id="" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Hora de llegada</label>
                    <input type="time" class="form-control" name="hora_esperada" id="" required>
                </div>
            </div>

            <div class="mb-2" style="text-align: center">
                <button type="button" class="btn btn-secondary" onclick="location.href='{{ route('horario') }}'">Atrás</button>
                <input type="submit" class="btn btn-primary" value="Guardar">
            </div>
        </form>
    </div>
</div>
@endsection
