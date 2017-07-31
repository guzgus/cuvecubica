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
              <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Editar Desarrollo</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content padding_b40 padding_t40">
              <div role="tabpanel" class="tab-pane fade in active" id="profile">
                <h2>Datos generales</h2>
                <div class="agent-p-form">
                  <div class="row">
                    @foreach($desarrolloDetails as $desarrollo)
                    <form class="callus"  action="/editDesarrollo" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                      <div class="col-md-12">
                        <h5 class="text-white text-left">Titulo de desarrollo:</h5>
                        <div class="single-query">
                          <input type="hidden" name="desarrollo_id" value="{{$desarrollo->id}}" required>
                          <input type="text" class="keyword-input" placeholder="Titulo de Desarrollo" name="title" value="{{$desarrollo->title}}" required>
                        </div>
                        <h5 class="text-white text-left">Descripción:</h5>
                        <div class="single-query">
                            <textarea id="mymce" name="description" required>{{$desarrollo->description}}</textarea>
                        </div>
                        <h3 class="text-white ">Porcentajes de avance:</h3>
                        <h5 class="text-white text-left">Fase Previa:</h5>
                        <div class="single-query">
                          <input type="number" max="100" min="0" class="keyword-input" placeholder="%" required name="fase_previa" value="{{$desarrollo->fase_previa}}">
                        </div>
                        <h5 class="text-white text-left">Cimientos:</h5>
                        <div class="single-query">
                          <input type="number" max="100" min="0" class="keyword-input" placeholder="%" required name="cimientos" value="{{$desarrollo->cimientos}}">
                        </div>
                        <h5 class="text-white text-left">Estructura:</h5>
                        <div class="single-query">
                          <input type="number" max="100" min="0" class="keyword-input" placeholder="%" required name="estructura" value="{{$desarrollo->estructura}}">
                        </div>
                        <h5 class="text-white text-left">Fontanería, Mecánica, Eléctrica:</h5>
                        <div class="single-query">
                          <input type="number" max="100" min="0" class="keyword-input" placeholder="%" required name="fme" value="{{$desarrollo->fme}}">
                        </div>
                        <h5 class="text-white text-left">Finalización:</h5>
                        <div class="single-query">
                          <input type="number" max="100" min="0" class="keyword-input" placeholder="%" required name="finalizacion" value="{{$desarrollo->finalizacion}}">
                        </div>
                        <h5 class="text-white text-left">Logo:</h5>
                        <div class="">
                          <input type="file" class="keyword-input" name="logo" value="{{$desarrollo->logo}}">
                        </div>
                        <h5 class="text-white text-left">Coordenadas:</h5>
                        <div class="single-query">
                            <input type="text" class="keyword-input" placeholder="Direccion a buscar..." id="direccion" name="direccion" value=""/>
                            <button id="pasar">Obtener coordenadas</button> 
                            <!-- div donde se dibuja el mapa-->
                            <div id="map_canvas_form" style="width:100%;height:300px;"></div>
                        </div>
                        <div class="single-query">
                          <input type="text" class="keyword-input" placeholder="Latitud" name="latitud"  id="lat" required value="{{$desarrollo->latitud}}">
                        </div>
                        <div class="single-query">
                          <input type="text" class="keyword-input" placeholder="Longitud" name="longitud" id="long" required value="{{$desarrollo->longitud}}">
                        </div>
                      </div>
                      <h3 class="text-white ">Insertar video:</h3> <br>
                      <div class="col-md-12">
                        <h5 class="text-white text-left">URL <small class="text-white">(Youtube)</small>:</h5>
                        <div class="single-query">
                            <input type="url" class="keyword-input"  name="link_video"  value="{{$desarrollo->link_video}}">
                        </div>
                      </div>
                      <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="query-submit-button">
                          <button type="submit" class="btn_fill">Editar datos de Desarrollo</button>
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