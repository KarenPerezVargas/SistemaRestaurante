@extends('layouts.personalalmacen')
@section('puntos', '../')
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

    <body>
        <div>
            <div class="row">
                <div style="width:50%;" class="col-6">
                    <h2>Cantidad de capacitaciones por Empleado</h2>
                    <canvas id="barras"></canvas>
                </div>
                {{-- <div style="width:50%;" class="col-6">
                    <canvas id="lineas"></canvas>
                </div> --}}
            </div>
            <br>
            <div style="width:32%;" class="col-12">
                <h2>Estado de las Capacitaciones</h2>
                <canvas id="circular"></canvas>
            </div>
        </div>



        <!----------------------------GRAFICO DE BARRAS------------------------------->
        <script>
            var ctx = document.getElementById('barras').getContext('2d');

        // Utiliza los datos enviados desde el controlador
        var empleados = {!! json_encode($empleado->pluck('idEmpleado')) !!};
        var nombres = {!! json_encode($empleado->pluck('nombre')) !!};
        var apellidos = {!! json_encode($empleado->pluck('apellidos')) !!};

        // Combinar nombres y apellidos en una sola variable
        var nombresCompletos = nombres.map(function (nombre, index) {
            return nombre + ' ' + apellidos[index];
        });

        var empleadoCapacitaciones = {!! json_encode($empleadoCapacitacion->pluck('idEmpleado')) !!};

        var cantidadCapacitaciones = empleados.map(function (empleadoId) {
            return empleadoCapacitaciones.filter(function (item) {
                return item === empleadoId;
            }).length;
        });


        var colores = empleados.map(() => {
                return 'rgba(' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ', 0.5)';
        });


        var datos = {
            labels: nombresCompletos,
            datasets: [{
                label: 'Cantidad de Capacitaciones',
                data: cantidadCapacitaciones,
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
                }
            }
            });
        </script>



        <!-- --------------------------GRAFICO CIRCULAR------------------------------>

    <script>
        var ctx = document.getElementById('circular').getContext('2d');

        var capacitacionesPendientes = {{ $capacitacionesPendientes }};
        var capacitacionesEnCurso = {{ $capacitacionesEnCurso }};
        var capacitacionesFinalizadas = {{ $capacitacionesFinalizadas }};

        var totalCapacitaciones = capacitacionesPendientes + capacitacionesEnCurso + capacitacionesFinalizadas;

        var porcentajePendientes = ((capacitacionesPendientes / totalCapacitaciones) * 100).toFixed(2);
        var porcentajeEnCurso = ((capacitacionesEnCurso / totalCapacitaciones) * 100).toFixed(2);
        var porcentajeFinalizadas = ((capacitacionesFinalizadas / totalCapacitaciones) * 100).toFixed(2);


        var datos = {
        labels: ['Pendientes','En curso', 'Finalizadas'],
        datasets: [{
            label: 'Porcentaje de Capacitaciones',
            data: [porcentajePendientes, porcentajeEnCurso, porcentajeFinalizadas],
            backgroundColor: ['rgba(75, 192, 192, 0.5)','rgba(245, 59, 19, 0.5)', 'rgba(100, 39, 19, 0.5)'],
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
