@extends('layout.plantilla')

@section('titulo', 'Confirmar Eliminación')

@section('h1', '¿Desea eliminar Registro?')

@section('contenido')

<div class="card-header">
    <label for="" class="form-label"><b>ID</b></label>
    <input class="form-control " type="text" id="id" name="id"
    value="{{ $proveedor->idproveedor}}" disabled readonly/>
</div>
<div class="card-body row g-3">
    <div class="col-md-12">
        <div class="row">
            {{-- PROVEEDORES --}}
            <div class="col-12 col-md-5">
                <div class="col">
                    <label for=""><h6>Nombre completo:</h6></label>
                    <input class="form-control" type="text"  id="id" name="id" value="{{$proveedor->nombre}}" disabled />
                </div>
                <br>
                <div class="col">
                    <label for=""><h6>Precio de venta:</h6></label>
                    <input class="form-control" type="number"  id="id" name="id" value="{{$proveedor->precio}}" disabled />
                </div>
                <br>
            </div>
        </div>
        <br>
        <form method="POST" action="{{route('proveedor.destroy',$proveedor->idproveedor)}}">
            @method('DELETE')
            @csrf
            <div class="col-12">
                <button type="submit" class="btn btn-danger"><i class="fas fa-check-square"></i> Si</button>
                <a href="{{route('cancelar-proveedor')}}" class="btn btn-primary"><i class="fas fa-times-circle"></i> NO</a>
            </div>
            <br>
        </form>
    </div>
</div>
    <script src="../../js/modoOscuro.js"></script>
@endsection