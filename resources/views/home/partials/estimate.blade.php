<!-- ESTIMATE -->
<section id="estimate" class="padding-200x2">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="estimate_image">
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="estimate_form">
          <h2 class="text-uppercase">Busca tu <span class="color_red"> Espacio</span></h2>
          <div class="line_1"></div>
          <div class="line_2"></div>
          <div class="line_3"></div>
          <p>Encuantra la mejor opción para ti...</p>
          <div class="property-query-area top40">
              <form class="findus" action="/searchPropiedades" method="get">
                    {{ csrf_field() }}
                <input type="hidden" value="0" name="recamaras">
                <input type="hidden" value="0" name="banios">
                <input type="hidden" value="0" name="precio">
                <div class="row">
                <div class="col-md-12">
                  <div class="single-query">
                    <div class="intro">
                      <select name="localidad"   required  >
                        <option selected="" value="">Localidad</option>
                        @foreach($localidades as $localidad)
                        <option value="{{$localidad_id=$localidad->localidad}}">@include('includes.localidades_title')</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="single-query">
                    <div class="intro">
                      <select name="categoria">
                        <option value="" class="active">Tipo de propiedad</option>
                        @foreach($categorias as $categoria)
                        <option value="{{$categoria->categoria}}">{{$categoria->categoria}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="single-query">
                    <div class="intro">
                      <select name="status">
                        <option value="" class="active">Estatus de propiedad</option>
                        @foreach($status_propiedades as $status)
                        <option value="{{$status->status}}">{{$status->status}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                </div>
                 <button type="submit" class="btn btn-warning"><i class="fa fa-search"> </i> Buscar</button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- #/ESTIMATE -->
