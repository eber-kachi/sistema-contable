<?php

namespace App\Http\Controllers;

use App\Bitacora;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getBitacora()
    {
        $bitacoras = Bitacora::with('user')->paginate(10);
        // $bitacoras = Bitacora::orderBy('nombre','asc')->get();
        return view('logs.index', compact('bitacoras'));
    }

}
