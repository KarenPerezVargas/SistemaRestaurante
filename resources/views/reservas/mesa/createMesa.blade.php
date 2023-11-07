@extends('layouts.recepcionista')
@section('mainContent')
<div class="container">
    <div class="row justify-content-center">
        <form action="{{ route('guardarMesa') }}" method="post" class="col-md-8">
            <h5 class="title" style="font-family: Verdana, Geneva, Tahoma, sans-serif">
                <strong>
                    <center>Registro de datos de la mesa </center>
                </strong>
            </h5>
            @csrf

            <div class="col-md-12 m-5">
                <div class="mb-3">
                    <label for="" class="form-label">Número de Mesa</label>
                    <input type="text" class="form-control" name="numero" id="" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Capacidad</label>
                    <select class="form-select" aria-label="Default select example" name="capacidad" required>
                        <option value="1">1 persona</option>
                        <option value="2">2 personas</option>
                        <option value="3">3 personas</option>
                        <option value="4">4 personas</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Estado</label>
                    <select class="form-select" aria-label="Default select example" name="estado" required>
                        <option value="Disponible">Disponible</option>
                        <option value="Reservada">Reservada</option>
                        <option value="Ocupada">Ocupada</option>
                    </select>
                </div>
            </div>

            <div class="mb-2" style="text-align: center">
                <button type="button" class="btn btn-secondary" onclick="location.href='{{ route('mesa') }}'">Atrás</button>
                <input type="submit" class="btn btn-primary" value="Guardar">
            </div>
        </form>
    </div>
</div>
@endsection
