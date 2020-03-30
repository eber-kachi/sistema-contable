@extends('layouts.app')
@section('content')
    <h2>Nueva Transacción</h2>
    <br><br>
    <form action="{{route('articulo.store')}}" method="post">
        @csrf
        <label>Número Clave:</label>
        <input class="form-control" type="text" name="nc_trans_articulo">
        <label>Cuenta Solicitud:</label>
        <input class="form-control" type="text" name="cuenta_solicitud">
        <label>Cuenta Consumo:</label>
        <input class="form-control" type="text" name="cuenta_consumo">
        <label>Fecha Transacción:</label>
        <input class="form-control" type="text" name="fecha_trans_articulo">
        <label>Hora Transacción:</label>
        <input class="form-control" type="text" name="hora_trans_articulo">
        <label>Glosa Transacción:</label>
        <input class="form-control" type="text" name="glosa_trans_articulo">
        <label>Cantidad Articulo:</label>
        <input class="form-control" type="text" name="cantidad_trans_articulo">
        <label>Costo Unidad:</label>
        <input class="form-control" type="text" name="costo_unidad_articulo">
        <label>Saldo Cantidad:</label>
        <input class="form-control" type="text" name="saldo_cantidad_articulo">
        <label>Saldo Costo:</label>
        <input class="form-control" type="text" name="saldo_costo_articulo">
        <label>Tipo de Cambio Moneda:</label>
        <input class="form-control" type="text" name="tipo_cambio_moneda">
        <label>Usuario de Registro:</label>
        <input class="form-control" type="text" name="usuario_registro">
        <label>Usuario de Consumo:</label>
        <input class="form-control" type="text" name="usuario_consumo">

        <label>Código Sucursal:</label>
        <select class="form-control" name="cod_sucursal" id="">
            @foreach($sucursales as $key => $sucursal)
            <option value="{{$key}}">{{$sucursal}}</option>
            @endforeach
        </select>
        <label>Código Moneda:</label>
        <select class="form-control" name="cod_moneda" id="">
            @foreach($monedas as $moneda)
            <option value="{{$moneda}}">{{$moneda}}</option>
            @endforeach
        </select>
        <label>Almacen:</label>
        <select class="form-control" name="cod_almacen" id="">
            @foreach($almacenes as $key => $almacen)
            <option value="{{$key}}">{{$almacen}}</option>
            @endforeach
        </select>
        <label>Artículo:</label>
        <select class="form-control" name="cod_articulo" id="">
            @foreach($articulos as $key => $articulo)
                <option value="{{$key}}">{{$articulo}}</option>
            @endforeach
        </select>
        <br>
        <input class="form-control" type="text" value="1" name="enviado" hidden>
        <input type="submit" class="btn btn-primary" value="Registrar">
    </form>
@endsection
