    @extends('layouts.gerentealmacen')
    @section('mainContent')
        <div class="container">
            <div class="row justify-content-center">
                <form action="{{ route('guardarCompra') }}" method="post" class="col-md-8">
                    <h5 class="title" style="font-family: Verdana, Geneva, Tahoma, sans-serif">
                        <strong>
                            <center>Registro de datos de la orden de compra</center>
                        </strong>
                    </h5>
                    @csrf

                    <div class="row m-5">
                        <div class="">
                            <label for="" class="form-label">Nombre de la empresa</label>
                            <input type="text" class="form-control" name="empresa" id="" required>
                        </div>
                    </div>

                    <div class="row m-5">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="" class="form-label">RUC</label>
                                <input type="text" class="form-control" name="ruc" id="" required>
                            </div>
                            <div class="mb-4">
                                <label for="" class="form-label">Ciudad/Dirección</label>
                                <input type="text" class="form-control" name="direccion" id="" required>
                            </div>
                            <div class="mb-4">
                                <label for="" class="form-label">Total S/.</label>
                                <input type="text" class="form-control" name="total" id="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="" class="form-label">Fecha</label>
                                <input type="date" class="form-control" name="fecha" id="" required>
                            </div>
                            <div class="mb-4">
                                <label for="" class="form-label">Correo electrónico</label>
                                <input type="email" class="form-control" name="email" id="" required>
                            </div>
                            <div class="mb-4">
                                <label for="" class="form-label">Teléfono</label>
                                <input type="text" class="form-control" name="contacto" id="" maxlength="9"
                                    required>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3" style="text-align: center">
                        <button type="button" class="btn btn-secondary"
                            onclick="location.href='{{ route('compra') }}'">Atrás</button>
                        <input type="submit" class="btn btn-primary" value="Guardar">
                    </div>
                </form>
            </div>
        </div>
    @endsection
