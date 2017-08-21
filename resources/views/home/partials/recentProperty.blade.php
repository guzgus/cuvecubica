
<!-- RECENT PROPERTY -->
<section id="agent-p-2" class="property-details padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 bottom40">
        <h2 class="text-uppercase">Propiedades <span class="color_red">RECIENTES</span></h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
        <p class="margin-t-20">-
        </p>
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
        <div id="property-2-slider" class="owl-carousel">
          @foreach($propiedades as $propiedad)
          <div class="item">
            <div class="property_item bottom40">
              <div class="image">
                <img class="side-amenidades-propiedades-mini" src="/storage/slides/{{$propiedad->slide_default}}">
                <div class="property_meta">
                    <span><i class="fa fa-object-group"></i>{{$propiedad->superficie_construccion}} m² de construcción</span>
                    <span><i class="fa fa-bed"></i>{{$propiedad->recamaras}} Habitacion(es)</span>
                    <span><i class="fa fa-bath"></i>{{$propiedad->banios}} Baño(s)</span>
                    <span><i class="fa fa-car"></i>{{$propiedad->estacionamientos}} Estacionamiento(s)</span>
                </div>
                @if($propiedad->status_pro=="Rentada" || $propiedad->status_pro=="Vendida")
                  <div class="feature"><span class="tag">{{$propiedad->status_pro}}</span></div>
                @endif
                <div class="price"><span class="tag">{{$propiedad->status}}</span></div>
                <div class="overlay">
                  <div class="centered"><a class="link_arrow white_border" href="/propiedad/{{$propiedad->id}}">Ver detalle</a></div>
                </div>
              </div>
              <div class="proerty_content">
                <div class="proerty_text">
                  <h3><a href="/propiedad/{{$propiedad->id}}">{{$propiedad->title}}</a></h3>
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
      </div>
    </div>
  </div>
</section>
<!-- RECENT PROPERTY -->
