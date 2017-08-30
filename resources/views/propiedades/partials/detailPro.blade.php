<section id="listPro" class="property-details padding-180">
  <div class="container">
    @foreach($propiedadDetails as $propiedad)
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-uppercase title_listPro">{{$propiedad->title}}</h2>
        <p class="bottom20 title_listPro">{{$propiedad->domicilio}}</p>
          @if (!Auth::guest())
            @php
                  if($propiedad->status=="Venta" || $propiedad->status=="Traspaso" || $propiedad->status=="Preventa"){$statusPro="Vendida";}else{$statusPro="Rentado";}
            @endphp
              <a href="/editarPropiedad/{{$propiedad->id}}" type="button" class="btn btn-warning btn-xs">Editar datos generales</a>
              @if($propiedad->status_pro=="" || $propiedad->status_pro=="null")
              <a href="/statusPro/{{$propiedad->id}}/{{$statusPro}}" type="button" class="btn btn-info btn-xs">Cambiar Estatus de Propiedad a <strong>'{{$statusPro}}'</strong></a>
              @else
              <a href="/statusPro/{{$propiedad->id}}/null" type="button" class="btn btn-info btn-xs">Habilitar propiedad</strong></a>
              @endif
          @endif          
          @include('includes.status')
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-6">
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
                    @if($propiedad->categoria=="Casas")
                      <span><i class="fa fa-map-o"></i>{{$propiedad->superficie_terreno}} m² de terreno </span>
                    @endif
                    @if($propiedad->categoria=="Departamentos")
                      <span><i class="fa fa-cubes"></i>{{$propiedad->num_dep_piso}} departamentos por piso </span>
                      <span><i class="fa fa-building"></i>{{$propiedad->num_piso}} Pisos </span>
                      <span><i class="fa fa-cube"></i>{{$propiedad->num_bodegas}} Bodega </span>
                    @endif
                    <span><i class="fa fa-object-group"></i>{{$propiedad->superficie_construccion}} m² de construcción</span>
                    <span><i class="fa fa-bed"></i>{{$propiedad->recamaras}} Habitacion(es)</span>
                    <span><i class="fa fa-bath"></i>{{$propiedad->banios}} Baño(s)</span>
                    <span><i class="fa fa-car"></i>{{$propiedad->estacionamientos}} Estacionamiento(s)</span>
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
                        @if($caracteristica->amoblado=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Amueblado
                        </li>
                        @endif
                        @if($caracteristica->juegos_infantiles=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Área de juegos infantiles
                        </li>
                        @endif
                        @if($caracteristica->ascensor=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Elevador
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
                        @if($caracteristica->boiler=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Boiler
                        </li>
                        @endif
                        @if($caracteristica->business_center=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Centro de negocios
                        </li>
                        @endif
                        @if($caracteristica->calefaccion=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Calefacción
                        </li>
                        @endif
                        @if($caracteristica->cancha_tenis=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Cancha de tenis
                        </li>
                        @endif
                        @if($caracteristica->cancha_padel=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Cancha de pádel
                        </li>
                        @endif
                        @if($caracteristica->cancha_multiples=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Cancha de usos múltiples
                        </li>
                        @endif
                        @if($caracteristica->cisterna=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Cisterna
                        </li>
                        @endif
                        @if($caracteristica->cine=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Cine
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
                        @if($caracteristica->cuarto_choferes=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Cuarto de choferes
                        </li>
                        @endif
                        @if($caracteristica->cuarto_servicio=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Cuarto de servicio
                        </li>
                        @endif
                        @if($caracteristica->cuarto_lavado=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Cuarto de lavado
                        </li>
                        @endif
                        @if($caracteristica->cctv=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> CCTV
                        </li>
                        @endif
                        @if($caracteristica->estudio=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Estudio
                        </li>
                        @endif
                        @if($caracteristica->estacionamiento_visitas=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Estacionamiento para visitas
                        </li>
                        @endif
                        @if($caracteristica->family_room=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Cuarto familiar
                        </li>
                        @endif
                        @if($caracteristica->gas_natural=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Gas natural
                        </li>
                        @endif
                        @if($caracteristica->gym=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Gimnasio
                        </li>
                        @endif
                        @if($caracteristica->guarderia=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Guardería
                        </li>
                        @endif
                        @if($caracteristica->helipuerto=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Helipuerto
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
                        @if($caracteristica->laundry=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Lavandería
                        </li>
                        @endif
                        @if($caracteristica->living=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Sala
                        </li>
                        @endif
                        @if($caracteristica->ludoteca=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Ludoteca
                        </li>
                        @endif
                        @if($caracteristica->medio_banio=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Medio baño
                        </li>
                        @endif
                        @if($caracteristica->monta_cargas=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Monta cargas
                        </li>
                        @endif
                        @if($caracteristica->patio=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Patio
                        </li>
                        @endif
                        @if($caracteristica->playroom=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Sala de juegos
                        </li>
                        @endif
                        @if($caracteristica->porton_electrico=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Portón Eléctrico
                        </li>
                        @endif
                        @if($caracteristica->recepcion=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Recepción
                        </li>
                        @endif
                        @if($caracteristica->roof_garden=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Jardín de techo
                        </li>
                        @endif
                        @if($caracteristica->sala_comedor=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Sala comedor
                        </li>
                        @endif
                        @if($caracteristica->salon_belleza=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Salón de belleza
                        </li>
                        @endif
                        @if($caracteristica->salon_fiestas=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Salón de fiestas
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
                        @if($caracteristica->spa=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> SPA
                        </li>
                        @endif
                        @if($caracteristica->terraza=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Terraza
                        </li>
                        @endif
                        @if($caracteristica->uso_de_suelo=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Uso de suelo Habitacional
                        </li>
                        @endif
                        @if($caracteristica->uso_comercial=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Uso de suelo Comercial
                        </li>
                        @endif
                        @if($caracteristica->mixto_habitacional=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Uso de suelo Mixto
                        </li>
                        @endif
                        @if($caracteristica->valet_parking=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Valet Parking
                        </li>
                        @endif
                        @if($caracteristica->vestidor=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Vestidor
                        </li>
                        @endif
                        @if($caracteristica->vigilancia=="on")
                        <li class="col-md-4 col-xs-4">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i> Vigilancia
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
                              <p>(55) 2167-3371 y (55) 2167-3376 <i class="icon-telephone114"></i></p>
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
          <div class="col-md-6">
              <div id="agent-2-slider">
                @forelse($propiedadesAmenidades as $slidesAmenidades)
                <div class="item">
                  <div class="property_item">
                    <div class="image">
                      <a data-toggle="modal" title="Ver detalle de imagen" data-target=".bs-{{$slidesAmenidades->id}}-modal-lg" href="#"><img class="side-amenidades-propiedades" src="/storage/slides/{{$slidesAmenidades->file}}" ></a>
                      <div class="price"><span class="tag">{{$propiedad->status}}</span></div>
                      @if($propiedad->status_pro=="Rentado" || $propiedad->status_pro=="Vendida")
                        <div class="feature"><span class="tag">{{$propiedad->status_pro}}</span></div>
                      @endif
                      <div class="property_meta">
                        <h4>${{ number_format($propiedad->precio,2)}} {{$propiedad->moneda}}</h4><br>  
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
                @forelse($propiedadesAmenidades as $slidesAmenidades)
                      <div class="modal fade bs-{{$slidesAmenidades->id}}-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                              <img src="/storage/slides/{{$slidesAmenidades->file}}" class="img-center" />
                          </div>
                        </div>
                      </div>
                @endforeach      
              @php 
                  $section_update="propiedad-amenidades";
                  $desarrollo_id = 0;
                  $inmueble_id = $propiedad->id;
                  $propiedad_id = $propiedad->id;
                  $tipo_inmueble = "propiedad";
              @endphp
              @include('includes.formAltaSlide')
          </div>
        @if($propiedad->link_video!="")
          <div class="col-md-12"> 
            <h3 class="text-uppercase  bottom30 top10 text-white">Video <span class="color_red">Informativo</span></h3>

            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item"  src="{{$propiedad->link_video}}?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        @endif
        <div class="row">
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


