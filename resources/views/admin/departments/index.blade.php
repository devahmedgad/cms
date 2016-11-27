@extends('admin.layout')

@section('title')

	الاقسام

@endsection

	@section('content')

	<a href="{!!Url('/')!!}/admin/areas/create" class="btn btn-success">

		<i class="fa fa-plus"></i>

	</a>
	<br>
	<br>
	{!! Form::open(['method' => "GET",'class' => 'form-horizontal']) !!}
		<div class="input-group">
	      {!! Form::text('q',@$request->q, ['class' => 'form-control','placeholder'=>'ابحث بالأسم ...']) !!}
		  <span class="input-group-btn">{!! Form::button("<i class='fa fa-search'></i>", ['class' => 'btn btn-icon-only']) !!}</span>
		</div>
	{!! Form::close() !!}
	<br>
{!!Form::open(['url'=>Url('admin/areas/delete/selected')])!!}			
	<table class="table table-responsive table-striped">
		<thead>
			<th width="1">
		            	{!! Form::checkbox('checkAll', '1', null, ['id' => 'checkAll','class'=>'md-check']) !!}
			<th>الاسم </th>
			<th colspan="2">خيارات</th>
		</thead>
		<tbody>
			@foreach($areas as $area )
			<tr>
				<td>
		            	{!! Form::checkbox('checkedSalons[]', $area->id, null,['class'=>'checkbox md-check']) !!}
					</td>

				<td>{!! $area->name_ar !!}</td>
				<td>
					{!! Form::open(['action' => ['AreasCtrl@destroy', $area->id], 'method' => 'delete']) !!}
					<a href="{!!Url('/')!!}/admin/areas/{!! $area->id !!}/edit" class="btn btn-icon-only red">
						<i class="fa fa-edit"></i>
					</a>
					<button class="btn btn-icon-only purple" onClick="return confirm('متأكد من حذف  : {!! $area->name_ar !!} ؟')">
							<i class="fa fa-times"></i>
					</button>
					{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
			<tfoot>
					<td colspan="10">
						<button disabled id="deleteAll" onClick="return confirm('سيتم حذف كل المناطق المحدده ؟')" class="btn btn-danger">
							<i class="fa fa-trash"></i> حذف المحدد
						</button>
					</td>
				</tfoot>
		</tbody>
	</table>
{!! Form::close() !!}
{!!$areas->render()!!}
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