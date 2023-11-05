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

        <div>
            <div class="row m-5">
                <div class="">
                    <label for="" class="form-label">Nombre de la empresa</label>
                    <input type="text" class="form-control" name="empresa" value="{{$compra->empresa}}" id="" required>
                </div>
            </div>

            <div class="row m-5">
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="" class="form-label">RUC</label>
                        <input type="text" class="form-control" name="ruc" value="{{$compra->ruc}}" id="" required>
                    </div>

                    <div class="mb-4">
                        <label for="" class="form-label">Ciudad/Dirección</label>
                        <input type="text" class="form-control" name="direccion" value="{{$compra->direccion}}" id="" required>
                    </div>
                    <div class="mb-4">
                        <label for="" class="form-label">Total S/.</label>
                        <input type="text" class="form-control" name="total" value="{{$compra->total}}" id="" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="" class="form-label">Fecha</label>
                        <input type="date" class="form-control" name="fecha" value="{{$compra->fecha}}" id="" required>
                    </div>
                    <div class="mb-4">
                        <label for="" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" name="email" id="" value="{{$compra->email}}" required>
                    </div>
                    <div class="mb-4">
                        <label for="" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" name="contacto" id="" value="{{$compra->contacto}}" maxlength="9"
                            required>
                    </div>
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
