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
      <form class="findus"> 
        <div class="col-md-3 col-sm-3">
          <div class="single-query form-group">
            <label class="text-white">Término de Búsqueda</label>
            <input class="keyword-input"  required type="text">
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="single-query form-group">
            <div class="intro">
              <label class="text-white">Localidad</label>
              <select>
                <option selected="" >-</option>
                <option>Localidad - 1</option>
                <option>Localidad - 2</option>
                <option>Localidad - 3</option>
                <option>Localidad - 4</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="single-query form-group">
            <div class="intro">
              <label class="text-white">Tipo de propiedad</label>
              <select>
                <option class="active">-</option>
                <option>Tipo de propiedad - 1</option>
                <option>Tipo de propiedad - 2</option>
                <option>Tipo de propiedad - 3</option>
                <option>Tipo de propiedad - 4</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="single-query form-group">
            <div class="intro">
              <label class="text-white">Estatus de propiedad</label>
              <select>
                <option class="active">-</option>
                <option>Estatus de propiedad - 1</option>
                <option>Estatus de propiedad - 2</option>
                <option>Estatus de propiedad - 3</option>
                <option>Estatus de propiedad - 4</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="single-query form-group">
                <div class="intro">
                  <label class="text-white">Habitaciones</label>
                  <select>
                    <option class="active">-</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="single-query form-group">
                <div class="intro">
                  <label class="text-white">Baños</label>
                  <select>
                    <option class="active">-</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="single-query form-group">
                <label class="text-white">m2 mínimos</label>
                <input class="keyword-input" type="text">
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="single-query form-group">
                <label class="text-white">m2 máximos</label>
                <input class="keyword-input" type="text">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="single-query-slider top10">
            <label class="text-white">Rango de precio:</label>
            <div class="price text-right text-white"><span>$</span>
              <div class="leftLabel text-white">1</div>
              <span>a $</span>
              <div class="rightLabel text-white">50000000</div>
            </div>
            <div data-range_min="0" data-range_max="50000000" data-cur_min="0" data-cur_max="50000000" class="nstSlider">
              <div class="bar nst-animating" style="left: 1px; width: 359px;"></div>
              <div class="leftGrip nst-animating" tabindex="0" style="left: 1px;"></div>
              <div class="rightGrip nst-animating" tabindex="0" style="left: 340px;"></div>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-12 text-right">
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
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="row">
            @foreach($propiedades as $propiedad)
            <div class="col-md-4 col-sm-4">
              <div class="property_item heading_space">
                <div class="image">
                  <img class="side-amenidades-propiedades-mini" src="/storage/slides/{{$propiedad->slide_default}}">
                  <div class="overlay">
                    <div class="centered"><a class="link_arrow white_border" href="/propiedad/{{$propiedad->id}}">Ver detalle</a></div>
                  </div>
                  <div class="price"><span class="tag"> {{$propiedad->status}}</span></div>
                  <div class="property_meta">
                    <span><i class="fa fa-object-group"></i>{{$propiedad->superficie_terreno}} m2 de construcción</span>
                    <span><i class="fa fa-bed"></i>{{$propiedad->recamaras}} Habitaciones</span>
                    <span><i class="fa fa-bath"></i>{{$propiedad->banios}} Baños</span>
                    <span><i class="fa fa-car"></i>{{$propiedad->estacionamientos}} Estacionamiento</span>
                  </div>
                </div>
                <div class="proerty_content">
                  <div class="proerty_text">
                    <h3><a href="/propiedad/1">{{$propiedad->title}}</a></h3>
                    <span class="bottom10">{{$propiedad->domicilio}}</span>
                    <p><strong>${{ number_format($propiedad->precio,2)}} {{$propiedad->moneda}}</strong></p>
                  </div>
                  <div class="favroute clearfix">
                    <p class="pull-left"><i class="icon-calendar2"></i> {{$propiedad->updated_at}}</p>
                    <ul class="pull-right">
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <ul class="pager top40 padding_bottom">
            <li><a href="#.">1</a></li>
            <li class="active"><a href="#.">2</a></li>
            <li><a href="#.">3</a></li>
          </ul>
      </div>
    </div>
  </div>
  <a style="background-color:black;color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px;" href="http://unsplash.com/@le_photographe_francais?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from Nicolas Jehly"><span style="display:inline-block;padding:2px 3px;"><svg xmlns="http://www.w3.org/2000/svg" style="height:12px;width:auto;position:relative;vertical-align:middle;top:-1px;fill:white;" viewBox="0 0 32 32"><title></title><path d="M20.8 18.1c0 2.7-2.2 4.8-4.8 4.8s-4.8-2.1-4.8-4.8c0-2.7 2.2-4.8 4.8-4.8 2.7.1 4.8 2.2 4.8 4.8zm11.2-7.4v14.9c0 2.3-1.9 4.3-4.3 4.3h-23.4c-2.4 0-4.3-1.9-4.3-4.3v-15c0-2.3 1.9-4.3 4.3-4.3h3.7l.8-2.3c.4-1.1 1.7-2 2.9-2h8.6c1.2 0 2.5.9 2.9 2l.8 2.4h3.7c2.4 0 4.3 1.9 4.3 4.3zm-8.6 7.5c0-4.1-3.3-7.5-7.5-7.5-4.1 0-7.5 3.4-7.5 7.5s3.3 7.5 7.5 7.5c4.2-.1 7.5-3.4 7.5-7.5z"></path></svg></span><span style="display:inline-block;padding:2px 3px;">Nicolas Jehly</span></a>
</section>
<!-- LISTING -->
