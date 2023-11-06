@extends('layout.personalPedidos')

@section('titulo', 'GRÁFICOS')

@section('contenido')
    <H2>Gráficos</H2>
    
@endsection

@section('scripts')
    <script>
        setTimeout(function(){
            document.querySelector('#mensaje').remove();
        },2000);
    </script>