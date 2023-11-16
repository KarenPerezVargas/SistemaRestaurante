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
                    <h2>Cantidad de productos por Categoria</h2>
                    <canvas id="barras"></canvas>
                </div>
                
            </div>
          
        </div>



        <!----------------------------GRAFICO DE BARRAS------------------------------->
        <script>
        var ctx = document.getElementById('barras').getContext('2d');

        

        var colores = $categorias.map(() => {
                return 'rgba(' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ', 0.5)';
        });


        var datos = {
            labels: categorias,
            datasets: [{
                label: 'Cantidad de Capacitaciones',
                data: cantidad,
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