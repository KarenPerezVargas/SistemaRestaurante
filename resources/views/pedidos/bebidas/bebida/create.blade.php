@extends('layouts.bebidas')
@section('dashName', 'Registar Bebida')
@section('mainContent')
    <div class="card mb-4">
        <div class="card-body">
            <form method="POST" action="{{route('bebida.store')}}" class="row g-3">
                @csrf

                <label for=""><h6 style="color: rgb(52, 94, 52)">-------------- DATOS BEBIDA --------------</h6></label>

                <div class="row">
                {{-- BEBIDAS --}}
                    <div class="col-12 col-md-7">
                        <div class="col">
                            <div class="form-group" style="padding-top: 10px">
                                <label for=""><h6>Descipción:</h6></label>
                                <input type="text"  class="form-control input_user @error('descripcion') is-invalid @enderror"
                                placeholder="Nombre de producto"  id="descripcion" name="descripcion" >
                                @error('descripcion')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-7 col-md-6">
                        <div class="col-7">
                            <div class="form-group" style="padding-top: 10px">
                                <label for=""><h6>Precio:</h6></label>
                                <input type="decimal"  class="form-control input_user @error('precios') is-invalid @enderror"
                                placeholder="Costo"  id="precio" name="precio" >
                                @error('precio')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-7 col-md-6">
                        <div class="col-5">
                            <div class="form-group" style="padding-top: 10px">
                                <label for=""><h6>Cantidad:</h6></label>
                                <input type="number"  class="form-control input_user @error('cantidad') is-invalid @enderror"
                                placeholder="Cantidad"  id="cantidad" name="cantidad" >
                                @error('cantidad')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-12 col-md-7">
                        <div class="col-4">
                            <div class="form-group" style="padding-top: 10px">
                                <label for=""><h6>Tipo de bebida:</h6></label>
                                <input type="text"  class="form-control input_user @error('precios') is-invalid @enderror"
                                placeholder="Tipo"  id="tipo" name="tipo" >
                                @error('tipo')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                    </div>
                </div>

                <br>
                {{-- Botones --}}
                <div class="col-12">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Grabar</button>
                    <a href="{{route('cancelar-bebida')}}" class="btn btn-danger"><i class="fas fa-ban"></i>Cancelar</a>
                </div>
                <br>
            </form>
        </div>
    </div>
    <script src="../js/modoOscuro.js"></script>
@endsection
