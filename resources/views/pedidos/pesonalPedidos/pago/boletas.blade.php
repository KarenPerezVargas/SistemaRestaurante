@extends('layout.personalPedidos')

@section('titulo', 'BOLETAS')

@section('contenido')
    <H2>BOLETAS</H2>
    
@endsection

@section('scripts')
    <script>
        setTimeout(function(){
            document.querySelector('#mensaje').remove();
        },2000);
    </script>