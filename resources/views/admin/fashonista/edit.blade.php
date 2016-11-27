@extends('admin.layout')
	@section('title')
		فاشونيستا | تعديل
	@endsection
	@section('content')
	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>خطأ!</strong> يوجد بعض المشاكل عند الادخال.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
		{!! Form::model($persons,['action' => ['FashonistaCtrl@update',$persons->id], 'class' => 'form-horizontal','method'=>'PATCH','files'=>true]) !!}
			
			    @include('admin.fashonista.form',['type'=>'edit'])
				
			    <div class="btn-group">
			        {!! Form::submit("حفظ", ['class' => 'btn btn-success']) !!}
			    </div>
			
			{!! Form::close() !!}	
	@endsection
@stop