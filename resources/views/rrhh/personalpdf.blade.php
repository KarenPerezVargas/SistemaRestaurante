<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de Empleados.pdf</title>
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div align="center" class="row gx-lg-5 ">
        <h1>MiskyChallwa Restaurant</h1>
        <h3>Reporte de Empleados</h3>
        <div class="navbar">
            <div class="container-fluid">
                {{-- <h3><i><b>{{$personal->apellidos}} {{$personal->nombre}}</b></i></h3> --}}
            </div>
        </div>
        <div class="text-center">
            <table align="center" class="table">
                <thead class="table-dark">
                    <tr>
                        <th style="padding-right: 30px; padding-top: 0px">#</th>
                        <th style="padding-right: 30px; padding-top: 0px">Apellidos</th>
                        <th style="padding-right: 30px; padding-top: 0px">Nombre</th>
                        <th style="padding-right: 30px; padding-top: 0px">DNI</th>
                        <th style="padding-right: 30px; padding-top: 0px">Telefono</th>
                        <th style="padding-right: 30px; padding-top: 0px">Rol</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $nb=1;
                    @endphp
                    @foreach ($personal as $item)
                        <tr>
                            <td style="padding-right: 30px; padding-top: 0px">{{$nb++}}</td>
                            <td style="padding-right: 30px; padding-top: 0px">{{$item->nombre}}</td>
                            <td style="padding-right: 30px; padding-top: 0px">{{$item->apellidos}}</td>
                            <td style="padding-right: 30px; padding-top: 0px">{{$item->DNI}}</td>
                            <td style="padding-right: 30px; padding-top: 0px">{{$item->telefono}}</td>
                            <td style="padding-right: 30px; padding-top: 0px">{{($roles->find(($contratos->find($item->idContrato))->idRole))->nmRole}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>