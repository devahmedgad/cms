<?php use Carbon\Carbon;?>
<?php use App\Departments;?>
<?php Carbon::setlocale('ar'); ?>
 @extends('admin.layout')

	@section('title')
	الحجز
	@endsection

	@section('content')
	
	<div class="logo">&ensp;
	</div>
		<div class="portlet box green">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-users"></i>الحجوزات 
				</div>
				<div class="tools">
					<a href="javascript:;" class="collapse" data-original-title="" title="">
					</a>
					<a href="{!! Request::url() !!}" class="reload">
					</a>
					<a href="javascript:;" class="remove" data-original-title="" title="">
					</a>
				</div>
			</div>
			<div class="portlet-body">
				@if(count($reservations)>0)				
				<table class="table table-bordered table-striped table-condensed">
				<thead class="flip-content">
				<tr>
					<th>
						 #
					</th>
					<th>
						 اسم المريض
					</th>
					<th class="numeric">
						 القسم
					</th>
					
					<th class="numeric">
						 التاريخ
					</th>
					
					<th class="numeric">
						 خيارات
					</th>
				</tr>
				</thead>
				<tbody>
					<?php $i=0; ?>
					@foreach($reservations as $reserve)
					<?php $i++ ?>
				<tr>
					<td>
						 {!! $i !!}
					</td>
					
					
					<td>
						<a class='btn' data-toggle="modal" href='#{{$reserve->id}}'>{!! str_limit($reserve->patient_name, $limit = 25, $end = ' ...') !!}</a>
					</td>
					<td>
						{!! Departments::findOrFail($reserve->department_id)->name_ar !!}
					</td>
					<td class="numeric"> 
						{!! Carbon::parse($reserve->reservation_date)->formatLocalized('%A %d-%m-%Y') !!}
					</td>
				
					<td class="numeric">
						<span>
						{!! Form::open(['action' => ['ReservationCtrl@destroy', $reserve->id], 'method' => 'delete']) !!}
						
						<button class="btn btn-icon-only purple" onClick="return confirm('متأكد من حذف الخدمه : {!! $reserve->name_ar !!} ؟')">
							<i class="fa fa-times"></i>
						</button>
						{!! Form::close() !!}
						</span>
					</td>
				</tr>
				<div class="modal fade" id="{{$reserve->id}}">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">{{$reserve->patient_name}}</h4>
					</div>
					<div class="modal-body">
						<p>رقم التيليفون : <strong>{{$reserve->patient_phone}}</strong></p><br>
						<p>البريد الاكترونى : <strong>{{$reserve->patient_email}}</strong></p><br>
						<p>القسم : <strong>{!! Departments::findOrFail($reserve->department_id)->name_ar !!}</strong></p><br>

						<p>تاريخ الحجز : <strong>{!! Carbon::parse($reserve->reservation_date)->formatLocalized('%A %d-%m-%Y') !!} </strong></p><br>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
				@endforeach
				</tbody>
				</table>
				{!! Form::close() !!}
				{!! $reservations->render(); !!}
				@else
				<h1 class="text-center" style="color:silver">لا يوجد خدمات بعد !</h1>
				@endif
			</div>
		</div>
		
	@endsection
@stop