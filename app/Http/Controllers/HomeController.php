<?php

namespace App\Http\Controllers;

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
        return view('home.index');
    }
    public function menu_dir()
    {
        return view('home.menu_dir');
    }
    public function menu_pindah_ruangan()
    {
        return view('home.menu_pindah_ruangan');
    }
}
