@extends('layouts.recepcionista')
@section('puntos', '../')
@section('dashName', 'GRÁFICOS')
@section('mainContent')
<!-- Page Content-->
<main>
    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">CLIENTES</div>
                        <div class="container-fluid h-100">
                            <div class="row w-100 align-items-center">
                                <h1>{{ $totalClientes }}</h1>
                            </div>
                        </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('cliente') }}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">MESAS</div>
                        <div class="container-fluid h-100">
                            <div class="row w-100 align-items-center">
                                <h1>{{ $totalMesas }}</h1>
                            </div>
                        </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('mesa') }}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">RESERVAS</div>
                        <div class="container-fluid h-100">
                            <div class="row w-100 align-items-center">
                                <h1>{{ $totalReservas }}</h1>
                            </div>
                        </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('reserva') }}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">PAGOS</div>
                        <div class="container-fluid h-100">
                            <div class="row w-100 align-items-center">
                                <h1>{{ $totalPagoReservas }}</h1>
                            </div>
                        </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('pagoReserva') }}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                        Reservas hechas por cada cliente
                    </div>
                    {{-- <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div> --}}
                    <div align="center">
                        <div class="row">
                            <div style="width: 95%; margin: 0 auto;">
                                <canvas id="barra"></canvas>
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

                        var ctx = document.getElementById('barra').getContext('2d');
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
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-area me-1"></i>
                        Reservas registradas mensualmente en el año 2023
                    </div>
                    {{-- <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div> --}}
                    <div align="center">
                        <div class="row">
                            <div style="width: 95%; margin: 0 auto;">
                                <canvas id="linea"></canvas>
                            </div>
                        </div>
                    </div>

                    <script>
                        var reservasPorMes = @json($reservasPorMes);

                        var meses = reservasPorMes.map(item => item.month);
                        var totalReservas = reservasPorMes.map(item => item.total);

                        // Nombres de los meses
                        var nombresMeses = [
                            'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio',
                            'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
                        ];

                        // Reemplaza los números de mes con los nombres de los meses
                        meses = meses.map(month => nombresMeses[month - 1]);

                        var ctx = document.getElementById('linea').getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: meses,
                                datasets: [{
                                    label: 'Reservas por Mes',
                                    data: totalReservas,
                                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                    borderColor: 'rgba(75, 192, 192, 1)',
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
            </div>
        </div>
    </div>
</main>
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
        <a href="{{ route('graficos') }}" class="nav-link">
        <i class="nav-icon fas fa-table"></i>
        <p>Gráficos</p>
        </a>
    </li>

@endsection
