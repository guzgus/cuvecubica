<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Desarrollos;
use App\Sliders;
use Illuminate\Support\Facades\Mail;
use App\Mail\solicitarinfo;
use App\Mail\confirmarsolicitudinfo;
use Illuminate\Support\Facades\Redirect;




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



    public function solicitarinfo(Request $request)
    {

        $desarrollo_id = $request->input('desarrollo_id');
        $titleDesarrollo = $request->input('desarrollo_contacto_title');
        $name = $request->input('name');
        $msj_send = $request->input('message');
        $phone = $request->input('phone');
        $email = $request->input('email');

        $emails = ['gguzman@forcemsystems.com', 'guzman.gustavo@hotmail.com'];

        Mail::to($emails)->queue(new solicitarinfo($titleDesarrollo, $name, $msj_send, $phone, $email));

        Mail::to($email)->queue(new confirmarsolicitudinfo($titleDesarrollo, $name, $msj_send, $phone, $email));

        return Redirect::to('desarrollo/'.$desarrollo_id.'')->with('status', 'ok_send_mensaje_info');  
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
