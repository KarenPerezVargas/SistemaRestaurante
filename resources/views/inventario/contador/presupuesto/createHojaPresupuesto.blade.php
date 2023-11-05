@extends('layouts.contador')
@section('mainContent')
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{ route('guardarHojaPresupuesto') }}" method="post" class="col-md-8">
                <h5 class="title" style="font-family: Verdana, Geneva, Tahoma, sans-serif">
                    <strong>
                        <center>Registro de la hoja de presupuesto</center>
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
                            <label for="" class="form-label">Descripción</label>
                            <input type="text" class="form-control" name="descripcion" id="" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tiempo de Validez</label>
                            <input type="text" class="form-control" name="tiempo_validez" id="" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Código</label>
                            <input type="text" class="form-control" name="codigo" id="" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Precio S/.</label>
                            <input type="text" class="form-control" name="precio" id="" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">IGV</label>
                            <input type="text" class="form-control" name="igv" id="" required>
                        </div>
                    </div>
                </div>


                <div class="mb-2" style="text-align: center">
                    <button type="button" class="btn btn-secondary"
                        onclick="location.href='{{ route('hojaPresupuesto') }}'">Atrás</button>
                    <input type="submit" class="btn btn-primary" value="Guardar">
                </div>
            </form>
        </div>
    </div>
@endsection
