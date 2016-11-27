@extends('salons.layout')
	@section('title','Reservations')
	@section('content')
	<style>
		@media print {
			.btns{
				display: none;
			}
		    @page {
		      margin: 30px;   
		    }
		    table { page-break-inside:auto }
   			tr    { page-break-inside:avoid; page-break-after:auto }
		}

	</style>
		<div class="container">
			<div class="pull-left">
				<h4>{{Auth::salon()->get()->name_en}}</h4>
				<h5>Reservation List</h5>

			</div>
			<div class="btns pull-right">
				<button class="btn btn-default" onClick="window.print()">print</button>
				<div class="btn-group" role="group" aria-label="...">
					<a href="{{Url('/')}}/salons/export?type=xls" class="btn btn-success">Excel</a>
					<a href="{{Url('/')}}/salons/export?type=csv" class="btn btn-success">CSV</a>
					<a href="{{Url('/')}}/salons/export?type=txt" class="btn btn-success">Txt</a>
					<a href="{{Url('/')}}/salons/export?type=html" class="btn btn-success">html</a>
				</div>
			</div>
			<table class="table table-responsive table-bordered">
				<thead>
					<th>#</th>
					<th>Client Name</th>
					<th>Mobile</th>
					<th>Service</th>
					<th>Way Of Service</th>
					<th>Date</th>
					<th>From</th>
				</thead>
				<tbody>
					<?php $i=1; ?>
					@foreach($reservation as $reserv)
					<tr>
						<td>{{$i}}</td>
						<td>{{$reserv->client_name}}</td>
						<td>{{$reserv->mobile}}</td>
						<td>{{$reserv->service}}</td>
						<td>{{$reserv->way_of_service}}</td>
						<td>{{$reserv->date}}</td>
						<td>{{$reserv->from}}</td>
					</tr>
					<?php $i++; ?>
					@endforeach
				</tbody>
			</table>
		</div>
	@endsection
@stop
