
    <div class="card mb-4">

        <div align="center">
            <h3>RESTAURANTE MISKYCHALLWA</h3>
        </div>

        <h4>REPORTE DE PEDIDOS REGISTRADOS</h4>
                
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
                <table class="table" align="center">
                    <thead>
                    <tr>
                        <th style="padding-right: 30px; padding-top: 0px;" class="text-uppercase text-xxs mb-0 text-center" scope="col"><h4>N</h4></th>
                        <th style="padding-right: 30px; padding-top: 0px;" class="text-uppercase text-xxs mb-0 text-center" scope="col"><h4>Descripción</h4></th>
                        <th style="padding-right: 30px; padding-top: 0px;" class="text-uppercase text-xxs mb-0 text-center" scope="col"><h4>Precio en (S/.)</h4></th>
                        <th style="padding-right: 30px; padding-top: 0px;" class="text-uppercase text-xxs mb-0 text-center" scope="col"><h4>Cantidad</h4></th>
                        <th style="padding-right: 30px; padding-top: 0px;" class="text-uppercase text-xxs mb-0 text-center" scope="col"><h4>Tipo Pedido</h4></th>
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
                            <td style="padding-right: 30px; padding-top: 0px;" class="text-uppercase text-xxs mb-0 text-center">
                            
                                <p>{{$itempedido->idPedido}}</p>
                            
                            </td>
                            <td style="padding-right: 30px; padding-top: 0px;" class="text-uppercase text-xxs mb-0 text-center">
                                
                                <p>{{$itempedido->descripcion}}</p>
                                
                            </td>

                            <td style="padding-right: 30px; padding-top: 0px;" class="text-uppercase text-xxs mb-0 text-center">
                                
                                <p>{{$itempedido->precio}}</p>
                                
                            </td>

                            <td style="padding-right: 30px; padding-top: 0px;" class="text-uppercase text-xxs mb-0 text-center">
                                
                                <p>{{$itempedido->cantidad}}</p>
                                
                            </td>

                            <td style="padding-right: 30px; padding-top: 0px;" class="text-uppercase text-xxs mb-0 text-center">
                                
                                <p>{{$itempedido->tipo}}</p>
                                
                            </td>

                            <td style="padding-right: 30px; padding-top: 0px;" class="text-uppercase text-xxs mb-0 text-center">
                                
                                @if({{$itempedido->estado}}==1)
                                    <p>NO PAGADO</p>

                                    
                                @endif
                                
                            </td>
                        </tr>
                        
                        @endforeach
                        @endif  
                    </tbody>
                </table>
                {{-- End Tabla --}}
        </div>
    </div>