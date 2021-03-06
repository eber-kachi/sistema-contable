<?php

namespace App\Http\Controllers;

use App\TransaccionArticulo;
use App\Articulo;
use App\Almacen;
use App\Moneda;
use App\Unidad;
use App\Bitacora;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransaccionArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        DB::connection()->enableQueryLog();

    }
    public function index()
    {
        $transaccionArticulos = TransaccionArticulo::all();
        return view('transaccionArticulo.index', compact('transaccionArticulos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $almacenes = Almacen::pluck('cod_almacen')->all();
        //  $grupoAlmacenes = GrupoAlmacen::pluck('')->all();
          $articulos = Articulo::pluck('cod_articulo','desc_articulo')->all();
          $monedas = Moneda::pluck('cod_moneda')->all();
        //  $transacciones = Transaccion::pluck('')->all();
          //$sucursales = Sucursal::pluck('cod_sucursal','desc_almacen')->all();
          $sucursales = Almacen::pluck('cod_sucursal')->all();
          return view('transaccionArticulo.create',
          compact('almacenes','sucursales', 'monedas','articulos'));

    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transa = TransaccionArticulo::create($request->all());
        $queries = DB::getQueryLog();
        $jsonQuery = json_encode($queries);

        $log = new Bitacora();
        $log->user_id = Auth::id();
        $log->tableName = 'Transaccion Articulo';
        $log->table_id = $transa->nc_trans_articulo;
        $log->actions = $jsonQuery;
        $log->save();

        return redirect()->route('transaccionArticulo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaccionArticulo = TransaccionArticulo::findOrFail($id);
        $almacenes = Almacen::pluck('cod_almacen')->all();
        //  $grupoAlmacenes = GrupoAlmacen::pluck('')->all();
          $articulos = Articulo::pluck('cod_articulo','desc_articulo')->all();
          $monedas = Moneda::pluck('cod_moneda')->all();
        //  $transacciones = Transaccion::pluck('')->all();
          //$sucursales = Sucursal::pluck('cod_sucursal','desc_almacen')->all();
          $sucursales = Almacen::pluck('cod_sucursal')->all();
          return view('transaccionArticulo.edit',
          compact('transaccionArticulo','articulos','almacenes','sucursales','monedas'));
  }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $transaccionArticulo = TransaccionArticulo::findOrFail($id);
        $transaccionArticulo->update($request->all());

        $queries = DB::getQueryLog();
        $jsonQuery = json_encode($queries);

        $log = new Bitacora();
        $log->user_id = Auth::id();
        $log->tableName = 'Transaccion Articulo';
        $log->table_id = $id;
        $log->actions = $jsonQuery;
        $log->save();

        return redirect()->route('transaccionArticulo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaccionArticulo = transaccionArticulo::findOrFail($id);
        $transaccionArticulo->delete();

        $queries = DB::getQueryLog();
        $jsonQuery = json_encode($queries);

        $log = new Bitacora();
        $log->user_id = Auth::id();
        $log->tableName = 'Transaccion Articulo';
        $log->table_id = $id;
        $log->actions = $jsonQuery;
        $log->save();

        return redirect()->route('transaccionArticulo.index');
    }
}
