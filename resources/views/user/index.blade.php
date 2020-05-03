@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="float-left">Lista de usuarios</h4>

                </div>
                <div class="card-body">
                    <table class="table table-hover table-bordered ">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Correo Electronico</th>
                            <th scope="col">Rol</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th scope="row">{{$count+1}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    @foreach($user->roles as $role)
                                        <span class="text-dark-50">{{$role->display_name}}</span>
                                    @endforeach
                                </td>
                                <td>
                                    {{--                                    $user->state--}}
                                    <a href="{{route('user.updateState',$user->id)}}" class="btn btn-sm @if($user->state) btn-warning text-white  @else btn-outline-warning @endif">
                                        @if($user->state)Desactivar  @else Activar @endif</a>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-around">
                                        <form action="{{route('user.destroy',$user->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" type="submit">
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

