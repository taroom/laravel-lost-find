<?php

namespace App\Http\Controllers;

use App\Barang;
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

    public function welcome()
    {
        $barang = Barang::all();
        return view('welcome', compact('barang'));
    }

    public function view_barang($id)
    {
        $barang = Barang::find($id);
        return view('view-barang', compact('barang'));
    }
}
