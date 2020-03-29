@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('almacen.update',$almacen->cod_almacen)}}" method="post">
                @method('put')
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">codigo</label>
                        <input type="text" class="form-control" name="cod_almacen" id="inputEmail4" value="{{$almacen->cod_almacen}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Codigo sucursal</label>
                        <input type="text" class="form-control" id="inputPassword4" name="cod_sucursal"value="{{$almacen->cod_sucursal}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Descripcion</label>
                    <input type="text" class="form-control" id="inputAddress" name="desc_almacen" placeholder="Descripcion" value="{{$almacen->desc_almacen}}">
                </div>
                <button class="btn btn-success btn-block">Guardad</button>
            </form>
        </div>
    </div>

@endsection
