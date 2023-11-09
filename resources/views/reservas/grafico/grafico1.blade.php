@extends('layouts.recepcionista')
@section('puntos', '../')
@section('mainContent')
<!-- Page Content-->
<div class="card mb-4">
    <div class="card-header">
        <form class="form-inline my-2" method="get">
            <div class="container-fluid h-100">
                <div class="row w-100 align-items-center">
                    <h5 class="title" style="font-family: Verdana, Geneva, Tahoma, sans-serif">
                        <strong>
                            <center>Gráfico de reservas hechas por cada cliente </center>
                        </strong>
                    </h5>
                </div>
            </div>
        </form>
    </div>

    <div class="card-body">
        <div align="center">
            <div class="row">
                <div style="width: 70%; margin: 0 auto;">
                    <canvas id="grafico"></canvas>
                </div>
            </div>
        </div>

        <script>
            var reservasPorCliente = @json($reservasPorCliente);

            var nombresClientes = reservasPorCliente.map(item => item.cliente);
            var totalReservas = reservasPorCliente.map(item => item.total);

            var colores = nombresClientes.map(() => {
                return 'rgba(' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ', 0.2)';
            });

            var ctx = document.getElementById('grafico').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: nombresClientes,
                    datasets: [{
                        label: 'Reservas por Cliente',
                        data: totalReservas,
                        backgroundColor: colores,
                        borderColor: colores.map(color => color.replace('0.2', '1')),
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    </div>

        <!-- --------------------------GRAFICO DE LINEAS------------------------------>

        {{-- <script>
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
        </script> --}}

        <!-- --------------------------GRAFICO CIRCULAR------------------------------>

        {{-- <script>
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
        </script> --}}

@endsection


@section('sidebarMenu')
    <li class="nav-item">
        <a href="{{ route('cliente') }}" class="nav-link">
        <i class="nav-icon fas fa-table"></i>
        <p>Clientes</p>
        </a>
    </li>

    <li class="nav-item">
        <a href="{{ route('mesa') }}" class="nav-link">
        <i class="nav-icon fas fa-table"></i>
        <p>Mesas</p>
        </a>
    </li>

    <li class="nav-item">
        <a href="{{ route('reserva') }}" class="nav-link">
        <i class="nav-icon fas fa-table"></i>
        <p>Reservas</p>
        </a>
    </li>

    <li class="nav-item">
        <a href="{{ route('pagoReserva') }}" class="nav-link">
        <i class="nav-icon fas fa-table"></i>
        <p>Pagos de reservas</p>
        </a>
    </li>

    <li class="nav-item">
        <a href="{{ route('grafico1') }}" class="nav-link">
        <i class="nav-icon fas fa-table"></i>
        <p>Gráfico 1</p>
        </a>
    </li>

    <li class="nav-item">
        <a href="{{ route('grafico2') }}" class="nav-link">
        <i class="nav-icon fas fa-table"></i>
        <p>Gráfico 2</p>
        </a>
    </li>
@endsection
