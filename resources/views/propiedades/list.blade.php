@extends('layouts.home')

@section('content')

		<link href="/css/bootstrap-slider.css" rel="stylesheet">


	@include('propiedades.partials.listPro')

		<script type='text/javascript' src="/js/jquery.min.js"></script>
		<script type='text/javascript' src="/js/bootstrap-slider.js"></script>

		<script>  
		// Without JQuery
		var slider = new Slider('#ex2', {});
		</script>

@endsection
