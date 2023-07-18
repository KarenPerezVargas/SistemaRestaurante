@extends('layouts.admin')
@section('puntos', '../')
@section('mainContent')
    <form action="{{route('guardartres')}}" method="post">
        @csrf
        <h5 ><center>Datos de Usuario</center></h5>
        <div class="mb-3">
            <label for="" class="form-label">Nombre de Usuario</label>
            <input type="text" class="form-control" name="username" id="" value="{{ $username ?? '' }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" name="email" id="" value="{{ $email ?? '' }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="password" id="">
        </div>
        <button type="button" class="btn btn-secondary" onclick="location.href='{{route('personaldos')}}'">Atras</button>
        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
@endsection