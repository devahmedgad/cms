@extends('admin.layout')
@section('title')
	الإعلانات
@endsection
	@section('content')
	<a href="{!!Url('/')!!}/admin/ads/create" class="btn btn-success">
		<i class="fa fa-plus"></i>
	</a>
	<table class="table table-responsive table-striped">
		<thead>
			<th>#</th>
			<th>الصوره </th>
			<th colspan="2">خيارات</th>
		</thead>
		<tbody>
			@foreach($ads as $ad )
			<tr>
				<td>{!! $ad->id !!}</td>
				<td><img src="{!!Url('/')!!}/uploads/ads/{!! $ad->image !!}" width="100" height="100"/></td>
				<td>
					{!! Form::open(['action' => ['AdsCtrl@destroy', $ad->id], 'method' => 'delete']) !!}
					<a href="{!!Url('/')!!}/admin/ads/{!! $ad->id !!}/edit" class="btn btn-icon-only red">
						<i class="fa fa-edit"></i>
					</a>
					<button class="btn btn-icon-only purple" onClick="return confirm('متأكد من حذف  : {!! $ad->id !!} ؟')">
							<i class="fa fa-times"></i>
					</button>
					{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{!!$ads->render()!!}
	@endsection
@stop