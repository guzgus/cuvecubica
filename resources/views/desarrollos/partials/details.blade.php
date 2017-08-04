<!--===== PROPERTY - DETAILS - 2 =====-->
@forelse ($desarrolloDetails as $desarrollo)

<div id="listPro">
<!--===== DECRIPCION GENERAL DEL DESARROLLO =====-->
<section class="padding-180">
  <div class="container">
    <div class="row">
      <div class="history-section">
        <div class="col-md-6 col-sm-6 col-xs-12">
          @include('includes.status')
          <h3 class="text-uppercase text-white text-center"><span class="color_red">{{$desarrollo->title}}</span></h3>
          @if (!Auth::guest())
              <a href="/editarDesarrollo/{{$desarrollo->id}}" type="button" class="btn btn-warning btn-xs pull-right">Editar datos generales</a>
          @endif          
           <img src="/storage/logos/{{$desarrollo->logo}}" class="logo-desarrollos" alt=""/>
<h3 class="text-uppercase bottom30 text-white"><span class="color_red">Descripción</span> del proyecto</h3>
          <div class="top20 bottom40 text-justify text-white">{!!$desarrollo->description!!}</div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div id="about_single" class="owl-carousel">
          @forelse($desarrolloSlidesGenerales as $slidesGenerales)
            <div class="item">
              <div class="content-right-md">
                    <figure class="effect-layla">
                      <img class="slide-general-desarrollos" src="/storage/slides/{{$slidesGenerales->file}}" alt="img"/>
                      <figcaption>   
                      @php
                        $slide_id=$slidesGenerales->id;
                        $file_delete=$slidesGenerales->file;
                        $tipo_inmueble = "desarrollo";
                        $desarrollo_id = $desarrollo->id;
                        $inmueble_id = $desarrollo->id;
                        $propiedad_id = "0";
                      @endphp
                      @include('includes.formDeleteSlide')         
                    </figcaption>
                </figure>
              </div>
            </div>
          @empty
              <p class="text-white">Sin Imágenes</p>
          @endforelse 
          </div>
              @php 
                  $section_update="desarrollos-general";
                  $tipo_inmueble = "desarrollo";
                  $desarrollo_id = $desarrollo->id;
                  $inmueble_id = $desarrollo->id;
                  $propiedad_id = "0";
              @endphp
              @include('includes.formAltaSlide')
        </div>
      </div>
    </div>
  </div>
</section>
<!--===== #/DECRIPCION GENERAL DEL DESARROLLO =====-->


<!--===== AMENIDADES =====-->
<section id="we_are">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <h3 class="text-uppercase text-white"><span class="color_red">Amenidades</span></h3>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>        
        <div class="row">
          <div class="col-md-12">
            <div id="agent-2-slider" class="owl-carousel">
            @forelse($desarrolloSlidesAmenidades as $slidesAmenidades)
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="#."><img src="/storage/slides/{{$slidesAmenidades->file}}" alt="listin" class="slide-avances-desarrollos"></a>
                    <div class="feature"><span class="tag-2 text-big">Paradox</span></div>                    
                  </div>
                </div>
                      @php
                        $slide_id=$slidesAmenidades->id;
                        $file_delete=$slidesAmenidades->file;
                        $tipo_inmueble = "desarrollo";
                        $desarrollo_id = $desarrollo->id;
                        $inmueble_id = $desarrollo->id;
                        $propiedad_id = "0";
                      @endphp
                      @include('includes.formDeleteSlide')         
              </div>
            @empty
              <p class="text-white">Sin Imágenes</p>
            @endforelse     
            </div>
              @php 
                  $section_update="desarrollos-amenidades";                 
                  $desarrollo_id = $desarrollo->id;
                   $inmueble_id = $desarrollo->id;
                  $tipo_inmueble = "desarrollo";
                  $propiedad_id = "0";
              @endphp
              @include('includes.formAltaSlide')

          </div>
        </div>
        @if($desarrollo->link_video!="")
        <div class="row"> 
          <div class="col-md-12"> 
            <h3 class="text-uppercase  bottom30 top10 text-white">Video <span class="color_red">Informativo</span></h3>

            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item"  src="{{$desarrollo->link_video}}?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        @endif
      </div>
    </div>
  </div>
</section>
<!--===== #/AMENIDADES =====-->


<!--===== PLANTAS Y UBICACION =====-->

