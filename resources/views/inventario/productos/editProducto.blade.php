@extends('layouts.personalalmacen')
@section('puntos', '../')
@section('mainContent')
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{ route('actualizarProducto', $id) }}" method="post" class="col-md-8">
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
                            <input type="text" class="form-control" name="producto_codigo"
                                value="{{ $producto->producto_codigo }}" id="" required>
                        </div>
                        <div class="mb-4">
                            <label for="" class="form-label">Categoría</label>
                            <div class="mb-4">
                                <select class="form-select" aria-label="Default select example" name="producto_categoria" value="{{$producto->producto_categoria}}"
                                    required>
                                    <option value="Bebidas gaseosas">Bebidas gaseosas</option>
                                    <option value="Bebidas lácteas">Bebidas lácteas"</option>
                                    <option value="Bebidas alcoholicas">Bebidas energizantes</option>
                                    <option value="Vegetales y hortalizas">Vegetales y hortalizas</option>
                                    <option value="Frutas y verduras">Frutas</option>
                                    <option value="Tubérculos">Tubérculos</option>
                                    <option value="Carnes">Carnes</option>
                                    <option value="Pescados y mariscos">Pescados y mariscos</option>
                                    <option value="Cereales">Cereales</option>
                                    <option value="Granos">Granos</option>
                                    <option value="Lácteos">Lácteos</option>
                                    <option value="Limpieza e higiene">Limpieza</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="producto_nombre"
                                value="{{ $producto->producto_nombre }}" id="" required>
                        </div>
                    </div>
                </div>

                <div class="mb-2" style="text-align: center">
                    <button type="button" class="btn btn-secondary"
                        onclick="location.href='{{ route('producto') }}'">Atrás</button>
                    <input type="submit" class="btn btn-primary" value="Guardar">
                </div>
            </form>
        </div>
    </div>
@endsection
