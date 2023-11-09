@extends('layouts.personalPedidos')

@section('titulo', 'GRÁFICOS')

@section('mainContent')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gráfica con Chart.js</title>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>
    <body>
        <div align="center">
            <div class="row">
                <div class="col-6">
                    <canvas id="barras" width="20" height="10"></canvas>
                </div>
                <div class="col-6">
                    <canvas id="lineas" width="20" height="10"></canvas>
                </div>
            </div>
            <br><br>
            <div class="col-6">
                <canvas id="circular" width="20" height="10"></canvas>
            </div>
        </div>
        <script src="../grafica.js"></script>
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