<section id="news-section-1" class="property-details">
  <div class="container">

        <div class="row top40">
          <div class="col-md-12">

            <div class="row margin_bottom">
              <div class="col-xs-12">
                <h3 class="text-uppercase bottom20"><span class="color_red">Plantas</span></h3>
              </div>
              @forelse($desarrolloSlidesPlanos as $slidesPlanos)
              <div class="col-md-4 col-sm-4 col-xs-12 top10">
                  <div class="easyzoom easyzoom--overlay">
                    <a href="/storage/slides/{{$slidesPlanos->file}}">
                      <img src="/storage/slides/{{$slidesPlanos->file}}" class="slide-planos-desarrollos" alt=""/>
                    </a>
                  </div>
                      @php
                        $slide_id=$slidesPlanos->id;
                        $file_delete=$slidesPlanos->file;
                        $tipo_inmueble = "desarrollo";
                        $desarrollo_id = $desarrollo->id;
                        $inmueble_id = $desarrollo->id;
                        $propiedad_id = "0";
                      @endphp
                      @include('includes.formDeleteSlide')         
              </div>
              @empty
              <p class="text-white">Sin Imágenes</p>
              @endforelse 
              @php 
                  $section_update="desarrollos-planos";
                  $desarrollo_id = $desarrollo->id;
                   $inmueble_id = $desarrollo->id;
                  $tipo_inmueble = "desarrollo";
                  $propiedad_id = "0";
              @endphp
              @include('includes.formAltaSlide')
            </div>

            <div class="row margin_bottom">
              <div class="col-xs-12">
                <h3 class="text-uppercase bottom30"><span class="color_red">Ubicación</span></h3>
              </div>
              <div class="col-md-12">
                {{--  <div id="map_canvas" style="height: 550px;"></div>  --}}
                  <div id="map"></div>
              </div>
            </div>

          </div>
        </div>
  </div>
</section>
<!--===== #/PLANTAS Y UBICACION =====-->

  <script>

      function initMap() {
        var uluru = {lat: {{$desarrollo->latitud}}, lng: {{$desarrollo->longitud}} };
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: uluru,
          styles:[{"stylers":[{"saturation":-100},{"gamma":1}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi.place_of_worship","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"poi.place_of_worship","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"water","stylers":[{"visibility":"on"},{"saturation":50},{"gamma":0},{"hue":"#50a5d1"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text.fill","stylers":[{"color":"#c5c5c5"}]},{"featureType":"road.local","elementType":"labels.text","stylers":[{"weight":0.5},{"color":"#e7af12"}]},{"featureType":"transit.station","elementType":"labels.icon","stylers":[{"gamma":1},{"saturation":50}]}]
        });

        var contentString = '<div class"info-window"><div class="image-label"><img class="slide-map-desarrollos" src="/images/sliders/desarrollos/paradox2.jpg" alt="featured-properties-5" ><label>Desarrollo</label></div><div class="map-detail"><a href="#"><h4>{{$desarrollo->title}}</h4></a><p> </p></div></div>';

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });

        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
          title: 'Uluru (Ayers Rock)'
        });
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
      }
    </script>

<!--===== AVANCES Y ETAPAS DE OBRA =====-->
<section id="we_are">
  <div class="container">
    <div class="row">
      {{-- <div class="col-md-6 col-sm-6 col-xs-12">
        <h3 class="text-uppercase text-white">Avances de <span class="color_red">Obra</span></h3>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>

        
        <div class="row">
          <div class="col-md-12">
            <div id="agent-2-slider" class="owl-carousel">
        @forelse($desarrolloSlidesAvances as $slidesAvances)
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="#."><img src="/images/sliders/desarrollos/{{$slidesAvances->file}}" alt="listin" class="slide-avances-desarrollos"></a>
                    <div class="feature"><span class="tag-2">Paradox</span></div>                    
                  </div>
                </div>
              </div>
        @empty
            <p>Sin desarrollos</p>
        @endforelse     
            </div>
          </div>
        </div>
      </div> --}}
      <div class="col-md-12 col-sm-12 col-xs-12 skills margin_bottom text-white">
        <h3 class="text-uppercase text-white">Etapas de <span class="color_red">construcción</span> <small class="text-white">   (Avances de Obra)</small></h3>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>

        <ul>
          <li>
            <p class="pull-left">Fase previa</p>
            <p class="pull-right"> {{$desarrollo->fase_previa}}%</p>
            <div class="clearfix"></div>
          </li>
          <li class="progress bottom30 top10">
            <div class="progress-bar" data-width="{{$desarrollo->fase_previa}}"> </div>
          </li>
          <li>
            <p class="pull-left">Cimientos</p>
            <p class="pull-right"> {{$desarrollo->cimientos}}%</p>
            <div class="clearfix"></div>
          </li>
          <li class="progress bottom30 top10">
            <div class="progress-bar" data-width="{{$desarrollo->cimientos}}"> </div>
          </li>
          <li>
            <p class="pull-left">Estructura</p>
            <p class="pull-right"> {{$desarrollo->estructura}}%</p>
            <div class="clearfix"></div>
          </li>
          <li class="progress bottom30 top10">
            <div class="progress-bar" data-width="{{$desarrollo->estructura}}"> </div>
          </li>
          <li>
            <p class="pull-left">Fontanería, Mecánica, Eléctrica</p>
            <p class="pull-right"> {{$desarrollo->fme}}%</p>
            <div class="clearfix"></div>
          </li>
          <li class="progress top10">
            <div class="progress-bar" data-width="{{$desarrollo->fme}}"> </div>
          </li>
          <li>
            <p class="pull-left">Finalización</p>
            <p class="pull-right"> {{$desarrollo->finalizacion}}%</p>
            <div class="clearfix"></div>
          </li>
          <li class="progress top10">
            <div class="progress-bar" data-width="{{$desarrollo->finalizacion}}"> </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!--===== #/AVANCES Y ETAPAS DE OBRA =====-->


