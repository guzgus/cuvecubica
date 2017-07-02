<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Desarrollos;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.index')->with([ 
                 'desarrollos' => Desarrollos::all(),
            ]);

    }


    public function about()
    {
        return view('home.about')->with([ 
                 'desarrollos' => Desarrollos::all(),
            ]);
    }


    public function homelaravel()
    {
        return view('home');
    }

}
