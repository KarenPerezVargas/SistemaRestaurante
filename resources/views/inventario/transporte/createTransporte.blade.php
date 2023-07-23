@extends('layouts.admin')
@section('mainContent')
<div class="container">
    <div class="row justify-content-center">
        <form action="{{ route('guardarTransporte') }}" method="post" class="col-md-8">
            <h5 class="title" style="font-family: Verdana, Geneva, Tahoma, sans-serif">
                <strong>
                    <center>Registro de datos del transporte</center>
                </strong>
            </h5>
            @csrf
            <div class="col-md-12 m-5">
                <div class="mb-3">
                    <label for="" class="form-label">Código</label>
                    <input type="text" class="form-control" name="trans_codigo" id="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Descripción</label>
                    <input type="text" class="form-control" name="trans_descripcion" id="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Capacidad</label>
                    <input type="text" class="form-control" name="trans_capacidad" id="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Conductor</label>
                    <input type="text" class="form-control" name="trans_conductor" id="">
                </div>
            </div>

            <div class="mb-2" style="text-align: center">
                <button type="button" class="btn btn-secondary" onclick="location.href='{{ route('transporte') }}'">Atrás</button>
                <input type="submit" class="btn btn-primary" value="Guardar">
            </div>
        </form>
    </div>
</div>
@endsection
