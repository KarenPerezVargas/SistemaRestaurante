@extends('layouts.admin')
@section('puntos', '../')
@section('mainContent')
    <form action="{{route('actualizarCapacitacion')}}" method="post">
        @csrf
        <div class="mb-3">
            <input type="hidden" name="idCapacitacion" value="{{$capacitacion->idCapacitacion}}">
            <label for="" class="form-label">Tema</label>
            <input type="text" class="form-control" name="temaCapacitacion" id="" value="{{$capacitacion->temaCapacitacion}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Fecha</label>
            <input type="date" class="form-control" name="fechaCapacitacion" id="" value="{{$capacitacion->fechaCapacitacion}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Lugar</label>
            <input type="text" class="form-control" name="lugarCapacitacion" id="" value="{{$capacitacion->lugarCapacitacion}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Instructor</label>
            <select class="form-select" name="idUser" aria-label="Default select example">
                @foreach ($users as $item)
                    @if ($capacitacion->iduser==$item->id)
                        <option value="{{$item->id}}" selected>{{$item->username}}</option>
                    @else
                        <option value="{{$item->id}}">{{$item->username}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Actualizar">
    </form>
@endsection