@extends('layouts.coordinador')
@section('puntos', '../')
@section('mainContent')
    <div class="">
        <form action="{{ route('actualizarPrograma', $id) }}" method="post">
            <h5 class="title" style="font-family:Verdana, Geneva, Tahoma, sans-serif">
                <strong>
                    <center>Editar programa</center>
            </h5>
            @csrf
            <!-- Mover esta etiqueta dentro del formulario -->
            <div class="row m-5">
                <div class="mb-3">
                    <label for="" class="form-label">Fecha</label>
                    <input type="date" class="form-control" name="programa_fecha" id="" value="{{ $programa->programa_fecha }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="programa_nombre" id=""
                        value="{{ $programa->programa_nombre }}" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Descripcion</label>
                    <input type="text" class="form-control" name="programa_descripcion" id=""
                        value="{{ $programa->programa_descripcion }}" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Requisitos</label>
                    <input type="text" class="form-control" name="programa_requisitos" id=""
                        value="{{ $programa->programa_requisitos }}" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Recompensa</label>
                    <select class="form-select" aria-label="Default select example" name="programa_recompensas" value="{{ $programa->programa_recompensas }}"  required>
                        <option value="Descuentos en comida">Descuentos en comida</option>
                        <option value="Platos gratis/Mitad de precio">Platos gratis/Mitad de precio</option>
                    </select>
                </div>
            </div>
            <div class="mb-2" style="text-align: center">
                <button type="button" class="btn btn-secondary"
                    onclick="location.href='{{ route('programa') }}'">Atrás</button>
                <input type="submit" class="btn btn-primary" value="Guardar">
            </div>
        </form>
    </div>
@endsection
