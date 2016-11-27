@extends('admin.layout')
	@section('title')
		فاشونيستا
	@endsection
	@section('content')
		<a href="{!!Url('/')!!}/admin/fashonista/create" class="btn btn-success">
			<i class="fa fa-plus"></i>
		</a>
	
	<br>
	<br>
	@if(Session::has('msg'))
		<div class="alert alert-success">
			{{Session::get('msg')}}
		</div>
	@endif
		<table class="table table-responsive table-bordered">
			<thead>
				<th>#</th>
				<th>الإسم</th>
				<th>الوظيفه</th>
				<th colspan="2">خيارات</th>
			</thead>
			@foreach($persons as $person)
				<tr>
					<td>{{$person->id}}</td>
					<td>{{$person->name_ar}}</td>
					<td>{{$person->job}}</td>
					<td><a href="{{Url('/')}}/admin/fashonista/{{$person->id}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i> تعديل</a></td>
					<td>
					{!! Form::open(['action' => ['FashonistaCtrl@destroy', $person->id], 'method' => 'delete']) !!}
						<button class="btn  purple" onClick="return confirm('متأكد من حذف  : {!! $person->name_ar !!} ؟')">
								<i class="fa fa-times"></i> حذف
						</button>
					{!! Form::close() !!}
				</tr>
			@endforeach
		</table>
		{!!$persons->render()!!}
	@endsection
@stop