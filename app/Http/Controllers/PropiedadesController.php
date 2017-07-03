<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Desarrollos;
use App\Sliders;


class PropiedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('propiedades.list');
    }

    public function detail()
    {
        return view('propiedades.detail');
    }

    public function desarrollo($desarrollo_id)
    {

        return view('desarrollos.desarrollo')->with([ 
                'desarrolloDetails' => Desarrollos::where('id', $desarrollo_id)->get(),
                'desarrolloSlidesGenerales' => Sliders::where('desarrollo_id', $desarrollo_id)->where('section', 'desarrollos-general')->get(),
                'desarrolloSlidesPlanos' => Sliders::where('desarrollo_id', $desarrollo_id)->where('section', 'desarrollos-planos')->get(),
                'desarrolloSlidesAvances' => Sliders::where('desarrollo_id', $desarrollo_id)->where('section', 'desarrollos-avances')->get(),
                'desarrolloSlidesAmenidades' => Sliders::where('desarrollo_id', $desarrollo_id)->where('section', 'desarrollos-amenidades')->get(),
                'desarrollos' => Desarrollos::all(),
                 ]);


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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
