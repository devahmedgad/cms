@extends('admin.layout')
@section('title')
	الإعلانات
@endsection
	@section('content')
	{!! Form::open(['method' => 'POST', 'action' => 'AdsCtrl@store', 'class' => 'form-horizontal',"files"=>true]) !!}
	
	 	@include('admin.ads.form',["type"=>'add'])
	{!! Form::close() !!}
	@endsection
@stop