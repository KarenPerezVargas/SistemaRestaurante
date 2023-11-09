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
        <h3 style="margin-top: 4rem">Reporte de Compras</h3>

        <div>
            <div class="">
                <table width="100%" style="margin-top: 3rem">
                    <thead>
                        <tr>

                            <th scope="col" class="py-3 px-6">
                                RUC
                            </th>

                            <th scope="col" class="py-3 px-6">
                                Fecha
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Proveedor
                            </th>

                            <th scope="col" class="py-3 px-6">
                                Transporte
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Observaciones
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Origen
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Destino
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Total
                            </th>
                        </tr>
                    </thead>
                    <tbody class="">
                        @php
                            $nb = 1;
                        @endphp
                        @foreach ($compra as $item)
                            <tr>
                                <td class="py-3 px-6">
                                    {{ $item->ruc }}
                                </td>
                                <th class="py-4 px-6">
                                    {{ $item->fecha }}
                                </th>
                                <td class="py-4 px-6">
                                    {{ $proveedor->find($item->proveedor_id)->nombre_proveedor }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $transporte->find($item->transporte_id)->trans_codigo }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $item->indicaciones }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $item->origen }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $item->destino }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $item->total }}
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
