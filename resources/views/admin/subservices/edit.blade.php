@extends('admin.layout')
	@section('title')
		إضافه قسم
	@endsection
	@section('content')
		
		{!! Form::model($sub,['method' => 'PATCH', 'action' =>['SubServicesCtrl@update',$sub->id], 'class' => 'form-horizontal']) !!}
		
		    @include('admin.subservices._form')
		    <div class="btn-group">
		        {!! Form::submit("حفظ", ['class' => 'btn btn-success']) !!}
		    </div>
		
		{!! Form::close() !!}

	@endsection

@stop