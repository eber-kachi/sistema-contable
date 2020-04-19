<?php

namespace App\Http\Controllers;

use App\Bitacora;
use App\Unidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UnidadController extends Controller
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
        //
        $unidades = Unidad::all();
        return view('unidad.index')->with('unidades', $unidades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('unidad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $unidad = new Unidad();
        $unidad->cod_unidad = $request->get('cod_unidad');
        $unidad->desc_unidad = $request->get('desc_unidad');
        $unidad->cod_sucursal = $request->get('cod_sucursal');
        $unidad->enviado = $request->get('enviado');
        $unidad->save();
        $queries = DB::getQueryLog();
        $jsonQuery = json_encode($queries);

        $log = new Bitacora();
        $log->user_id = Auth::id();
        $log->tableName = 'Unindad';
        $log->table_id = $unidad->cod_unidad;
        $log->actions = $jsonQuery;
        $log->save();

        return redirect()->route('unidad.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($cod_unidad)
    {
        //
        $unidad = Unidad::find($cod_unidad);
        return view('unidad.edit',  compact('unidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cod_unidad)
    {
        $unidad = Unidad::find($cod_unidad);
        $unidad->cod_unidad = $request->get('cod_unidad');
        $unidad->desc_unidad = $request->get('desc_unidad');
        $unidad->cod_sucursal = $request->get('cod_sucursal');
        $unidad->enviado = $request->get('enviado');
        $unidad->update();

        $queries = DB::getQueryLog();
        $jsonQuery = json_encode($queries);

        $log = new Bitacora();
        $log->user_id = Auth::id();
        $log->tableName = 'Unidad';
        $log->table_id = $cod_unidad;
        $log->actions = $jsonQuery;
        $log->save();

        return redirect()->route('unidad.index', $cod_unidad);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cod_unidad)
    {
        //
        $unidad = Unidad::find($cod_unidad);
        $unidad->delete();

        $queries = DB::getQueryLog();
        $jsonQuery = json_encode($queries);

        $log = new Bitacora();
        $log->user_id = Auth::id();
        $log->tableName = 'Unidad';
        $log->table_id = $cod_unidad;
        $log->actions = $jsonQuery;
        $log->save();

        return redirect()->route('unidad.index');
    }
}
