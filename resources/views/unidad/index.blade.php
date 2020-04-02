@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2 class="float-left">Lista de Unidades</h2>
                <a href="{{route('unidad.create')}}" class="btn btn-primary float-right">
                    Agregar
                </a>
            </div>
    <div class="card-body">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Codigo</th>
            <th>Desc Unidad</th>
            <th>Sucursal</th>
            <th>Enviado</th>
            <th>Opciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($unidades as $unidad)
            <tr>
                <td>{{ $unidad->cod_unidad }}</td>
                <td>{{ $unidad->desc_unidad }}</td>
                <td>{{ $unidad->cod_sucursal }}</td>
                <td>{{ $unidad->enviado }}</td>
                <td>
                <div class="d-flex justify-content-around">
                                        <a href="{{route('unidad.edit',$unidad->cod_unidad)}}" class="btn btn-warning">Editar</a>
                                    <form action="{{route('unidad.destroy',$unidad->cod_unidad)}}" method="post">
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
