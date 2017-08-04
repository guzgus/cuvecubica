<!-- LISTING STYLE-->
<section id="listPro" class="padding-180">
  <div class="container">
    <div class="row">
      <div class="col-md-12 bottom40">
        <h2 class="text-uppercase title_listPro">Búsqueda <span class="color_red">Avanzada</span></h2>
         <div class="line_1"></div>
         <div class="line_2"></div>
         <div class="line_3"></div> 
      </div>
    </div>
    <div class="row bottom40">
      <form class="findus" action="/searchPropiedades" method="get"> 
        {{ csrf_field() }}
        <div class="col-md-4 col-sm-4">
          <div class="single-query form-group">
            <div class="intro">
              <label class="text-white">Localidad</label>
                <select name="localidad"   required="required"  >
                  @if($origen=="busqueda" && $_GET['localidad']!="" )<option selected="selected" value="{{$localidad_id=$_GET['localidad']}}"> @include('includes.localidades_title') </option> @endif
                  <option  value="any">Indica una localidad</option>
                  @foreach($localidades as $localidad)
                  <option value="{{$localidad_id=$localidad->localidad}}">@include('includes.localidades_title')</option>
                  @endforeach
                </select>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="single-query form-group">
            <div class="intro">
              <label class="text-white">Tipo de propiedad</label>
                <select name="categoria">
                  @if($origen=="busqueda" && $_GET['categoria']!="" )<option selected="selected" value="{{$_GET['categoria']}}">{{$_GET['categoria']}}</option>@endif
                  <option value="" class="active">Cualquier tipo de propiedad</option>
                  @foreach($categorias as $categoria)
                  <option value="{{$categoria->categoria}}">{{$categoria->categoria}}</option>
                  @endforeach
                </select>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="single-query form-group">
            <div class="intro">
              <label class="text-white">Estatus de propiedad</label>
                <select name="status">
                  @if($origen=="busqueda" && $_GET['status']!="" )<option selected="selected" value="{{$_GET['status']}}">{{$_GET['status']}}</option>@endif
                  <option value="" class="active">Cualquier estatus de propiedad</option>
                  @foreach($status_propiedades as $status)
                  <option value="{{$status->status}}">{{$status->status}}</option>
                  @endforeach
                </select>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="single-query form-group">
            <div class="intro">
              <label class="text-white">Habitaciones</label>
                <select name="recamaras">
                  @if($origen=="busqueda" && $_GET['recamaras']!="" )<option selected="selected" value="{{$_GET['recamaras']}}">{{$_GET['recamaras']}}</option>@endif
                  <option value="" class="active"># de Habitaciones</option>
                  @foreach($recamaras as $recamara)
                  <option value="{{$recamara->recamaras}}">{{$recamara->recamaras}}</option>
                  @endforeach
                </select>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="single-query form-group">
            <div class="intro">
              <label class="text-white">Baños</label>
                <select name="banios">
                  @if($origen=="busqueda" && $_GET['banios']!="" )<option selected="selected" value="{{$_GET['banios']}}">{{$_GET['banios']}}</option>@endif
                  <option value="" class="active"># de Baños</option>
                  @foreach($banios as $banio)
                  <option value="{{$banio->banios}}">{{$banio->banios}}</option>
                  @endforeach
                </select>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="single-query form-group">
            <div class="intro">
              <label class="text-white">Estacionamientos</label>
                <select name="estacionamientos">
                  @if($origen=="busqueda" && $_GET['estacionamientos']!="" )<option selected="selected" value="{{$_GET['estacionamientos']}}">{{$_GET['estacionamientos']}}</option>@endif
                  <option value="" class="active"># de Estacionamientos</option>
                  @foreach($estacionamientos as $estacionamiento)
                  <option value="{{$estacionamiento->estacionamientos}}">{{$estacionamiento->estacionamientos}}</option>
                  @endforeach
                </select>
            </div>
          </div>

        </div>
         <div class="col-md-3">
          <div class="single-query form-group">
            <div class="intro">
              <label class="text-white">Rango de precio <i class="fa fa-usd"></i></label>
              @if($origen=="busqueda")
                @php 
                  $rango_precio = explode(",",$_GET['precio']);
                  $precio_minimo = $rango_precio[0]; 
                  $precio_maximo = $rango_precio[1];
                @endphp
              @else
                @php
                  $precio_minimo = $precio_min; 
                  $precio_maximo = $precio_max;
                @endphp
              @endif
                  <input id="ex2" type="text" class="span2" value="" data-slider-min="{{$precio_min}}" data-slider-max="{{$precio_max}}" data-slider-step="5" data-slider-value="[{{$precio_minimo}},{{$precio_maximo}}]" name="precio"/>    
            </div>
          </div>
        </div> 
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="query-submit-button top10">
            <input class="btn_fill" value="Buscar" type="submit">
          </div>
        </div>

      </form>
    </div>
    <div class="row bottom40">
      <div class="col-xs-12">
        <h2 class="uppercase title_listPro">LISTA DE  <span class="color_red">PROPIEDADES</span></h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
      </div>
    </div>
    @include('propiedades.partials.propiedadesList')
  </div>
  <a style="background-color:black;color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px;" href="http://unsplash.com/@le_photographe_francais?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from Nicolas Jehly"><span style="display:inline-block;padding:2px 3px;"><svg xmlns="http://www.w3.org/2000/svg" style="height:12px;width:auto;position:relative;vertical-align:middle;top:-1px;fill:white;" viewBox="0 0 32 32"><title></title><path d="M20.8 18.1c0 2.7-2.2 4.8-4.8 4.8s-4.8-2.1-4.8-4.8c0-2.7 2.2-4.8 4.8-4.8 2.7.1 4.8 2.2 4.8 4.8zm11.2-7.4v14.9c0 2.3-1.9 4.3-4.3 4.3h-23.4c-2.4 0-4.3-1.9-4.3-4.3v-15c0-2.3 1.9-4.3 4.3-4.3h3.7l.8-2.3c.4-1.1 1.7-2 2.9-2h8.6c1.2 0 2.5.9 2.9 2l.8 2.4h3.7c2.4 0 4.3 1.9 4.3 4.3zm-8.6 7.5c0-4.1-3.3-7.5-7.5-7.5-4.1 0-7.5 3.4-7.5 7.5s3.3 7.5 7.5 7.5c4.2-.1 7.5-3.4 7.5-7.5z"></path></svg></span><span style="display:inline-block;padding:2px 3px;">Nicolas Jehly</span></a>
</section>
<!-- LISTING -->
