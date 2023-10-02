@extends('layouts.gerentealmacen')
@section('puntos', '../')
@section('mainContent')
    <form action="{{ route('actualizarCompra', $id) }}" method="post">
        <h5 class="title" style="font-family:Verdana, Geneva, Tahoma, sans-serif">
            <strong>
                <center>Editar datos de la compra</center>
        </h5>
        @csrf
        <!-- Mover esta etiqueta dentro del formulario -->

        <div class="row m-5">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="" class="form-label">RUC</label>
                    <input type="text" class="form-control" name="ruc" id="" required value="{{$compra->ruc}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Fecha</label>
                    <input type="date" class="form-control" name="fecha" id="" required value="{{$compra->fecha}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Nombre de la empresa</label>
                    <input type="text" class="form-control" name="empresa" id="" required value="{{$compra->empresa}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Ciudad/Dirección</label>
                    <input type="text" class="form-control" name="direccion" id="" required value="{{$compra->direccion}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" name="email" id="" required value="{{$compra->email}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Contacto</label>
                    <input type="text" class="form-control" name="contacto" id="" maxlength="9" required value="{{$compra->contacto}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Total S/.</label>
                    <input type="text" class="form-control" name="total" id="" required value="{{$compra->total}}">
                </div>
            </div>
        </div>
        <div class="mb-2" style="text-align: center">
            <button type="button" class="btn btn-secondary"
                onclick="location.href='{{ route('compra') }}'">Atrás</button>
            <input type="submit" class="btn btn-primary" value="Guardar">
        </div>
    </form>
@endsection
