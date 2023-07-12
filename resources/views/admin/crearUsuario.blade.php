@extends('layouts.admin')
@section('mainContent')
    <form action="{{route('registrar')}}" method="post">
        @csrf
        <h5 ><center>Creacion de Nuevo Usuario</center></h5>
        <div class="mb-3">
            <label for="" class="form-label">Nombre Completo</label>
            <input type="text" class="form-control" name="name" id="" required="required">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombre de Usuario</label>
            <input type="text" class="form-control" name="username" id="" required="required">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Correo Electronico</label>
            <input type="email" class="form-control" name="email" id="" required="required">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="password" id="" required="required">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Confirmar Contraseña</label>
            <input type="password" class="form-control" name="password_confirmation" id="" required="required">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Rol</label>
            <select class="form-select" name="idRole" aria-label="Default select example">
                @foreach ($roles as $item)
                    <option value="{{$item->idRole}}">{{$item->nmRole}}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Guardar">
        <button type="button" class="btn btn-secondary" onclick="location.href='{{route('usuarios')}}'">Atras</button>
    </form>
@endsection