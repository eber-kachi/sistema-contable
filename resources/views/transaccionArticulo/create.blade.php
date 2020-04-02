@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Nueva Transacción</h4>
        </div>
        <div class="card-body">

    <?php
        date_default_timezone_set('America/La_Paz');
        $fecha_actual=date("Y-m-d");
        $hora_actual=date("H:i:s");
    ?>
    <form action="{{route('transaccionArticulo.store')}}" method="post">
        @csrf
        <label>Codigo Transaccion Articulo:</label>
        <input class="form-control" type="int" name="nc_trans_articulo">
        <label>Codigo sucursal:</label>
        <select class="form-control" name="cod_sucursal" id="">
            @foreach($sucursales as $key => $sucursal)
            <option value="{{$key}}">{{$sucursal}}</option>
            @endforeach
        </select>
        <!--
        <label>Codigo Almacen:</label>
        <select class="form-control" name="cod_almacen" id="">
            @foreach($almacenes as $key => $almacen)
            <option value="{{$key}}">{{$almacen}}</option>
            @endforeach
        </select>-->
        <label>Código Artículo:</label>
        <select class="form-control" name="cod_articulo" id="">
            @foreach($articulos as $articulo)
            <option value="{{$articulo}}">{{$articulo}}</option>
            @endforeach
        </select>
        <label>Codigo moneda:</label>
        <select class="form-control" name="cod_moneda" id="">
            @foreach($monedas as $moneda)
            <option value="{{$moneda}}">{{$moneda}}</option>
            @endforeach
        </select>
        <label>Cuenta Solicitud:</label>
        <input class="form-control" type="text" name="cuenta_solicitud">
        <label>Cuenta Consumo:</label>
        <input class="form-control" type="text" name="cuenta_consumo">
        <label>Fecha Transacción:</label>
        <input class="form-control" type="date" name="fecha_trans_articulo" value="<?= $fecha_actual?>">
        <label>Hora Transacción:</label>
        <input class="form-control" type="text" name="hora_trans_articulo" value="<?= $hora_actual?>">
        <label>Glosa Transacción:</label>
        <input class="form-control" type="text" name="glosa_trans_articulo">
        <label>Cantidad Transacción Articulo:</label>
        <input class="form-control" type="int" name="cantidad_trans_articulo">
        <label>Saldo Cantidad:</label>
        <input class="form-control" type="int" name="saldo_cantidad_articulo">
        <label>Saldo Costo:</label>
        <input class="form-control" type="int" name="saldo_costo_articulo">
        <label>Costo unidad articulo:</label>
        <input class="form-control" type=number step=0.01 name="costo_unidad_articulo">
        <label>Tipo de Cambio Moneda:</label>
        <input class="form-control" type=number step=0.01 name="tipo_cambio_moneda">
        <label>Usuario de Registro:</label>
        <input class="form-control" type="text" name="usuario_registro">
        <label>Usuario de Consumo:</label>
        <input class="form-control" type="text" name="usuario_consumo">



        <input class="form-control" type="hidden" value="1" name="enviado" >
        <input type="submit" class="btn btn-primary" value="Registrar">
    </form>
        </div>
    </div>
@endsection
