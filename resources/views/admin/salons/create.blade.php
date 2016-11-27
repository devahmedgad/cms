@extends('admin.layout')

@section('title')

	 إضافه صالون

	@endsection

@section('content')



		<!-- BEGIN FORM-->

 			{!!Form::open(['action'=>['SalonsCtrl@store'],'files'=>true])!!}

				@include('admin.salons._form')

			{!!Form::close()!!}

		<!-- END FORM-->

	

@endsection

@stop