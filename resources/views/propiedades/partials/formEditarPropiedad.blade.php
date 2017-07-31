<div id="listPro">   

<!--===== LOGIN =====-->
<section id="formTab" class="padding-180">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="formBg">
          <div class="formRegister">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Edición de Propiedad</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content padding_b40 padding_t40">
              <div role="tabpanel" class="tab-pane fade in active" id="profile">
                <h2>Datos generales</h2>
                <div class="agent-p-form">
                  <div class="row">
                    @foreach($propiedadDetails as $propiedad)
                    <form id="formRegistroPropiedad" class="callus"  action="/editPropiedad" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                      <div class="col-md-12">
                        <h5 class="text-white text-left">Tipo de propiedad:</h5>
                        <div class="single-query form-group">
                          <div class="intro text-left">
                            <select name="categoria" id="categoria" required>
                              <option selected="" value="{{$categoria=$propiedad->categoria}}">
                                      {{$categoria}}
                              </option>
                              <option value="Casas">Casas</option>
                              <option value="Cuartos">Cuartos</option>
                              <option value="Departamentos">Departamentos</option>
                              <option value="Edificios">Edificios</option>
                              <option value="Haciendas">Haciendas</option>
                              <option value="Locales">Locales comerciales</option>
                              <option value="Bodegas">Bodegas</option>
                              <option value="Oficinas">Oficinas</option>
                              <option value="Ranchos">Ranchos</option>
                              <option value="Terrenos">Terrenos</option>
                              <option value="Otros">Otros inmuebles</option>
                            </select>
                          </div>
                        </div>
                        <h5 class="text-white text-left">Propiedad en:</h5>
                        <div class="single-query form-group">
                          <div class="intro text-left">
                            <select name="status" id="status" required>
                              <option selected="" value="{{$status=$propiedad->status}}">
                                      {{$status}}
                              </option>
                              <option value="Renta">Renta</option>
                              <option value="Venta">Venta</option>
                              <option value="Traspaso">Traspaso</option>
                              <option value="Preventa">Preventa</option>    
                              <option value="Renta para corta estancia">Renta para corta estancia</option>    
                            </select>
                          </div>
                        </div>
                        <h5 class="text-white text-left">Título de propiedad:</h5>
                        <div class="single-query">
                          <input type="text" class="keyword-input" placeholder="Título de propiedad" name="title" value="{{$propiedad->title}}" required>
                          <input type="hidden"  name="propiedad_id" value="{{$propiedad->id}}" required>
                        </div>
                        <h5 class="text-white text-left">Descripción:</h5>
                        <div class="single-query">
                            <textarea id="mymce" name="description">{!!$propiedad->description!!}</textarea>
                        </div>
                        <h3 class="text-white text-left" >Ubicación</h3>
                        <h5 class="text-white text-left">Localidad: </h5>
                        <div class="single-query form-group">
                          <div class="intro text-left">
                            <select name="localidad" required>
                              <option selected="" value="{{$localidad_id=$propiedad->localidad}}">
                              @include('includes.localidades_title')
                              </option>
                              @include('includes.localidades_options')
                            </select>
                          </div>
                        </div>
                        <h5 class="text-white text-left">Domicilio:</h5>
                        <div class="single-query">
                          <input type="text"  class="keyword-input" placeholder="Domicilio de la propiedad" required name="domicilio" value="{{$propiedad->domicilio}}">
                        </div>
                        <h5 class="text-white text-left">Coordenadas:</h5>
                        <div class="single-query">
                            <input type="text" class="keyword-input" placeholder="Direccion a buscar..." id="direccion" name="direccion" value=""/>
                            <button id="pasar">Obtener coordenadas</button> 
                            <!-- div donde se dibuja el mapa-->
                            <div id="map_canvas_form" style="width:100%;height:300px;"></div>
                        </div>
                        <div class="single-query">
                          <input type="text" class="keyword-input" placeholder="Latitud" name="latitud"  id="lat" required value="{{$propiedad->latitud}}">
                        </div>
                        <div class="single-query">
                          <input type="text" class="keyword-input" placeholder="Longitud" name="longitud" value="{{$propiedad->longitud}}" id="long" required>
                        </div>
                      </div>
                      <h3 class="text-white ">Especificaciones del inmueble:</h3> <br>
                      <div class="col-md-6">  
                          <h5 class="text-white text-left">Baños:</h5>
                          <div class="single-query">
                            <input type="number" max="50" min="0" class="keyword-input" placeholder="#" required name="banios" value="{{$propiedad->banios}}">
                          </div>
                          <h5 class="text-white text-left">Recámaras:</h5>
                          <div class="single-query">
                            <input type="number" max="50" min="0" class="keyword-input" placeholder="#" required name="recamaras" value="{{$propiedad->recamaras}}">
                          </div>
                          <h5 class="text-white text-left">Estacionamientos:</h5>
                          <div class="single-query">
                            <input type="number" max="100" min="0" class="keyword-input" placeholder="#" required name="estacionamientos" value="{{$propiedad->estacionamientos}}">
                          </div>
                      </div>
                      <div class="col-md-6">  
                          <h5 class="text-white text-left">Superficie de construcción (m²):</h5>
                          <div class="single-query">
                            <input type="number" max="500000" min="0" class="keyword-input" placeholder="m²" required name="superficie_construccion" value="{{$propiedad->superficie_construccion}}">
                          </div>
                          <h5 class="text-white text-left">Superficie de terreno (m²):</h5>
                          <div class="single-query">
                            <input type="number" max="500000" min="0" class="keyword-input" placeholder="m²" required name="superficie_terreno" value="{{$propiedad->superficie_terreno}}">
                          </div>
                          <h5 class="text-white text-left">Antigüedad en años:</h5>
                          <div class="single-query">
                            <input type="number" max="1000" min="0" class="keyword-input" placeholder="#" required name="antiguedad" value="{{$propiedad->antiguedad}}">
                          </div>
                      </div>
                      <h3 class="text-white ">Comodidades, Características adicionales y Ambientes:</h3> <br>
                     @foreach($caracteristicas as $caracteristica)
                        <input type="hidden" required name="caracteristicas_id" value="{{$caracteristica->id}}">
                      <div class="col-md-4">  
                          <label class="text-white text-left">Acceso a Internet:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="internet" <?php if($caracteristica->internet=="on")echo "checked"; ?> >
                          </div>
                          <label class="text-white text-left">Aire acondicionado:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->aire_acondicionado=="on")echo "checked"; ?> name="aire_acondicionado">
                          </div>
                          <label class="text-white text-left">Alarma:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->alarma=="on")echo "checked"; ?> name="alarma">
                          </div>
                          <label class="text-white text-left">Alberca:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->alberca=="on")echo "checked"; ?> name="alberca">
                          </div>
                          <label class="text-white text-left">Amueblado:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->amoblado=="on")echo "checked"; ?> name="amoblado">
                          </div>
                          <label class="text-white text-left">Área de juegos infantiles:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->juegos_infantiles=="on")echo "checked"; ?> name="juegos_infantiles">
                          </div>
                          <label class="text-white text-left">Elevador:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->ascensor=="on")echo "checked"; ?> name="ascensor">
                          </div>
                          <label class="text-white text-left">Asador:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->asador=="on")echo "checked"; ?> name="asador">
                          </div>
                          <label class="text-white text-left">Balcón:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->balcon=="on")echo "checked"; ?> name="balcon">
                          </div>
                          <label class="text-white text-left">Business Center:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->business_center=="on")echo "checked"; ?> name="business_center">
                          </div>
                          <label class="text-white text-left">Calefacción:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->calefaccion=="on")echo "checked"; ?> name="calefaccion">
                          </div>
                          <label class="text-white text-left">Cancha de tenis:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->cancha_tenis=="on")echo "checked"; ?> name="cancha_tenis">
                          </div>
                          <label class="text-white text-left">Cancha de pádel:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->cancha_padel=="on")echo "checked"; ?> name="cancha_padel">
                          </div>
                          <label class="text-white text-left">Cancha de usos múltiples:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->cancha_multiples=="on")echo "checked"; ?> name="cancha_multiples">
                          </div>
                          <label class="text-white text-left">Cisterna:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->cisterna=="on")echo "checked"; ?> name="cisterna">
                          </div>
                          <label class="text-white text-left">Cine:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->cine=="on")echo "checked"; ?> name="cine">
                          </div>
                      </div>
                      <div class="col-md-4">  
                          <label class="text-white text-left">Closets:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->closets=="on")echo "checked"; ?> name="closets">
                          </div>
                          <label class="text-white text-left">Cocina:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->cocina=="on")echo "checked"; ?> name="cocina">
                          </div>
                          <label class="text-white text-left">Cuarto de choferes:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->cuarto_choferes=="on")echo "checked"; ?> name="cuarto_choferes">
                          </div>
                          <label class="text-white text-left">Cuarto de servicio:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->cuarto_servicio=="on")echo "checked"; ?> name="cuarto_servicio">
                          </div>
                          <label class="text-white text-left">CCTV:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->cctv=="on")echo "checked"; ?> name="cctv">
                          </div>
                          <label class="text-white text-left">Estudio:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->estudio=="on")echo "checked"; ?> name="estudio">
                          </div>
                          <label class="text-white text-left">Estacionamiento para visitas:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->estacionamiento_visitas=="on")echo "checked"; ?> name="estacionamiento_visitas">
                          </div>
                          <label class="text-white text-left">Family room:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->family_room=="on")echo "checked"; ?> name="family_room">
                          </div>
                          <label class="text-white text-left">Gas natural:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->gas_natural=="on")echo "checked"; ?> name="gas_natural">
                          </div>
                          <label class="text-white text-left">GYM:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->gym=="on")echo "checked"; ?> name="gym">
                          </div>
                          <label class="text-white text-left">Helipuerto:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->helipuerto=="on")echo "checked"; ?> name="helipuerto">
                          </div>
                          <label class="text-white text-left">Jacuzzi:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->jacuzzi=="on")echo "checked"; ?> name="jacuzzi">
                          </div>
                          <label class="text-white text-left">Jardín:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->jardin=="on")echo "checked"; ?> name="jardin">
                          </div>
                          <label class="text-white text-left">Living:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->living=="on")echo "checked"; ?> name="living">
                          </div>
                          <label class="text-white text-left">Ludoteca:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->ludoteca=="on")echo "checked"; ?> name="ludoteca">
                          </div>
                          <label class="text-white text-left">Medio baño:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->medio_banio=="on")echo "checked"; ?> name="medio_banio">
                          </div>
                      </div>
                      <div class="col-md-4">  
                          <label class="text-white text-left">Monta Cargas:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->monta_cargas=="on")echo "checked"; ?> name="monta_cargas">
                          </div>
                          <label class="text-white text-left">Patio:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->patio=="on")echo "checked"; ?> name="patio">
                          </div>
                          <label class="text-white text-left">Playroom:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->playroom=="on")echo "checked"; ?> name="playroom">
                          </div>
                          <label class="text-white text-left">Portón Eléctrico:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->porton_electrico=="on")echo "checked"; ?> name="porton_electrico">
                          </div>
                          <label class="text-white text-left">Roof garden:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->roof_garden=="on")echo "checked"; ?> name="roof_garden">
                          </div>
                          <label class="text-white text-left">Sala comedor:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->sala_comedor=="on")echo "checked"; ?> name="sala_comedor">
                          </div>
                          <label class="text-white text-left">Salón de usos múltiples:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->salon_usos_multiples=="on")echo "checked"; ?> name="salon_usos_multiples">
                          </div>
                          <label class="text-white text-left">Seguridad:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->seguridad=="on")echo "checked"; ?> name="seguridad">
                          </div>
                          <label class="text-white text-left">Spa:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->spa=="on")echo "checked"; ?> name="spa">
                          </div>
                          <label class="text-white text-left">Terraza:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->terraza=="on")echo "checked"; ?> name="terraza">
                          </div>
                          <label class="text-white text-left">Uso de suelo habitacional:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->uso_de_suelo=="on")echo "checked"; ?> name="uso_de_suelo">
                          </div>
                          <label class="text-white text-left">Uso de suelo comercial:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->uso_comercial=="on")echo "checked"; ?> name="uso_comercial">
                          </div>
                          <label class="text-white text-left">Uso de suelo mixto:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->mixto_habitacional=="on")echo "checked"; ?> name="mixto_habitacional">
                          </div>
                          <label class="text-white text-left">Valet Parking:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->valet_parking=="on")echo "checked"; ?> name="valet_parking">
                          </div>
                          <label class="text-white text-left">Vestidor:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->vestidor=="on")echo "checked"; ?> name="vestidor">
                          </div>
                          <label class="text-white text-left">Vigilancia:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox" <?php if($caracteristica->vigilancia=="on")echo "checked"; ?> name="vigilancia">
                          </div>
                      </div>

                     @endforeach
                      <div class="col-md-12">
                        <h5 class="text-white text-left">¿Propiedad relacionada a un desarrollo?:</h5>
                        <div class="single-query">
                          <select class="keyword-input" name="desarrollo_id" id="desarrollo_id" required>
                              <option value="">Selecciona una opción</option>
                              @foreach($desarrollos as $desarrollo)
                              <option value="{{$desarrollo->id}}">{{$desarrollo->title}}</option>
                              @endforeach
                              <option value="">La propiedad no se relaciona con ningún desarrollo</option>
                          </select>
                        </div>
                      </div>
                      <h3 class="text-white ">Precio y Moneda:</h3> <br>
                      <div class="col-md-6">
                        <h5 class="text-white text-left">Precio:</h5>
                        <div class="single-query">
                            <input type="num" min="1" max="100000000" class="keyword-input"  name="precio" required  value="{{$propiedad->precio}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <h5 class="text-white text-left">Moneda:</h5>
                        <div class="single-query">
                          <select class="keyword-input" name="moneda" id="moneda" required>
                              <option value="">Selecciona una opción</option>
                              <option selected>{{$propiedad->moneda}}</option>
                              <option>MXN</option>
                              <option>USD</option>
                              <option>EUR</option>
                          </select>
                        </div>
                      </div>
                      <h3 class="text-white ">Insertar video:</h3> <br>
                      <div class="col-md-12">
                        <h5 class="text-white text-left">URL <small class="text-white">(Youtube)</small>:</h5>
                        <div class="single-query">
                            <input type="url" class="keyword-input"  name="link_video"  value="{{$propiedad->link_video}}">
                        </div>
                      </div>
                      <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="query-submit-button">
                          <button type="submit" class="btn_fill">Registrar propiedad</button>
                        </div>
                      </div>
                    </form>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--===== #/LOGIN =====-->

</div>