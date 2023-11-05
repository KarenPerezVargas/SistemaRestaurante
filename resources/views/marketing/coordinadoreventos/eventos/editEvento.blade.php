@extends('layouts.coordinador')
@section('puntos', '../')
@section('mainContent')
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{ route('actualizarEvento', $id) }}" method="post" class="col-md-8">
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
                            <input type="date" class="form-control" name="fecha_evento" value="{{$evento->fecha_evento}}" id="" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Descripcion</label>
                            <input type="text" class="form-control" name="descripcion_evento" value="{{$evento->descripcion_evento}}" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre_evento" value="{{$evento->nombre_evento}}" id="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Direccion</label>
                            <input type="text" class="form-control" name="direccion_evento" value="{{$evento->direccion_evento}}" id="" required>
                        </div>
                    </div>
                </div>

                <div class="mb-2" style="text-align: center">
                    <button type="button" class="btn btn-secondary"
                        onclick="location.href='{{ route('evento') }}'">Atrás</button>
                    <input type="submit" class="btn btn-primary" value="Guardar">
                </div>
            </form>
        </div>
    </div>
@endsection
