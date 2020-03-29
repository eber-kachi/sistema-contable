@extends('layouts.app')
@section('content')
    <h2>Lista de Unidades</h2>
    <button class="btn btn-primary">
        Agregar
    </button>
    <br><br>
    <table class="table table-dark">
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
        <tr>
            @foreach($articulos as $articulo)
                <td>{{ $articulo->cod_articulo }}</td>
                <td>{{ $articulo->desc_articulo }}</td>
                <td>{{ $articulo->glosa_articulo }}</td>
                <td>{{ $articulo->costo_unidad_articulo }}</td>
                <td>{{ $articulo->saldo_cantidad_articulo }}</td>
                <td>{{ $articulo->almacen->desc_almacen }}</td>
                <td>
                    <form action="{{route('articulo.destroy',$articulo->cod_articulo)}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit" >
                            Eliminar
                        </button>
                    </form>
                    <button class="btn btn-info">
                        Editar
                    </button>
                </td>
            @endforeach
        </tr>
        </tbody>
    </table>
@endsection
