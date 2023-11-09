<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="row gx-lg-5">
        <h1>
            <center>MiskyChallwa Restaurant</center>
        </h1>
        <h3>Reporte de Compras</h3>
        <div class="navbar">
            <div class="container-fluid">
                <h3><i><b></b></i></h3>
            </div>
        </div>
        <div class="text-center">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>RUC</th>
                        <th>Fecha</th>
                        <th>Proveedor</th>
                        <th>Transporte</th>
                        <th>Observaciones</th>
                        <th>Origen</th>
                        <th>Destino</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $nb = 1;
                    @endphp
                    @foreach ($compra as $item)
                        <tr>
                            <td>{{ $nb++ }}</td>
                            <td>{{ $item->ruc }}</td>
                            <td>{{ $item->fecha }}</td>
                            <td>{{ $proveedor->find($item->proveedor_id)->nombre_proveedor }}</td>
                            <td>{{ $transporte->find($item->transporte_id)->trans_codigo }}</td>
                            <td>{{ $item->indicaciones }}</td>
                            <td>{{ $item->origen }}</td>
                            <td>{{ $item->destino }}</td>
                            <td>S/. {{ $item->total }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
