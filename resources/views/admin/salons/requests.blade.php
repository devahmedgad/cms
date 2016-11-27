 @extends('admin.layout')

	@section('title')
	الصالونات
	@endsection

	@section('content')
	
	
	@if(Session::has('msg'))
		<div class="alert alert-success">
			تم الحفظ بنجاح
		</div>
	@endif
	<div class="logo">&ensp;
	</div>
		<div class="portlet box green">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-users"></i>صالونات بإنتظار التفعيل 
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
				@if(count($salons)>0)				
				<table class="table table-bordered table-striped table-condensed">
				<thead class="flip-content">
				<tr>
					<th>
						 #
					</th>
					<th>
						 اسم صاحب الصالون	
					</th>
					<th>
						 اسم الصالون	
					</th>
					
					<th class="numeric">
						 خيارات
					</th>
				</tr>
				</thead>
				<tbody>
					<?php $i=0; ?>
					@foreach($salons as $salon)
					<?php $i++ ?>
				<tr>
					<td>
						 {!! $i !!}
					</td>
					
					<td>
						 {!! str_limit($salon->owner_name, $limit = 25, $end = ' ...') !!}
					</td>
					<td>
						 {!! str_limit($salon->name_ar, $limit = 25, $end = ' ...') !!}
					</td>
					
					<td class="numeric">
						<span>
						{!! Form::open(['action' => ['SalonsCtrl@destroy', $salon->id], 'method' => 'delete']) !!}
						<a href="{!!Url('/')!!}/admin/salons/{!! $salon->id !!}/edit" class="btn btn-icon-only red">
							<i class="fa fa-edit"></i>
						</a>
						<button class="btn btn-icon-only purple" onClick="return confirm('متأكد من حذف المستخدم : {!! $salon->name_ar !!} ؟')">
							<i class="fa fa-times"></i>
						</button>
						<a href="{!!Url('/')!!}/admin/new_salons/{!! $salon->id !!}/approve" class="btn btn-icon-only green">
							<i class="fa fa-check"></i>
						</a>
						{!! Form::close() !!}
						</span>
					</td>
				</tr>
				@endforeach
				</tbody>
				</table>
				{!! Form::close() !!}
				{!! $salons->render(); !!}
				@else
				<h1 class="text-center" style="color:silver">لا توجد بيانات للعرض</h1>
				@endif
			</div>
		</div>
		<!-- Button trigger modal -->

<!-- Modal -->

	@endsection
@stop