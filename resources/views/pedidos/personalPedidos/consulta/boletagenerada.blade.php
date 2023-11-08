@extends('layouts.personalPedidos')

@section('puntos', '../../')

@section('titulo', 'BOLETAS')

@section('mainContent')
<head>
    <title>Boleta de Pago</title>
</head>
<body> 
    
    <h1>Boleta de Pago</h1>
    <p>Fecha del pedido: {{$pedido->fecha}}</p>
    <p>Número de pedido: {{$pedido->idPedido}}</p>
    
    <p>Cliente: {{$pedido->idCliente->nombres}}</p>
    <!-- Otros detalles del pedido -->

    <h2>Detalle del Pedido</h2>
    <table>
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
                    <td>{{ $pedido->cantidad }}</td>
                    <td>{{ $pedido->precio }}</td>
                    <td>{{ $pedido->cantidad * $pedido->precio }}</td>
                </tr>
        </tbody>
    </table>

        <h3>Total a Pagar: {{ $pedido->cantidad * $pedido->precio }}</h3>

    <a href="{{ route('consulta.boletas') }}"><i class="fas fas-trash"></i>Regresar</a>

    </form>
</body>
</html>
    
@endsection

@section('scripts')
    <script>
        setTimeout(function(){
            document.querySelector('#mensaje').remove();
        },2000);
    </script>