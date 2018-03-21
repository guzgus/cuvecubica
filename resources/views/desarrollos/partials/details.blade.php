<!--===== PROPERTY - DETAILS - 2 =====-->
@forelse ($desarrolloDetails as $desarrollo)

<div id="listPro">
<!--===== DECRIPCION GENERAL DEL DESARROLLO =====-->
<section class="padding-180">
  <div class="container">
    <div class="row">
      <div class="history-section">
        <div class="col-md-6 col-sm-6 col-xs-12">
          @include('includes.status')
          <h3 class="text-uppercase text-white text-center"><span class="color_red">{{$desarrollo->title}}</span></h3>
          @if (!Auth::guest())
              <a href="/editarDesarrollo/{{$desarrollo->id}}" type="button" class="btn btn-warning btn-xs pull-right">Editar datos generales</a>
          @endif          
           <img src="/storage/logos/{{$desarrollo->logo}}" class="logo-desarrollos" alt=""/>
            <h3 class="text-uppercase bottom30 text-white"><span class="color_red">Descripción</span> del proyecto</h3>
          <div class="top20 bottom40 text-justify text-white">{!!$desarrollo->description!!}</div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div id="about_single" class="owl-carousel">
          @forelse($desarrolloSlidesGenerales as $slidesGenerales)
            <div class="item">
              <div class="content-right-md">
                    <figure>
                      <img class="slide-general-desarrollos" src="/storage/slides/{{$slidesGenerales->file}}" alt="img"/>
                      <figcaption>   
                      @php
                        $slide_id=$slidesGenerales->id;
                        $file_delete=$slidesGenerales->file;
                        $tipo_inmueble = "desarrollo";
                        $desarrollo_id = $desarrollo->id;
                        $inmueble_id = $desarrollo->id;
                        $propiedad_id = "0";
                      @endphp
                      @include('includes.formDeleteSlide')         
                    </figcaption>
                </figure>
              </div>
            </div>
          @empty
              <p class="text-white">Sin Imágenes</p>
          @endforelse 
          </div>
              @php 
                  $section_update="desarrollos-general";
                  $tipo_inmueble = "desarrollo";
                  $desarrollo_id = $desarrollo->id;
                  $inmueble_id = $desarrollo->id;
                  $propiedad_id = "0";
              @endphp
              @include('includes.formAltaSlide')
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
                    <a href="#."><img src="/storage/slides/{{$slidesAmenidades->file}}" alt="listin" class="slide-avances-desarrollos"></a>
                    <div class="feature"><span class="tag-2 text-big">{{$desarrollo->title}}</span></div>                    
                  </div>
                </div>
                      @php
                        $slide_id=$slidesAmenidades->id;
                        $file_delete=$slidesAmenidades->file;
                        $tipo_inmueble = "desarrollo";
                        $desarrollo_id = $desarrollo->id;
                        $inmueble_id = $desarrollo->id;
                        $propiedad_id = "0";
                      @endphp
                      @include('includes.formDeleteSlide')         
              </div>
            @empty
              <p class="text-white">Sin Imágenes</p>
            @endforelse     
            </div>
              @php 
                  $section_update="desarrollos-amenidades";                 
                  $desarrollo_id = $desarrollo->id;
                   $inmueble_id = $desarrollo->id;
                  $tipo_inmueble = "desarrollo";
                  $propiedad_id = "0";
              @endphp
              @include('includes.formAltaSlide')

          </div>
        </div>
        @if($desarrollo->link_video!="")
        <div class="row"> 
          <div class="col-md-12"> 
            <h3 class="text-uppercase  bottom30 top10 text-white">Video <span class="color_red">Informativo</span></h3>

            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item"  src="{{$desarrollo->link_video}}?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        @endif
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
            @if($desarrollo->id==17)
              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                  <img src="/images/planos/Plano_General_Torre300.png" alt="" usemap="#Plano_General_Torre300" />
                  <map name="Plano_General_Torre300" id="Plano_General_Torre300">
                      <area alt="" title="Ver detalle de plano" href="#a" shape="rect" coords="114,118,369,493" data-toggle="modal" data-target=".bs-a-modal-lg" />
                      <area alt="" title="Ver detalle de plano" href="#e" shape="rect" coords="107,507,497,879" data-toggle="modal" data-target=".bs-e-modal-lg" />
                      <area alt="" title="Ver detalle de plano" href="#d" shape="rect" coords="501,507,867,894" data-toggle="modal" data-target=".bs-d-modal-lg" />
                      <area alt="" title="Ver detalle de plano" href="#b" shape="rect" coords="373,118,617,369" data-toggle="modal" data-target=".bs-b-modal-lg" />
                      <area alt="" title="Ver detalle de plano" href="#c" shape="rect" coords="625,122,877,497" data-toggle="modal" data-target=".bs-c-modal-lg" />
                  </map>                
                </div>
                <div class="col-md-2"></div>
                <!-- Large modal -->
                <div class="modal fade bs-a-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/T300-TipoA.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-b-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/T300-TipoB.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-c-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/T300-TipoC.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-d-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/T300-TipoD.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-e-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/T300-TipoE.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-11">
                  <img src="/images/planos/Plano_PH_Torre300.png?{{rand()}}" alt="" usemap="#Plano_PH_Torre300" />
                  <map name="Plano_PH_Torre300" id="Plano_PH_Torre300">
                      <area alt="" title="Ver detalle de plano" href="#" shape="rect" coords="185,53,309,229" data-toggle="modal" data-target=".bs-phb-modal-lg" />
                      <area alt="" title="" href="#" shape="poly" coords="309,307,246,311,251,454,301,447,425,371,441,257,429,131,313,47" />
                      <area alt="" title="" href="#" shape="poly" coords="691,303,753,309,754,458,693,450,657,254,553,251,571,130,689,53" data-toggle="modal" data-target=".bs-pha-modal-lg" />
                      <area alt="" title="" href="#" shape="poly" coords="701,58,697,185,798,183,805,227,825,230,821,50" data-toggle="modal" data-target=".bs-phb-modal-lg" />
                      <area alt="" title="" href="#" shape="poly" coords="829,51,827,307,766,311,766,454,817,454,855,255,962,255,942,123" />
                  </map>
                </div>
                <!-- Large modal -->
                <div class="modal fade bs-pha-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/T300-PHA.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-phb-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/T300-PHB.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-phc-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/T300-TipoC.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-11">
                  <img src="/images/planos/Plano_adjunto_Torre300.png" alt="" usemap="#Plano_adjunto_Torre300" />
                  <map name="Plano_adjunto_Torre300" id="Plano_adjunto_Torre300">
                      <area alt="" title="Ver detalle de plano" href="#" shape="poly" coords="369,614,494,616,497,900,289,872,147,750,125,503,381,502" data-toggle="modal" data-target=".bs-adjunto_e-modal-lg" />
                      <area alt="" title="Ver detalle de plano" href="#" shape="poly" coords="626,614,501,615,509,894,733,863,873,707,899,502,617,500" data-toggle="modal" data-target=".bs-adjunto_d-modal-lg"/>
                      <area alt="" title="Ver detalle de plano" href="#" shape="poly" coords="617,276,837,274,873,495,614,494" data-toggle="modal" data-target=".bs-adjunto_c-modal-lg" />
                  </map>

                      <!-- Large modal -->
                      <div class="modal fade bs-adjunto_e-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"?{{rand()}}>
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                              <img src="/images/planos/Plano_adjunto_Torre300_E.png?{{rand()}}" class="img-center" />
                          </div>
                        </div>
                      </div>
                      <div class="modal fade bs-adjunto_d-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                              <img src="/images/planos/Plano_adjunto_Torre300_D.png?{{rand()}}" class="img-center" />
                          </div>
                        </div>
                      </div>
                      <div class="modal fade bs-adjunto_c-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                              <img src="/images/planos/Plano_adjunto_Torre300_C.png?{{rand()}}" class="img-center" />
                          </div>
                        </div>
                      </div>
              </div>
              </div>
            @elseif($desarrollo->id==16)
              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                <img src="/images/planos/santafe/PlanoGeneralSantaFe.jpg" class="img-center" alt="" usemap="#PlanoGeneralStaFe" />
                <map name="PlanoGeneralStaFe" id="PlanoGeneralStaFe">
                    <area alt="" title="Ver detalle de plano" href="#" shape="poly" coords="26,430,123,428,124,275,172,274,170,175,82,176,26,227" data-toggle="modal" data-target=".bs-1-modal-lg" />
                    <area alt="" title="Ver detalle de plano" href="#" shape="poly" coords="125,432,230,432,229,216,173,216,173,272,126,275" data-toggle="modal" data-target=".bs-2-modal-lg" />
                    <area alt="" title="Ver detalle de plano" href="#" shape="rect" coords="233,216,332,429" data-toggle="modal" data-target=".bs-3-modal-lg" />
                    <area alt="" title="Ver detalle de plano" href="#" shape="rect" coords="475,188,787,340" data-toggle="modal" data-target=".bs-4-modal-lg" />
                    <area alt="" title="Ver detalle de plano" href="#" shape="rect" coords="471,27,787,183" data-toggle="modal" data-target=".bs-5-modal-lg" />
                </map>                
                </div>
                <div class="col-md-2"></div>
                <!-- Large modal -->
                <div class="modal fade bs-1-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/santafe/planta-1-a.jpg?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-2-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/santafe/planta-2-a.jpg?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-3-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/santafe/planta-3-a.jpg?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-4-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/santafe/planta-4-b.jpg?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-5-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/santafe/planta-5-b.jpg?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
              </div>
            @elseif($desarrollo->id==18)
              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                  <img src="/images/planos/peninsulaixtapa/PlanoGeneralPeninsulaIxtapa.png" alt="" usemap="#PlanoGeneralPeninsulaIxtapa" />
                  <map name="PlanoGeneralPeninsulaIxtapa" id="PlanoGeneralPeninsulaIxtapa">
                      <area alt="" title="" href="#" shape="poly" coords="851,158,807,513,1181,588,1210,365" data-toggle="modal" data-target=".bs-a-modal-lg" />
                      <area alt="" title="" href="#" shape="poly" coords="802,529,983,558,958,731,776,709"  data-toggle="modal" data-target=".bs-b-modal-lg"/>
                      <area alt="" title="" href="#" shape="poly" coords="773,716,959,743,967,717,1156,749,1123,963,749,914"  data-toggle="modal" data-target=".bs-c-modal-lg" />
                      <area alt="" title="" href="#" shape="poly" coords="748,916,723,1106,905,1131,906,1148,1095,1172,1122,977"  data-toggle="modal" data-target=".bs-d-modal-lg" />
                      <area alt="" title="" href="#" shape="poly" coords="721,1105,903,1133,853,1342,681,1280"  data-toggle="modal" data-target=".bs-e-modal-lg"/>
                      <area alt="" title="" href="#" shape="poly" coords="679,1287,849,1356,873,1297,1059,1345,931,1644,602,1450"  data-toggle="modal" data-target=".bs-f-modal-lg" />
                      <area alt="" title="" href="#" shape="poly" coords="599,1456,923,1662,763,1870,496,1591"  data-toggle="modal" data-target=".bs-g-modal-lg" />
                      <area alt="" title="" href="#" shape="poly" coords="357,1719,494,1599,624,1733,464,1863"  data-toggle="modal" data-target=".bs-h-modal-lg" />
                      <area alt="" title="" href="#" shape="poly" coords="195,1813,350,1724,455,1874,504,1839,626,1986,352,2153"  data-toggle="modal" data-target=".bs-i-modal-lg" />
                  </map>
                </div>
                <div class="col-md-2"></div>
                <!-- Large modal -->
                <div class="modal fade bs-a-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/peninsulaixtapa/A_Ixtapa.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-b-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/peninsulaixtapa/B_Ixtapa.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-c-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/peninsulaixtapa/C_Ixtapa.png?{{rand()}}" class="img-center" />
                        <img src="/images/planos/peninsulaixtapa/C_nv_1_Ixtapa.png?{{rand()}}" class="img-center" />
                        <img src="/images/planos/peninsulaixtapa/C_nv_2_Ixtapa.png?{{rand()}}" class="img-center" />
                        <img src="/images/planos/peninsulaixtapa/C_PB_Ixtapa.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-d-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/peninsulaixtapa/D_Ixtapa.png?{{rand()}}" class="img-center" />
                        <img src="/images/planos/peninsulaixtapa/D_nv_2_Ixtapa.png?{{rand()}}" class="img-center" />
                        <img src="/images/planos/peninsulaixtapa/D_PB_Ixtapa.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-e-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/peninsulaixtapa/E_Ixtapa.png?{{rand()}}" class="img-center" />
                        <img src="/images/planos/peninsulaixtapa/E_nv_1-2_Ixtapa.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-f-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/peninsulaixtapa/F_Ixtapa.png?{{rand()}}" class="img-center" />
                        <img src="/images/planos/peninsulaixtapa/F_nv_1-2_Ixtapa.png?{{rand()}}" class="img-center" />
                        <img src="/images/planos/peninsulaixtapa/F_PB_Ixtapa.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
              </div>
            @elseif($desarrollo->id==19)
              <div class="row">
                <div class="col-md-6">
                  <img src="/images/planos/highpark/HPQ_NIVEL_1a10.png?{{rand()}}" alt="" usemap="#1a10" />
                  <map name="1a10" id="1a10">
                      <area alt="" title="Ver detalle de plano" href="#" shape="rect" coords="20,246,186,352" data-toggle="modal" data-target=".bs-a-modal-lg"  />
                      <area alt="" title="Ver detalle de plano" href="#" shape="rect" coords="21,148,185,245" data-toggle="modal" data-target=".bs-b-modal-lg" />
                      <area alt="" title="Ver detalle de plano" href="#" shape="poly" coords="19,28,19,145,188,145,188,125,130,122,125,26" data-toggle="modal" data-target=".bs-c-modal-lg" />
                      <area alt="" title="Ver detalle de plano" href="#" shape="rect" coords="129,27,233,125" data-toggle="modal" data-target=".bs-d-modal-lg" />
                      <area alt="" title="Ver detalle de plano" href="#" shape="rect" coords="234,15,335,124" data-toggle="modal" data-target=".bs-e-modal-lg" />
                      <area alt="" title="Ver detalle de plano" href="#" shape="poly" coords="336,15,446,17,446,147,276,147,277,126,334,122" data-toggle="modal" data-target=".bs-f-modal-lg" />
                      <area alt="" title="Ver detalle de plano" href="#" shape="rect" coords="279,147,444,242" data-toggle="modal" data-target=".bs-g-modal-lg" />
                      <area alt="" title="Ver detalle de plano" href="#" shape="rect" coords="279,243,445,353" data-toggle="modal" data-target=".bs-h-modal-lg" />
                  </map>                
                </div>
                <div class="col-md-6">
                  <img src="/images/planos/highpark/HPQ_NIVEL_11a19.png?{{rand()}}" alt="" usemap="#11a19" />
                  <map name="11a19" id="11a19">
                      <area alt="" title="Ver detalle de plano" href="#" shape="rect" coords="22,29,227,351" data-toggle="modal" data-target=".bs-a11-modal-lg" />
                      <area alt="" title="Ver detalle de plano" href="#" shape="rect" coords="445,356,232,30" data-toggle="modal" data-target=".bs-b11-modal-lg" />
                  </map>                
                </div>
                <!-- Large modal -->
                <div class="modal fade bs-a-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/highpark/A1.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-b-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/highpark/B1.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-a20-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/highpark/A20.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-a21-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/highpark/A21.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-a11-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/highpark/A11.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-a22-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/highpark/A22.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-a23-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/highpark/A23.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-a24-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/highpark/A24.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-ph25-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/highpark/PH25.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-b11-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/highpark/B11.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-c-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/highpark/C1.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-d-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/highpark/D1.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-e-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/highpark/E1.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-f-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/highpark/F1.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-g-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/highpark/G1.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-h-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/highpark/H1.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <a href="" data-toggle="modal" data-target=".bs-a20-modal-lg" ><img src="/images/planos/highpark/HPQ_NIVEL_20.png?{{rand()}}" alt="" /></a>
                </div>
                <div class="col-md-6">
                  <a href="" data-toggle="modal" data-target=".bs-a21-modal-lg" ><img src="/images/planos/highpark/HPQ_NIVEL_21.png?{{rand()}}" alt="" /></a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <a href="" data-toggle="modal" data-target=".bs-a22-modal-lg" ><img src="/images/planos/highpark/HPQ_NIVEL_22.png?{{rand()}}" alt="" /></a>
                </div>
                <div class="col-md-6">
                  <a href="" data-toggle="modal" data-target=".bs-a23-modal-lg" ><img src="/images/planos/highpark/HPQ_NIVEL_23.png?{{rand()}}" alt="" /></a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <a href="" data-toggle="modal" data-target=".bs-a24-modal-lg" ><img src="/images/planos/highpark/HPQ_NIVEL_24.png?{{rand()}}" alt="" /></a>
                </div>
                <div class="col-md-6">
                  <a href="" data-toggle="modal" data-target=".bs-ph25-modal-lg" ><img src="/images/planos/highpark/HPQ_NIVEL_25.png?{{rand()}}" alt="" /></a>
                </div>
              </div>
            
            
            @elseif($desarrollo->id==20)
            <img src="/images/planos/allure/conjunto_unidades.png?{{rand()}}" alt="" usemap="#Map" />
            <map name="Map" id="Map">
                <area alt="" title="a" href="#" shape="poly" coords="2,308,57,58,145,69,82,318" data-toggle="modal" data-target=".bs-a-modal-lg"  />
                <area alt="" title="b" href="#" shape="poly" coords="160,334,176,222,111,215,88,321" data-toggle="modal" data-target=".bs-b-modal-lg" />
                <area alt="" title="c" href="#" shape="poly" coords="166,336,208,75,271,90,229,345" data-toggle="modal" data-target=".bs-c-modal-lg" />
                <area alt="" title="e" href="#" shape="poly" coords="258,202,351,210,367,101,277,89" data-toggle="modal" data-target=".bs-e-modal-lg" />
                <area alt="" title="d" href="#" shape="poly" coords="338,365,374,227,260,205,237,348" data-toggle="modal" data-target=".bs-d-modal-lg"/>
                <area alt="" title="f" href="#" shape="poly" coords="445,382,488,122,398,108,348,366" data-toggle="modal" data-target=".bs-f-modal-lg" />
                <area alt="" title="g" href="#" shape="poly" coords="453,379,494,124,585,133,523,390" data-toggle="modal" data-target=".bs-g-modal-lg"/>
                <area alt="" title="h" href="#" shape="poly" coords="601,406,617,296,553,287,526,393" data-toggle="modal" data-target=".bs-h-modal-lg" />
                <area alt="" title="i" href="#" shape="poly" coords="607,404,642,146,707,159,679,417" data-toggle="modal" data-target=".bs-i-modal-lg" />
                <area alt="" title="i" href="#" shape="poly" coords="878,422,823,170,901,149,948,399" data-toggle="modal" data-target=".bs-i-modal-lg" />
                <area alt="" title="h" href="#" shape="poly" coords="959,395,934,291,1004,274,1031,384"  data-toggle="modal" data-target=".bs-h-modal-lg" />
                <area alt="" title="g" href="#" shape="poly" coords="1037,381,972,130,1038,114,1100,367"  data-toggle="modal" data-target=".bs-g-modal-lg" />
                <area alt="" title="f" href="#" shape="poly" coords="1106,367,1080,250,1182,225,1206,346" data-toggle="modal" data-target=".bs-f-modal-lg" />
                <area alt="" title="e" href="#" shape="poly" coords="1044,115,1073,224,1156,200,1137,95" data-toggle="modal" data-target=".bs-e-modal-lg" />
                <area alt="" title="d" href="#" shape="poly" coords="1212,343,1157,95,1256,68,1309,319" data-toggle="modal" data-target=".bs-d-modal-lg" />
                <area alt="" title="c" href="#" shape="poly" coords="1265,67,1355,47,1379,307,1320,317" data-toggle="modal" data-target=".bs-c-modal-lg" />
                <area alt="" title="b" href="#" shape="poly" coords="1392,306,1376,198,1439,180,1464,289" data-toggle="modal" data-target=".bs-b-modal-lg" />
                <area alt="" title="a" href="#" shape="poly" coords="1470,288,1404,38,1462,23,1539,270" data-toggle="modal" data-target=".bs-a-modal-lg" />
            </map>

                <div class="modal fade bs-a-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/allure/1.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-b-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/allure/2.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-c-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/allure/3.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-d-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/allure/4.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-e-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/allure/5.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-f-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/allure/6.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-g-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/allure/7.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-h-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/allure/8.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-i-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <img src="/images/planos/allure/9.png?{{rand()}}" class="img-center" />
                    </div>
                  </div>
                </div>
            @else

                @forelse($desarrolloSlidesPlanos as $slidesPlanos)
                    <div class="col-md-4 col-sm-4 col-xs-12 top10">
                        <div class="easyzoom easyzoom--overlay">
                          <a href="/storage/slides/{{$slidesPlanos->file}}">
                            <img src="/storage/slides/{{$slidesPlanos->file}}" class="slide-planos-desarrollos" alt=""/>
                          </a>
                        </div>
                            @php
                              $slide_id=$slidesPlanos->id;
                              $file_delete=$slidesPlanos->file;
                              $tipo_inmueble = "desarrollo";
                              $desarrollo_id = $desarrollo->id;
                              $inmueble_id = $desarrollo->id;
                              $propiedad_id = "0";
                            @endphp
                            @include('includes.formDeleteSlide')         
                    </div>
                    @empty
                    <p class="text-white">Sin Imágenes</p>
                @endforelse 
                    @php 
                        $section_update="desarrollos-planos";
                        $desarrollo_id = $desarrollo->id;
                        $inmueble_id = $desarrollo->id;
                        $tipo_inmueble = "desarrollo";
                        $propiedad_id = "0";
                    @endphp
                    @include('includes.formAltaSlide')
              @endif
            </div>

            <div class="row margin_bottom">
              <div class="col-xs-12">
                <h3 class="text-uppercase bottom30"><span class="color_red">Ubicación</span></h3>
              </div>
              <div class="col-md-12">
                {{--  <div id="map_canvas" style="height: 550px;"></div>  --}}
                  <div id="map"></div>
              </div>
            </div>

          </div>
        </div>
  </div>
