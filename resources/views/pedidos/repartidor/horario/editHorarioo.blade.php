@extends('layouts.repartidor')
@section('puntos', '../')
@section('mainContent')
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{ route('actualizarHorarioo', $id) }}" method="post" class="col-md-8">
                <h5 class="title" style="font-family: Verdana, Geneva, Tahoma, sans-serif">
                    <strong>
                        <center>Editar datos</center>
                    </strong>
                </h5>
                @csrf
                <div class="row m-5">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Fecha</label>
                            <input type="date" class="form-control" name="fecha" value="{{$horarioo->fecha}}" id="" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Hora</label>
                            <input type="text" class="form-control" name="hora" value="{{$horarioo->hora}}" id="" required>
                        </div>
                    </div>
                </div>

                <div class="mb-2" style="text-align: center">
                    <button type="button" class="btn btn-secondary"
                        onclick="location.href='{{ route('horarioo') }}'">Atrás</button>
                    <input type="submit" class="btn btn-primary" value="Guardar">
                </div>
            </form>
        </div>
    </div>
@endsection
