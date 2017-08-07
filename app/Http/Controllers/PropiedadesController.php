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
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;




class PropiedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            $propiedades = Propiedades::paginate(10);
            $propiedadesSlides = new Propiedades();
            $propiedades = $propiedadesSlides->ObtieneSlide($propiedades);

        return view('propiedades.list')->with([  
                'origen' => 'propiedades',
                'propiedades' => $propiedades,
                'desarrollos' => Desarrollos::all(),
                'recamaras' => propiedades::select('recamaras')->groupBy('recamaras')->get(),
                'estacionamientos' => propiedades::select('estacionamientos')->groupBy('estacionamientos')->get(),
                'banios' => propiedades::select('banios')->groupBy('banios')->get(),
                'localidades' => propiedades::select('localidad')->groupBy('localidad')->get(),
                'categorias' => propiedades::select('categoria')->groupBy('categoria')->get(),
                'precio_max' => DB::table('propiedades')->max('precio'),
                'precio_min' => DB::table('propiedades')->min('precio'),
                'status_propiedades' => propiedades::select('status')->groupBy('status')->get(),
                 ]);
    }

    public function searchPropiedades()
    {

        if(Input::get('origen')=='home'){
            $origen="home";
        }else{
            $origen="busqueda";
        }

        $precio_form=Input::get('precio');
        $rango_precio = explode(",",$precio_form);
        $precio_minimo = $rango_precio[0]; 
        $precio_maximo = $rango_precio[1];
        
        $precio_max= DB::table('propiedades')->max('precio');
        $precio_min= DB::table('propiedades')->min('precio');


       

        $propiedades = Propiedades::select('*')
                                    ->where('localidad', 'like', Input::get('localidad'))
                                    ->get();

        $propiedades = collect($propiedades);
        
        if(Input::get('categoria')!=""){$propiedades = $propiedades->where('categoria', 'like', Input::get('categoria'));}

        if(Input::get('status')!=""){$propiedades = $propiedades->where('status', 'like', Input::get('status'));}

        if(Input::get('recamaras')!=""){$propiedades = $propiedades->where('recamaras', 'like', Input::get('recamaras'));}

        if(Input::get('banios')!=""){$propiedades = $propiedades->where('banios', 'like', Input::get('banios'));}
        
        if(Input::get('estacionamientos')!=""){$propiedades = $propiedades->where('estacionamientos', 'like', Input::get('estacionamientos'));}

        if(($precio_maximo!=$precio_max || $precio_minimo!=$precio_min)&&($precio_maximo!=0 && $precio_minimo!=0)){
            $propiedades = $propiedades->Where('precio', '>=', $precio_minimo)->Where('precio', '<=', $precio_maximo);}
        
        $propiedades->all();



            $propiedadesSlides = new Propiedades();
            $propiedades = $propiedadesSlides->ObtieneSlide($propiedades);

        return view('propiedades.list')->with([  
                'origen' => $origen,
                'propiedades' => $propiedades,
                'desarrollos' => Desarrollos::all(),
                'recamaras' => propiedades::select('recamaras')->groupBy('recamaras')->get(),
                'estacionamientos' => propiedades::select('estacionamientos')->groupBy('estacionamientos')->get(),
                'banios' => propiedades::select('banios')->groupBy('banios')->get(),
                'localidades' => propiedades::select('localidad')->groupBy('localidad')->get(),
                'categorias' => propiedades::select('categoria')->groupBy('categoria')->get(),
                'precio_max' => DB::table('propiedades')->max('precio'),
                'precio_min' => DB::table('propiedades')->min('precio'),
                'status_propiedades' => propiedades::select('status')->groupBy('status')->get(),
                 ]);
    }



    public function searchQuickly($campo, $parametro)
    {

        if($parametro=="playa"){

        $propiedades = Propiedades::select('*')
                                    ->where('localidad', 'like', '2')
                                    ->Orwhere('localidad', 'like', '3')
                                    ->Orwhere('localidad', 'like', '26')
                                    ->Orwhere('localidad', 'like', '25')
                                    ->Orwhere('localidad', 'like', '18')
                                    ->Orwhere('localidad', 'like', '14')
                                    ->Orwhere('localidad', 'like', '16')
                                    ->Orwhere('localidad', 'like', '6')
                                    ->Orwhere('localidad', 'like', '12')
                                    ->Orwhere('localidad', 'like', '20')
                                    ->Orwhere('localidad', 'like', '7')
                                    ->Orwhere('localidad', 'like', '23')
                                    ->Orwhere('localidad', 'like', '31')
                                    ->Orwhere('localidad', 'like', '4')
                                    ->Orwhere('localidad', 'like', '27')
                                    ->Orwhere('localidad', 'like', '30')
                                    ->Orwhere('localidad', 'like', '28')
                                    ->get();
        }else{

        $propiedades = Propiedades::select('*')
                                    ->where($campo, 'like', '%'.$parametro.'%')
                                    ->get();
        }


        $propiedadesSlides = new Propiedades();
        $propiedades = $propiedadesSlides->ObtieneSlide($propiedades);

        return view('propiedades.list')->with([  
                'origen' => 'searchQuickly',
                'propiedades' => $propiedades,
                'desarrollos' => Desarrollos::all(),
                'recamaras' => propiedades::select('recamaras')->groupBy('recamaras')->get(),
                'estacionamientos' => propiedades::select('estacionamientos')->groupBy('estacionamientos')->get(),
                'banios' => propiedades::select('banios')->groupBy('banios')->get(),
                'localidades' => propiedades::select('localidad')->groupBy('localidad')->get(),
                'categorias' => propiedades::select('categoria')->groupBy('categoria')->get(),
                'precio_max' => DB::table('propiedades')->max('precio'),
                'precio_min' => DB::table('propiedades')->min('precio'),
                'status_propiedades' => propiedades::select('status')->groupBy('status')->get(),
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

        $propiedades=Propiedades::select('*')->where('desarrollo_id', '=', $desarrollo_id)->get();
        $propiedadesSlides = new Propiedades();
        $propiedades = $propiedadesSlides->ObtieneSlide($propiedades);




        return view('desarrollos.desarrollo')->with([ 
                'desarrolloDetails' => Desarrollos::where('id', $desarrollo_id)->get(),
                'desarrolloSlidesGenerales' => Sliders::where('desarrollo_id', $desarrollo_id)->where('section', 'desarrollos-general')->get(),
                'desarrolloSlidesPlanos' => Sliders::where('desarrollo_id', $desarrollo_id)->where('section', 'desarrollos-planos')->get(),
                'desarrolloSlidesAvances' => Sliders::where('desarrollo_id', $desarrollo_id)->where('section', 'desarrollos-avances')->get(),
                'desarrolloSlidesAmenidades' => Sliders::where('desarrollo_id', $desarrollo_id)->where('section', 'desarrollos-amenidades')->get(),
                'desarrollos' => Desarrollos::all(),
                'origen' => 'desarrollodetail',
                'propiedades' => $propiedades,
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

        return Redirect::to($request->input('tipo_inmueble').'/'.$desarrollo_id.'')->with('status', 'ok_send_mensaje_info');  
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

            print_r( $request->all());


            $link_video = str_replace("watch?v=", "embed/", $request->link_video);

           if($request->logo){ $request->logo->store('public/logos'); }

            $desarrollo = new Desarrollos;
                    // if($request->logo){ $desarrollo->logo=$request->logo->hashName(); }
            $desarrollo->fill($request->all());
            // $desarrollo->title=$request->title;
            // $desarrollo->latitud=$request->latitud;
            // $desarrollo->link_video=$link_video;
            $desarrollo->save();        
            $desarrollo_id = $desarrollo->id;
            
            return Redirect::to('desarrollo/'.$desarrollo_id.'')->with('status', 'ok_create_desarrollo');  
            
    }


    public function editDesarrollo(Request $request)
    {

            if($request->logo){ $request->logo->store('public/logos'); }
            $link_video = str_replace("watch?v=", "embed/", $request->link_video);

            $desarrollo = Desarrollos::find($request->desarrollo_id);;
            $desarrollo->fill($request->all());
            if($request->logo){ $desarrollo->logo=$request->logo->hashName(); }
            $desarrollo->link_video=$link_video;
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
            
            return Redirect::to($request->input('tipo_inmueble').'/'.$request->input('inmueble_id').'')->with('status', 'ok_create_slide');  
            
    }

    public function deleteSlides(Request $request)
    {
            $file_delete =  $request->input('file_delete');
            $slide_id =  $request->input('slide_id');

            $deletes = Sliders::find($slide_id);
            $deletes->delete();

            Storage::delete('public/slides/'.$file_delete.'');
                
            return Redirect::to($request->input('tipo_inmueble').'/'.$request->input('inmueble_id').'')->with('status', 'ok_delete_slide');  
            
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

            $link_video = str_replace("watch?v=", "embed/", $request->link_video);

            $propiedad = new Propiedades;
            $propiedad->fill($request->all());
            $propiedad->link_video=$link_video;
            $propiedad->save();        
            $propiedad_id = $propiedad->id;

            $CaracteristicasPropiedades = new CaracteristicasPropiedades;
            $CaracteristicasPropiedades->fill($request->all());
            $CaracteristicasPropiedades->propiedad_id=$propiedad_id;
            $CaracteristicasPropiedades->save();        
            $CaracteristicasPropiedades_id = $CaracteristicasPropiedades->id;
            
            return Redirect::to('propiedad/'.$propiedad_id.'')->with('status', 'ok_create_propiedad');  
            
    }

    public function propiedad($propiedad_id)
    {

        return view('propiedades.detail')->with([ 
                'propiedadesAmenidades' => Sliders::where('propiedad_id', $propiedad_id)->where('section', 'propiedad-amenidades')->get(),
                'propiedadesPlanos' => Sliders::where('propiedad_id', $propiedad_id)->where('section', 'propiedad-planos')->get(),
                'propiedadDetails' => Propiedades::where('id', $propiedad_id)->get(),
                'caracteristicas' => CaracteristicasPropiedades::where('propiedad_id', $propiedad_id)->get(),
                'desarrollos' => Desarrollos::all(),
                 ]);


    }

    public function editarPropiedad($propiedad_id)
    {

        return view('propiedades.editarPropiedad')->with([ 
                'propiedadDetails' => Propiedades::where('id', $propiedad_id)->get(),
                'caracteristicas' => CaracteristicasPropiedades::where('propiedad_id', $propiedad_id)->get(),
                'desarrollos' => Desarrollos::all(),
                 ]);


    }

        public function editPropiedad(Request $request)
    {

            $link_video = str_replace("watch?v=", "embed/", $request->link_video);
            
            $propiedad = Propiedades::find($request->propiedad_id);
            $propiedad->fill($request->all());
            $propiedad->link_video=$link_video;
            $propiedad->save();        
            $propiedad_id = $propiedad->id;

            $CaracteristicasPropiedades = CaracteristicasPropiedades::find($request->caracteristicas_id);
            $CaracteristicasPropiedades->fill($request->all());
            $CaracteristicasPropiedades->propiedad_id=$propiedad_id;
            $CaracteristicasPropiedades->save();        
            $CaracteristicasPropiedades_id = $CaracteristicasPropiedades->id;
            
            return Redirect::to('propiedad/'.$propiedad_id.'')->with('status', 'ok_edit_propiedad');  
            
    }

}




