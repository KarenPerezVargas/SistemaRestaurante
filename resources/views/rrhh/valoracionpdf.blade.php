<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="row gx-lg-5">
        <h1><center>MiskyChallwa Restaurant</center></h1>
        <h3>Reporte de Evaluaciones</h3>
        <div class="navbar">
            <div class="container-fluid">
                <h3><i><b>{{$empleado->apellidos}} {{$empleado->nombre}}</b></i></h3>
            </div>
        </div>
        <div class="text-center">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Asunto</th>
                        <th>Área</th>
                        <th>Fecha</th>
                        <th>Calificacion</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $nb=1;
                    @endphp
                    @foreach ($registros as $item)
                        <tr>
                            <td>{{$nb++}}</td>
                            <td>{{($evaluaciones->find($item->ideval))->asuntoEvaluacion}}</td>
                            <td>{{($evaluaciones->find($item->ideval))->areaEvaluacion}}</td>
                            <td>{{($evaluaciones->find($item->ideval))->fechaEvaluacion}}</td>
                            <td>{{$item->calificacion}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>