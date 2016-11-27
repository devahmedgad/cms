@extends('admin.layout')
	@section('title')
		إضافه قسم
	@endsection
	@section('content')
		
		{!! Form::model($services,['method' => 'PATCH', 'action' =>['ServicesCtrl@update',$services->id], 'class' => 'form-horizontal','files'=>true]) !!}
		
		    @include('admin.services._form',['type'=>'edit'])
		    <div class="btn-group">
		        {!! Form::submit("حفظ", ['class' => 'btn btn-success']) !!}
		    </div>
		
		{!! Form::close() !!}

	@endsection

@stop