@extends('layouts.coordinador')
@section('puntos', '../')
@section('mainContent')
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{ route('actualizarPromocion', $id) }}" method="post" class="col-md-8">
                <h5 class="title" style="font-family: Verdana, Geneva, Tahoma, sans-serif">
                    <strong>
                        <center>Editar datos</center>
                    </strong>
                </h5>
                @csrf
                <div class="row m-5">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Código</label>
                            <input type="text" class="form-control" name="codigo_promocion" value="{{$promocion->codigo_promocion}}" id="" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Descripción</label>
                            <input type="text" class="form-control" name="descripcion_promocion" value="{{$promocion->descripcion_promocion}}"  id="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Fecha inicio</label>
                            <input type="date" class="form-control" name="fecha_inicio" value="{{$promocion->fecha_inicio}}" id="" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre_promocion" value="{{$promocion->nombre_promocion}}" id="" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tipo</label>
                            <input type="text" class="form-control" name="tipo_promocion" value="{{$promocion->tipo_promocion}}" id="" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Fecha fin</label>
                            <input type="date" class="form-control" name="fecha_fin" id="" value="{{$promocion->fecha_fin}}" required>
                        </div>
                    </div>
                </div>

                <div class="mb-2" style="text-align: center">
                    <button type="button" class="btn btn-secondary"
                        onclick="location.href='{{ route('promocion') }}'">Atrás</button>
                    <input type="submit" class="btn btn-primary" value="Guardar">
                </div>
            </form>
        </div>
    </div>
@endsection
