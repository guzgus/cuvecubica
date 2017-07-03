

jQuery(function ($) {
	"use strict";
  function initialize() {
         //add map, the type of map
           var mapOptions = {
               zoom: 14,
               draggable: true,
					scrollwheel: false,
               animation: google.maps.Animation.DROP,
               mapTypeId: google.maps.MapTypeId.ROADMAP,
               center: new google.maps.LatLng(19.3573212,-99.2731821), // area location
               styles:[{"stylers":[{"saturation":-100},{"gamma":1}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi.place_of_worship","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"poi.place_of_worship","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"water","stylers":[{"visibility":"on"},{"saturation":50},{"gamma":0},{"hue":"#50a5d1"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text.fill","stylers":[{"color":"#c5c5c5"}]},{"featureType":"road.local","elementType":"labels.text","stylers":[{"weight":0.5},{"color":"#e7af12"}]},{"featureType":"transit.station","elementType":"labels.icon","stylers":[{"gamma":1},{"saturation":50}]}]
           };
           var mapElement = document.getElementById('map_canvas');
           var map = new google.maps.Map(mapElement, mapOptions);

         //add locations
             var locations = [
                 ['<div class"info-window"><div class="image-label"><img class="slide-map-desarrollos" src="/images/sliders/desarrollos/paradox2.jpg" alt="featured-properties-5" ><label>Desarrollo</label></div><div class="map-detail"><a href="#"><h4>Paradox Santa Fe.</h4></a><p>Av. Santa Fe #546, Cuajimalpa de Morelos, Lomas de Santa Fe, Contadero, 01219 Ciudad de México, CDMX</p></div></div>',
				  19.356994,-99.27389060000002,'/images/map_marker_cuve.png'],
             ];
             //declare marker call it 'i'
             var marker, i;
             //declare infowindow
             var infowindow = new google.maps.InfoWindow();
             //add marker to each locations
             for (i = 0; i < locations.length; i++) {
                 marker = new google.maps.Marker({
                     position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                     map: map,
                     icon: locations[i][3]
             });
             //click function to marker, pops up infowindow
             google.maps.event.addListener(marker, 'click', (function(marker, i) {
                 return function() {
                     infowindow.setContent(locations[i][0]);
                     infowindow.open(map, marker);
                 }
             })(marker, i));
         }
     }
     google.maps.event.addDomListener(window, 'load', initialize);
});