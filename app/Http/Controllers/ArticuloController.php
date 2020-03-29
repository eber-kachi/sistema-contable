<?php

namespace App\Http\Controllers;

use App\Articulo;
use App\Almacen;
use App\Moneda;
use App\Unidad;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = Articulo::all();
        return view('articulo.index', compact('articulos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $almacenes = Almacen::pluck('desc_almacen','cod_almacen')->all();
        $sucursales = Almacen::pluck('desc_almacen','cod_sucursal')->all();
        $unidades = Unidad::pluck('desc_unidad','cod_unidad')->all();
        $monedas = Moneda::pluck('cod_moneda')->all();
        return view('articulo.create',
        compact('almacenes','sucursales', 'unidades', 'monedas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Articulo::create($request->all());
        return redirect()->route('articulo.index');
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
        $articulo = Articulo::findOrFail($id);
        $almacenes = Almacen::pluck('desc_almacen','cod_almacen')->all();
        $sucursales = Almacen::pluck('desc_almacen','cod_sucursal')->all();
        $unidades = Unidad::pluck('desc_unidad','cod_unidad')->all();
        $monedas = Moneda::pluck('cod_moneda')->all();
        return view('articulo.edit',
            compact('articulo','almacenes','sucursales','unidades','monedas'));
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
        $articulo = Articulo::findOrFail($id);
        $articulo->update($request->all());
        return redirect()->route('articulo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo = Articulo::findOrFail($id);
        $articulo->delete();
        return redirect()->route('articulo.index');
    }
}
