@extends('admin.layout')
	@section('title','الصالونات')
	@section('content')
		<table class="table table-responsive table-bordered">
			<thead>
				<th>#</th>
				<th>اسم الصالون</th>
				<th>التقيم</th>
			</thead>
			<?php $i = 0; ?>
			@foreach($data as $salon)
			<tr>
				<td>{{$i+1}}</td>
				<td>{{$salon['name']}}</td>
				<td>{{round($salon['rating'],1)}}</td>
			</tr>
			<?php $i++; ?>
			@endforeach
		</table>	
	@endsection
@stop