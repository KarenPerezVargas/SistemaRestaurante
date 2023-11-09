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
        <h2 style="margin-top: 2rem">
            <center>Subsistema inventario</center>
        </h2>
        <h3 style="margin-top: 4rem">Reporte de Proveedores</h3>
        <div>
            <div class="">
                <table width="100%" style="margin-top: 3rem">
                    <thead>
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                #
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Codigo
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Nombre
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Ciudad
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Dirección
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Email
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Telefono
                            </th>
                        </tr>
                    </thead>
                    <tbody class="">
                        @php
                            $nb = 1;
                        @endphp
                        @foreach ($proveedor as $item)
                        <tr>
                            <td class="py-3 px-6">
                                {{$item->id}}
                            </td>
                            <td class="py-3 px-6">
                                {{$item->codigo_proveedor}}
                            </td>
                            <th class="py-4 px-6">
                                {{$item->nombre_proveedor}}
                            </th>
                            <td class="py-4 px-6">
                                {{$item->ciudad_proveedor}}
                            </td>
                            <td class="py-4 px-6">
                                {{$item->direccion_proveedor}}
                            </td>
                            <td class="py-4 px-6">
                                {{$item->email_proveedor}}
                            </td>
                            <td class="py-4 px-6">
                                {{$item->telefono_proveedor}}
                            </td>
                        </tr>
                        <tr class="">
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>
</html>
