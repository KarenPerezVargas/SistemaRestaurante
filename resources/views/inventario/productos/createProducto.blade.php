@extends('layouts.personalalmacen')
@section('mainContent')
<div class="container">
    <div class="row justify-content-center">
        <form action="{{ route('guardarProducto') }}" method="post" class="col-md-8">
            <h5 class="title" style="font-family: Verdana, Geneva, Tahoma, sans-serif">
                <strong>
                    <center>Registro del producto</center>
                </strong>
            </h5>
            @csrf
            <div class="row m-5">
                <div class="col-md-12">
                    <div class="mb-4">
                        <label for="" class="form-label">Código</label>
                        <input type="text" class="form-control" name="producto_codigo" id="" required>
                    </div>
                    <div class="mb-4">
                        <label for="" class="form-label">Categoría</label>
                        <input type="text" class="form-control" name="producto_categoria" id="" required>
                    </div>
                    <div class="mb-4">
                        <label for="" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="producto_nombre" id="" required>
                    </div>
                </div>
            </div>

            <div class="mb-2" style="text-align: center">
                <button type="button" class="btn btn-secondary" onclick="location.href='{{ route('producto') }}'">Atrás</button>
                <input type="submit" class="btn btn-primary" value="Guardar">
            </div>
        </form>
    </div>
</div>
@endsection
