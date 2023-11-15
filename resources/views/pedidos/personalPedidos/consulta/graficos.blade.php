@extends('layouts.personalPedidos')

@section('mainContent')
    <br>
    <div align="center"><H3>DASHBOARDS DEL SISTEMA PEDIDOS</H3></div>
    <br>
    <div class="accordion accordion-flush col-12" style="border-radious: 2" id="accordionFlushExample">
    <p style="color: 206DB2"><span style="font-size:20;">↓ </span>Seleccione cualquier opción desplegable para visualizar las gráficas del sistema<span style="font-size:20;"> ↓</span></p>
    <div class="accordion-item" style="background: black">
        <h2 class="accordion-header">
        <button style="background-color:343A40; color: white" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            CANTIDAD DE PEDIDOS POR NOMBRE DE CLIENTE 
        </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div align="center"><div class="accordion-body col-10"><canvas id="barras"></canvas></div></div>    
        </div>
    </div>
    <div class="accordion-item" style="background: black">
        <h2 class="accordion-header">
        <button style="background-color:343A40; color: white" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            CANTIDAD DE PEDIDOS POR NOMBRE DE PEDIDO
        </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div align="center"><div class="accordion-body col-10"><canvas id="lineas"></canvas></div></div>    
        </div>
    </div>
    <div class="accordion-item" style="background: black">
        <h2 class="accordion-header">
        <button style="background-color:343A40; color: white" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            PORCENTAJE DE PEDIDOS PAGADO Y NO PAGADOS
        </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div align="center"><div class="accordion-body col-6"><canvas id="circular"></canvas></div></div>    
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
            // Ajusta el brillo y la saturación para hacer los colores más notorios
            var brillo = Math.floor(Math.random() * 31) + 70; // Rango: 70-100
            var saturacion = Math.floor(Math.random() * 31) + 70; // Rango: 70-100

            return 'hsla(' + Math.floor(Math.random() * 360) + ',' + saturacion + '%,' + brillo + '%, 0.8)';
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
            },
        });
         ctx.canvas.style.backgroundColor = '222222';
    </script>


    <!-- --------------------------GRAFICO DE LINEAS------------------------------>

    <script>
        var ctx = document.getElementById('lineas').getContext('2d');

        // Utiliza los datos enviados desde el controlador
        var pedidos = {!! json_encode($pedido->pluck('descripcion')) !!};
        var cantidad = {!! json_encode($pedido->pluck('cantidad')) !!};

        // Genera un array de colores para cada dato
        var colores = clientes.map(() => {
            // Ajusta el brillo y la saturación para hacer los colores más notorios
            var brillo = Math.floor(Math.random() * 31) + 70; // Rango: 70-100
            var saturacion = Math.floor(Math.random() * 31) + 70; // Rango: 70-100

            return 'hsla(' + Math.floor(Math.random() * 360) + ',' + saturacion + '%,' + brillo + '%, 0.8)';
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
        ctx.canvas.style.backgroundColor = '222222';
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

        var color1 = clientes.map(() => {
            // Ajusta el brillo y la saturación para hacer los colores más notorios
            var brillo = Math.floor(Math.random() * 31) + 70; // Rango: 70-100
            var saturacion = Math.floor(Math.random() * 31) + 70; // Rango: 70-100

            return 'hsla(' + Math.floor(Math.random() * 360) + ',' + saturacion + '%,' + brillo + '%, 0.8)';
        });

        var color2 = clientes.map(() => {
            // Ajusta el brillo y la saturación para hacer los colores más notorios
            var brillo = Math.floor(Math.random() * 31) + 70; // Rango: 70-100
            var saturacion = Math.floor(Math.random() * 31) + 70; // Rango: 70-100

            return 'hsla(' + Math.floor(Math.random() * 360) + ',' + saturacion + '%,' + brillo + '%, 0.8)';
        });

        var datos = {
        labels: ['Pagados', ['No Pagados']],
        datasets: [{
            label: 'Porcentaje de pedidos',
            data: [porcentajePagados, porcentajeNoPagados],
            backgroundColor: color1,color2,
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
        ctx.canvas.style.backgroundColor = '222222';
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