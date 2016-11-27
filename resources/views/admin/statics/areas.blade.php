@extends('admin.layout')
	@section('title','إحصائيات')
	@section('content')
		<table class="table table-responsive table-bordered">
			<thead>
				<th>#</th>
				<th>اسم المنطقه</th>
				<th>عدد الصالونات</th>
			</thead>
			<?php $i = 0; ?>
			@foreach($salons as $salon)
			<tr>
				<td>{{$i+1}}</td>
				<td>{{@$areas->find(@$salon[$i]->area_id)['name_ar']}}</td>
				<td>{{count(@$salon)}}</td>
			</tr>
			<?php $i++; ?>
			@endforeach
		</table>				
	@endsection
@stop