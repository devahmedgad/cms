  		@if($type == 'edit')
	  		<div class="row">
				<div class="thumbnail col-md-6">
					<img src="{!!Url('/')!!}/uploads/ads/{!! $ads->image !!}" alt="">
				</div>
	  		</div>
  		@endif

  		<div class="form-group{{ $errors->has('img') ? ' has-error' : '' }}">
	        {!! Form::label('img', 'File label') !!}
	        {!! Form::file('img', ['required' => 'required']) !!}
	        <small class="text-danger">{{ $errors->first('img') }}</small>
	    </div>
	
	    <div class="btn-group pull-right">
	        {!! Form::submit("حفظ", ['class' => 'btn btn-success']) !!}
	    </div>
	