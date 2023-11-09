<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte</title>
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="row gx-lg-5">
        <h1>
            <center>MiskyChallwa Restaurant</center>
        </h1>
        <h3>Reporte de Pagos de Reservas</h3>
        <div class="navbar">
            <div class="container-fluid">
                <h3><i><b></b></i></h3>
            </div>
        </div>
        <div class="text-center">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>#</h6></th>
                        <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6># reserva</h6></th>
                        <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>cliente</h6></th>
                        <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>metodo pago</h6></th>
                        <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>fecha pago</h6></th>
                        <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>monto</h6></th>
                        <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>vuelto</h6></th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $nb = 1;
                    @endphp
                    @foreach ($pagoReservas as $item)
                        @if ($item->eliminado == 1)
                            <tr>
                                <td class="text-xxs mb-0 text-center">{{$nb++}}</td>
                                <td class="text-xxs mb-0 text-center">{{$item->reserva_id}}</td>
                                {{-- Aqui va el cliente --}}
                                <td class="text-xxs mb-0 text-center">{{$item->reserva->cliente->nombres}} {{$item->reserva->cliente->apellidos}}</td>
                                <td class="text-xxs mb-0 text-center">{{$item->metodo_pago}}</td>
                                <td class="text-xxs mb-0 text-center">{{$item->fecha_pago}}</td>
                                <td class="text-xxs mb-0 text-center">{{$item->monto}}</td>
                                <td class="text-xxs mb-0 text-center">{{$item->vuelto}}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
