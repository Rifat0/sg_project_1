@extends('user.layouts.layout')

@section('css')

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
	<div class="col-md-3"></div>
	<div class="col-md-6">

<div class="box box-red">
<div class="box-title">
<h3><i class="fa fa-file"></i></h3>
<div class="box-tool">
<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
<a data-action="close" href="#"><i class="fa fa-times"></i></a>
</div>
</div>
<div class="box-content">
<form action="{{ url('/user/change-password') }}" method="post" class="form-horizontal">
@csrf
<div class="form-group">
<label class="col-sm-4 col-md-5 control-label">Current password</label>
<div class="col-sm-8 col-md-7 controls">
<input type="password" class="form-control" name="current_password" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-md-5 control-label">New password</label>
<div class="col-sm-8 col-md-7 controls">
<input type="password" class="form-control" name="new_password" />
</div>
</div>
<div class="form-group">
<label class="col-sm-4 col-md-5 control-label">Re-type new password</label>
<div class="col-sm-8 col-md-7 controls">
<input type="password" class="form-control" name="confirmed_new_password" />
</div>
</div>

<div class="form-group">
<div class="col-sm-8 col-sm-offset-4 col-md-7 col-md-offset-5">
<button type="submit" class="btn btn-primary">Submit</button>
<a href="{{ url('/user/dashboard') }}" class="btn">Cancel</a>
</div>
   </div>
</form>
</div>
</div>
</div>
<div class="col-md-3"></div>
</div>

@endsection

@section('js')

@endsection