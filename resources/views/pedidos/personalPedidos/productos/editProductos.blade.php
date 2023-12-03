@extends('layouts.personalPedidos')
@section('puntos', '../')
@section('mainContent')
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{ route('actualizarProductos', $id) }}" method="post" class="col-md-8">
                <h5 class="title" style="font-family: Verdana, Geneva, Tahoma, sans-serif">
                    <strong>
                        <center>Registro del producto</center>
                    </strong>
                </h5>
                @csrf
                <div class="row m-8">
                    <div class="col-md-6">
                        <div class="mb-2">
                            <label for="" class="form-label">Código</label>
                            <input type="text" class="form-control" name="producto_codigo"
                                value="{{ $productos->producto_codigo }}" id="" required>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Cantidad</label>
                            <input type="number" class="form-control" name="cantidad"
                                value="{{ $productos->cantidad }}" id="" disabled>
                        </div>
                        <div class="mb-4">
                            <label for="" class="form-label">Categoría</label>
                            <div class="mb-4">
                                <select class="form-select" aria-label="Default select example" name="producto_categoria" value="{{$productos->producto_categoria}}"
                                    required>
                                    <option value="Entrada">Entrada</option>
                                    <option value="Plato principal">Plato principal</option>
                                    <option value="Postre">Postre</option>
                                    <option value="Bebida">Bebida</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="producto_nombre"
                                value="{{ $productos->producto_nombre }}" id="" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-4">
                            <label for="" class="form-label">Precio (S/.)</label>
                            <input type="number" step="any" class="form-control" name="producto_precio"
                                value="{{ $productos->producto_precio }}" id="" required>
                        </div>
                        <div class="mb-4">
                            <label for="" class="form-label">Descripción</label>
                            <input type="text" class="form-control" name="descripcion"
                                value="{{ $productos->descripcion }}" id="" required>
                        </div>

                        <div class="mb-4">
                            <label for="producto_foto" class="form-label">Imagen</label> <br>
                            @if ($productos->producto_foto)
                                <img style="width: 50%" src="{{ asset('../productos').'/'.$productos->producto_foto }}" alt="Imagen del Producto">
                                <label for="producto_foto" class="form-label">Seleccionar nueva imagen:</label>
                                <input type="file" name="producto_foto" id="">
                            @else
                                <input type="file" name="producto_foto" id="">
                            @endif
                        </div>
                    </div>
                </div>

                </div>

                <div class="mb-2" style="text-align: center">
                    <button type="button" class="btn btn-secondary"
                        onclick="location.href='{{ route('productosVenta') }}'">Atrás</button>
                    <input type="submit" class="btn btn-primary" value="Guardar">
                </div>
            </form>
        </div>
    </div>
@endsection
