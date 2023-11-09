<body style="margin: 0px 0px 50px 0px"> 
    <div style="padding-left: 40px;  border: 1px solid #000">
        <h2 style="text-align: center;">RESTAURANTE MISKYCHALLWA</h2>
        <p style="text-align: center;">Av Tomas Valle 3531, Callao 07036, Lima, Lima Region 07036</p>
        <h3 style="text-align: center;">Boleta de Pago</h3>
        <p style="text-align: right; padding-right: 30px;">Fecha del pedido: {{$pedido->fecha}}</p>
        <p>Número de pedido: {{$pedido->idPedido}}</p>
        
        <h4>Datos de Cliente</h4>
        <p>Nombres: {{$cliente->nombres}} {{$cliente->apellidos}}</p>
        <p>DNI: {{$cliente->dni}}</p>
        <p>Teléfono: {{$cliente->telefono}}</p>
        <!-- Otros detalles del pedido -->

        <h3>Detalle del Pedido</h3>
        <table style="border-collapse: separate; border-spacing: 15px;">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{ $pedido->descripcion }}</td>
                        <td style="text-align: right;">{{ $pedido->cantidad }}</td>
                        <td style="text-align: right;">{{ $pedido->precio }}</td>
                        <td style="text-align: right;">S/.{{ $pedido->cantidad * $pedido->precio }}.00</td>
                    </tr>
            </tbody>
        </table>
            <h3 style="text-align: right; padding-right: 30px;">Total a Pagar: S/.{{ $pedido->cantidad * $pedido->precio }}.00</h3>
            <h3 style="text-align: right; padding-right: 30px;">Vuelto: S/.{{ $pedido->cantidad * $pedido->precio - $pedido->cantidad * $pedido->precio }}.00</h3>
        </form>
        <p style="text-align: center;">¡Gracias por su compra, vuelva pronto!</p>
    </div>

</body>
</html>