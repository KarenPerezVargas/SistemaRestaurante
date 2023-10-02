@extends('layouts.recepcionista')
@section('dashName', 'Dashboard')
@section('mainContent')
    <div class="card mb-4">
        <div class="card-header">
            <form class="form-inline my-2" method="get">
                <div class="container-fluid h-100">
                    <div class="row w-100 align-items-center">
                        <div class="col-8">
                            <a href="{{ route('createReserva') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Nuevo Registro</a>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <div class="col-9">
                                    <input class="form-control me-2" name="buscarpor" type="search" placeholder="Buscar por nombre" aria-label="Search" value="{{$buscarpor}}">
                                </div>
                                <div class="col-3">
                                    <button class="btn btn-warning" type="submit">Buscar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="card-body">
            <div id="mensaje">
                @if (session('datos'))
                    <div class="alert alert-warning alert-dismossible fade show mt-3" role="alert">
                        {{ session('datos') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
                <table class="table">
                    <thead class="table-dark">
                    <tr>
                        <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>#</h6></th>
                        <th class="text-xxs mb-0 text-center" scope="col"><h6>Cliente</h6></th>
                        <th class="text-xxs mb-0 text-center" scope="col"><h6>Fecha</h6></th>
                        <th class="text-xxs mb-0 text-center" scope="col"><h6>Hora</h6></th>
                        <th class="text-xxs mb-0 text-center" scope="col"><h6>Número personas</h6></th>
                        <th class="text xxs mb-0 text-center" scope="col"><h6>Área</h6></th>
                        <th class="text-xxs mb-0 text-center" scope="col"><h6>Mesa</h6></th>
                        <th class="text-xxs mb-0 text-center" scope="col"><h6>Estado Reserva</h6></th>
                        <th class="text-xxs mb-0 text-center" scope="col"><h6>Métodos</h6></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if (count($reserva)<=0)
                        <tr>
                            <td colspan="3">No hay registros</td>
                        </tr>
                    @else

                        @foreach ($reserva as $itemreserva)
                        <tr>
                            <td class="text-uppercase text-xxs mb-0 text-center">
                                <p>{{$itemreserva->idreserva}}</p>
                            </td>
                            <td class="text-uppercase text-xxs mb-0 text-center">
                                <p>{{$itemreserva->nombre}}</p>
                            </td>
                            <td class="text-uppercase text-xxs mb-0 text-center">
                                <p>{{$itemreserva->fecha}}</p>
                            </td>
                            <td class="text-uppercase text-xxs mb-0 text-center">
                                <p>{{$itemreserva->hora}}</p>
                            </td>
                            <td class="text-uppercase text-xxs mb-0 text-center">
                                <p>{{$itemreserva->nroPersonas}}</p>
                            </td>
                            <td class="text-uppercase text-xxs mb-0 text-center">
                                <p>{{$itemreserva->area}}</p>
                            </td>
                            <td class="text-uppercase text-xxs mb-0 text-center">
                                <p>{{$itemreserva->mesa}}</p>
                            </td>
                            <td class="text-uppercase text-xxs mb-0 text-center">
                                <p>{{$itemreserva->estadoReserva}}</p>
                            </td>

                            <td class="text-uppercase text-xxs mb-0 text-center">
                                <a href="{{route('reserva.edit',$itemreserva->idreserva)}}" class="btn btn-info btn-sm text-uppercase text-xxs font-weight-bolder"><i class="fas fas-edit"></i>Editar</a>
                                <a href="{{route('reserva.confirmar',$itemreserva->idreserva)}}"class="btn btn-danger btn-sm text-uppercase text-xxs font-weight-bolder"><i class="fas fas-trash"></i>Eliminar</a>
                            </td>
                        </tr>

                        @endforeach
                        @endif
                    </tbody>
                </table>
        </div>
    </div>
    {{$reserva->links()}}
@endsection

{{-- @section('scripts')
    <script>
        setTimeout(function(){
            document.querySelector('#mensaje').remove();
        },2000);
    </script> --}}
