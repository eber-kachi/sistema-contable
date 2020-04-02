@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="float-left">Lista de articulos</h2>
                    <a href="{{route('articulo.create')}}" class="btn btn-primary float-right">
                        Agregar
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Desc articulo</th>
                            <th>Glosa</th>
                            <th>Costo</th>
                            <th>Saldo</th>
                            <th>Almacen</th>
                            <th>Moneda</th>
                            <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($articulos as $articulo)
                            <tr>
                                <td>{{ $articulo->cod_articulo }}</td>
                                <td>{{ $articulo->desc_articulo }}</td>
                                <td>{{ $articulo->glosa_articulo }}</td>
                                <td>{{ $articulo->costo_unidad_articulo }}</td>
                                <td>{{ $articulo->saldo_cantidad_articulo }}</td>
                                <td>{{ $articulo->almacen->desc_almacen }}</td>
                                <td>{{ $articulo->moneda->cod_moneda }}</td>
                                <td>
                                    <div class="d-flex justify-content-around">
                                        <a href="{{route('articulo.edit', $articulo->cod_articulo)}}" class="btn btn-warning ">Editar</a>

                                        <form action="{{route('articulo.destroy',$articulo->cod_articulo)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger " type="submit">
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
