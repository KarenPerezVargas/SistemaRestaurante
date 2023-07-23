@extends('layouts.bebidas')

@section('dashName', 'Confirmar Eliminación')

@section('mainContent')

<div class="card-header">
    <label for="" class="form-label"><b>ID</b></label>
    <input class="form-control " type="text" id="id" name="id"
    value="{{ $bebida->idbebida}}" disabled readonly/>
</div>
<div class="card-body row g-3">
    <div class="col-md-12">
        <div class="row">
            {{-- BEBIDAS --}}
            <div class="col-12 col-md-5">
                <div class="col">
                    <label for=""><h6>Descipción:</h6></label>
                    <input class="form-control" type="text"  id="id" name="id" value="{{$bebida->descripcion}}" disabled />
                </div>
                <br>
                <div class="col">
                    <label for=""><h6>Tipo de bebida:</h6></label>
                    <input class="form-control" type="text"  id="id" name="id" value="{{$bebida->tipo}}" disabled />
                </div>
                <br>
            </div>
        </div>
        <br>
        <form method="POST" action="{{route(' bebida.destroy',$bebida->idbebida)}}">
            @method('DELETE')
            @csrf
            <div class="col-12">
                <button type="submit" class="btn btn-danger"><i class="fas fa-check-square"></i> Si</button>
                <a href="{{route('cancelar-bebida')}}" class="btn btn-primary"><i class="fas fa-times-circle"></i> NO</a>
            </div>
            <br>
        </form>
    </div>
</div>
    <script src="../../js/modoOscuro.js"></script>
@endsection