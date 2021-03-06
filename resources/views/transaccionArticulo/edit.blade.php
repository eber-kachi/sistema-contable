@extends('layouts.app')
@section('content')

<div class="card">
        <div class="card-header">
            <h4 class="card-title">Actualizar transaccionArticulo "{{ $transaccionArticulo->nc_trans_articulo }}"</h4>
        </div>
        <div class="card-body">
    <form action="{{route('transaccionArticulo.update',$transaccionArticulo->nc_trans_articulo)}}" method="post">
        @method('put')
        @csrf
        <label>Número Clave:</label>
        <input class="form-control" type="text" name="nc_trans_articulo" value="{{$transaccionArticulo->nc_trans_articulo}}">

        </select>
        <label>Codigo sucursal:</label>
        <select class="form-control" name="cod_sucursal" value="{{ $transaccionArticulo->cod_sucursal}}">
            @foreach($sucursales as $key => $sucursal)
            <option value="{{$key}}">{{$sucursal}}</option>
            @endforeach
        </select>
        <label>Artículo:</label>
        <select class="form-control" name="cod_articulo" value="{{$transaccionArticulo->cod_articulo}}">
            <option value="{{$transaccionArticulo->articulo->cod_articulo}}" selected>{{$transaccionArticulo->articulo->desc_articulo}} </option>
            @foreach($transaccionArticulo as $key => $articulo)
                <option value="{{$key}}">{{$articulo}}</option>
            @endforeach
        </select>
        <label>Cod moneda:</label>
        <select class="form-control" name="cod_moneda" value="{{$transaccionArticulo->cod_moneda}}">
            <option value="{{$transaccionArticulo->moneda->cod_moneda}}" selected>{{$transaccionArticulo->moneda->cod_moneda}} </option>
            @foreach($monedas as $moneda)
                <option value="{{$moneda}}">{{$moneda}}</option>
            @endforeach
        </select>
        <label>Cuenta Solicitud:</label>
        <input class="form-control" type="text" name="cuenta_solicitud" value="{{$transaccionArticulo->cuenta_solicitud}}">
        <label>Cuenta Consumo:</label>
        <input class="form-control" type="text" name="cuenta_consumo" value="{{$transaccionArticulo->cuenta_consumo}}">
        <label>Fecha Transacción:</label>
        <input class="form-control" type="text" name="fecha_trans_articulo" value="{{$transaccionArticulo->fecha_trans_articulo}}">
        <label>Hora Transacción:</label>
        <input class="form-control" type="text" name="hora_trans_articulo" value="{{$transaccionArticulo->hora_trans_articulo}}">
        <label>Glosa Transacción:</label>
        <input class="form-control" type="text" name="glosa_trans_articulo" value="{{$transaccionArticulo->glosa_trans_articulo}}">
        <label>Cantidad Transacción Articulo:</label>
        <input class="form-control" type="text" name="cantidad_trans_articulo" value="{{$transaccionArticulo->cantidad_trans_articulo}}">
        <label>Costo Unidad:</label>
        <input class="form-control" type="text" name="costo_unidad_articulo" value="{{$transaccionArticulo->costo_unidad_articulo}}">
        <label>Saldo Cantidad:</label>
        <input class="form-control" type="text" name="saldo_cantidad_articulo" value="{{$transaccionArticulo->saldo_cantidad_articulo}}">
        <label>Saldo Costo:</label>
        <input class="form-control" type="text" name="saldo_costo_articulo" value="{{$transaccionArticulo->saldo_costo_articulo}}">
        <label>Tipo de Cambio Moneda:</label>
        <input class="form-control" type="text" name="tipo_cambio_moneda" value="{{$transaccionArticulo->tipo_cambio_moneda}}">
        <label>Usuario de Registro:</label>
        <input class="form-control" type="text" name="usuario_registro" value="{{$transaccionArticulo->usuario_registro}}">
        <label>Usuario de Consumo:</label>
        <input class="form-control" type="text" name="usuario_consumo" value="{{$transaccionArticulo->usuario_consumo}}">
        <label>Enviado:</label>
        <input class="form-control" type="text" name="enviado" value="{{$transaccionArticulo->enviado}}">
 
        <br>
        <input class="form-control" type="text" value="1" name="enviado" hidden>
        <input type="submit" class="btn btn-primary" value="Registrar">
    </form>
    </div>
    </div>


