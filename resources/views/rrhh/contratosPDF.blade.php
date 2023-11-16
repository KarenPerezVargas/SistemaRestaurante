<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de Empleados.pdf</title>
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        .table-header {
            padding-right: 30px;
            padding-top: 0px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div align="center" class="row gx-lg-5 ">
        <h1>MiskyChallwa Restaurant</h1>
        <h3>Reporte de Contratos</h3>
        <div class="navbar">
            <div class="container-fluid">
                {{-- <h3><i><b>{{$personal->apellidos}} {{$personal->nombre}}</b></i></h3> --}}
            </div>
        </div>
        <div class="text-center">
            <table align="center" class="table">
                <thead class="table-dark">
                    <tr>
                        <th class="table-header">#</th>
                        <th class="table-header">Empleado</th>
                        <th class="table-header">Fecha de Inicio</th>
                        <th class="table-header">Duración en Meses</th>
                        <th class="table-header">Fin de Contrato</th>
                        <th class="table-header">Sueldo</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $nb=1;
                    @endphp
                    @foreach ($contratos as $item)
                    @if ($personal->where('idContrato', $item->idContrato)->isNotEmpty())
                        <tr>
                            <td class="table-header">{{$nb++}}</td>
                            <td class="table-header">{{(($personal->where('idContrato', $item->idContrato))->first())->nombre}} {{(($personal->where('idContrato', $item->idContrato))->first())->apellidos}}</td>
                            <td class="table-header">{{$item->fechaInicio}}</td>
                            <td class="table-header">{{$item->duracionMeses}}</td>
                            <td class="table-header">{{ date('Y-m-d', strtotime("$item->fechaInicio + $item->duracionMeses months")) }}</td>
                            <td class="table-header"><span class="s-soles">S/. </span>{{$item->sueldo}}</td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>