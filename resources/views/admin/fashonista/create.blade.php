@extends('admin.layout')
	@section('title')
		فاشونيستا | إضافه جديد
	@endsection
	@section('content')
		{!! Form::open(['action' =>['FashonistaCtrl@store'], 'class' => 'form-horizontal','files'=>true]) !!}
			
			    @include('admin.fashonista.form',['type'=>'add'])
				
			    <div class="btn-group">
			        {!! Form::submit("حفظ", ['class' => 'btn btn-success']) !!}
			    </div>
			
			{!! Form::close() !!}	
	@endsection
@stop