<section id="listPro" class="property-details padding-180">
  <div class="container">
    @foreach($propiedadDetails as $propiedad)
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-uppercase title_listPro">{{$propiedad->title}}</h2>
        <p class="bottom20 title_listPro">{{$propiedad->domicilio}}</p>
          @if (!Auth::guest())
              <a href="/editarPropiedad/{{$propiedad->id}}" type="button" class="btn btn-warning btn-xs pull-left">Editar datos generales</a>
          @endif          
          @include('includes.status')
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-12">
              <div id="agent-2-slider" class="owl-carousel">
                @forelse($propiedadesAmenidades as $slidesAmenidades)
                <div class="item">
                  <div class="property_item heading_space">
                    <div class="image">
                      <a href="#."><img class="side-amenidades-propiedades" src="/storage/slides/{{$slidesAmenidades->file}}" alt="listin" class="img-responsive"></a>
                      <div class="price"><span class="tag">{{$propiedad->status}}</span></div>
                      <div class="property_meta">
                        <h4>${{ number_format($propiedad->precio,2)}} {{$propiedad->moneda}}</h4> <br>  
                        <h4>{{$propiedad->categoria}}</h4>
                        @php
                            $slide_id=$slidesAmenidades->id;
                            $file_delete=$slidesAmenidades->file;
                            $tipo_inmueble = "propiedad";
                            $desarrollo_id = 0;
                            $inmueble_id = $propiedad->id;
                            $propiedad_id = $propiedad->id;
                          @endphp
                          @include('includes.formDeleteSlide')        
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach            
              </div>            
          </div>
              @php 
                  $section_update="propiedad-amenidades";
                  $desarrollo_id = 0;
                  $inmueble_id = $propiedad->id;
                  $propiedad_id = $propiedad->id;
                  $tipo_inmueble = "propiedad";
              @endphp
              @include('includes.formAltaSlide')
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="property-tab">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Descripción</a></li>
                <li role="presentation"><a href="#features" aria-controls="features" role="tab" data-toggle="tab">Características</a></li>
                <li role="presentation"><a href="#plan" aria-controls="plan" role="tab" data-toggle="tab">Planos</a></li>
                <li role="presentation"><a href="#tab_contact" aria-controls="tab_contact" role="tab" data-toggle="tab">Contacto</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active bg_light" id="description">
                  <h3 class="text-uppercase  bottom20 top10">Descripción de <span class="color_red">Propiedad</span></h3>
                 <p class="p-font-15">{!!$propiedad->description!!}</p>
                  <div class="property_meta bottom40">
                    <span><i class="fa fa-map-o"></i>{{$propiedad->superficie_construccion}} m2 de terreno </span>
                    <span><i class="fa fa-object-group"></i>{{$propiedad->superficie_terreno}} m2 de construcción</span>
                    <span><i class="fa fa-bed"></i>{{$propiedad->recamaras}} Habitaciones</span>
                    <span><i class="fa fa-bath"></i>{{$propiedad->banios}} Baños</span>
                    <span><i class="fa fa-car"></i>{{$propiedad->estacionamientos}} Estacionamiento</span>
                    <span><i class="fa fa-clock-o"></i>{{$propiedad->antiguedad}} Años de antigüedad</span>
                  </div>
                  {{--  <a class="link_arrow" href="#.">Leer más</a>  --}}
                </div>
                <div role="tabpanel" class="tab-pane bg_light" id="features">
                  <div class="row">
                    <div class="col-md-12">
                      <h3 class="text-uppercase  bottom30 top10">Características de la <span class="color_red">Propiedad</span></h3>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <ul class="pro-list">
                        @foreach($caracteristicas as $caracteristica)
                        @if($caracteristica->internet=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Acceso a Internet
                        </li>
                        @endif
                        @if($caracteristica->aire_acondicionado=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Aire acondicionado
                        </li>
                        @endif
                        @if($caracteristica->alarma=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Alarma
                        </li>
                        @endif
                        @if($caracteristica->alberca=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Alberca
                        </li>
                        @endif
                        @if($caracteristica->altillo=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Altillo
                        </li>
                        @endif
                        @if($caracteristica->amoblado=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Amoblado
                        </li>
                        @endif
                        @if($caracteristica->juegos_infantiles=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Área de juegos infantiles
                        </li>
                        @endif
                        @if($caracteristica->ascensor=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Ascensor
                        </li>
                        @endif
                        @if($caracteristica->asador=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Asador
                        </li>
                        @endif
                        @if($caracteristica->balcon=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Balcón
                        </li>
                        @endif
                        @if($caracteristica->calefaccion=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Calefacción
                        </li>
                        @endif
                        @if($caracteristica->cisterna=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Cisterna
                        </li>
                        @endif
                        @if($caracteristica->closets=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Closets
                        </li>
                        @endif
                        @if($caracteristica->cocina=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Cocina
                        </li>
                        @endif
                        @if($caracteristica->cuarto_servicio=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Cuarto de servicio
                        </li>
                        @endif
                        @if($caracteristica->dormitorio_suite=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Dormitorio en suite
                        </li>
                        @endif
                        @if($caracteristica->estudio=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Estudio
                        </li>
                        @endif
                        @if($caracteristica->gas_natural=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Gas natural
                        </li>
                        @endif
                        @if($caracteristica->jacuzzi=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Jacuzzi
                        </li>
                        @endif
                        @if($caracteristica->jardin=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Jardín
                        </li>
                        @endif
                        @if($caracteristica->linea_telefonica=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Línea telefónica
                        </li>
                        @endif
                        @if($caracteristica->living=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Living
                        </li>
                        @endif
                        @if($caracteristica->medio_banio=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Medio baño
                        </li>
                        @endif
                        @if($caracteristica->patio=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Patio
                        </li>
                        @endif
                        @if($caracteristica->playroom=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Playroom
                        </li>
                        @endif
                        @if($caracteristica->porton_electrico=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Porton Electrico
                        </li>
                        @endif
                        @if($caracteristica->sala_comedor=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Sala comedor
                        </li>
                        @endif
                        @if($caracteristica->salon_usos_multiples=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Salón de usos múltiples
                        </li>
                        @endif
                        @if($caracteristica->seguridad=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Seguridad
                        </li>
                        @endif
                        @if($caracteristica->solo_familias=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Sólo Familias
                        </li>
                        @endif
                        @if($caracteristica->terraza=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Terraza
                        </li>
                        @endif
                        @if($caracteristica->uso_de_suelo=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Uso de suelo
                        </li>
                        @endif
                        @if($caracteristica->vestidor=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Vestidor
                        </li>
                        @endif
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane bg_light" id="plan">
                  <div class="row">
                    <div class="col-md-12">
                      <h3 class="text-uppercase bottom20 top10"> <span class="color_red">Planos</span></h3>
                    </div>
                    <div class="col-md-12"> 
                          <div class="row margin_bottom">
                            @forelse($propiedadesPlanos as $slidesPlanos)
                            <div class="col-md-6 col-sm-6 col-xs-12 top10">
                                <div class="easyzoom easyzoom--overlay">
                                  <a href="/storage/slides/{{$slidesPlanos->file}}">
                                    <img src="/storage/slides/{{$slidesPlanos->file}}" class="slide-planos-desarrollos" alt=""/>
                                  </a>
                                </div>
                                    @php
                                      $slide_id=$slidesPlanos->id;
                                      $file_delete=$slidesPlanos->file;
                                      $tipo_inmueble = "propiedad";
                                      $desarrollo_id = 0;
                                      $inmueble_id = $propiedad->id;
                                      $propiedad_id = $propiedad->id;
                                    @endphp
                                    @include('includes.formDeleteSlide')         
                            </div>
                            @empty
                            <p class="text-white">Sin Imágenes</p>
                            @endforelse 
                            @php 
                                $section_update="propiedad-planos";
                                $desarrollo_id = 0;
                                $inmueble_id = $propiedad->id;
                                $tipo_inmueble = "propiedad";
                                $propiedad_id = $propiedad->id;
                            @endphp
                            @include('includes.formAltaSlide')
                          </div>

                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane bg_light" id="tab_contact">
                  <div class="row">
                    <div class="col-md-12">
                      <h3 class="text-uppercase  bottom30 top10"><span class="color_red">Contáctanos</span></h3>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="agent-p-img"> <img src="/images/contact.jpg" class="img-responsive" alt="image" /> </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="agent-p-contact">
                        <div class="our-agent-box">
                            <div class="agetn-contact-2">
                              <p>(55) 5292 1767 y (55) 5292 1768 <i class="icon-telephone114"></i></p>
                              <p>contacto@cuvecubica.mx <i class=" icon-icons142"></i></p>
                              <a href="http://www.cuvecubica.mx">
                              <p>www.cuvecubica.mx <i class="icon-browser2"></i></p>
                              </a>
                              <p>Av. Santa Fe 546, Col. Cruz Manca, Del. Cuajimalpa, CDMX. <i class="icon-icons74"></i></p>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row top30">
                    <form class="callus padding-bottom" method="post" id="contact-form" action="/solicitarinfo">
                          {{ csrf_field() }}    
                          <input type="hidden" class ="keyword-input"  name="desarrollo_contacto_title" id="desarrollo_contacto_title" value="{{$propiedad->title}}">
                          <input type="hidden" class ="keyword-input"  name="desarrollo_id" id="desarrollo_id" value="{{$propiedad->id}}">
                          <input type="hidden" class ="keyword-input"  name="tipo_inmueble" id="tipo_inmueble" value="propiedad">
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
            </div>
          </div>
        </div>
              <div class="row">
                    <div class="col-md-12"> 

                    <h3 class="text-uppercase  bottom30 top10 text-white">Ubicación de <span class="color_red">Inmueble</span></h3>
 
                   <div id="map"></div>

                    <script>

                        function initMap() {
                          var uluru = {lat: {{$propiedad->latitud}}, lng: {{$propiedad->longitud}} };
                          var map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 14,
                            center: uluru,
                            styles:[{"stylers":[{"saturation":-100},{"gamma":1}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi.place_of_worship","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"poi.place_of_worship","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"water","stylers":[{"visibility":"on"},{"saturation":50},{"gamma":0},{"hue":"#50a5d1"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text.fill","stylers":[{"color":"#c5c5c5"}]},{"featureType":"road.local","elementType":"labels.text","stylers":[{"weight":0.5},{"color":"#e7af12"}]},{"featureType":"transit.station","elementType":"labels.icon","stylers":[{"gamma":1},{"saturation":50}]}]
                          });

                          var contentString = 'Hola';

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
                    
                    </div>
              </div>
        
      </div>

    </div>
    @endforeach
  </div>
  </div>
</section>


