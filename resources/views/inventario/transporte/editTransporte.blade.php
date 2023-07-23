@extends('layouts.admin')
@section('puntos', '../')
@section('mainContent')
    <form action="{{ route('actualizarTransporte', $id) }}" method="post">
        <h5 class="title" style="font-family:Verdana, Geneva, Tahoma, sans-serif">
            <strong>
                <center>Editar datos del transporte</center>
        </h5>
        @csrf
        <!-- Mover esta etiqueta dentro del formulario -->
        <div class="row m-5">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="pro_nombre" id="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">RUC</label>
                    <input type="text" class="form-control" name="pro_ruc" id="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Código</label>
                    <input type="text" class="form-control" name="pro_codigo" id="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Correo</label>
                    <input type="text" class="form-control" name="pro_correo" id="" required
                        pattern=".+@.+\.(com)">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="" class="form-label">Descripción</label>
                    <input type="text" class="form-control" name="pro_descripcion" id="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Dirección</label>
                    <input type="text" class="form-control" name="pro_direccion" id="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Num. móvil</label>
                    <input type="text" class="form-control" name="pro_movil" id="" required pattern="[0-9]{9}"
                        maxlength="9">
                </div>
                <div>
                    <label for="" class="form-label">Forma de pago</label>
                    <select class="form-select" aria-label="Default select example" name="pro_forma_pago">
                        <option selected>Seleccione</option>
                        <option value="Efectivo">Efectivo</option>
                        <option value="Tarjeta">Tarjeta</option>
                        <option value="Tranferencia">Transferencias</option>
                        <option value="Cheque">Cheque</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="mb-2" style="text-align: center">
            <button type="button" class="btn btn-secondary"
                onclick="location.href='{{ route('transporte') }}'">Atrás</button>
            <input type="submit" class="btn btn-primary" value="Guardar">
        </div>
    </form>
@endsection
