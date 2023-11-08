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
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="" class="form-label">RUC</label>
                                <input type="text" class="form-control" name="ruc" id="" required>
                            </div>
                            <div>
                                <select class="form-select mb-4" aria-label="Default select example" name="proveedor_id" required>
                                    <option value="">Seleccione un proveedor</option>
                                    @foreach ($proveedor as $proveedor)
                                        <option value="{{ $proveedor->id }}">{{ $proveedor->nombre_proveedor }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="" class="form-label">Origen</label>
                                <input type="text" class="form-control" name="origen" id="" required>
                            </div>
                            <div class="mb-4">
                                <label for="" class="form-label">Observaciones</label>
                                <input type="text" class="form-control" name="indicaciones" id="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="" class="form-label">Fecha</label>
                                <input type="date" class="form-control" name="fecha" id="" required>
                            </div>
                            <div>
                                <select class="form-select mb-4" aria-label="Default select example" name="transporte_id" required>
                                    <option value="">Seleccione un transporte</option>
                                    @foreach ($transporte as $transportes)
                                        <option value="{{ $transportes->id }}">{{ $transportes->trans_codigo }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="" class="form-label">Destino</label>
                                <input type="text" class="form-control" name="destino" id="" required>
                            </div>
                            <div class="mb-4">
                                <label for="" class="form-label">Total S/.</label>
                                <input type="text" class="form-control" name="total" id="" required>
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
