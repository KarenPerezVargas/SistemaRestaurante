<div align="center"><H2>RESTAURANTE MISKYCHALLWA</H2></div>
<!-- Page Content-->
<section class="pt-4">
    <div class="container px-lg-5">
        <!-- Page Features-->
        <div class="row gx-lg-5">
            <div class="navbar">
                <div class="container-fluid">
                    <h3><i>Zonas de entrega</i></h3>
                </div>
            </div>
            <div class="text-center">
                <table class="table" align="center">
                    <thead class="table-dark">
                      <tr>
                        <th style="padding-right: 30px; padding-top: 0px;">#</th>
                        <th style="padding-right: 30px; padding-top: 0px;">Provincia</th>
                        <th style="padding-right: 30px; padding-top: 0px;">Distrito</th>
                        <th style="padding-right: 30px; padding-top: 0px;">Especificaciones</th>
                      </tr>
                    </thead>

                    <tbody>
                        @if ($zona->count() == 0)
                            <tr><td>No hay zonas de entrega registradas</td></tr>
                        @endif
                        @foreach ($zona as $item)
                            <tr>
                                <td style="padding-right: 30px; padding-top: 0px;">{{$item->id}}</td>
                                <td style="padding-right: 30px; padding-top: 0px;">{{$item->provincia}}</td>
                                <td style="padding-right: 30px; padding-top: 0px;">{{$item->distrito}}</td>
                                <td style="padding-right: 30px; padding-top: 0px;">{{$item->especificaciones}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
