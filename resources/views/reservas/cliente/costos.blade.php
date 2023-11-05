@extends('layouts.admin')

@section('dashName', 'COSTOS')

@section('mainContent')
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
                    <tr style="background: #E75E40;">
                        <th class="text-uppercase text-xxs mb-0 text-center" scope="col" ><h6 style="font-weight: bold;">N</h6></th>
                        <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6 style="font-weight: bold;">Bebida</h6></th>
                        <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6 style="font-weight: bold;">Precio de bebida (S/.)</h6></th>
                        <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6 style="font-weight: bold;">Cantidad</h6></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if (count($bebida)<=0)
                        <tr>
                            <td colspan="3">No hay registros</td>
                        </tr>
                    @else   
                    
                        @foreach ($bebida as $itembebida)
                        <tr>
                            <td class="text-uppercase text-xxs mb-0 text-center">
                            
                                <p>{{$itembebida->idbebida}}</p>
                            
                            </td>
                            <td class="text-uppercase text-xxs mb-0 text-center">
                                
                                <p>{{$itembebida->descripcion}}</p>
                                
                            </td>

                            <td class="text-uppercase text-xxs mb-0 text-center">
                                
                                <p>{{$itembebida->precio}}</p>
                                
                            </td>

                            <td class="text-uppercase text-xxs mb-0 text-center">
                                
                                <p>{{$itembebida->cantidad}}</p>
                                
                            </td>
                        </tr>
                        
                        @endforeach
                        @endif  
                    </tbody>
                </table>
                {{-- End Tabla --}}

                <table class="table">
                    <thead>
                    <tr style="background: #4398DB">
                        <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6 style="font-weight: bold;">N</h6></th>
                        <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6 style="font-weight: bold;">Producto</h6></th>
                        <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6 style="font-weight: bold;">Precio de producto (S/.)</h6></th>
                        <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6 style="font-weight: bold;">Cantidad</h6></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if (count($producto)<=0)
                        <tr>
                            <td colspan="3">No hay registros</td>
                        </tr>
                    @else   
                    
                        @foreach ($producto as $itemproducto)
                        <tr>
                            <td class="text-uppercase text-xxs mb-0 text-center">
                            
                                <p>{{$itemproducto->idproducto}}</p>
                            
                            </td>
                            <td class="text-uppercase text-xxs mb-0 text-center">
                                
                                <p>{{$itemproducto->descripcion}}</p>
                                
                            </td>

                            <td class="text-uppercase text-xxs mb-0 text-center">
                                
                                <p>{{$itemproducto->precio}}</p>
                                
                            </td>

                            <td class="text-uppercase text-xxs mb-0 text-center">
                                
                                <p>{{$itemproducto->cantidad}}</p>
                                
                            </td>
                        </tr>
                        
                        @endforeach
                        @endif  
                    </tbody>
                </table>
                {{-- End Tabla --}}
        </div>
    </div>
    {{$bebida->links()}}
    {{$producto->links()}}
@endsection
@section('scripts')
    <script>
        setTimeout(function(){
            document.querySelector('#mensaje').remove();
        },2000);
    </script>