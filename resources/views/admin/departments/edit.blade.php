@extends('admin.layout')
	@section('title')
		إضافه قسم
	@endsection
	@section('content')
		
		{!! Form::model($areas,['method' => 'PATCH', 'action' =>['AreasCtrl@update',$areas->id], 'class' => 'form-horizontal']) !!}
		
		    @include('admin.departments._form')
		    <div class="btn-group">
		        {!! Form::submit("حفظ", ['class' => 'btn btn-success']) !!}
		    </div>
		
		{!! Form::close() !!}

	@endsection

@stop