@extends('admin.layout')

@section('title')

	الاقسام

@endsection

	@section('content')

	<a href="{!!Url('/')!!}/admin/services/create" class="btn btn-success">

		<i class="fa fa-plus"></i>

	</a>

	<table class="table table-responsive table-striped">

		<thead>

			<th>#</th>

			<th>الاسم </th>



			<th colspan="2">خيارات</th>

		</thead>

		<tbody>

			@foreach($services as $service )

			<tr>



				<td>{!! $service->id !!}</td>

				<td>{!! $service->name_ar !!}</td>

				<td>

					{!! Form::open(['action' => ['ServicesCtrl@destroy', $service->id], 'method' => 'delete']) !!}

					<a href="{!!Url('/')!!}/admin/services/{!! $service->id !!}/edit" class="btn btn-icon-only red">

						<i class="fa fa-edit"></i>

					</a>

					<button class="btn btn-icon-only purple" onClick="return confirm('متأكد من حذف  : {!! $service->name_ar !!} ؟')">

							<i class="fa fa-times"></i>

					</button>

					{!! Form::close() !!}

				</td>

			</tr>

			@endforeach

		</tbody>

	</table>
{!!$services->render()!!}


	@endsection

@stop