<div class="form-group{{ $errors->has('name_ar') ? ' has-error' : '' }}">
    {!! Form::label('name_ar', 'الإسم بالعربى') !!}
    {!! Form::text('name_ar', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('name_ar') }}</small>
</div>

<div class="form-group{{ $errors->has('name_en') ? ' has-error' : '' }}">
    {!! Form::label('name_en', 'الإسم بالإنجليزى') !!}
    {!! Form::text('name_en', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('name_en') }}</small>
</div>
<div class="col-md-12">
	<div class="col-md-6">
		@if($type == 'edit')
			<div class="row">
				<div class="col-md-6">
					<div class="thumbnail">
						<img src="{{Url('/')}}/uploads/fashonista/{{$persons->photo1}}" alt="">
					</div>
				</div>
			</div>
		@endif
		<div class="col-md-6">
			<div class="form-group{{ $errors->has('img1') ? ' has-error' : '' }}">
			    {!! Form::label('img1', 'الصوره') !!}
			    {!! Form::file('img1' ) !!}
			    <small class="text-danger">{{ $errors->first('img1') }}</small>
			</div>
		</div>
	</div>


	<div class="col-md-6">
		@if($type == 'edit')
			<div class="row">
				<div class="col-md-6">
					<div class="thumbnail">
						<img src="{{Url('/')}}/uploads/fashonista/{{$persons->photo2}}" alt="">
					</div>
				</div>
			</div>
		@endif
		<div class="col-md-6">
			<div class="form-group{{ $errors->has('img2') ? ' has-error' : '' }}">
			    {!! Form::label('img2', 'صوره الجنسيه') !!}
			    {!! Form::file('img2') !!}
			    <small class="text-danger">{{ $errors->first('img2') }}</small>
			</div>
		</div>
	</div>
</div>

<div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
    {!! Form::label('mobile', 'موبايل') !!}
    {!! Form::text('mobile', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('mobile') }}</small>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'البريد الإلكترونى') !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'eg: foo@bar.com']) !!}
    <small class="text-danger">{{ $errors->first('email') }}</small>
</div>

<div class="form-group{{ $errors->has('job') ? ' has-error' : '' }}">
    {!! Form::label('job', 'الوظيفه') !!}
    {!! Form::text('job', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('job') }}</small>
</div>

	<div class="col-md-6">
		<div class="form-group{{ $errors->has('snapchat') ? ' has-error' : '' }}">
		    {!! Form::label('snapchat', 'سناب شات') !!}
		    {!! Form::url('snapchat', null, ['class' => 'form-control']) !!}
		    <small class="text-danger">{{ $errors->first('snapchat') }}</small>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group{{ $errors->has('snapchat_followers') ? ' has-error' : '' }}">
		    {!! Form::label('snapchat_followers', 'عدد المتابعين') !!}
		    {!! Form::input('number','snapchat_followers', null, ['class' => 'form-control']) !!}
		    <small class="text-danger">{{ $errors->first('snapchat_followers') }}</small>
		</div>
	</div>


	<div class="col-md-6">
		<div class="form-group{{ $errors->has('instagram') ? ' has-error' : '' }}">
		    {!! Form::label('instagram', 'إنستجرام') !!}
		    {!! Form::url('instagram', null, ['class' => 'form-control']) !!}
		    <small class="text-danger">{{ $errors->first('instagram') }}</small>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group{{ $errors->has('instagram_followers') ? ' has-error' : '' }}">
		    {!! Form::label('instagram_followers', 'عدد المتابعين') !!}
		    {!! Form::input('number','instagram_followers', null, ['class' => 'form-control']) !!}
		    <small class="text-danger">{{ $errors->first('instagram_followers') }}</small>
		</div>
	</div>


	<div class="col-md-6">
		<div class="form-group{{ $errors->has('twitter') ? ' has-error' : '' }}">
		    {!! Form::label('twitter', 'تويتر') !!}
		    {!! Form::url('twitter', null, ['class' => 'form-control']) !!}
		    <small class="text-danger">{{ $errors->first('twitter') }}</small>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group{{ $errors->has('twitter_followers') ? ' has-error' : '' }}">
	    {!! Form::label('twitter_followers', 'عدد المتابعين') !!}
	    {!! Form::input('number','twitter_followers', null, ['class' => 'form-control']) !!}
	    <small class="text-danger">{{ $errors->first('twitter_followers') }}</small>
		</div>
	</div>

	<div class="col-md-6">
		<div class="form-group{{ $errors->has('facebook') ? ' has-error' : '' }}">
		    {!! Form::label('facebook', 'فيس بوك') !!}
		    {!! Form::url('facebook', null, ['class' => 'form-control']) !!}
		    <small class="text-danger">{{ $errors->first('facebook') }}</small>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group{{ $errors->has('facebook_followers') ? ' has-error' : '' }}">
		    {!! Form::label('facebook_followers', 'عدد المتابعين') !!}
		    {!! Form::input('number','facebook_followers', null, ['class' => 'form-control']) !!}
		    <small class="text-danger">{{ $errors->first('facebook_followers') }}</small>
		</div>
	</div>