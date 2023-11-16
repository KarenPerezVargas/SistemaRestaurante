
<div align="center"><H2>RESTAURANTE MISKYCHALLWA</H2></div>
<section class="pt-4">
    <div class="container px-lg-5">
        <!-- Page Features-->
        <div class="row gx-lg-5">
            <div class="navbar">
                <div class="container-fluid">
                    <h3><i>Horarios de entrega</i></h3>
                </div>
            </div>
            <div class="text-center">
                <table class="table" align="center">
                    <thead class="table-dark">
                      <tr>
                        <th style="padding-right: 30px; padding-top: 0px;">#</th>
                        <th style="padding-right: 30px; padding-top: 0px;">Fecha</th>
                        <th style="padding-right: 30px; padding-top: 0px;">Hora</th>
                      </tr>
                    </thead>

                    <tbody>
                        @if ($horarioo->count() == 0)
                            <tr><td>No hay horarios de entrega registradas</td></tr>
                        @endif
                        @foreach ($horarioo as $item)
                            <tr>
                                <td style="padding-right: 30px; padding-top: 0px;">{{$item->id}}</td>
                                <td style="padding-right: 30px; padding-top: 0px;">{{$item->fecha}}</td>
                                <td style="padding-right: 30px; padding-top: 0px;">{{$item->hora}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
