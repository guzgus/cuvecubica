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
              <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Registro de Desarrollo</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content padding_b40 padding_t40">
              <div role="tabpanel" class="tab-pane fade in active" id="profile">
                <h2>Datos generales</h2>
                <div class="agent-p-form">
                  <div class="row">
                    <form class="callus"  action="/createDesarrollo" method="post" enctype="multipart/form-data" novalidate>
                          {{ csrf_field() }}
                      <div class="col-md-12">
                        <h5 class="text-white text-left">Titulo de desarrollo:</h5>
                        <div class="single-query">
                          <input type="text" class="keyword-input" placeholder="Titulo de Desarrollo" name="title" required>
                        </div>
                        <h5 class="text-white text-left">Descripción:</h5>
                        <div class="single-query">
                            <textarea id="mymce" name="description" required></textarea>
                        </div>
                        <h3 class="text-white ">Porcentajes de avance:</h3>
                        <h5 class="text-white text-left">Fase Previa:</h5>
                        <div class="single-query">
                          <input type="number" max="100" min="0" class="keyword-input" placeholder="%" required name="fase_previa">
                        </div>
                        <h5 class="text-white text-left">Cimientos:</h5>
                        <div class="single-query">
                          <input type="number" max="100" min="0" class="keyword-input" placeholder="%" required name="cimientos">
                        </div>
                        <h5 class="text-white text-left">Estructura:</h5>
                        <div class="single-query">
                          <input type="number" max="100" min="0" class="keyword-input" placeholder="%" required name="estructura">
                        </div>
                        <h5 class="text-white text-left">Fontanería, Mecánica, Eléctrica:</h5>
                        <div class="single-query">
                          <input type="number" max="100" min="0" class="keyword-input" placeholder="%" required name="fme">
                        </div>
                        <h5 class="text-white text-left">Finalización:</h5>
                        <div class="single-query">
                          <input type="number" max="100" min="0" class="keyword-input" placeholder="%" required name="finalizacion">
                        </div>
                        <h5 class="text-white text-left">Logo:</h5>
                        <div class="">
                          <input type="file" class="keyword-input" name="logo">
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
                      
                      <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="query-submit-button">
                          <button type="submit" class="btn_fill">Registrar datos de Desarrollo</button>
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