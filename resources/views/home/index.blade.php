@extends('layouts.home')

@section('content')
	@include('home.partials.sliders')
	@include('home.partials.iconStarts')
	@include('home.partials.welcome')
	@include('home.partials.estimate')
	@include('home.partials.recentProperty')
	@include('home.partials.contact')
@endsection
