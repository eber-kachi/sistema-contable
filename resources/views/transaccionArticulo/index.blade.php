@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2 class="float-left">Lista de Transacciones</h2>
                <a href="{{route('transaccionArticulo.create')}}" class="btn btn-primary float-right">
                    Agregar
                </a>
            </div>
    <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Número Clave</th>
                        <!--<th>Código Almacén</th>-->
                        <th>Código Articulo</th>
                        <th>Código Moneda</th>
                        <th>Cuenta Solicitud</th>
                        <th>Cuenta Consumo</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Descripción</th>
                        <th>Cantidad</th>
                        <th>Costo Unidad</th>
                        <th>Saldo Cantidad</th>
                        <th>Saldo Costo</th>
                        <th>Tipo Cambio</th>
                        <th>Usuario Registro</th>
                        <th>Usuario Consumo</th>
                        <!--<th>Código Sucursal</th>-->
                        <th>Enviado</th>
                        <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($transaccionArticulos as $transaccionArticulo)
                    <tr>
                        <td>{{ $transaccionArticulo->nc_trans_articulo}}</td>
                        <!--<td>{{ $transaccionArticulo->cod_almacen}}</td>-->
                        <td>{{ $transaccionArticulo->cod_articulo}}</td>
                        <td>{{ $transaccionArticulo->cod_moneda}}</td>
                        <td>{{ $transaccionArticulo->cuenta_solicitud}}</td>
                        <td>{{ $transaccionArticulo->cuenta_consumo}}</td>
                        <td>{{ $transaccionArticulo->fecha_trans_articulo}}</td>
                        <td>{{ $transaccionArticulo->hora_trans_articulo}}</td>
                        <td>{{ $transaccionArticulo->glosa_trans_articulo}}</td>
                        <td>{{ $transaccionArticulo->cantidad_trans_articulo}}</td>
                        <td>{{ $transaccionArticulo->costo_unidad_articulo}}</td>
                        <td>{{ $transaccionArticulo->saldo_cantidad_articulo}}</td>
                        <td>{{ $transaccionArticulo->saldo_costo_articulo}}</td>
                        <td>{{ $transaccionArticulo->tipo_cambio_moneda}}</td>
                        <td>{{ $transaccionArticulo->usuario_registro}}</td>
                        <td>{{ $transaccionArticulo->usuario_consumo}}</td>
                        <!--<td>{{ $transaccionArticulo->cod_sucursal}}</td>-->
                        <td>{{ $transaccionArticulo->enviado}}</td>
                            <td>
                                <div class="d-flex justify-content-around">
                                        <a href="{{route('transaccionArticulo.edit',$transaccionArticulo->nc_trans_articulo)}}" class="btn btn-warning">Editar</a>
                                    <form action="{{route('transaccionArticulo.destroy',$transaccionArticulo->nc_trans_articulo)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        <button class="btn btn-danger" type="submit" >
                                                Eliminar
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
