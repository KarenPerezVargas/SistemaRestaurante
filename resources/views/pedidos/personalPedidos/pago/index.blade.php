@extends('layouts.personalPedidos')

@section('dashName', 'PAGOS')

@section('mainContent')
    <h2 align="center" style="color: blue">Pedidos por pagar</h2>
    <div class="card mb-4">
        <div class="card-header">
            <form class="form-inline my-2" method="get">
                <div class="container-fluid h-100">
                    <div class="row w-100 align-items-center">
                        <div class="col-4">
                            <div class="row">
                                <div class="col-9">
                                    <input class="form-control me-2" name="buscarpor" type="search" placeholder="Buscar por nombre" aria-label="Search" value="{{$buscarpor}}">
                                </div>
                                <div class="col-3">
                                    <button class="btn btn-warning" type="submit">Buscar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
                
        <div class="card-body">
            <div id="mensaje">
                @if (session('datos'))
                    <div class="alert alert-warning alert-dismossible fade show mt-3" role="alert">
                        {{ session('datos') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
                {{-- Tabla --}}
                <table class="table">
                    <thead>
                    <tr>
                        <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>N</h6></th>
                        <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>Descripción</h6></th>
                        <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>Tipo Pedido</h6></th>
                        <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>Costo Total en (S/.)</h6></th>
                        <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>Opciones</h6></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if (count($pedido)<=0)
                        <tr>
                            <td colspan="3">No hay registros</td>
                        </tr>
                    @else   
                    
                        @foreach ($pedido as $itempedido)
                        <tr>
                            <td class="text-uppercase text-xxs mb-0 text-center">
                            
                                <p>{{$itempedido->idPedido}}</p>
                            
                            </td>
                            <td class="text-uppercase text-xxs mb-0 text-center">
                                
                                <p>{{$itempedido->descripcion}}</p>
                                
                            </td>

                            <td class="text-uppercase text-xxs mb-0 text-center">
                                
                                <p>{{$itempedido->tipo}}</p>
                                
                            </td>
                            
                            <td class="text-uppercase text-xxs mb-0 text-center">
                                
                                <p>{{$itempedido->precio*$itempedido->cantidad}}</p>
                                
                            </td>

                            <td class="text-uppercase text-xxs mb-0 text-center">
                                <a href="{{route('pago.confirmar',$itempedido->idPedido)}}"class="btn btn-success btn-sm text-uppercase text-xxs font-weight-bolder"><i class="fas fas-trash"></i>Pago</a>
                            </td>
                        </tr>
                        
                        @endforeach
                        @endif  
                    </tbody>
                </table>
                {{-- End Tabla --}}
        </div>
    </div>
    {{$pedido->links()}}
@endsection

@section('scripts')
    <script>
        setTimeout(function(){
            document.querySelector('#mensaje').remove();
        },2000);
    </script>