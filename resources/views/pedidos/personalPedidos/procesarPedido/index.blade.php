@extends('layouts.personalPedidos')

@section('dashName', 'Procesar Pedidos')

@section('mainContent')
    <h1 align="center" style="color: orange; font-family: Georgia">Pedidos que se ofrece</h1>
    <div class="row justify-content-center">
        <hr>
        <h3 align="center" style="color: red; font-family: Georgia">Entradas</h3>
        <div class="card col-5 col-md-3" style="width: 18rem; margin-top: 20px">
            <img src="../resources/img/platos/ensalada.jpg" class="card-img-top" style="height: 60%" alt="...">
            <div class="card-body" align="center">
                <p class="card-text" style="font-size: 16px; font-family: Georgia">Ensaladas</p>
            </div>
        </div>
        <div class="col-1"></div>
        <div class="card col-5 col-md-3" style="width: 18rem; margin-top: 20px">
            <img src="../resources/img/platos/sopa.jpg" class="card-img-top" style="height: 60%" alt="...">
            <div class="card-body" align="center">
                <p class="card-text" style="font-size: 16px; font-family: Georgia">Sopas</p>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <hr>
        <h3 align="center" style="color: red; font-family: Georgia">Platos principales</h3>
        <div class="card col-5 col-md-3" style="width: 18rem; margin-top: 20px">
            <img src="../resources/img/platos/carne.jpg" class="card-img-top" style="height: 60%" alt="...">
            <div class="card-body" align="center">
                <p class="card-text" style="font-size: 16px; font-family: Georgia">Carnes: filete, pollo, cerdo, cordero</p>
            </div>
        </div>
        <div class="col-1 d-md-none d-block"></div>
        <div class="card col-5 col-md-3" style="width: 18rem; margin-top: 20px">
            <img src="../resources/img/platos/pescado.jpg" class="card-img-top" style="height: 60%" alt="...">
            <div class="card-body" align="center">
                <p class="card-text" style="font-size: 16px; font-family: Georgia">Pescados y mariscos: salmón, camarones, langosta</p>
            </div>
        </div>
        <div class="col-1 d-none d-md-block"></div>
        <div class="card col-5 col-md-3" style="width: 18rem; margin-top: 20px">
            <img src="../resources/img/platos/pasta.jpg" class="card-img-top" style="height: 60%" alt="...">
            <div class="card-body" align="center">
                <p class="card-text" style="font-size: 16px; font-family: Georgia">Pasta: espagueti, lasaña</p>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <hr>
        <h3 align="center" style="color: red; font-family: Georgia">Acompañamientos</h3>    
        <div class="card col-5 col-md-3" style="width: 18rem; margin-top: 20px">
            <img src="../resources/img/platos/papas.jpg" class="card-img-top" style="height: 60%" alt="...">
            <div class="card-body" align="center">
                <p class="card-text" style="font-size: 16px; font-family: Georgia">Papas fritas</p>
            </div>
        </div>
        
        <div class="card col-5 col-md-3" style="width: 18rem; margin-top: 20px">
            <img src="../resources/img/platos/arroz.jpg" class="card-img-top" style="height: 60%" alt="...">
            <div class="card-body" align="center">
                <p class="card-text" style="font-size: 16px; font-family: Georgia">Arroz</p>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <hr>
        <h3 align="center" style="color: red; font-family: Georgia">Bebidas</h3>
        <div class="card col-5 col-md-3" style="width: 18rem; margin-top: 20px">
            <img src="../resources/img/platos/refrezco.jpg" class="card-img-top" style="height: 60%" alt="...">
            <div class="card-body" align="center">
                <p class="card-text" style="font-size: 16px; font-family: Georgia">Refrescos, Cervezas, Vinos</p>
            </div>
        </div>
    </div>
@endsection