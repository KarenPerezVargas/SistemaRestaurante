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
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="" class="form-label">RUC</label>
                        <input type="text" class="form-control" name="ruc" value="{{$compra->ruc}}" id="" required>
                    </div>
                    <div>
                        <select class="form-select mb-4" aria-label="Default select example" name="proveedor_id" required>
                            <option value="">Seleccione un proveedor</option>
                            @foreach ($proveedor as $proveedor)
                                <option value="{{ $proveedor->id }}" @if ($proveedor->id == $compra->proveedor_id) selected @endif>{{ $proveedor->nombre_proveedor }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="" class="form-label">Origen</label>
                        <input type="text" class="form-control" name="origen" id="" value="{{$compra->origen}}" required>
                    </div>
                    <div class="mb-4">
                        <label for="" class="form-label">Observaciones</label>
                        <input type="text" class="form-control" name="indicaciones" value="{{$compra->indicaciones}}" id="" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="" class="form-label">Fecha</label>
                        <input type="date" class="form-control" name="fecha" value="{{$compra->fecha}}" id="" required>
                    </div>
                    <div>
                        <select class="form-select mb-4" aria-label="Default select example" name="transporte_id" required>
                            <option value="">Seleccione un transporte</option>
                            @foreach ($transporte as $transportes)
                            <option value="{{ $transportes->id }}" @if ($transportes->id == $compra->transporte_id) selected @endif>{{ $transportes->trans_codigo }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="" class="form-label">Destino</label>
                        <input type="text" class="form-control" name="destino" value="{{$compra->destino}}" id="" required>
                    </div>
                    <div class="mb-4">
                        <label for="" class="form-label">Total S/.</label>
                        <input type="text" class="form-control" name="total" value="{{$compra->total}}" id="" required>
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
