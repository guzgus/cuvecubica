	//Declaramos las variables que vamos a user
	var lat = null;
	var lng = null;
	var map = null;
	var geocoder = null;
	var marker = null;
	         
	jQuery(document).ready(function(){
	     //obtenemos los valores en caso de tenerlos en un formulario ya guardado en la base de datos
	     lat = jQuery('#lat').val();
	     lng = jQuery('#long').val();
	     //Asignamos al evento click del boton la funcion codeAddress
	     jQuery('#pasar').click(function(){
	        codeAddress();
	        return false;
	     });
	     //Inicializamos la función de google maps una vez el DOM este cargado
	    initialize();
	});
	     
	    function initialize() {
	     
	      geocoder = new google.maps.Geocoder();
	        
	       //Si hay valores creamos un objeto Latlng
	       if(lat !='' && lng != '')
	      {
	         var latLng = new google.maps.LatLng(lat,lng);
	      }
	      else
	      {
	         var latLng = new google.maps.LatLng(19.3568331,-99.2745372);
	      }
	      //Definimos algunas opciones del mapa a crear
	       var myOptions = {
	          center: latLng,//centro del mapa
	          zoom: 15,//zoom del mapa
			  mapTypeId: google.maps.MapTypeId.ROADMAP, //tipo de mapa, carretera, híbrido,etc
               styles:[{"stylers":[{"saturation":-100},{"gamma":1}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi.place_of_worship","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"poi.place_of_worship","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"water","stylers":[{"visibility":"on"},{"saturation":50},{"gamma":0},{"hue":"#50a5d1"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text.fill","stylers":[{"color":"#c5c5c5"}]},{"featureType":"road.local","elementType":"labels.text","stylers":[{"weight":0.5},{"color":"#e7af12"}]},{"featureType":"transit.station","elementType":"labels.icon","stylers":[{"gamma":1},{"saturation":50}]}]
	        };
	        //creamos el mapa con las opciones anteriores y le pasamos el elemento div
	        map = new google.maps.Map(document.getElementById("map_canvas_form"), myOptions);
	         
	        //creamos el marcador en el mapa
	        marker = new google.maps.Marker({
	            map: map,//el mapa creado en el paso anterior
	            position: latLng,//objeto con latitud y longitud
	            draggable: true //que el marcador se pueda arrastrar
	        });
	        
	       //función que actualiza los input del formulario con las nuevas latitudes
	       //Estos campos suelen ser hidden
	        updatePosition(latLng);
	         
	         
	    }
	     
	    //funcion que traduce la direccion en coordenadas
	    function codeAddress() {
	         
	        //obtengo la direccion del formulario
	        var address = document.getElementById("direccion").value;
	        //hago la llamada al geodecoder
	        geocoder.geocode( { 'address': address}, function(results, status) {
	         
	        //si el estado de la llamado es OK
	        if (status == google.maps.GeocoderStatus.OK) {
	            //centro el mapa en las coordenadas obtenidas
	            map.setCenter(results[0].geometry.location);
	            //coloco el marcador en dichas coordenadas
	            marker.setPosition(results[0].geometry.location);
	            //actualizo el formulario      
	            updatePosition(results[0].geometry.location);
	             
	            //Añado un listener para cuando el markador se termine de arrastrar
	            //actualize el formulario con las nuevas coordenadas
	            google.maps.event.addListener(marker, 'dragend', function(){
	                updatePosition(marker.getPosition());
	            });
	      } else {
	          //si no es OK devuelvo error
	          alert("No podemos encontrar la direcci&oacute;n, error: " + status);
	      }
	    });
	  }
	   
	  //funcion que simplemente actualiza los campos del formulario
	  function updatePosition(latLng)
	  {
	       
	       jQuery('#lat').val(latLng.lat());
	       jQuery('#long').val(latLng.lng());
	   
	  }


  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1749329-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
