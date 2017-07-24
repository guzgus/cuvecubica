@extends('layouts.home')

@section('content')
	@push('scripts')
		<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U&callback=initMap">
		</script> 
	@endpush            
	@include('propiedades.partials.detailPro')
	
@endsection
