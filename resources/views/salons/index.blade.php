@extends('salons.layout')
	@section('title','home')
	@section('content')
		<div class="container">
			@if(Session::has('msg'))
				<div class="alert alert-success">{{Session::get('msg')}}</div>
			@endif
			<div class="jumbotron">
				<h3>Welcome to Your Dashboard , </h3>
				<h1 style="color:#0b229a">{{Auth::salon()->get()->name_en}}</h1>
			</div>
		</div>
	@endsection
@stop