@extends('layouts.coordinador')
@section('mainContent')
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{ route('guardarPromocion') }}" method="post" class="col-md-8">
                <h5 class="title" style="font-family: Verdana, Geneva, Tahoma, sans-serif">
                    <strong>
                        <center>Registro de la promoción</center>
                    </strong>
                </h5>
                @csrf
                <div class="row m-5">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Código</label>
                            <input type="text" class="form-control" name="codigo_promocion" id="" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Descripción</label>
                            <input type="text" class="form-control" name="descripcion_promocion" id="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Fecha inicio</label>
                            <input type="date" class="form-control" name="fecha_inicio" id="" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre_promocion" id="" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tipo de promoción</label>
                            <select class="form-select" aria-label="Default select example" name="tipo_promocion"
                                required>
                                <option value="Happy Hour 2x1 en Bebidas">Happy Hour 2x1 en Bebidas</option>
                                <option value="Menú de almuerzo del día">Menú de almuerzo del día</option>
                                <option value="Noche temática de tacos">Noche temática de tacos</option>
                                <option value="Programa de lealtad">Programa de lealtad</option>
                                <option value="Descuento para grupos grandes">Descuento para grupos grandes</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Fecha fin</label>
                            <input type="date" class="form-control" name="fecha_fin" id="" required>
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
