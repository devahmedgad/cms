<div class="col-lg-12">

<div class="form-group @if($errors->first('username')) has-error @endif">
    {!! Form::label('username', 'إسم المستخدم') !!}
    {!! Form::text('username', null, ['class' => 'form-control' ]) !!}
    <small class="text-danger">{{ $errors->first('username') }}</small>
</div>


<div class="form-group @if($errors->first('source')) has-error @endif">
    {!! Form::label('source', 'مصدر العضو') !!}
    {!! Form::text('source', null,['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('source') }}</small>
</div>

<div class="form-group @if($errors->first('mobile')) has-error @endif">
    {!! Form::label('mobile', 'الهاتف') !!}
    {!! Form::text('mobile', null,['class' => 'form-control' ]) !!}
    <small class="text-danger">{{ $errors->first('mobile') }}</small>
</div>

<div class="form-group{{ $errors->has('source_id') ? ' has-error' : '' }}">
    {!! Form::label('source_id', 'ID المصدر') !!}
    {!! Form::text('source_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('source_id') }}</small>
</div>

<div class="btn-group pull-right">
    {!! Form::submit('حفظ', ['class' => 'btn btn-success']) !!}
</div>
</div>