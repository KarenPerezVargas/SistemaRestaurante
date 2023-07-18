@extends('layouts.admin')
@section('puntos', '../')
@section('mainContent')
    <form action="{{route('actualizarPermiso', $id)}}" method="post">
        @csrf
        <h5 ><center>Actualizar Permiso</center></h5>
        <div class="mb-3">
            <label for="" class="form-label">Descripcion</label>
            <input type="text" class="form-control" id="" name="nmPermiso" value="{{$permiso->nmPermiso}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Rol</label>
            <select class="form-select" name="idRole" aria-label="Default select example">
                @foreach ($roles as $item)
                    <option value="{{$item->idRole}}" @if ($item->idRole == $permiso->idRole) selected @endif>{{$item->nmRole}}</option>
                @endforeach
            </select>
        </div>
        <button type="button" class="btn btn-secondary" onclick="location.href='{{route('permisos')}}'">Cancelar</button>
        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
@endsection