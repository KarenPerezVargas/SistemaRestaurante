@extends('layouts.gerentealmacen')
@section('puntos', '../')
@section('mainContent')
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{ route('actualizarHorario', $id) }}" method="post" class="col-md-8">
                <h5 class="title" style="font-family: Verdana, Geneva, Tahoma, sans-serif">
                    <strong>
                        <center>Editar horario del transporte</center>
                    </strong>
                </h5>
                @csrf

                <div>
                    <div class="row m-5">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="" class="form-label">Fecha</label>
                                <input type="date" class="form-control" name="fecha" value="{{ $horario->fecha }}"
                                    id="" required>
                            </div>
                            <div class="mb-4">
                                <label for="" class="form-label">Hora de salida</label>
                                <input type="time" class="form-control" name="hora_salida"
                                    value="{{ $horario->hora_salida }}" id="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <label for="" class="form-label">Cod.</label>
                                <select class="form-select mb-4" aria-label="Default select example" name="transporte_id"
                                    required>
                                    <option value="">Seleccione un transporte</option>
                                    @foreach ($transporte as $transportes)
                                        <option value="{{ $transportes->id }}"
                                            @if ($transportes->id == $horario->transporte_id) selected @endif>
                                            {{ $transportes->trans_codigo }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="" class="form-label">Hora de llegada</label>
                                <input type="time" class="form-control" name="hora_esperada"
                                    value="{{ $horario->hora_esperada }}" id="" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3" style="text-align: center">
                    <button type="button" class="btn btn-secondary"
                        onclick="location.href='{{ route('horario') }}'">Atrás</button>
                    <input type="submit" class="btn btn-primary" value="Guardar">
                </div>
            </form>
        </div>
    </div>
@endsection
