@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-12">
           <div class="card">
               <div class="card-header">
                   <h4 class="float-left">lista de almacen</h4>
                   <a href="{{route('almacen.create')}}" class="btn btn-success float-right">Nuevo Almacen</a>
               </div>
               <div class="card-body">
                   <table class="table table-hover table-bordered ">
                       <thead>
                       <tr>
                           <th scope="col">#</th>
                           <th scope="col">Codigo Almacen</th>
                           <th scope="col">Descripcion</th>
                           <th scope="col">Condigo Sucursal</th>
                           <th scope="col">Acciones</th>
                       </tr>
                       </thead>
                       <tbody>
                       @foreach($almacenes as $almacen)
                           <tr>
                               <th scope="row">{{$count+1}}</th>
                               <td>{{$almacen->cod_almacen}}</td>
                               <td>{{$almacen->desc_almacen}}</td>
                               <td>{{$almacen->cod_sucursal}}</td>
                               <td>
                                   <div class="d-flex justify-content-around">
                                   <a href="{{route('almacen.edit',$almacen->cod_almacen)}}" class="btn btn-warning">Editar</a>
                                   <form action="{{route('almacen.destroy',$almacen->cod_almacen)}}" method="post">
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

