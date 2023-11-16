@extends('layouts.repartidor')

@section('mainContent')
    <br>
    <div align="center"><H3>DASHBOARDS DEL SISTEMA PEDIDOS</H3></div>
    <br>
    <div class="accordion accordion-flush col-12" style="border-radious: 2" id="accordionFlushExample">
    <p style="color: 206DB2"><span style="font-size:20;">↓ </span>Seleccione cualquier opción desplegable para visualizar las gráficas del sistema<span style="font-size:20;"> ↓</span></p>
    <div class="accordion-item" style="background: black">
        <h2 class="accordion-header">
        <button style="background-color:343A40; color: white" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            NÚMERO DE ENTREGAS SEGÚN DISTRITOS
        </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div align="center"><div class="accordion-body col-10"><canvas id="barras"></canvas></div></div>    
        </div>
    </div>
    <div class="accordion-item" style="background: black">
        <h2 class="accordion-header">
        <button style="background-color:343A40; color: white" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            TIEMPOS DE ENTREGA CON MAYOR REGISTRO
        </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div align="center"><div class="accordion-body col-10"><canvas id="lineas"></canvas></div></div>    
        </div>
    </div>

    <!----------------------------GRAFICO DE BARRAS------------------------------->
    <script>
        var ctx = document.getElementById('barras').getContext('2d');

        // Utiliza los datos enviados desde el controlador
        var counts = {!! json_encode($counts) !!};

        // Obtén las etiquetas y datos de la cuenta
        var etiquetas = Object.keys(counts);
        var datos = Object.values(counts);

        // Genera colores aleatorios para cada barra
        var colores = etiquetas.map(() => {
            var brillo = Math.floor(Math.random() * 31) + 70;
            var saturacion = Math.floor(Math.random() * 31) + 70;
            return 'hsla(' + Math.floor(Math.random() * 360) + ',' + saturacion + '%,' + brillo + '%, 0.8)';
        });

        var datosGrafica = {
            labels: etiquetas,
            datasets: [{
                label: 'Cantidad de Registros',
                data: datos,
                backgroundColor: colores,
                borderColor: colores.map(color => color.replace('0.2', '1')),
                borderWidth: 1
            }]
        };

        var barras = new Chart(ctx, {
            type: 'bar',
            data: datosGrafica,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
            },
        });
        ctx.canvas.style.backgroundColor = '222222';

    </script>


<!-- --------------------------GRAFICO DE LINEAS------------------------------>

    <script>
       var ctx = document.getElementById('lineas').getContext('2d');

        // Utiliza los datos enviados desde el controlador
        var countstime = {!! json_encode($countstime) !!};

        // Obtén las etiquetas y datos de la cuenta
        var etiquetas = Object.keys(countstime);
        var datos = Object.values(countstime);

        // Genera colores aleatorios para cada barra
        var colores = etiquetas.map(() => {
            var brillo = Math.floor(Math.random() * 31) + 70;
            var saturacion = Math.floor(Math.random() * 31) + 70;
            return 'hsla(' + Math.floor(Math.random() * 360) + ',' + saturacion + '%,' + brillo + '%, 0.8)';
        });

        var datos = {
            labels: etiquetas,
            datasets: [{
                label: 'Cantidad de Registros',
                data: datos,
                fill: true,
                backgroundColor: colores,
                borderColor: colores.map(color => color.replace('0.2', '1')),
                borderWidth: 2,
                pointRadius: 5,
                pointHoverRadius: 7,
            }]
        };

        var lineal = new Chart(ctx, {
            type: 'line',
            data: datos,
            options: {
                scales: {
                    x: [{
                        type: 'time',
                        time: {
                            unit: 'minute', // Puedes ajustar la unidad según tus necesidades
                            displayFormats: {
                                minute: 'YYYY-MM-DD HH:mm:ss'
                            }
                        },
                    }],
                    y: {
                        beginAtZero: true
                    }
                },
            },
        });
        ctx.canvas.style.backgroundColor = '222222';

    </script>

@endsection

@section('scripts')
    <script>
        setTimeout(function(){
            document.querySelector('#mensaje').remove();
        },2000);
    </script>
    <script>
        console.log(@json($countstime));
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.min.js" integrity="sha512-7U4rRB8aGAHGVad3u2jiC7GA5/1YhQcQjxKeaVms/bT66i3LVBMRcBI9KwABNWnxOSwulkuSXxZLGuyfvo7V1A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="resources/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>