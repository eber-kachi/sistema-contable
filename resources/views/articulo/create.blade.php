@extends('layouts.app')
@section('content')
    <h2>Nuevo articulo</h2>
    <br><br>
    <form action="{{route('articulo.store')}}" method="post">
        @csrf
        <label>Cod articulo:</label>
        <input class="form-control" type="text" name="cod_articulo">

        <label>Descripcion articulo:</label>
        <input class="form-control" type="text" name="desc_articulo">

        <label>Glosa articulo:</label>
        <input class="form-control" type="text" name="glosa_articulo">

        <label>Costo unidad:</label>
        <input class="form-control" type="text" name="costo_unidad_articulo">

        <label>Saldo cantidad articulo:</label>
        <input class="form-control" type="text" name="saldo_cantidad_articulo">

        <label>Stock minimo:</label>
        <input class="form-control" type="text" name="stock_minimo_articulo">

        <label>Cod sucursal:</label>
        <select class="form-control" name="cod_sucursal" id="">
            @foreach($sucursales as $key => $sucursal)
            <option value="{{$key}}">{{$sucursal}}</option>
            @endforeach
        </select>
        <label>Cod moneda:</label>
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

        <label>Unidad:</label>
        <select class="form-control" name="cod_unidad" id="">
            @foreach($unidades as $key => $unidad)
            <option value="{{$key}}">{{$unidad}}</option>
            @endforeach
        </select>
        <br>
        <input class="form-control" type="text" value="1" name="enviado" hidden>
        <input type="submit" class="btn btn-primary" value="Registrar">
    </form>
@endsection
