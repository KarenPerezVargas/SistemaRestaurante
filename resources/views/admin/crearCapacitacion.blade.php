@extends('layouts.admin')
@section('mainContent')
    <form action="{{route('guardarCapacitacion')}}" method="post">
        @csrf
        <h5 ><center>Crear Nueva Capacitacion</center></h5>
        <div class="mb-3">
            <label for="" class="form-label">Tema</label>
            <input type="text" class="form-control" name="temaCapacitacion" id="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Fecha</label>
            <input type="date" class="form-control" name="fechaCapacitacion" id="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Lugar</label>
            <input type="text" class="form-control" name="lugarCapacitacion" id="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Instructor</label>
            <select class="form-select" name="idUser" aria-label="Default select example">
                @foreach ($users as $item)
                    <option value="{{$item->id}}">{{$item->username}}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
@endsection