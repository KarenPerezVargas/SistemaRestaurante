@extends('layouts.gerentealmacen')
@section('dashName', 'Dashboard')
@section('mainContent')
<!-- Page Content-->
<section class="pt-4">
    <div class="container px-lg-5">
        <!-- Page Features-->
        <div class="row gx-lg-5">
            <div class="navbar">
                <div class="container-fluid">
                    <h3><i>Proveedores</i></h3>
                    <a href="{{route('createProveedor')}}" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp;Nuevo Registro</a>
                </div>
            </div>
            <div class="text-center">
                <table class="table">
                    <thead class="table-dark">
                      <tr>
                        <th>#</th>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Ciudad</th>
                        <th>Direccion</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Opción</th>
                      </tr>
                    </thead>

                    <tbody>
                        @if ($proveedor->count() == 0)
                            <tr><td>No hay proveedores registrados</td></tr>
                        @endif
                        @foreach ($proveedor as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->codigo_proveedor}}</td>
                                <td>{{$item->nombre_proveedor}}</td>
                                <td>{{$item->ciudad_proveedor}}</td>
                                <td>{{$item->direccion_proveedor}}</td>
                                <td>{{$item->email_proveedor}}</td>
                                <td>{{$item->telefono_proveedor}}</td>
                                <td>
                                    <a href="{{route('editProveedor', [$item->id])}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Editar</a>
                                    &nbsp; &nbsp; &nbsp;

                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$item->id}}">
                                        <i class="fas fa-trash"></i> Eliminar
                                    </button>
                                    <div>
                                        <div class="modal fade" id="exampleModal-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <form action="{{route('eliminarProveedor', $item->id)}}" method="post">
                                                    @csrf
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Eliminacion del proveedor</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ¿Esta seguro que desea eliminar este registro<b></b>? <br>
                                                        <i>Se eliminará toda la información del proveedor</i>
                                                    </div>
                                                    <div class="modal-footer m-2">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    </div>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
