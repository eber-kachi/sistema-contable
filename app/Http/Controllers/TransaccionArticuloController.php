<?php

namespace App\Http\Controllers;

use App\TransaccionArticulo;
use App\Articulo;
use App\Almacen;
use App\Moneda;
use App\Unidad;
use Illuminate\Http\Request;

class TransaccionArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $almacenes = Almacen::pluck('cod_almacen','desc_almacen')->all();        
        //  $grupoAlmacenes = GrupoAlmacen::pluck('')->all();
          $articulos = Articulo::pluck('cod_articulo','desc_articulo')->all();      
          $monedas = Moneda::pluck('cod_moneda')->all();      
        //  $transacciones = Transaccion::pluck('')->all();      
          //$sucursales = Sucursal::pluck('cod_sucursal','desc_almacen')->all();   
          $sucursales = Almacen::pluck('desc_almacen','cod_sucursal')->all();   
          $unidades = Unidad::pluck('cod_unidad','desc_unidad')->all();
          return view('transaccionArticulo.create',
          compact('almacenes','sucursales', 'unidades', 'monedas','articulos'));
          
    }


      

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TransaccionArticulo::create($request->all());
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
        $almacenes = Almacen::pluck('desc_almacen','cod_almacen')->all();        
        //  $grupoAlmacenes = GrupoAlmacen::pluck('')->all();
          $articulos = Articulo::pluck('desc_articulo','cod_articulo')->all();      
          $monedas = Moneda::pluck('cod_moneda')->all();      
        //  $transacciones = Transaccion::pluck('')->all();      
          //$sucursales = Sucursal::pluck('desc_almacen','cod_sucursal')->all(); 
          $sucursales = Almacen::pluck('desc_almacen','cod_sucursal')->all();     
          $unidades = Unidad::pluck('desc_unidad','cod_unidad')->all();
          return view('transaccionArticulo.edit',
          compact('transaccionArticulo','articulo','almacenes','sucursales','unidades','monedas'));
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
        return redirect()->route('transaccionArticulo.index');
    }
}
