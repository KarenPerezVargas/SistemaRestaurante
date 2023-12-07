<!DOCTYPE html>
<html>
<head>
    <title>Boleta Electrónica</title>
    <style>
        body {
            font-family: "Courier New", Courier, monospace;
            margin: -20px 0;
            padding:0px 120px;
            font-size: 0.8em;
        }

        .fondo{
            background: #f2f1f1;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo {
            width: 150px; /* Ajusta el tamaño según tu logo */
            height: auto;
            background-image: url('../resources/img/logo.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            border: none;
        }

        th, td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
            border: none;
        }

        .linea-down {
            border-bottom: 1px solid #000000;
        }

        .linea-top {
            border-top: 1px solid #000000;
        }

        .titulo {
            font-weight: bold;
            font-size: 1.4em;
        }

        .derecha{
            text-align: right;
        }

        .negrita{
            font-weight: bold;
        }

        .interlineado{
            margin-bottom: -10px;margin-bottom: -10px;
        }

        .qr-code {
            text-align: center;
            margin-top: 20px;
        }
        .qr-code img {
            max-width: 120px;
        }
        footer {
            margin-top: 20px;
            text-align: center;
            padding-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="fondo">
        <div class="header">
            <h1 class="interlineado">Restaurante</h1>
            <h2>Miskychallwa</h2>
            {{-- <img src="../resources/img/logo.png" class="logo" alt="Logo del restaurante"> --}}
            <p class="negrita interlineado">R.U.C: 10266950247</p>
            <p class="interlineado">Av. Dos de Mayo 700</p>
            <p class="interlineado">Chepén - La Libertad</p>
            <p class="interlineado">Telf: 123 - 4567</p>
            <p class="interlineado">www.restaurante.com</p>
            <p class="">info@resturante.com</p>

            <p class="titulo interlineado" >Boleta Electrónica</p>
            <P class="negrita">B000{{$venta->id}} - 18842</P>
        </div>

        <table>
            <tr>
                <td>Fecha de emisión</td>
                <td>: {{$fechaHoraGeneracion}}</td>
            </tr>
            <tr>
                <td>Forma de pago</td>
                <td>: Tarjeta Visa</td>
            </tr>
            <tr class="linea-down">
                <td>Atendido por</td>
                <td>: Mario Moises Marin Moncada</td>
            </tr>
            {{-- ----------------------------------------------------------------------- --}}

            <tr>
                <td>DNI</td>
                <td>: {{$venta->cliente->dni}}</td>
            </tr>
            <tr>
                <td>Cliente</td>
                <td>: {{$venta->cliente->nombres}} {{$venta->cliente->apellidos}}</td>
            </tr>
            <tr class="linea-down">
                <td>Dirección</td>
                <td>: Chepén - La Libetad</td>
            </tr>
            {{-- ----------------------------------------------------------------------- --}}
        </table>

        <table>
            <tr>
                <th>Descrip.</th>
                <th>Cant.</th>
                <th>P. Unit.</th>
                <th>Dscto.</th>
                <th>Importe</th>
            </tr>

            @foreach ($venta->productos as $producto)
            <tr class="">

                    <td class="">{{ $producto->producto_nombre }}</td>
                    <td class="derecha">{{ $producto->pivot->cantidad }}</td>
                    <td class="derecha">{{ $producto->pivot->precio_unitario }}</td>
                    <td class="derecha">0.00</td>
                    <td class="derecha">{{ $producto ->pivot->precio_unitario * $producto->pivot->cantidad }}</td>

            </tr>

            @endforeach
            {{-- ----------------------------------------------------------------------- --}}
        </table>

        <table>
            <tr class="linea-top">
                <td>Venta total S/.</td>
                <td class="derecha">{{$venta->total}}</td>
            </tr>
            <tr>
                <td>Descuento S/.</td>
                <td class="derecha">0.00</td>
            </tr>
            <tr>
                <td>Op. gravada S/.</td>
                <td class="derecha">{{$venta->operacion_gravada}}</td>
            </tr>
            <tr>
                <td>I.G.V S/.</td>
                <td class="derecha">{{$venta->igv}}</td>
            </tr>
            <tr>
                <td>Total a pagar S/.</td>
                <td class="derecha">{{$venta->total_pagar}}</td>
            </tr>
            <tr class="linea-down">
                <td>Importe pagado S/.</td>
                <td class="derecha">{{$venta->total_pagar}}</td>
            </tr>
            {{-- <tr class="linea-down">
                <td>Vuelto S/.</td>
                <td class="derecha">{{$venta->vuelto}}</td>
            </tr> --}}
            <!-- Agrega más filas según sea necesario -->
        </table>

        <div class="qr-code">
            <img src="data:image/png;base64,{{ base64_encode($codigoQR) }}" alt="Código QR de la boleta">
        </div>

        <footer>
            ¡Gracias por su elección!
        </footer>
    </div>

</body>
</html>
