@extends('layouts.personalPedidos')

@section('titulo', 'BOLETAS')

@section('mainContent')
<!DOCTYPE html>
<html>
<head>
    <title>Boleta de Pago</title>
</head>
<body>
    @if (count($pedido)<=0)
        <tr>
        <td colspan="3">No hay registros</td>
        </tr>
    @else   
            
        @foreach ($pedido as $pedido)
            <h1>Boleta de Pago</h1>
            <p>Fecha del pedido: {{ $pedido->fecha}}</p>
            <p>Número de pedido: {{ $pedido->idpedido }}</p>
            <p>Cliente: {{ $pedido->idCliente->nombre }}</p>
            <!-- Otros detalles del pedido -->
        @endforeach
    
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
                @foreach($pedido as $pedido)
                    <tr>
                        <td>{{ $pedido->descripcion }}</td>
                        <td>{{ $pedido->cantidad }}</td>
                        <td>{{ $pedido->precio }}</td>
                        <td>{{ $pedido->cantidad * $pedido->precio }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @foreach($pedido as $pedido)
            <h3>Total a Pagar: {{ $pedido->cantidad * $pedido->precio }}</h3>
        @endforeach
        
    @endif  
</body>
</html>
    
@endsection

@section('scripts')
    <script>
        setTimeout(function(){
            document.querySelector('#mensaje').remove();
        },2000);
    </script>