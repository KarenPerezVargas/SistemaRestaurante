@extends('layouts.gerentealmacen')
@section('puntos', '../')
@section('mainContent')
    <form action="{{ route('actualizarTransporte', $id) }}" method="post">
        <h5 class="title" style="font-family:Verdana, Geneva, Tahoma, sans-serif">
            <strong>
                <center>Editar datos del transporte</center>
        </h5>
        @csrf
        <!-- Mover esta etiqueta dentro del formulario -->

        <div class="row m-5">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="" class="form-label">Código</label>
                    <input type="text" class="form-control" name="trans_codigo" id="" value="{{$transporte->trans_codigo}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Descripción</label>
                    <input type="text" class="form-control" name="trans_descripcion" id="" value="{{$transporte->trans_descripcion}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Capacidad</label>
                    <input type="text" class="form-control" name="trans_capacidad" id="" value="{{$transporte->trans_capacidad}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Conductor</label>
                    <input type="text" class="form-control" name="trans_conductor" id="" value="{{$transporte->trans_conductor}}">
                </div>
            </div>
        </div>
        <div class="mb-2" style="text-align: center">
            <button type="button" class="btn btn-secondary"
                onclick="location.href='{{ route('transporte') }}'">Atrás</button>
            <input type="submit" class="btn btn-primary" value="Guardar">
        </div>
    </form>
@endsection
