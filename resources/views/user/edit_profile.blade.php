@extends('user.layouts.layout')

@section('css')

<link rel="stylesheet" type="text/css" href="{{ asset('public/backend/assets/chosen-bootstrap/chosen.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('public/backend/assets/bootstrap-datepicker/css/datepicker.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('public/backend/assets/bootstrap-fileupload/bootstrap-fileupload.css') }}" />

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
		<a href="{{ url('/user/dashboard') }}">Home</a>
		<span class="divider"><i class="fa fa-angle-right"></i></span>
		</li>
		<li class="active">{{ str_replace('-', ' ', ucfirst($segment1)) }}</li>
	</ul>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-title">
			<h3><i class="fa fa-bars"></i></h3>
			<div class="box-tool">
			<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
			<a data-action="close" href="#"><i class="fa fa-times"></i></a>
			</div>
			</div>
			<div class="box-content">
				 <form action="{{ url('/user/edit-profile') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
				 	@csrf
					<div class="row">
						<div class="col-md-6">
							<input type="hidden" name="user_admin_id" value="{{ $user_data->user_admin_id }}">
				 			<div class="form-group">
							   <label class="col-sm-3 col-lg-2 control-label">First Name</label>
							   <div class="col-sm-9 col-lg-10 controls">
							  <input type="text" class="form-control" value="{{ $user_data->first_name}}" name="first_name" />
							   </div>
							</div>
							<div class="form-group">
							   <label class="col-sm-3 col-lg-2 control-label">Last Name</label>
							   <div class="col-sm-9 col-lg-10 controls">
							  <input type="text" class="form-control" value="{{ $user_data->last_name}}" name="last_name" />
							   </div>
							</div>
							<div class="form-group">
							   <label class="col-sm-3 col-lg-2 control-label">Mobile or Email</label>
							   <div class="col-sm-9 col-lg-10 controls">   
							  <input class="form-control" readonly type="text" value="{{ $user_data->mobile_email}}" disabled />
							   </div>
							</div>
							<div class="form-group">
							   <label class="col-sm-3 col-lg-2 control-label">Address</label>
							   <div class="col-sm-9 col-lg-10 controls">
							  <textarea class="form-control" name="address" rows="3">{{ $user_data->address}}</textarea>
							   </div>
							</div>

							<div class="form-group">
							<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
							   <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save</button>
							   <a href="{{ url('/user/dashboard') }}" class="btn">Cancel</a>
							</div>
							</div>
						</div>
						<div class="col-md-6">

							<div class="form-group">
							  <label class="col-sm-3 col-md-4 control-label">Profile Picture</label>
							  <div class="col-sm-9 col-md-8 controls">
								 <div class="fileupload fileupload-new" data-provides="fileupload">
									<div class="fileupload-new img-thumbnail" style="width: 200px; height: 150px;">
									   <img src="{{ asset('public/backend/profile_picture').'/'. $user_data->avater }}" alt="" />
									</div>
									<div class="fileupload-preview fileupload-exists img-thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
									<div>
									   <span class="btn btn-file"><span class="fileupload-new">Select image</span>
									   <span class="fileupload-exists">Change</span>
									   <input type="file" name="avater" class="default" /></span>
									   <input type="hidden" name="p_avater" value="{{ $user_data->avater }}" /></span>
									   <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
									</div>
								 </div>
							  </div>
							</div>
						</div>
					</div>
				 </form>
			</div>
		</div>
	</div>
</div>

@endsection

@section('js')

<script type="text/javascript" src="{{ asset('public/backend/assets/chosen-bootstrap/chosen.jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/backend/assets/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/backend/assets/bootstrap-fileupload/bootstrap-fileupload.min.js') }}"></script>
	
@endsection