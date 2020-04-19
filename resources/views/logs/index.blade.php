@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Bitacoras</h2>
                </div>
                <div class="card-body">
{{--                    {{$bitacoras}}--}}
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>User</th>
                            <th>tabla</th>
                            <th>tabla id</th>
                            <th>Query</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bitacoras as $bita)
                            <tr>
                                <td>{{ $bita->user->email }}</td>
                                <td>{{ $bita->tableName }}</td>
                                <td>{{ $bita->table_id }}</td>
                                <td>{{ $bita->actions }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
