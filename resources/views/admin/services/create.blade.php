@extends('admin.layout')
	@section('title')
		إضافه قسم
	@endsection
	@section('content')
		
		{!! Form::open(['method' => 'POST', 'action' => 'ServicesCtrl@store', 'class' => 'form-horizontal','files'=>true]) !!}
		
		    @include('admin.services._form',['type'=>'add'])
		    <div class="btn-group">
		        {!! Form::submit("حفظ", ['class' => 'btn btn-success']) !!}
		    </div>
		
		{!! Form::close() !!}

	@endsection

@stop