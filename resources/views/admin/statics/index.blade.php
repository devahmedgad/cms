@extends('admin.layout')
	@section('title','إحصائيات')
	@section('content')
		<div class="row">
					<div class="col-md-6">
						<a class="dashboard-stat dashboard-stat-light blue-soft" href="{{Url('/')}}/admin/statics/areas">
						<div class="visual">
							<i class="fa fa-server"></i>
						</div>
						<div class="details">
							<div class="number">
								 {{$areas}}
							</div>
							<div class="desc">
								 عدد المناطق
							</div>
						</div>
						</a>
					</div>
					<div class="col-md-6">
						<a class="dashboard-stat dashboard-stat-light red-soft" href="{{Url('/')}}/admin/statics/salons">
						<div class="visual">
							<i class="fa fa-trophy"></i>
						</div>
						<div class="details">
							<div class="number">
								 {{$salons}}
							</div>
							<div class="desc">
								 عدد الصالونات
							</div>
						</div>
						</a>
					</div>
					<div class="col-md-6">
						<a class="dashboard-stat dashboard-stat-light green-soft" href="{{Url('admin/users')}}">
						<div class="visual">
							<i class="fa fa-users"></i>
						</div>
						<div class="details">
							<div class="number">
								 {{$user}}
							</div>
							<div class="desc">
								 عدد المشتركين 
							</div>
						</div>
						</a>
					</div>
					<div class="col-md-6">
						<a class="dashboard-stat dashboard-stat-light purple-soft" href="{{Url('admin/fashonista')}}">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="number">
								 {{$fashonista}}
							</div>
							<div class="desc">
								 عدد خبراء التجميل 
							</div>
						</div>
						</a>
					</div>
					<div class="col-md-6">
						<a class="dashboard-stat dashboard-stat-light purple" href="{{Url('admin/ads')}}">
						<div class="visual">
							<i class="fa fa-bullhorn"></i>
						</div>
						<div class="details">
							<div class="number">
								 {{$ads}}
							</div>
							<div class="desc">
								 عدد الإعلانات 
							</div>
						</div>
						</a>
					</div>
					<div class="col-md-6">
						<a class="dashboard-stat dashboard-stat-light green" href="{{Url('admin/statics/salons-rating')}}">
						<div class="visual">
							<i class="fa fa-bullhorn"></i>
						</div>
						<div class="details">
							<div class="number">
							&ensp;
							</div>
							<div class="desc">
								 تقييمات الصالونات 
							</div>
						</div>
						</a>
					</div>
				</div>
	@endsection
@stop