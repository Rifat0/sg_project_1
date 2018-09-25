@extends('master.layouts.layout')

@section('css')

<!--page specific plugin css-->

@endsection

@section('content')

@include('message')

<div class="page-title">
	<div>
		<?php $segment1 = Request::segment(2); ?>
        <h1><i class="fa fa-file-o"></i> {{ str_replace('-', ' ', ucfirst($segment1)) }}</h1>
	</div>
</div>

<div id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
		<i class="fa fa-home"></i>
		<a href="{{ url('/master/dashboard') }}">Home</a>
		<span class="divider"><i class="fa fa-angle-right"></i></span>
		</li>
		<li class="active">{{ str_replace('-', ' ', ucfirst($segment1)) }}</li>
	</ul>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-title">
			<h3><i class="fa fa-file"></i> Profile Info</h3>
				<div class="box-tool">
				<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
				<a data-action="close" href="#"><i class="fa fa-times"></i></a>
				</div>
			</div>
			<div class="box-content">
				<div class="row">
					<div class="col-md-3">
					<img class="img-responsive img-thumbnail" src="{{ asset('public/backend/profile_picture').'/'.$user_admin_data->avater }}" alt="Profile picture" />
					<br/><br/>
					</div>
					<div class="col-md-9 user-profile-info">
						<p><span>Email or Mobile:</span> <strong>{{ $user_admin_data->mobile_email }}</strong></p>
						<p><span>First Name:</span> {{ $user_admin_data->first_name }}</p>
						<p><span>Last Name:</span> {{ $user_admin_data->last_name }}</p>
						<p><span>Birthday:</span> {{ $user_admin_data->birthday.' '.$user_admin_data->birthmonth.' '.$user_admin_data->birthyear }}</p>
						<p><span>Gender:</span> {{ $user_admin_data->gender }}</p>
						<p><span>Address:</span> {{ $user_admin_data->address }}</p>
						<p><span>Join Date:</span> {{ Carbon::parse($user_admin_data->created_at)->format('d-m-Y') }}</p>
						<p><span>Update Date:</span> {{ Carbon::parse($user_admin_data->updated_at )->format('d-m-Y') }}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('js')

<!--page specific plugin scripts-->
	
@endsection