@extends('layouts.personalPedidos')

@section('titulo', 'GRÁFICOS')

@section('mainContent')
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gráfica Estadística</title>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>
    
    <body">

        <div align="center">
            <div class="row">
                <div style="width:50%;" class="col-6">
                    <canvas id="barras"></canvas>
                </div>
                <div style="width:50%;" class="col-6">
                    <canvas id="lineas"></canvas>
                </div>
            </div>
            <br>
            <div style="width:32%;" class="col-12">
                <canvas id="circular"></canvas>
            </div>
        </div>

        <!----------------------------GRAFICO DE BARRAS------------------------------->
        <script>
            var ctx = document.getElementById('barras').getContext('2d');

            // Utiliza los datos enviados desde el controlador
            var clientes = {!! json_encode($cliente->pluck('nombres')) !!};
            var pedidos = {!! json_encode($pedido->pluck('cantidad')) !!};

            var datos = {
            labels: clientes,
            datasets: [{
                label: 'Cantidad de Pedidos',
                data: pedidos,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
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
                }
            }
            });
        </script>
        
        <!-- --------------------------GRAFICO DE LINEAS------------------------------>

        <script>
            var ctx = document.getElementById('lineas').getContext('2d');

            // Utiliza los datos enviados desde el controlador
            var pedidos = {!! json_encode($pedido->pluck('descripcion')) !!};
            var cantidad = {!! json_encode($pedido->pluck('cantidad')) !!};

            var datos = {
            labels: pedidos,
            datasets: [{
                label: 'Nombre de Pedidos',
                data: cantidad,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
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
            var pedidosPagados = {!! json_encode($pedido->where('estado', '2')->count()) !!};
            var pedidosNoPagados = {!! json_encode($pedido->where('estado', '1')->count()) !!};

            var datos = {
            labels: ['Pagados', ['No Pagados']],
            datasets: [{
                label: 'Estado de pedidos',
                data: [pedidosPagados, pedidosNoPagados],
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

    </body>
    </html>

@endsection

@section('scripts')
    <script>
        setTimeout(function(){
            document.querySelector('#mensaje').remove();
        },2000);
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.min.js" integrity="sha512-7U4rRB8aGAHGVad3u2jiC7GA5/1YhQcQjxKeaVms/bT66i3LVBMRcBI9KwABNWnxOSwulkuSXxZLGuyfvo7V1A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="resources/js/main.js"></script>