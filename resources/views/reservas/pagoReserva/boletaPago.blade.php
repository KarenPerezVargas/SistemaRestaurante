<!DOCTYPE html>
<html>
<head>
    <title>Boleta Electrónica</title>
    <style>
        body {
            font-family: "Courier New", Courier, monospace;
            margin: 0;
            padding:0 150px;
            font-size: 0.8em;
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

        .linea {
            border-bottom: 1px solid #000000;
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
            margin-bottom: -10px;
        }

        .qr-code {
            text-align: center;
            margin-top: 20px;
        }
        .qr-code img {
            max-width: 150px;
        }
        footer {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Restaurante</h1>
        <img src="../resources/img/logo.png" class="logo" alt="Logo del restaurante">
        <p class="negrita interlineado">R.U.C: 10266950247</p>
        <p class="interlineado">Av. Dos de Mayo 700</p>
        <p class="interlineado">Chepén - La Libertad</p>
        <p class="interlineado">Telf: 123 - 4567</p>
        <p class="interlineado">www.restaurante.com</p>
        <p class="">info@resturante.com</p>

        <p class="titulo interlineado" >Boleta Electrónica</p>
        <P class="negrita">B000{{$pagoReserva->id}} - 18842</P>
    </div>

    <table>
        <tr>
            <td>Fecha de emisión</td>
            <td>: {{$fechaHoraGeneracion}}</td>
        </tr>
        <tr>
            <td>Forma de pago</td>
            <td>: {{$pagoReserva->metodo_pago}}</td>
        </tr>
        <tr class="linea">
            <td>Atendido por</td>
            <td>: Edward</td>
        </tr>
        {{-- ----------------------------------------------------------------------- --}}

        <tr>
            <td>DNI</td>
            <td>: {{$pagoReserva->reserva->cliente->dni}}</td>
        </tr>
        <tr>
            <td>Cliente</td>
            <td>: {{$pagoReserva->reserva->cliente->nombres}} {{$pagoReserva->reserva->cliente->apellidos}}</td>
        </tr>
        <tr class="linea">
            <td>Dirección</td>
            <td>: Chepén - La Libetad</td>
        </tr>
        {{-- ----------------------------------------------------------------------- --}}
    </table>

    <table>
        <tr>
            <th>Descripción</th>
            <th>Comensales</th>
            <th>Mesa</th>
            <th>Importe</th>
        </tr>
        <tr class="linea">
            <td>Reserva</td>
            <td>{{$pagoReserva->reserva->num_comensales}}</td>
            <td>{{$pagoReserva->reserva->mesa->nombre}}</td>
            <td>{{$pagoReserva->reserva->precio}}</td>
        </tr>
        {{-- ----------------------------------------------------------------------- --}}
    </table>

    <table>
        <tr>
            <td>Venta total S/.</td>
            <td class="derecha">{{$pagoReserva->reserva->precio}}</td>
        </tr>
        <tr>
            <td>Descuento S/.</td>
            <td class="derecha">0.00</td>
        </tr>
        <tr>
            <td>Op. gravada S/.</td>
            <td class="derecha">{{$pagoReserva->reserva->precio}}</td>
        </tr>
        <tr>
            <td>I.G.V S/.</td>
            <td class="derecha">0.00</td>
        </tr>
        <tr>
            <td>Total a pagar S/.</td>
            <td class="derecha">{{$pagoReserva->reserva->precio}}</td>
        </tr>
        <tr>
            <td>Importe pagado S/.</td>
            <td class="derecha">{{$pagoReserva->monto}}</td>
        </tr>
        <tr class="linea">
            <td>Vuelto S/.</td>
            <td class="derecha">{{$pagoReserva->vuelto}}</td>
        </tr>
        <!-- Agrega más filas según sea necesario -->
    </table>

    <div class="qr-code">
        <img src="data:image/png;base64,{{ base64_encode($codigoQR) }}" alt="Código QR de la boleta">
    </div>

    <footer>
        ¡Gracias por su visita!
    </footer>
</body>
</html>