</section>
<!--===== #/PLANTAS Y UBICACION =====-->

  <script>

      function initMap() {
        var uluru = {lat: {{$desarrollo->latitud}}, lng: {{$desarrollo->longitud}} };
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: uluru,
          styles:[{"stylers":[{"saturation":-100},{"gamma":1}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi.place_of_worship","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"poi.place_of_worship","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"water","stylers":[{"visibility":"on"},{"saturation":50},{"gamma":0},{"hue":"#50a5d1"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text.fill","stylers":[{"color":"#c5c5c5"}]},{"featureType":"road.local","elementType":"labels.text","stylers":[{"weight":0.5},{"color":"#e7af12"}]},{"featureType":"transit.station","elementType":"labels.icon","stylers":[{"gamma":1},{"saturation":50}]}]
        });

        var contentString = '<div class"info-window"><div class="image-label"><img class="slide-map-desarrollos" src="/images/sliders/desarrollos/paradox2.jpg" alt="featured-properties-5" ><label>Desarrollo</label></div><div class="map-detail"><a href="#"><h4>{{$desarrollo->title}}</h4></a><p> </p></div></div>';

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });

        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
          title: 'Uluru (Ayers Rock)'
        });
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
      }
    </script>

<!--===== AVANCES Y ETAPAS DE OBRA =====-->
<section id="news-section-1" class="property-details">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-6 skills margin_bottom text-white">
        <h3 class="text-uppercase text-white">Etapas de <span class="color_red">construcción</span> <small class="text-white">   (Avances de Obra)</small></h3>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>

        <ul>
          <li>
            <p class="pull-left">Fase previa</p>
            <p class="pull-right"> {{$desarrollo->fase_previa}}%</p>
            <div class="clearfix"></div>
          </li>
          <li class="progress bottom30 top10">
            <div class="progress-bar" data-width="{{$desarrollo->fase_previa}}"> </div>
          </li>
          <li>
            <p class="pull-left">Cimientos</p>
            <p class="pull-right"> {{$desarrollo->cimientos}}%</p>
            <div class="clearfix"></div>
          </li>
          <li class="progress bottom30 top10">
            <div class="progress-bar" data-width="{{$desarrollo->cimientos}}"> </div>
          </li>
          <li>
            <p class="pull-left">Estructura</p>
            <p class="pull-right"> {{$desarrollo->estructura}}%</p>
            <div class="clearfix"></div>
          </li>
          <li class="progress bottom30 top10">
            <div class="progress-bar" data-width="{{$desarrollo->estructura}}"> </div>
          </li>
          <li>
            <p class="pull-left">Fontanería, Mecánica, Eléctrica</p>
            <p class="pull-right"> {{$desarrollo->fme}}%</p>
            <div class="clearfix"></div>
          </li>
          <li class="progress top10">
            <div class="progress-bar" data-width="{{$desarrollo->fme}}"> </div>
          </li>
          <li>
            <p class="pull-left">Finalización</p>
            <p class="pull-right"> {{$desarrollo->finalizacion}}%</p>
            <div class="clearfix"></div>
          </li>
          <li class="progress top10">
            <div class="progress-bar" data-width="{{$desarrollo->finalizacion}}"> </div>
          </li>
        </ul>
      </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div id="about_single_2" class="owl-carousel">
          @forelse($desarrolloSlidesAvances as $slidesAvances)
            <div class="item">
              <div class="content-right-md">
                    <figure>
                                        <div class="feature"><span class="tag-2 text-big">{{$slidesAvances->date_avance}}</span></div>                    

                      <img class="slide-general-desarrollos" src="/storage/slides/{{$slidesAvances->file}}" alt="img"/>
                      <figcaption>   
                      @php
                        $slide_id=$slidesAvances->id;
                        $file_delete=$slidesAvances->file;
                        $tipo_inmueble = "desarrollo";
                        $desarrollo_id = $desarrollo->id;
                        $inmueble_id = $desarrollo->id;
                        $propiedad_id = "0";
                      @endphp
                      @include('includes.formDeleteSlide')         
                    </figcaption>
                </figure>
              </div>
            </div>
          @empty
              <p class="text-white">Sin Imágenes</p>
          @endforelse 
          </div>
              @php 
                  $section_update="desarrollos-avances";
                  $tipo_inmueble = "desarrollo";
                  $desarrollo_id = $desarrollo->id;
                  $inmueble_id = $desarrollo->id;
                  $propiedad_id = "0";
              @endphp
              @include('includes.formAltaSlide')
        </div>
    </div>
  </div>
</section>
<!--===== #/AVANCES Y ETAPAS DE OBRA =====-->


<!-- LISTING STYLE-->
<section id="listPro">
  <div class="container">
    <div class="row bottom40">
      <div class="col-xs-12">
        <h2 class="text-uppercase title_listPro">PROPIEDADES RELACIONADAS A <span class="color_red">{{$desarrollo->title}}</span></h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
      </div>
    </div>
    @include('propiedades.partials.propiedadesList')
  </div>
</section>
<!-- LISTING -->


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
                    <input type="hidden" class ="keyword-input"  name="tipo_inmueble" id="tipo_inmueble" value="desarrollo">
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
              <p class="text-white"><i class="icon-telephone114"></i> 
              @if($desarrollo->id == 18) 755 553 0029 / 755 553 0130
              @elseif($desarrollo->id == 19) 229-3170              
              @endif

              @if($desarrollo->id != 18 && $desarrollo->id != 19  )    (55) 5292-1767         @endif
              
              </p>
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

