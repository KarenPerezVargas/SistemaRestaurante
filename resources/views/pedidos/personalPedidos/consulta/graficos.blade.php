@extends('layouts.personalPedidos')

@section('mainContent')
    <div align="center">
        <div class="row justify-content-center">
            <div class="col-md-5 col-12">
                <H4>CANTIDAD DE PEDIDOS POR NOMBRE DE CLIENTE</H4>
                <canvas id="barras"></canvas>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gráfica Estadística</title>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>
    
    <body>

        <div align="center">
            <div class="row">
                <div style="width:50%;" class="col-6">
                    <canvas id="barras"></canvas>
                </div>
                <div style="width:50%;" class="col-6">
                    <canvas id="lineas"></canvas>
                </div>
            </div>
            <div class="col-1 col-md-none"></div>
            <div class="col-md-5 col-12">
                <H4>CANTIDAD DE PEDIDOS POR NOMBRE DE PEDIDO</H4>
                <canvas id="lineas"></canvas>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <H4>PORCENTAJE DE PEDIDOS PAGADO Y NO PAGADOS</H4>
            <div class="col-md-3 col-7">
                <canvas id="circular"></canvas>
            </div>
        </div>
    </div>

    <!----------------------------GRAFICO DE BARRAS------------------------------->
    <script>
        var ctx = document.getElementById('barras').getContext('2d');

        // Utiliza los datos enviados desde el controlador
        var clientes = {!! json_encode($cliente->pluck('nombres')) !!};
        var pedidos = {!! json_encode($pedido->pluck('cantidad')) !!};

        // Genera colores aleatorios para cada barra
        var colores = clientes.map(() => {
            return 'rgba(' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ', 0.2)';
        });

        var datos = {
            labels: clientes,
            datasets: [{
                label: 'Cantidad de Pedidos',
                data: pedidos,
                backgroundColor: colores,
                borderColor: colores.map(color => color.replace('0.2', '1')),
                borderWidth: 1
            }]
        };

        var barras = new Chart(ctx, {
            type: 'bar',
            data: datos,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
            }
        });
        // ctx.canvas.style.backgroundColor = 'rgb(197, 194, 193)';
    </script>


    <!-- --------------------------GRAFICO DE LINEAS------------------------------>

    <script>
        var ctx = document.getElementById('lineas').getContext('2d');

        // Utiliza los datos enviados desde el controlador
        var pedidos = {!! json_encode($pedido->pluck('descripcion')) !!};
        var cantidad = {!! json_encode($pedido->pluck('cantidad')) !!};

        // Genera un array de colores para cada dato
        var colores = cantidad.map(function() {
            return 'rgba(' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ', 0.2)';
        });

        var datos = {
            labels: pedidos,
            datasets: [{
                label: 'Cantidad de Pedidos',
                data: cantidad,
                backgroundColor: colores,
                borderColor: colores.map(color => color.replace('0.2', '1')),
                borderWidth: 1,
                fill: true
            }]
        };

        var lineas = new Chart(ctx, {
            type: 'line',
            data: datos,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    <!-- --------------------------GRAFICO CIRCULAR------------------------------>

    <script>
        var ctx = document.getElementById('circular').getContext('2d');

        // Utiliza los datos enviados desde el controlador
        var pedidosPagados = {!! json_encode($pedido->where('estado', '2')->sum('cantidad')) !!};
        var pedidosNoPagados = {!! json_encode($pedido->where('estado', '1')->sum('cantidad')) !!};
        var totalPedidos = pedidosPagados + pedidosNoPagados;
        var porcentajePagados = ((pedidosPagados / totalPedidos) * 100).toFixed(2);
        var porcentajeNoPagados = ((pedidosNoPagados / totalPedidos) * 100).toFixed(2);

        var datos = {
        labels: ['Pagados', ['No Pagados']],
        datasets: [{
            label: 'Porcentaje de pedidos',
            data: [porcentajePagados, porcentajeNoPagados],
            backgroundColor: ['rgba(75, 192, 192, 0.2)','rgba(245, 59, 19, 0.2)'],
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
        };

        var circular = new Chart(ctx, {
        type: 'pie',
        data: datos,
        options: {
            scales: {
            y: {
                beginAtZero: true
            }
            }
        }
        });
    </script>
@endsection

@section('scripts')
    <script>
        setTimeout(function(){
            document.querySelector('#mensaje').remove();
        },2000);
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.min.js" integrity="sha512-7U4rRB8aGAHGVad3u2jiC7GA5/1YhQcQjxKeaVms/bT66i3LVBMRcBI9KwABNWnxOSwulkuSXxZLGuyfvo7V1A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="resources/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>