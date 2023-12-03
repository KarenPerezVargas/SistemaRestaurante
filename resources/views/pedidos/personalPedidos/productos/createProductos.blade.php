@extends('layouts.personalPedidos')
@section('mainContent')
<div class="container">
    <div class="row justify-content-center">
        <form action="{{ route('guardarProductos') }}" method="post" class="col-md-8">
            <h5 class="title" style="font-family: Verdana, Geneva, Tahoma, sans-serif">
                <strong>
                    <center>Registro del producto</center>
                </strong>
            </h5>
            @csrf
            <div class="row m-8">
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="" class="form-label">Código</label>
                        <input type="text" class="form-control" name="producto_codigo" id="" required>
                    </div>
                    <div class="mb-4">
                        <label for="" class="form-label">Producto</label>
                        <input type="text" class="form-control" name="producto_nombre" id="" required>
                    </div>
                    <div class="mb-4">
                        <label for="" class="form-label">Categoría</label>
                        <select class="form-select" aria-label="Default select example" name="producto_categoria" required>
                            <option value="Entrada">Entrada</option>
                            <option value="Plato principal">Plato principal</option>
                            <option value="Postre">Postre</option>
                            <option value="Bebida">Bebida</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                        <div class="mb-4">
                            <label for="" class="form-label">Precio (S/.)</label>
                            <input type="number" step="any" class="form-control" name="producto_precio" id="" required>
                        </div>
                        <div class="mb-4">
                            <label for="" class="form-label">Descripción</label>
                            <input type="text" class="form-control" name="descripcion" id="" required>
                        </div>
                        <div class="mb-4">
                            <label for="producto_foto" class="form-label">Seleccionar imagen:</label>
                            <input type="file" name="producto_foto" id="producto_foto">
                        </div>
                    </div>
            </div>

            <div class="mb-2" style="text-align: center">
                <button type="button" class="btn btn-secondary" onclick="location.href='{{ route('productos') }}'">Atrás</button>
                <input type="submit" class="btn btn-primary" value="Guardar">
            </div>
        </form>
    </div>
</div>
@endsection
