 @extends('admin.layout')

	@section('title')
	الصالونات
	@endsection

	@section('content')
	
	<a href="{!! Url('/') !!}/admin/salons/create"  data-container="body" data-placement="right" data-original-title="Create New Page" class="btn btn-icon-only green tooltips">
		<i class="fa fa-plus"></i>
	</a>
	
	<button type="button"  data-container="body" data-placement="right" data-original-title"Import from Excel" class="btn green tooltips" data-toggle="modal" data-target="#import">
		إستيراد من ملف اكسل
	</button>


	<button type="button"  data-container="body" data-placement="right" data-original-title="Export to Excel" class="btn green tooltips" data-toggle="modal" data-target="#myModal">
		تصدير إلى ملف إكسل
	</button>

	<br>
	<br>
	{!! Form::open(['method' => "GET",'class' => 'form-horizontal']) !!}
		<div class="input-group">
	      {!! Form::text('q',@$request->q, ['class' => 'form-control','placeholder'=>'ابحث بالأسم او رقم التيليفون ...']) !!}
		  <span class="input-group-btn">{!! Form::button("<i class='fa fa-search'></i>", ['class' => 'btn btn-icon-only']) !!}</span>
		</div>
	{!! Form::close() !!}

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
					<i class="icon-users"></i>الصالونات 
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
				{!!Form::open(['url'=>Url('admin/salons/delete/selected')])!!}			
				<table class="table table-bordered table-striped table-condensed">
				<thead class="flip-content">
				<tr>
					<th width="1">
		            	{!! Form::checkbox('checkAll', '1', null, ['id' => 'checkAll','class'=>'md-check']) !!}

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
					@foreach($salons as $salon)
				<tr>
					<td>
		            	{!! Form::checkbox('checkedSalons[]', $salon->id, null,['class'=>'checkbox md-check']) !!}
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
						<button class="btn btn-icon-only purple" onClick="return confirm('متأكد من حذف الصالون : {!! $salon->name_ar !!} ؟')">
							<i class="fa fa-times"></i>
						</button>
						{!! Form::close() !!}
						</span>
					</td>
				</tr>
				@endforeach
				</tbody>
				<tfoot>
					<td colspan="10">
						<button disabled id="deleteAll" onClick="return confirm('سيتم حذف كل الصالونات المحدده ؟')" class="btn btn-danger">
							<i class="fa fa-trash"></i> حذف المحدد
						</button>
					</td>
				</tfoot>
				</table>
				{!! Form::close() !!}
				{!! $salons->render(); !!}
				@else
				<h1 class="text-center" style="color:silver">لا توجد صالونات اعضاء بعد</h1>
				@endif
			</div>
		</div>
		<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <p id="myModalLabel" class="modal-title">تصدير بيانات الصالونات</p>
      </div>
    {!!Form::open(['url'=>Url('/').'/admin/salons/salons/export'])!!}
      <div class="modal-body">
      	<div class="form-group{{ $errors->has('order') ? ' has-error' : '' }}">
      	    {!! Form::label('order', 'ترتيب بواسطه') !!}
      	    {!! Form::select('order',
      	    [
				'area_id'=>'المنطقه',
				'name_ar'=>'الإسم',
				'day_off'=>'يوم العطله',
				'rating'=>'التقييم',
				'address_ar'=>'العنوان',
				'from'=>'ساعات العمل : من ',
				'to'=>'ساعات العمل : إلى ',
      	    ]
      	    , null, ['id' => 'order', 'class' => 'form-control', 'required' => 'required']) !!}
      	    <small class="text-danger">{{ $errors->first('order') }}</small>
      	</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">تصدير</button>
      </div>
    {!!Form::close()!!}
    </div>
  </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <p id="myModalLabel" class="modal-title">تصدير بيانات الصالونات</p>
      </div>
    {!!Form::open(['url'=>Url('/').'/admin/salons/salons/export'])!!}
      <div class="modal-body">
      	<div class="form-group{{ $errors->has('order') ? ' has-error' : '' }}">
      	    {!! Form::label('order', 'ترتيب بواسطه') !!}
      	    {!! Form::select('order',
      	    [
				'area_id'=>'المنطقه',
				'name_ar'=>'الإسم',
				'day_off'=>'يوم العطله',
				'rating'=>'التقييم',
				'address_ar'=>'العنوان',
				'from'=>'ساعات العمل : من ',
				'to'=>'ساعات العمل : إلى ',
      	    ]
      	    , null, ['id' => 'order', 'class' => 'form-control', 'required' => 'required']) !!}
      	    <small class="text-danger">{{ $errors->first('order') }}</small>
      	</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">استيراد</button>
      </div>
    {!!Form::close()!!}
    </div>
  </div>
</div>

<div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <p id="myModalLabel" class="modal-title">استيراد الصالونات</p>
      </div>
    {!!Form::open(['url'=>Url('/').'/admin/salons/salons/import','files'=>true])!!}
      <div class="modal-body">
      	<div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
      	    {!! Form::label('file', 'الملف') !!}
      	   	{!!Form::file('file',$areas,null,['class'=>'form-control'])!!}
      	    <small class="text-danger">{{ $errors->first('file') }}</small>
      	</div>
      	<div class="form-group{{ $errors->has('area_id') ? ' has-error' : '' }}">
      	    {!! Form::label('area_id', 'اختر المنطقه') !!}
      	   	{!!Form::select('area_id',$areas,null,['class'=>'form-control'])!!}
      	    <small class="text-danger">{{ $errors->first('area_id') }}</small>
      	</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">استيراد</button>
      </div>
    {!!Form::close()!!}
    </div>
  </div>
</div>
<!-- Latest compiled and minified CSS & JS -->
<script src="http://code.jquery.com/jquery.js"></script>
<script>
	//select all checkboxes
	$("#checkAll").change(function(){  //"select all" change 
	    $(".checkbox").prop('checked', $(this).prop("checked")); //change all ".checkbox" checked status
		 if ($('.checkbox:checked').length == 0 ){
	    	$('#deleteAll').prop('disabled', true);
	    }else{
	    	$('#deleteAll').prop('disabled', false);
	    }
	});

	//".checkbox" change 
	$('.checkbox').change(function(){ 

	    //uncheck "select all", if one of the listed checkbox item is unchecked
	    if(false == $(this).prop("checked")){ //if this item is unchecked
	        $("#checkAll").prop('checked', false); //change "select all" checked status to false
	    }else{
	    	$('#deleteAll').prop('disabled', false);
	    }

	    if ($('.checkbox:checked').length == 0 ){
	    	$('#deleteAll').prop('disabled', true);
	    }
	    //check "select all" if all checkbox items are checked
	    if ($('.checkbox:checked').length == $('.checkbox').length ){
	        $("#checkAll").prop('checked', true);
	    }
	});
	
</script>
	@endsection
@stop