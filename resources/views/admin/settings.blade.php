@extends('admin.layout')
	@section('title')
		اعدادات الموقع
	@endsection
	@section('content')
		<div class="col-lg-12">
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
			
			@if(Session::has('msg'))
				<div class="alert alert-success">
					تم الحفظ بنجاح
				</div>
			@endif
				

		{!! Form::model($settings,['method' => 'PATCH', 'action' => ['SettingsCtrl@update',$settings->id], 'class' => 'form-horizontal','files'=>true]) !!}
		
			<div class="form-group @if($errors->first('email')) has-error @endif">
			    {!! Form::label('email', 'البريد الإلكترونى') !!}
			    {!! Form::email('email', null, ['class' => 'form-control' ,'rows'=>'4']) !!}
			    <small class="text-danger">{{ $errors->first('email') }}</small>
			</div>

			<div class="form-group @if($errors->first('mobile')) has-error @endif">
			    {!! Form::label('mobile', 'موبايل') !!}
			    {!! Form::text('mobile', null, ['class' => 'form-control' ,'rows'=>'4']) !!}
			    <small class="text-danger">{{ $errors->first('mobile') }}</small>
			</div>

		    <div class="form-group @if($errors->first('SiteLink')) has-error @endif">
		        {!! Form::label('SiteLink', 'رابط الموقع') !!}
		        {!! Form::text('SiteLink', null, ['class' => 'form-control' ]) !!}
		        <small class="text-danger">{{ $errors->first('SiteLink') }}</small>
		    </div>
		    

			<div class="form-group">
		        <img src="{{Url('/uploads/logo.png')}}" style="width: 220px;height: 140px;border: 4px solid #CACACA;"  />
		    </div>
			<div class="form-group @if($errors->first('logo')) has-error @endif">
			    {!! Form::label('logo', 'اللوجو') !!}
			    {!! Form::file('logo', null , ['class' => 'form-control' ]) !!}
			    <small class="text-danger">{{ $errors->first('logo') }}</small>
			</div>
			
			
			<div class="form-group @if($errors->first('facebook')) has-error @endif">
			    {!! Form::label('facebook_page', 'فيس بوك') !!}
			    {!! Form::text('facebook', null, ['class' => 'form-control' ]) !!}
			    <small class="text-danger">{{ $errors->first('facebook') }}</small>
			</div>

			<div class="form-group @if($errors->first('twitter')) has-error @endif">
			     {!! Form::label('GooglePlus', 'جوجل بلس') !!}
			    {!! Form::text('twitter', null, ['class' => 'form-control' ]) !!}
			    <small class="text-danger">{{ $errors->first('twitter') }}</small>
			</div>

			
			<div class="form-group @if($errors->first('GooglePlus')) has-error @endif">
				{!! Form::label('twitter', 'تويتر') !!}
			    {!! Form::text('GooglePlus', null, ['class' => 'form-control' ]) !!}
			    <small class="text-danger">{{ $errors->first('GooglePlus') }}</small>
			</div>

			<div class="form-group @if($errors->first('youtube')) has-error @endif">
			    {!! Form::label('youtube', 'إنستجرام') !!}
			    {!! Form::text('youtube', null, ['class' => 'form-control' ]) !!}
			    <small class="text-danger">{{ $errors->first('youtube') }}</small>
			</div>
			

		    <div class="btn-group pull-right">
		        {!! Form::submit("تعديل", ['class' => 'btn btn-success']) !!}
		    </div>
		
		{!! Form::close() !!}
	</div>
	@endsection
@stop