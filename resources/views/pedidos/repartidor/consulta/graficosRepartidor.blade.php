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