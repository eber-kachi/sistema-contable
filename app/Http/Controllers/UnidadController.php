<?php

namespace App\Http\Controllers;

use App\Unidad;
use Illuminate\Http\Request;

class UnidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $unidad->desc_unidad= $request->get('desc_unidad');
        $unidad->cod_sucursal = $request->get('cod_sucursal');
        $unidad->enviado = $request->get('enviado');
        $unidad->save();
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
    public function edit($id)
    {
        //
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
        $unidad->update($request->all());

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

        return redirect()->route('unidad.index');
    }
}
