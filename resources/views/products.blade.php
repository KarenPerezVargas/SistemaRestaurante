@extends('layouts.layoutpasarela')
     
@section('content')
      
<div class="row">
    @foreach($products as $product)
        <div class="col-xs-18 col-sm-6 col-md-4" style="margin-top:10px;">
            <div class="img_thumbnail productlist">
                <img src="{{ asset('img') }}/{{ $product->producto_foto }}" class="img-fluid">
                <div class="caption">
                    <h4>{{ $product->producto_nombre }}</h4>
                    <p>{{ $product->producto_categoria }}</p>
                    <p><strong>Price: </strong> ${{ $product->producto_precio }}</p>
                    <p class="btn-holder"><a href="{{ route('add_to_cart', $product->id) }}" class="btn btn-primary btn-block text-center" role="button">Add to cart</a> </p>
                </div>
            </div>
        </div>
    @endforeach
</div>
      
@endsection