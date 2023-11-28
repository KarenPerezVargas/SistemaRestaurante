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

            // Obtener los datos del controlador
            var categorias = {!! json_encode($categorias ?? []) !!};
            var cantidades = {!! json_encode($cantidades ?? []) !!};

            // Verificar que los datos sean válidos
            if (categorias.length === 0 || cantidades.length === 0) {
                console.error('Error: No se encontraron datos para generar la gráfica.');
                // Aquí puedes mostrar un mensaje de error al usuario o hacer alguna otra acción
            } else {
                // Asignar los datos a las variables labels y data
                var datos = {
                    labels: categorias,
                    datasets: [{
                        label: 'Cantidad de productos',
                        data: cantidades,
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
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
            }
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