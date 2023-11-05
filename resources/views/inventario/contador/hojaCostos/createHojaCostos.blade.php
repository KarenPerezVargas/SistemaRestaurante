@extends('layouts.contador')
@section('mainContent')
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{ route('guardarHojaCostos') }}" method="post" class="col-md-8">
                <h5 class="title" style="font-family: Verdana, Geneva, Tahoma, sans-serif">
                    <strong>
                        <center>Registro de la hoja de costos</center>
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
                            <label for="" class="form-label">Cantidad</label>
                            <input type="text" class="form-control" name="cantidad" id="" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Unidad de medida</label>
                            <input type="text" class="form-control" name="unidad_medida" id="" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Producto</label>
                            <input type="text" class="form-control" name="nombre_producto" id="" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Precio Unitario S/.</label>
                            <input type="text" class="form-control" name="precio_unit" id="" required>
                        </div>
                    </div>
                </div>

                <div class="row m-5">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Mano de obra S/.</label>
                            <input type="text" class="form-control" name="mano_obra" id="" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Costos indirectos S/.</label>
                            <input type="text" class="form-control" name="indirectos" id="" required>
                        </div>
                    </div>
                </div>

                <div class="mb-2" style="text-align: center">
                    <button type="button" class="btn btn-secondary"
                        onclick="location.href='{{ route('hojaCostos') }}'">Atrás</button>
                    <input type="submit" class="btn btn-primary" value="Guardar">
                </div>
            </form>
        </div>
    </div>
@endsection
