<!--===== PROPERTY - DETAILS - 2 =====-->
@forelse ($desarrolloDetails as $desarrollo)
           
<div id="listPro">
<section id="news-section-1" class="property-details padding-180">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-uppercase text-white">{{$desarrollo->title}}</h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
      </div>
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-12">
            <div id="property-d-1" class="owl-carousel">
              <div class="item"><img src="/images/sliders/desarrollos/paradox.jpg" alt="image" /></div>
              <div class="item"><img src="/images/sliders/desarrollos/paradox1.jpg" alt="image" /></div>
              <div class="item"><img src="/images/sliders/desarrollos/paradox.jpg" alt="image" /></div>
              <div class="item"><img src="/images/sliders/desarrollos/paradox.jpg" alt="image" /></div>
              <div class="item"><img src="/images/sliders/desarrollos/paradox.jpg" alt="image" /></div>
              <div class="item"><img src="/images/sliders/desarrollos/paradox.jpg" alt="image" /></div>
              <div class="item"><img src="/images/sliders/desarrollos/paradox.jpg" alt="image" /></div>
            </div>
          </div>
        </div>
        <div class="row top40">
          <div class="col-md-12">
            <div class="row margin_bottom">
              <div class="col-xs-12 top40">
                <h3 class="text-uppercase bottom30 text-white"><span class="color_red">Descripción</span> del desarrollo</h3>
                <p class="bottom30 text-white text-justify">{{$desarrollo->description}}</p>
              </div>
            </div>
            <div class="row margin_bottom">
              <div class="col-xs-12">
                <h3 class="text-uppercase bottom30">Quick  <span class="color_red">Summery</span></h3>
              </div>
              <div class="property-d-table clearfix">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <table class="table table-striped table-responsive">
                    <tbody>
                      <tr>
                        <td><b>Property Id</b></td>
                        <td class="text-right">5456</td>
                      </tr>
                      <tr>
                        <td><b>Price</b></td>
                        <td class="text-right">$8,600 / month</td>
                      </tr>
                      <tr>
                        <td><b>Property Size</b></td>
                        <td class="text-right">5,500 ft2</td>
                      </tr>
                      <tr>
                        <td><b>Bedrooms</b></td>
                        <td class="text-right">5</td>
                      </tr>
                      <tr>
                        <td><b>Bathrooms</b></td>
                        <td class="text-right">3</td>
                      </tr>
                      <tr>
                        <td><b>Available From</b></td>
                        <td class="text-right">22-04-2017</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <table class="table table-striped table-responsive">
                    <tbody>
                      <tr>
                        <td><b>Status</b></td>
                        <td class="text-right">Rent</td>
                      </tr>
                      <tr>
                        <td><b>Year Built</b></td>
                        <td class="text-right">1991</td>
                      </tr>
                      <tr>
                        <td><b>Garages</b></td>
                        <td class="text-right">1</td>
                      </tr>
                      <tr>
                        <td><b>Cross Streets</b></td>
                        <td class="text-right">Nordoff</td>
                      </tr>
                      <tr>
                        <td><b>Floors</b></td>
                        <td class="text-right">Carpet - Ceramic Tile</td>
                      </tr>
                      <tr>
                        <td><b>Plumbing</b></td>
                        <td class="text-right">Full Copper Plumbing</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="row margin_bottom">
              <div class="col-xs-12">
                <h3 class="text-uppercase bottom30">Property <span class="color_red">Features</span></h3>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="pro-list">
                  <li>
                    Air Conditioning
                  </li>
                  <li>
                    Barbeque
                  </li>
                  <li>
                    Dryer
                  </li>
                  <li>
                    Laundry
                  </li>
                </ul>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="pro-list">
                  <li>
                    Microwave
                  </li>
                  <li>
                    Outdoor Shower
                  </li>
                  <li>
                    Refrigerator
                  </li>
                  <li>
                    Swimming Pool
                  </li>
                </ul>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="pro-list">
                  <li>
                    Quiet Neighbourhood
                  </li>
                  <li>
                    TV Cable & WIFI
                  </li>
                  <li>
                    Window Coverings
                  </li>
                </ul>
              </div>
            </div>
            <div class="row margin_bottom">
              <div class="col-xs-12">
                <h3 class="text-uppercase bottom20">Our <span class="color_red">Plans</span></h3>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12 top10">
                <div class="image">
                  <img src="/images/property-d-1-f-1.jpg" alt="image" />
                  <div class="overlay border_radius">
                    <a class="fancybox centered" href="images/property-d-1-f-1.jpg" data-fancybox-group="gallery"><i class="icon-focus"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12 top10">
                <div class="image">
                  <img src="/images/property-d-1-f-4.jpg" alt="image" />
                  <div class="overlay border_radius">
                    <a class="fancybox centered" href="images/property-d-1-f-1.jpg" data-fancybox-group="gallery"><i class="icon-focus"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12 top10">
                <div class="image">
                  <img src="/images/property-d-1-f-6.jpg" alt="image" />
                  <div class="overlay border_radius">
                    <a class="fancybox centered" href="images/property-d-1-f-1.jpg" data-fancybox-group="gallery"><i class="icon-focus"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row margin_bottom">
              <div class="col-xs-12">
                <h3 class="text-uppercase bottom30">Property <span class="color_red">Map</span></h3>
              </div>
              <div class="col-md-12">
                <div id="map_canvas" style="height: 350px;"></div>
              </div>
            </div>
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