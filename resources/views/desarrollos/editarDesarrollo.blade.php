@extends('layouts.home')
@section('content')
	@push('scripts')
		<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U"></script> 
		<script src="/js/searchMap.js"></script>
 	@endpush            
	@include('desarrollos.partials.formEditDesarrollo')
@endsection
