<!--===== PROPERTY - DETAILS - 2 =====-->
@forelse ($desarrolloDetails as $desarrollo)

<div id="listPro">
<!--===== ABOUT US =====-->
<section class="padding-180">
  <div class="container">
    <div class="row">
      <div class="history-section">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <h2 class="text-uppercase"><span class="color_red">{{$desarrollo->title}}</span></h2>
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
<!--===== #/ABOUT US =====-->

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

</div>

@empty
    <p>Sin desarrollos</p>
@endforelse     