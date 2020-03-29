
@extends('layouts.app')
@section('content')

    <div class="container">
        <h1>Editar Unidad</h1>
        <form action="{{route('unidad.update',$unidad->cod_unidad)}}" method="post">
            @method('put')
            @csrf
            <div class="form-group">
                <label for="cod_unidad" class="col-12 col-form-label">Codigo Unidad</label>
                <div class="col-sm-10" >
                    <input type="text" class="form-control" name="cod_unidad" value="{{$unidad->cod_unidad}}">
                    <span class="text-danger"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="desc_unidad" class="col-12 col-form-label">Descripcion Unidad</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="desc_unidad" value="{{$unidad->desc_unidad}}">
                    <span class="text-danger"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="cod_sucursal" class="col-12 col-form-label">Codigo Sucursal</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="cod_sucursal" value="{{$unidad->cod_sucursal}}" >
                    <span class="text-danger"></span>
                </div>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="enviado" id="enviado" value="1" checked>
                <label class="form-check-label" for="enviado">
                    Enviado
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="enviado" id="enviado" value="0">
                <label class="form-check-label" for="enviado">
                    No enviado
                </label>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="col-6">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
@endsection

