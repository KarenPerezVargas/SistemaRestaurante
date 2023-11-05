@extends('layouts.personalalmacen')
@section('puntos', '../')
@section('mainContent')
<div class="container">
    <div class="row justify-content-center">
        <form action="{{ route('actualizarKardex', $id) }}" method="post" class="col-md-8">
            <h5 class="title" style="font-family: Verdana, Geneva, Tahoma, sans-serif">
                <strong>
                    <center>Registro del movimiento</center>
                </strong>
            </h5>
            @csrf
            <div class="row m-5">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Fecha</label>
                        <input type="date" class="form-control" name="kardex_fecha" value="{{$kardex->kardex_fecha}}" id="" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Cantidad</label>
                        <input type="text" class="form-control" name="kardex_cantidad" value="{{$kardex->kardex_cantidad}}" id="" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Producto</label>
                        <input type="text" class="form-control" name="kardex_producto" value="{{$kardex->kardex_producto}}" id="" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Precio Unitario</label>
                        <input type="text" class="form-control" name="kardex_precio" value="{{$kardex->kardex_precio}}" id="" required>
                    </div>
                </div>
            </div>
            <div class="row m-5">
                <div>
                    <label for="" class="form-label">Tipo de movimiento</label>
                    <select class="form-select" aria-label="Default select example" name="kardex_movimiento" required>
                        <option value="Entrada">Entrada</option>
                        <option value="Salida">Salida</option>
                    </select>
                </div>
            </div>

            <div class="mb-2" style="text-align: center">
                <button type="button" class="btn btn-secondary" onclick="location.href='{{ route('kardex') }}'">Atrás</button>
                <input type="submit" class="btn btn-primary" value="Guardar">
            </div>
        </form>
    </div>
</div>
@endsection
