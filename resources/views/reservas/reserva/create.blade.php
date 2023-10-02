@extends('layouts.recepcionista')
@section('dashName', 'Dashboard')
@section('mainContent')
    <form action="{{ route('guardarReserva') }}" method="post">
        <h5 class="title" style="font-family:Verdana, Geneva, Tahoma, sans-serif">
            <strong>
                <center>Registro de datos de la reserva</center>
        </h5>
        @csrf
        <!-- Mover esta etiqueta dentro del formulario -->
        <div class="row m-5">
            <div class="col-md-6 mb-3">
                <label for="" class="form-label">Cliente</label>
                <input type="text" class="form-control" name="nombre" id="">
            </div>
            <div class="col-md-6 mb-3">
                <label for="" class="form-label">Fecha</label>
                <input type="text" class="form-control" name="fecha" id="">
            </div>
            <div class="col-md-6 mb-3">
                <label for="" class="form-label">Hora</label>
                <input type="text" class="form-control" name="hora" id="">
            </div>
            <div class="col-md-6 mb-3">
                <label for="" class="form-label">Número de personas</label>
                <input type="text" class="form-control" name="nroPersonas" id="">
            </div>

            <div class="col-md-6 mb-3">
                <label for="" class="form-label">Área</label>
                <select class="form-select" aria-label="Default select example" name="area">
                    <option selected>Seleccione</option>
                    <option value="Comedor principal">Comedor principal</option>
                    <option value="Patio">Patio</option>
                    <option value="Rincon romantico">Rincon romantico</option>
                    <option value="Salón privado">Salón privado</option>
                    <option value="Zona VIP">Zona VIP</option>
                    <option value="Área para eventos">Área para eventos</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="" class="form-label">Mesa</label>
                <input type="text" class="form-control" name="mesa" id="">
            </div>
        </div>

        <div class="mb-2" style="text-align: center">
            <button type="button" class="btn btn-secondary"
                onclick="location.href='{{ route('reserva') }}'">Atrás</button>
            <input type="submit" class="btn btn-primary" value="Guardar">
        </div>
        <br>
    </form>
@endsection
