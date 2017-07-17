<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Desarrollos;
use App\Propiedades;
use App\CaracteristicasPropiedades;
use App\Sliders;
use Illuminate\Support\Facades\Mail;
use App\Mail\solicitarinfo;
use App\Mail\confirmarsolicitudinfo;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;




class PropiedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('propiedades.list')->with([             
                'desarrollos' => Desarrollos::all()
                 ]);
    }

    public function detail()
    {
        return view('propiedades.detail')->with([             
                'desarrollos' => Desarrollos::all()
                 ]);
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

    public function editarDesarrollo($desarrollo_id)
    {

        return view('desarrollos.editarDesarrollo')->with([ 
                'desarrolloDetails' => Desarrollos::where('id', $desarrollo_id)->get(),
                'desarrollos' => Desarrollos::all(),
                 ]);


    }

    public function registrarDesarrollo()
    {

        return view('desarrollos.registrarDesarrollo')->with([
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
    public function storeDesarrollo(Request $request)
    {

            $request->logo->store('public/logos');

            $desarrollo = new Desarrollos;
            $desarrollo->fill($request->all());
            $desarrollo->logo=$request->logo->hashName();
            $desarrollo->save();        
            $desarrollo_id = $desarrollo->id;
            
            return Redirect::to('desarrollo/'.$desarrollo_id.'')->with('status', 'ok_create_desarrollo');  
            
    }


    public function editDesarrollo(Request $request)
    {

        if($request->logo){ $request->logo->store('public/logos'); }

            $desarrollo = Desarrollos::find($request->desarrollo_id);;
            $desarrollo->fill($request->all());
            if($request->logo){ $desarrollo->logo=$request->logo->hashName(); }
            $desarrollo->save();        
            $desarrollo_id = $desarrollo->id;
            
            return Redirect::to('desarrollo/'.$desarrollo_id.'')->with('status', 'ok_edit_desarrollo');  
            
    }

    public function storeSlides(Request $request)
    {
        
            $slides =  $request->file('slides');

            foreach ($slides as $slide) {

                $slide->store('public/slides');
                $sliders = new Sliders;
                $sliders->fill($request->all());
                $sliders->file=$slide->hashName();
                $sliders->extension=$slide->extension();
                $sliders->save();        
                $sliders_id = $sliders->id;
            }
            
            return Redirect::to('desarrollo/'.$request->input('desarrollo_id').'')->with('status', 'ok_create_slide');  
            
    }

    public function deleteSlides(Request $request)
    {
            $file_delete =  $request->input('file_delete');
            $slide_id =  $request->input('slide_id');

            $deletes = Sliders::find($slide_id);
            $deletes->delete();

            Storage::delete('public/slides/'.$file_delete.'');
                
            return Redirect::to('desarrollo/'.$request->input('desarrollo_id').'')->with('status', 'ok_delete_slide');  
            
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
 
    public function registrarPropiedad()
    {

        return view('propiedades.registrarPropiedades')->with([
                'desarrollos' => Desarrollos::all(),
                 ]);

    }

        public function storePropiedad(Request $request)
    {

            $propiedad = new Propiedades;
            $propiedad->fill($request->all());
            $propiedad->save();        
            $propiedad_id = $propiedad->id;

            $CaracteristicasPropiedades = new CaracteristicasPropiedades;
            $CaracteristicasPropiedades->fill($request->all());
            $CaracteristicasPropiedades->propiedad_id=$propiedad_id;
            $CaracteristicasPropiedades->save();        
            $CaracteristicasPropiedades_id = $CaracteristicasPropiedades->id;

            exit;
            
            return Redirect::to('propiedad/'.$propiedad_id.'')->with('status', 'ok_create_propiedad');  
            
    }


}




