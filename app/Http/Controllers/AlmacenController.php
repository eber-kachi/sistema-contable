<?php

namespace App\Http\Controllers;

use App\Almacen;
use Illuminate\Http\Request;

class AlmacenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $almacenes = Almacen::all();

        return view('almacen.index', compact('almacenes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return view('almacen.create', compact('almacenes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $almacen = new Almacen();
        $almacen->desc_almacen = $request->desc_almacen;
        $almacen->cod_sucursal = $request->cod_sucursal;
        $almacen->save();
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
        return view('almacen.create', compact('almacen'));
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
        $almacen = Almacen::find($id);
        $almacen->desc_almacen = $request->desc_almacen;
//        $almacen->cod_sucursal = $request->cod_sucursal;
        $almacen->save();

        return view('almacen.create', compact('almacen'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Almacen::find($id)->delete();

        return view('almacen.create', compact('almacen'));
    }
}
