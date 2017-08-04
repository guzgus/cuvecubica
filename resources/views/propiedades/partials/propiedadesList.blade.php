    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="row">
            @foreach($propiedades as $propiedad)
            <div class="col-md-4 col-sm-4">
              <div class="property_item heading_space">
                <div class="image">
                  <img class="side-amenidades-propiedades-mini" src="/storage/slides/{{$propiedad->slide_default}}">
                  <div class="overlay">
                    <div class="centered"><a class="link_arrow white_border" href="/propiedad/{{$propiedad->id}}" target="_blank">Ver detalle</a></div>
                  </div>
                  {{--  <div class="feature"><span class="tag">Featured</span></div>  --}}
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
          @if($origen=="propiedades")
           {{ $propiedades->appends(Request::input())->links() }} 
          @endif
      </div>
    </div>
