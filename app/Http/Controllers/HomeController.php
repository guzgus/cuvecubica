<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Desarrollos;
use App\Propiedades;


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
            $propiedades = Propiedades::all();
            $propiedadesSlides = new Propiedades();
            $propiedades = $propiedadesSlides->ObtieneSlide($propiedades);
        
        return view('home.index')->with([ 
                'propiedades' => $propiedades,
                 'desarrollos' => Desarrollos::all(),
            ]);

    }


    public function about()
    {
        return view('home.about')->with([ 
                 'desarrollos' => Desarrollos::all(),
            ]);
    }


    public function log()
    {
        return view('auth.login')->with([ 
                 'desarrollos' => Desarrollos::all(),
            ]);
    }


    public function homelaravel()
    {
        return view('home');
    }

}
