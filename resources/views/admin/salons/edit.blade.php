@extends('admin.layout')

@section('title')

	تعديل  صالون

	@endsection

@section('content')



{!! Form::model($salon,['method'=>'PATCH','action'=>['SalonsCtrl@update',$salon->id],'files'=>true])!!}

	@include('admin.salons._form',['type'=>'edit'])

{!! Form::close()!!}



@endsection

@stop