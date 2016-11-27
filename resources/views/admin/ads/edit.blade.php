@extends('admin.layout')
@section('title')
	الإعلانات
@endsection
	@section('content')
	{!! Form::model($ads,['method' => 'PATCH', 'action' => ['AdsCtrl@update',$ads->id], 'class' => 'form-horizontal',"files"=>true]) !!}
	
	 	@include('admin.ads.form',["type"=>'edit'])
	{!! Form::close() !!}
	@endsection
@stop