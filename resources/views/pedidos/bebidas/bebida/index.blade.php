@extends('layouts.bebidas')

@section('dashName', 'BEBIDAS')

@section('mainContent')
    <div class="card mb-4">
        <div class="card-header">
            <form class="form-inline my-2" method="get">
                <div class="container-fluid h-100">
                    <div class="row w-100 align-items-center">
                        <div class="col-8">
                            <a href="{{ route('bebida.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Nuevo Registro</a>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <div class="col-9">
                                    <input class="form-control me-2" name="buscarpor" type="search" placeholder="Buscar por nombre" aria-label="Search" value="{{$buscarpor ?? ''}}">
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
                        <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>Precio en (S/.)</h6></th>
                        <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>Cantidad</h6></th>
                        <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>Tipo Bebida</h6></th>
                        <th class="text-uppercase text-xxs mb-0 text-center" scope="col"><h6>Opciones</h6></th>
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

                            <td class="text-uppercase text-xxs mb-0 text-center">
                                
                                <p>{{$itembebida->tipo}}</p>
                                
                            </td>
                            
                            <td class="text-uppercase text-xxs mb-0 text-center">
                                <a href="{{route('bebida.edit',$itembebida->idbebida)}}" class="btn btn-info btn-sm text-uppercase text-xxs font-weight-bolder"><i class="fas fas-edit"></i>Editar</a>
                                <a href="{{route('bebida.confirmar',$itembebida->idbebida)}}"class="btn btn-danger btn-sm text-uppercase text-xxs font-weight-bolder"><i class="fas fas-trash"></i>Eliminar</a>
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
@endsection

@section('scripts')
    <script>
        setTimeout(function(){
            document.querySelector('#mensaje').remove();
        },2000);
    </script>