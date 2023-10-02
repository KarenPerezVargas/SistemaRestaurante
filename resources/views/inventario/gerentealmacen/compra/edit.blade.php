@extends('layout.personalPedidos')

@section('titulo', 'Editar Pedido')

@section('h1', 'Editar Registro')

@section('contenido')
<div class="card mb-4">
    <div class="card-body">
        <form method="POST" action="{{route('pedido.update',$pedido->idpedido)}}">
            {{--  metodo put para actualizar el registro --}}
            @method('put')
            @csrf
            {{-- CODIGO --}}
            <div class="form-group col-1" style="padding-top: 10px">
                <label><h6>Codigo:</h6></label>
                <input class="form-control" type="text"  id="idpedido" name="idpedido" value="{{$pedido->idpedido}}" disabled />
            </div>   
            <br>

            {{-- PEDIDOS --}}
            <div class="form-group col-6">
                <label for=""><h6>Descipción:</h6></label>
                <input type="text"  class="form-control input_user @error('descripcion') is-invalid @enderror" 
                value="{{$pedido->descripcion}}"  id="descripcion" name="descripcion" >
                @error('nombre')
                <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            

            <div class="form-group col-6">
                <label for=""><h6>Precio:</h6></label>
                <input type="decimal"  class="form-control input_user @error('precio') is-invalid @enderror" 
                value="{{$pedido->precio}}"  id="precio" name="precio" >
                @error('precio')
                <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group col-6">
                <label for=""><h6>cantidad:</h6></label>
                <input type="number"  class="form-control input_user @error('cantidad') is-invalid @enderror" 
                value="{{$pedido->cantidad}}"  id="cantidad" name="cantidad" >
                @error('cantidad')
                <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group col-6">
                <label for=""><h6>Tipo de pedido:</h6></label>
                <input type="text"  class="form-control input_user @error('tipo') is-invalid @enderror" 
                value="{{$pedido->tipo}}"  id="tipo" name="tipo" >
                @error('tipo')
                <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>

            <br>
            <div class="col-12">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Actualizar</button>
                <a href="{{route('cancelar-pedido')}}" class="btn btn-danger"><i class="fas fa-ban"></i>Cancelar</a>
            </div>
            <br>
        </form>
    </div>
</div>
<script src="../../js/modoOscuro.js"></script>
@endsection 