@extends('layouts.repartidor')
@section('puntos', '../')
@section('mainContent')
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{ route('guardarZona') }}" method="post" class="col-md-8">
                <h5 class="title" style="font-family: Verdana, Geneva, Tahoma, sans-serif">
                    <strong>
                        <center>Registrar datos de la zona</center>
                    </strong>
                </h5>
                @csrf
                <div class="row m-5">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Fecha</label>
                            <input type="date" class="form-control" name="fecha" id="" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Distrito</label>
                            <input type="text" class="form-control" name="distrito" id="" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Provincia</label>
                            <input type="text" class="form-control" name="provincia" id="" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Especificaciones</label>
                            <input type="text" class="form-control" name="especificaciones" id="" required>
                        </div>
                    </div>
                </div>

                <div class="mb-2" style="text-align: center">
                    <button type="button" class="btn btn-secondary"
                        onclick="location.href='{{ route('zona') }}'">Atrás</button>
                    <input type="submit" class="btn btn-primary" value="Guardar">
                </div>
            </form>
        </div>
    </div>
@endsection
