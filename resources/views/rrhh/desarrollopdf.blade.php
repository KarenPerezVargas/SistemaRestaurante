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
    <div alignt="center" class="row gx-lg-5">
        <h1>MiskyChallwa Restaurant</h1>
        <h3>Reporte de Capacitaciones</h3>
        <div class="navbar">
            <div class="container-fluid">
                <h3><i><b>{{$empleado->apellidos}} {{$empleado->nombre}}</b></i></h3>
            </div>
        </div>
        <div class="text-center">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th style="padding-right: 30px; padding-top: 0px">#</th>
                        <th style="padding-right: 30px; padding-top: 0px">Tema</th>
                        <th style="padding-right: 30px; padding-top: 0px">Área</th>
                        <th style="padding-right: 30px; padding-top: 0px">Fecha</th>
                        <th style="padding-right: 30px; padding-top: 0px">Instructor</th>
                        <th style="padding-right: 30px; padding-top: 0px">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $nb=1;
                    @endphp
                    @foreach ($registros as $item)
                        <tr>
                            <td style="padding-right: 30px; padding-top: 0px">{{$nb++}}</td>
                            <td style="padding-right: 30px; padding-top: 0px">{{($capacitaciones->find($item->idCapacitacion))->temaCapacitacion}}</td>
                            <td style="padding-right: 30px; padding-top: 0px">{{($capacitaciones->find($item->idCapacitacion))->areaCapacitacion}}</td>
                            <td style="padding-right: 30px; padding-top: 0px">{{($capacitaciones->find($item->idCapacitacion))->fechaCapacitacion}}</td>
                            @php
                            $idInstructor = ($capacitaciones->find($item->idCapacitacion))->idInstructor;
                            $instructor = $personal->where('idEmpleado', $idInstructor)->first();
                            @endphp
                            <td style="padding-right: 30px; padding-top: 0px">{{ $instructor ? $instructor->nombre : 'No encontrado' }} {{ $instructor ? $instructor->apellidos : 'No encontrado' }}</td>
                            
                            <td style="padding-right: 30px; padding-top: 0px">{{($capacitaciones->find($item->idCapacitacion))->estadoCapacitacion}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>