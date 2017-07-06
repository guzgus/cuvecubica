<!--===== PROPERTY - DETAILS - 2 =====-->
@forelse ($desarrolloDetails as $desarrollo)

<div id="listPro">
<!--===== DECRIPCION GENERAL DEL DESARROLLO =====-->
<section class="padding-180">
  <div class="container">
    <div class="row">
      <div class="history-section">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <h2 class="text-uppercase text-white"><span class="color_red">{{$desarrollo->title}}</span></h2>
          <div class="line_1"></div>
          <div class="line_2"></div>
          <div class="line_3"></div>
          <h3 class="text-uppercase bottom30 text-white"><span class="color_red">Descripción</span> del proyecto</h3>
          <p class="top20 bottom40 text-justify text-white">{!!$desarrollo->description!!}</p>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div id="about_single" class="owl-carousel">
          @forelse($desarrolloSlidesGenerales as $slidesGenerales)
            <div class="item">
              <div class="content-right-md">
                <figure class="effect-layla">
                  <img class="slide-general-desarrollos" src="/images/sliders/desarrollos/{{$slidesGenerales->file}}" alt="img"/>
                  <figcaption> </figcaption>
                </figure>
              </div>
            </div>
          @empty
              <p>Sin desarrollos</p>
          @endforelse     
          </div>
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
                    <a href="#."><img src="/images/sliders/desarrollos/{{$slidesAmenidades->file}}" alt="listin" class="slide-avances-desarrollos"></a>
                    <div class="feature"><span class="tag-2 text-big">Paradox</span></div>                    
                  </div>
                </div>
              </div>
        @empty
            <p>Sin desarrollos</p>
        @endforelse     
            </div>
          </div>
        </div>
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
                    <a href="/images/sliders/desarrollos/{{$slidesPlanos->file}}">
                      <img src="/images/sliders/desarrollos/{{$slidesPlanos->file}}" class="slide-planos-desarrollos" alt=""/>
                    </a>
                  </div>
              </div>
          @empty
              <p>Sin Planos</p>
          @endforelse     
            </div>

            <div class="row margin_bottom">
              <div class="col-xs-12">
                <h3 class="text-uppercase bottom30"><span class="color_red">Ubicación</span></h3>
              </div>
              <div class="col-md-12">
                <div id="map_canvas" style="height: 550px;"></div>
              </div>
            </div>

          </div>
        </div>


  </div>
</section>
<!--===== #/PLANTAS Y UBICACION =====-->


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
            <p class="pull-right"> 100%</p>
            <div class="clearfix"></div>
          </li>
          <li class="progress bottom30 top10">
            <div class="progress-bar" data-width="100"> </div>
          </li>
          <li>
            <p class="pull-left">Cimientos</p>
            <p class="pull-right"> 100%</p>
            <div class="clearfix"></div>
          </li>
          <li class="progress bottom30 top10">
            <div class="progress-bar" data-width="100"> </div>
          </li>
          <li>
            <p class="pull-left">Estructura</p>
            <p class="pull-right"> 90%</p>
            <div class="clearfix"></div>
          </li>
          <li class="progress bottom30 top10">
            <div class="progress-bar" data-width="90"> </div>
          </li>
          <li>
            <p class="pull-left">Fontanería, Mecánica, Eléctrica</p>
            <p class="pull-right"> 70%</p>
            <div class="clearfix"></div>
          </li>
          <li class="progress top10">
            <div class="progress-bar" data-width="70"> </div>
          </li>
          <li>
            <p class="pull-left">Finalización</p>
            <p class="pull-right"> 40%</p>
            <div class="clearfix"></div>
          </li>
          <li class="progress top10">
            <div class="progress-bar" data-width="40"> </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!--===== #/AVANCES Y ETAPAS DE OBRA =====-->


</div>

@empty
    <p>Sin desarrollos</p>
@endforelse     

