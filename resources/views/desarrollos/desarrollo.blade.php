@extends('layouts.home')

@section('content')
	@push('scripts')
		<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U&callback=initMap">
		</script> 
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="/js/jquery.rwdImageMaps.min.js"></script>
		<script>
		$(document).ready(function(e) {
		$('img[usemap]').rwdImageMaps();

		$('area').on('click', function() {
			//{{--  alert($(this).attr('alt') + ' clicked');  --}}
		});
		});
		</script>
	@endpush            
	@include('desarrollos.partials.details')
@endsection
