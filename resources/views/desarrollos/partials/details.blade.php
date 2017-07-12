<!--===== PROPERTY - DETAILS - 2 =====-->
@forelse ($desarrolloDetails as $desarrollo)

<div id="listPro">
<!--===== DECRIPCION GENERAL DEL DESARROLLO =====-->
<section class="padding-180">
  <div class="container">
    <div class="row">
      <div class="history-section">
        <div class="col-md-6 col-sm-6 col-xs-12">
        @if (session('status'))        
          <div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Gracias por contactarnos!</strong> En breve uno de nuestros ejecutivos se pondrá en contacto contigo. </div>
        @endif
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


<!--===== CONTACT US =====-->
<section id="contact-us">
	<div class="container">
      <div class="row padding">
      	
        <div class="col-md-8">
        	<div class="bottom40">
                <h2 class="text-uppercase text-white">Solicitar información de  <span class="color_red"> {{$desarrollo->title}} </span></h2>
                <div class="line_1"></div>
                <div class="line_2"></div>
                <div class="line_3"></div>
              </div>
        	<div class="agent-p-form p-t-10">
            
            <div class="row">
            	<form class="callus padding-bottom" method="post" id="contact-form" action="/solicitarinfo">
                    {{ csrf_field() }}    
                    <input type="hidden" class ="keyword-input"  name="desarrollo_contacto_title" id="desarrollo_contacto_title" value="{{$desarrollo->title}}">
                    <input type="hidden" class ="keyword-input"  name="desarrollo_id" id="desarrollo_id" value="{{$desarrollo->id}}">
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
        
        <div class="col-md-4 text-white">
        	<div class="agent-p-contact p-t-30 ">
            <div class="agetn-contact-2">
              <p class="text-white"><i class="icon-telephone114"></i> (55) 5292 1767 y (55) 5292 1768</p>
                <p><i class=" icon-icons142"></i> contacto@cuvecubica.mx</p>
              <a href="http://www.cuvecubica.mx">
                <p><i class="icon-browser2"></i>www.cuvecubica.mx</p>
              </a>
              <p><i class="icon-icons74"></i> Av. Santa Fe 546, Col. Cruz Manca, Del. Cuajimalpa, CDMX.</p>
            </div>
            {{-- <ul class="socials">
              <li><a href="#."><i class="fa fa-facebook"></i></a></li>
              <li><a href="#."><i class="fa fa-twitter"></i></a></li>
              <li><a href="#."><i class="fa fa-youtube"></i></a></li>
              <li><a href="#."><i class="fa fa-instagram"></i></a></li>
              <li><a href="#."><i class="fa fa-pinterest"></i></a></li>
            </ul> --}}
          </div>
        </div>
       
      </div>
    </div>
    
    <div class="contact">
      <div id="map"></div>
    </div>
</section>
<!--===== #/CONTACT US =====-->



</div>

@empty
    <p>Sin desarrollos</p>
@endforelse     

