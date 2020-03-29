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
            @foreach($unidades as $unidad)
                <td>{{ $unidad->cod_unidad }}</td>
                <td>{{ $unidad->desc_unidad }}</td>
                <td>{{ $unidad->cod_sucursal }}</td>
                <td>{{ $unidad->enviado }}</td>
                <td>
                    <form action="{{route('unidad.destroy',$unidad->cod_unidad)}}">
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