<!-- LISTING STYLE-->
<section id="listPro">
  <div class="container">
    <div class="row bottom40">
      <div class="col-xs-12">
        <h2 class="text-uppercase title_listPro">PROPIEDADES RELACIONADAS A <span class="color_red">{{$desarrollo->title}}</span></h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
      </div>
    </div>
    @include('propiedades.partials.propiedadesList')
  </div>
</section>
<!-- LISTING -->


<!--===== CONTACT US =====-->
<section id="contact-us">
	<div class="container">
      <div class="row padding">
      	
        <div class="col-md-8">
        	<div class="bottom40">
                <h2 class="text-uppercase text-white">Solicitar información de  <span class="color_red"> {{$desarrollo->title}} </span></h2>
                <div class="line_1"></div>
                <div class="line_2"></div>
                <div class="line_3"></div>
              </div>
        	<div class="agent-p-form p-t-10">
            
            <div class="row">
            	<form class="callus padding-bottom" method="post" id="contact-form" action="/solicitarinfo">
                    {{ csrf_field() }}    
                    <input type="hidden" class ="keyword-input"  name="desarrollo_contacto_title" id="desarrollo_contacto_title" value="{{$desarrollo->title}}">
                    <input type="hidden" class ="keyword-input"  name="desarrollo_id" id="desarrollo_id" value="{{$desarrollo->id}}">
                    <input type="hidden" class ="keyword-input"  name="tipo_inmueble" id="tipo_inmueble" value="desarrollo">
                      <div class="col-md-12">
                            <div class="single-query">
                                <input required type="text" class ="keyword-input" placeholder="Nombre" name="name" id="name">
                            </div>
                        </div>
                      <div class="col-md-12">    
                            <div class="single-query">
                                <input required type="text" class ="keyword-input" placeholder="Teléfono(s)" name="phone" id="phone">
                            </div>
                      </div>
                      <div class="col-md-12">     
                            <div class="single-query">
                                <input required type="email" class ="keyword-input" placeholder="E - mail" name="email" id="email">
                            </div>
                      </div>
                      <div class="col-md-12">
                            <div class="single-query">
                                <textarea name="message" placeholder="Mensaje" id="message" required></textarea>
                            </div>
                      </div>
                        <div class="col-md-12">   
                              <button type="submit" class="btn_fill" id="btn_submit" name="btn_submit">Enviar</button>
                        </div>     
              </form>
        
            </div>
          </div>
        </div>
        
        <div class="col-md-4 text-white">
        	<div class="agent-p-contact p-t-30 ">
            <div class="agetn-contact-2">
              <p class="text-white"><i class="icon-telephone114"></i> (55) 5292 1767 y (55) 5292 1768</p>
                <p><i class=" icon-icons142"></i> contacto@cuvecubica.mx</p>
              <a href="http://www.cuvecubica.mx">
                <p><i class="icon-browser2"></i>www.cuvecubica.mx</p>
              </a>
              <p><i class="icon-icons74"></i> Av. Santa Fe 546, Col. Cruz Manca, Del. Cuajimalpa, CDMX.</p>
            </div>
            {{-- <ul class="socials">
              <li><a href="#."><i class="fa fa-facebook"></i></a></li>
              <li><a href="#."><i class="fa fa-twitter"></i></a></li>
              <li><a href="#."><i class="fa fa-youtube"></i></a></li>
              <li><a href="#."><i class="fa fa-instagram"></i></a></li>
              <li><a href="#."><i class="fa fa-pinterest"></i></a></li>
            </ul> --}}
          </div>
        </div>
       
      </div>
    </div>
    
    <div class="contact">
      <div id="map"></div>
    </div>
</section>
<!--===== #/CONTACT US =====-->

</div>

@empty
    <p>Sin desarrollos</p>
@endforelse     

