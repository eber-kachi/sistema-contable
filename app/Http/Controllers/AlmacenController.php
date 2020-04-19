<?php

namespace App\Http\Controllers;

use App\Almacen;
use App\Bitacora;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AlmacenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $almacenes = Almacen::all();
        $count=0;
//dd($almacenes);
        return view('almacen.index', compact('almacenes','count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('almacen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::connection()->enableQueryLog();
//        dd($request);

        $almacen = new Almacen();
        $almacen->cod_almacen = $request->cod_almacen;
        $almacen->desc_almacen = $request->desc_almacen;
        $almacen->cod_sucursal = $request->cod_sucursal;
        $almacen->enviado = '0';
        $almacen->save();

        $queries = DB::getQueryLog();
        $jsonQuery = json_encode($queries);

        $log = new Bitacora();
        $log->user_id = Auth::id();
        $log->tableName = 'Almacen';
        $log->table_id = $almacen->cod_almacen;
        $log->actions = $jsonQuery;
        $log->save();

        return redirect()->route('almacen.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $almacen = Almacen::find($id);
        return view('almacen.edit', compact('almacen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::connection()->enableQueryLog();

        $almacen = Almacen::find($id);
        $almacen->desc_almacen = $request->desc_almacen;
//        $almacen->cod_sucursal = $request->cod_sucursal;
        $almacen->save();

        $queries = DB::getQueryLog();
        $jsonQuery = json_encode($queries);

        $log = new Bitacora();
        $log->user_id = Auth::id();
        $log->tableName = 'Almacen';
        $log->table_id = $almacen->cod_almacen;
//        $log->actions= ( isset($queries[1]))? json_encode($queries[1],true) : json_encode($queries,true) ;
        $log->actions = $jsonQuery;
        $log->save();


        return redirect()->route('almacen.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        dd($id);
        DB::connection()->enableQueryLog();
        Almacen::find($id)->delete();
        $queries = DB::getQueryLog();
        $jsonQuery = json_encode($queries);

        $log = new Bitacora();
        $log->user_id = Auth::id();
        $log->tableName = 'Almacen';
        $log->table_id = $id;
        $log->actions = $jsonQuery;
        $log->save();

        return redirect()->route('almacen.index');
    }
}
