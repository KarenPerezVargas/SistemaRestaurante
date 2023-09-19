@extends('layouts..personalPedidos')



@section('mainContent')
    <h1 align="center" style="color: orange; font-family: Georgia">¿Necesitas más información?</h1>
    <h4 style="font-family: Georgia; font-weight: bold">Acerca de nosotros:</h4>
    <div class="row">
        <div class="col-md-7 col-12" style="font-family: Georgia">
            <p>MiskyChallwa es un restaurante único que ofrece una experiencia culinaria auténtica y deliciosa. Su nombre, que en quechua significa "sabor sabroso", refleja su enfoque en resaltar los sabores tradicionales de la cocina peruana.</p>
            <p>Ubicado en una acogedora esquina de la ciudad, MiskyChallwa se destaca por su ambiente cálido y acogedor. El interior está decorado con elementos peruanos, creando un ambiente encantador y culturalmente rico.</p>
            <p>El menú de MiskyChallwa presenta una amplia variedad de platos peruanos clásicos, preparados con ingredientes frescos y de alta calidad. Desde ceviches y tiraditos hasta lomo saltado y ají de gallina, cada plato está cuidadosamente elaborado para ofrecer una explosión de sabores y texturas.</p>
        </div>
        <div class="col-md-5 col-12" align="center">
            <img src="../resources/img/restaurante/fachada.jpg" alt="">
        </div>
    </div>

    <div class="row" style="font-family: Georgia">
        <p>Además de los platos principales, MiskyChallwa ofrece una selección de postres deliciosos como suspiro limeño y tarta de lucuma, que son el final perfecto para una comida memorable.</p>
        <p>El restaurante se enorgullece de promover la cocina peruana tradicional y utiliza técnicas de cocción auténticas para garantizar la autenticidad de cada plato. El personal es amable y conocedor, y está dispuesto a brindar recomendaciones y explicaciones sobre los diferentes platos.</p>
        <br><br>
        <p style="font-weight: bold">Si no tiene conocimiento acerca de nuestros platos deliciosos que ofrecemos, puedes verlos <a style="font-weight: bold" href="{{ route('procesarPedido.index') }}">aquí</a></p>
    </div>

    <head>
    <style>
        .hidden {
        display: none;
        }
    </style>
    <script>
        function mostrarCajaTexto() {
        var btnAbrir = document.getElementById("btnAbrir");
        btnAbrir.classList.add("hidden");

        var cajaTexto = document.getElementById("cajaTexto");
        cajaTexto.classList.remove("hidden");

        var btnEnviar = document.getElementById("btnEnviar");
        btnEnviar.classList.remove("hidden");
        }

        function enviarTexto() {
        var texto = document.getElementById("cajaTexto").value;
        alert("Texto enviado: " + texto);
        }
    </script>
    </head>
    <!--<body>
    <button class="btn btn-info" onclick="mostrarCajaTexto()" id="btnAbrir">Asesorar cliente</button>
    <br><br>
    <textarea id="cajaTexto" class="hidden"></textarea>
    <br><br>
    <button onclick="enviarTexto()" id="btnEnviar" class="hidden" style="background: #2B9EEE ; color: white; border: none">Enviar asesoramiento</button>
    </body>-->
@endsection
