@extends('layout.plantilla')

@section('titulo', 'Editar Proveedor')

@section('h1', 'Editar Registro')

@section('contenido')
<div class="card mb-4">
    <div class="card-body">
        <form method="POST" action="{{route('proveedor.update',$proveedor->idproveedor)}}">
            {{--  metodo put para actualizar el registro --}}
            @method('put')
            @csrf
            {{-- CODIGO --}}
            <div class="form-group col-1" style="padding-top: 10px">
                <label><h6>Codigo:</h6></label>
                <input class="form-control" type="text"  id="idproveedor" name="idproveedor" value="{{$proveedor->idproveedor}}" disabled />
            </div>
            <br>

            {{-- PROVEEDORES --}}
            <div class="form-group col-6">
                <label for=""><h6>Nombre completo:</h6></label>
                <input type="text"  class="form-control input_user @error('nombre') is-invalid @enderror"
                value="{{$proveedor->nombre}}"  id="nombre" name="nombre" >
                @error('nombre')
                <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group col-6">
                <label for=""><h6>Dirección:</h6></label>
                <input type="text"  class="form-control input_user @error('direccion') is-invalid @enderror"
                value="{{$proveedor->direccion}}"  id="direccion" name="direccion" >
                @error('direccion')
                <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group col-6">
                <label for=""><h6>Teléfono:</h6></label>
                <input type="text"  class="form-control input_user @error('telefono') is-invalid @enderror"
                value="{{$proveedor->telefono}}"  id="telefono" name="telefono" >
                @error('telefono')
                <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group col-6">
                <label for=""><h6>Precio de venta:</h6></label>
                <input type="number"  class="form-control input_user @error('precio') is-invalid @enderror"
                value="{{$proveedor->precio}}"  id="precio" name="precio" >
                @error('precio')
                <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>

            <br>
            <div class="col-12">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Actualizar</button>
                <a href="{{route('cancelar-proveedor')}}" class="btn btn-danger"><i class="fas fa-ban"></i>Cancelar</a>
            </div>
            <br>
        </form>
    </div>
</div>
<script src="../../js/modoOscuro.js"></script>
@endsection 
