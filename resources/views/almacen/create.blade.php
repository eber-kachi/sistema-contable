@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Nuevo Almacen</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('almacen.store')}}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">codigo</label>
                        <input type="text" class="form-control" name="cod_almacen" id="inputEmail4">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Codigo sucursal</label>
                        <input type="text" class="form-control" id="inputPassword4" name="cod_sucursal">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Descripcion</label>
                    <input type="text" class="form-control" id="inputAddress" name="desc_almacen" placeholder="Descripcion">
                </div>
                <button class="btn btn-success btn-block">Guardad</button>
            </form>
        </div>
    </div>

@endsection
