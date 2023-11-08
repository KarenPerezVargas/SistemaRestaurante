@extends('layouts.personalPedidos')

@section('puntos', '../../')

@section('dashName', 'Confirmar Eliminación')

@section('mainContent')

<div class="card-header">
    <label for="" class="form-label"><b>ID</b></label>
    <input class="form-control " type="text" id="id" name="id"
    value="{{ $pedido->idPedido}}" disabled readonly/>
</div>
<div class="card-body row g-3">
    <div class="col-md-12">
        <div class="row">
            {{-- PEDIDOS --}}
            <div class="col-12 col-md-5">
                <div class="col">
                    <label for=""><h6>Descipción:</h6></label>
                    <input class="form-control" type="text"  id="id" name="id" value="{{$pedido->descripcion}}" disabled />
                </div>
                <br>
                <div class="col">
                    <label for=""><h6>Tipo de pedido:</h6></label>
                    <input class="form-control" type="text"  id="id" name="id" value="{{$pedido->tipo}}" disabled />
                </div>
                <br>
            </div>
        </div>
        <br>
        <form method="POST" action="{{route('pedido.destroy',$pedido->idPedido)}}">
            @method('DELETE')
            @csrf
            <div class="col-12">
                <button type="submit" class="btn btn-danger"><i class="fas fa-check-square"></i> Si</button>
                <a href="{{route('cancelar-pedido')}}" class="btn btn-primary"><i class="fas fa-times-circle"></i> NO</a>
            </div>
            <br>
        </form>
    </div>
</div>
@endsection