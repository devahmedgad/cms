@extends('admin.layout')
	@section('title','الصالونات')
	@section('content')
		<table class="table table-responsive table-bordered">
			<thead>
				<th>#</th>
				<th>اسم الصالون</th>
				<th>عدد الزيارات هذا الشهر</th>
				<th>عدد الزيارات الشهر السابق</th>
			</thead>
			<?php $i = 0; ?>
			@foreach($data as $salon)
			<tr>
				<td>{{$i+1}}</td>
				<td>{{$salon['name']}}</td>
				<td>{{$salon['visits_this']}}</td>
				<td>{{$salon['visits_last']}}</td>
			</tr>
			<?php $i++; ?>
			@endforeach
		</table>	
	@endsection
@stop