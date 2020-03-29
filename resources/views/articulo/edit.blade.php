@extends('layouts.app')
@section('content')
    <h2>Actualizar articulo "{{ $articulo->desc_articulo }}"</h2>
    <br><br>
    <form action="{{route('articulo.update',$articulo->cod_articulo)}}" method="post">
        @method('put')
        @csrf
        <label>Cod articulo:</label>
        <input class="form-control" type="text" name="cod_articulo" value="{{$articulo->cod_articulo}}">

        <label>Descripcion articulo:</label>
        <input class="form-control" type="text" name="desc_articulo" value="{{$articulo->desc_articulo}}">

        <label>Glosa articulo:</label>
        <input class="form-control" type="text" name="glosa_articulo" value="{{$articulo->glosa_articulo}}">

        <label>Costo unidad:</label>
        <input class="form-control" type="text" name="costo_unidad_articulo" value="{{$articulo->costo_unidad_articulo}}">

        <label>Saldo cantidad articulo:</label>
        <input class="form-control" type="text" name="saldo_cantidad_articulo" value="{{$articulo->saldo_cantidad_articulo}}">

        <label>Stock minimo:</label>
        <input class="form-control" type="text" name="stock_minimo_articulo" value="{{$articulo->stock_minimo_articulo}}">

        <label>Cod sucursal:</label>
        <select class="form-control" name="cod_sucursal" value="{{ $articulo->cod_sucursal}}">
            <option value="{{ $articulo->sucursal->cod_sucursal }}" selected>{{ $articulo->sucursal->desc_almacen }}</option>
            @foreach($sucursales as $key => $sucursal)
                <option value="{{$key}}">{{$sucursal}}</option>
            @endforeach
        </select>
        <label>Cod moneda:</label>
        <select class="form-control" name="cod_moneda" value="{{$articulo->cod_moneda}}">
            <option value="{{$articulo->moneda->cod_moneda}}" selected>{{$articulo->moneda->cod_moneda}} </option>
            @foreach($monedas as $moneda)
                <option value="{{$moneda}}">{{$moneda}}</option>
            @endforeach
        </select>
        <label>Almacen:</label>
        <select class="form-control" name="cod_almacen" value="{{$articulo->cod_almacen}}">
            <option value="{{$articulo->almacen->cod_almacen}}" selected>{{$articulo->almacen->desc_almacen}} </option>
            @foreach($almacenes as $key => $almacen)
                <option value="{{$key}}">{{$almacen}}</option>
            @endforeach
        </select>
        <label>Unidad:</label>
        <select class="form-control" name="cod_unidad" value="{{$articulo->cod_unidad}}">
            <option value="{{ $articulo->unidad->cod_unidad }}">{{ $articulo->unidad->cod_unidad }}</option>
            @foreach($unidades as $key => $unidad)
                <option value="{{$key}}">{{$unidad}}</option>
            @endforeach
        </select>
        <br>
        <input class="form-control" type="text" value="1" name="enviado" hidden>
        <input type="submit" class="btn btn-primary" value="Registrar">
    </form>
@endsection
