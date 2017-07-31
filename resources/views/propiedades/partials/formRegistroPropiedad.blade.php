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
              <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Registro de Propiedad</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content padding_b40 padding_t40">
              <div role="tabpanel" class="tab-pane fade in active" id="profile">
                <h2>Datos generales</h2>
                <div class="agent-p-form">
                  <div class="row">
                    <form id="formRegistroPropiedad" class="callus"  action="/createPropiedad" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                      <div class="col-md-12">
                        <h5 class="text-white text-left">Tipo de propiedad:</h5>
                        <div class="single-query">
                          <select class="keyword-input" name="categoria" id="categoria" required>
                              <option value="">Selecciona categoría</option>
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
                        <h5 class="text-white text-left">Propiedad en:</h5>
                        <div class="single-query">
                          <select class="keyword-input" name="status" id="status" required>
                              <option value="">Selecciona una opción</option>
                              <option>Renta</option>
                              <option>Venta</option>
                              <option>Traspaso</option>
                              <option>Preventa</option>    
                              <option>Renta para corta estancia</option>    
                          </select>
                        </div>
                        <h5 class="text-white text-left">Título de propiedad:</h5>
                        <div class="single-query">
                          <input type="text" class="keyword-input" placeholder="Título de propiedad" name="title" required>
                        </div>
                        <h5 class="text-white text-left">Descripción:</h5>
                        <div class="single-query">
                            <textarea id="mymce" name="description"></textarea>
                        </div>
                        <h5 class="text-white text-left">Domicilio:</h5>
                        <div class="single-query">
                          <input type="text"  class="keyword-input" placeholder="Domicilio de la propiedad" required name="domicilio">
                        </div>
                        <h5 class="text-white text-left">Coordenadas:</h5>
                        <div class="single-query">
                            <input type="text" class="keyword-input" placeholder="Direccion a buscar..." id="direccion" name="direccion" value=""/>
                            <button id="pasar">Obtener coordenadas</button> 
                            <!-- div donde se dibuja el mapa-->
                            <div id="map_canvas_form" style="width:100%;height:300px;"></div>
                        </div>
                        <div class="single-query">
                          <input type="text" class="keyword-input" placeholder="Latitud" name="latitud"  id="lat" required>
                        </div>
                        <div class="single-query">
                          <input type="text" class="keyword-input" placeholder="Longitud" name="longitud" id="long" required>
                        </div>
                      </div>
                      <h3 class="text-white ">Especificaciones del inmueble:</h3> <br>
                      <div class="col-md-6">  
                          <h5 class="text-white text-left">Baños:</h5>
                          <div class="single-query">
                            <input type="number" max="50" min="0" class="keyword-input" placeholder="#" required name="banios">
                          </div>
                          <h5 class="text-white text-left">Recámaras:</h5>
                          <div class="single-query">
                            <input type="number" max="50" min="0" class="keyword-input" placeholder="#" required name="recamaras">
                          </div>
                          <h5 class="text-white text-left">Estacionamientos:</h5>
                          <div class="single-query">
                            <input type="number" max="100" min="0" class="keyword-input" placeholder="#" required name="estacionamientos">
                          </div>
                      </div>
                      <div class="col-md-6">  
                          <h5 class="text-white text-left">Superficie de construcción (m²):</h5>
                          <div class="single-query">
                            <input type="number" max="500000" min="0" class="keyword-input" placeholder="m²" required name="superficie_construccion">
                          </div>
                          <h5 class="text-white text-left">Superficie de terreno (m²):</h5>
                          <div class="single-query">
                            <input type="number" max="500000" min="0" class="keyword-input" placeholder="m²" required name="superficie_terreno">
                          </div>
                          <h5 class="text-white text-left">Antigüedad en años:</h5>
                          <div class="single-query">
                            <input type="number" max="1000" min="0" class="keyword-input" placeholder="#" required name="antiguedad">
                          </div>
                      </div>
                      <h3 class="text-white ">Comodidades, Características adicionales y Ambientes:</h3> <br>
                      <div class="col-md-4">  
                          <label class="text-white text-left">Acceso a Internet:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="internet">
                          </div>
                          <label class="text-white text-left">Aire acondicionado:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="aire_acondicionado">
                          </div>
                          <label class="text-white text-left">Alarma:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="alarma">
                          </div>
                          <label class="text-white text-left">Alberca:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="alberca">
                          </div>
                          <label class="text-white text-left">Amueblado:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="amoblado">
                          </div>
                          <label class="text-white text-left">Área de juegos infantiles:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="juegos_infantiles">
                          </div>
                          <label class="text-white text-left">Elevador:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="ascensor">
                          </div>
                          <label class="text-white text-left">Asador:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="asador">
                          </div>
                          <label class="text-white text-left">Balcón:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="balcon">
                          </div>
                          <label class="text-white text-left">Business Center:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="business_center">
                          </div>
                          <label class="text-white text-left">Calefacción:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="calefaccion">
                          </div>
                          <label class="text-white text-left">Cancha de tenis:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="cancha_tenis">
                          </div>
                          <label class="text-white text-left">Cancha de pádel:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="cancha_padel">
                          </div>
                          <label class="text-white text-left">Cancha de usos múltiples:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="cancha_multiples">
                          </div>
                          <label class="text-white text-left">Cisterna:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="cisterna">
                          </div>
                          <label class="text-white text-left">Cine:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="cine">
                          </div>
                      </div>
                      <div class="col-md-4">  
                          <label class="text-white text-left">Closets:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="closets">
                          </div>
                          <label class="text-white text-left">Cocina:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="cocina">
                          </div>
                          <label class="text-white text-left">Cuarto de choferes:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="cuarto_choferes">
                          </div>
                          <label class="text-white text-left">Cuarto de servicio:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="cuarto_servicio">
                          </div>
                          <label class="text-white text-left">CCTV:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="cctv">
                          </div>
                          <label class="text-white text-left">Estudio:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="estudio">
                          </div>
                          <label class="text-white text-left">Estacionamiento para visitas:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="estacionamiento_visitas">
                          </div>
                          <label class="text-white text-left">Family room:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="family_room">
                          </div>
                          <label class="text-white text-left">Gas natural:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="gas_natural">
                          </div>
                          <label class="text-white text-left">GYM:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="gym">
                          </div>
                          <label class="text-white text-left">Helipuerto:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="helipuerto">
                          </div>
                          <label class="text-white text-left">Jacuzzi:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="jacuzzi">
                          </div>
                          <label class="text-white text-left">Jardín:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="jardin">
                          </div>
                          <label class="text-white text-left">Living:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="living">
                          </div>
                          <label class="text-white text-left">Ludoteca:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="ludoteca">
                          </div>
                          <label class="text-white text-left">Medio baño:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="medio_banio">
                          </div>
                      </div>
                      <div class="col-md-4">  
                          <label class="text-white text-left">Monta Cargas:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="monta_cargas">
                          </div>
                          <label class="text-white text-left">Patio:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="patio">
                          </div>
                          <label class="text-white text-left">Playroom:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="playroom">
                          </div>
                          <label class="text-white text-left">Portón Eléctrico:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="porton_electrico">
                          </div>
                          <label class="text-white text-left">Roof garden:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="roof_garden">
                          </div>
                          <label class="text-white text-left">Sala comedor:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="sala_comedor">
                          </div>
                          <label class="text-white text-left">Salón de usos múltiples:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="salon_usos_multiples">
                          </div>
                          <label class="text-white text-left">Seguridad:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="seguridad">
                          </div>
                          <label class="text-white text-left">Spa:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="spa">
                          </div>
                          <label class="text-white text-left">Terraza:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="terraza">
                          </div>
                          <label class="text-white text-left">Uso de suelo habitacional:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="uso_de_suelo">
                          </div>
                          <label class="text-white text-left">Uso de suelo comercial:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="uso_comercial">
                          </div>
                          <label class="text-white text-left">Uso de suelo mixto:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="mixto_habitacional">
                          </div>
                          <label class="text-white text-left">Valet Parking:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="valet_parking">
                          </div>
                          <label class="text-white text-left">Vestidor:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="vestidor">
                          </div>
                          <label class="text-white text-left">Vigilancia:</label>
                          <div class="single-query">
                            <input type="checkbox" class="keyword-checkbox"  name="vigilancia">
                          </div>
                      </div>
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
                            <input type="num" min="1" max="100000000" class="keyword-input"  name="precio" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <h5 class="text-white text-left">Moneda:</h5>
                        <div class="single-query">
                          <select class="keyword-input" name="moneda" id="moneda" required>
                              <option value="">Selecciona una opción</option>
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
                            <input type="url" class="keyword-input"  name="link_video">
                        </div>
                      </div>
                      <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="query-submit-button">
                          <button type="submit" class="btn_fill">Registrar propiedad</button>
                        </div>
                      </div>
                    </form>
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