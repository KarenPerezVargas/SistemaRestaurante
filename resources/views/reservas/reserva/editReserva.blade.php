@extends('layouts.recepcionista')
@section('puntos', '../')
@section('mainContent')
    <form action="{{ route('actualizarReserva', $id) }}" method="post">
        <h5 class="title" style="font-family:Verdana, Geneva, Tahoma, sans-serif">
            <strong>
                <center>Editar datos de la reserva</center>
        </h5>
        @csrf
        <!-- Mover esta etiqueta dentro del formulario -->
        <div>
            <div class="row m-5">
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="" class="form-label">Fecha</label>
                        <input type="date" class="form-control" name="reserva_fecha" value="{{$reserva->reserva_fecha}}" id="" required>
                    </div>
                    <div class="mb-4">
                        <label for="" class="form-label">N° de personas</label>
                        <input type="number" class="form-control" name="reserva_cantidad" value="{{$reserva->reserva_cantidad}}" id=""
                            required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="" class="form-label">Hora</label>
                        <input type="time" class="form-control" name="reserva_hora" value="{{$reserva->reserva_hora}}" id=""
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Estado</label>
                        <select class="form-select" aria-label="Default select example" name="reserva_estado" value="{{$reserva->reserva_estado}}" required>
                            <option value="Pendiente">Pendiente</option>
                            <option value="Confirmada">Confirmada</option>
                            <option value="Cancelada">Cancelada</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-2" style="text-align: center">
            <button type="button" class="btn btn-secondary"
                onclick="location.href='{{ route('reserva') }}'">Atrás</button>
            <input type="submit" class="btn btn-primary" value="Guardar">
        </div>
    </form>
@endsection
