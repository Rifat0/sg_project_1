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
<div class="box box-black">
<div class="box-title">
<h3><i class="fa fa-table"></i> User Table</h3>
<div class="box-tool">
<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
<a data-action="close" href="#"><i class="fa fa-times"></i></a>
</div>
</div>
<div class="box-content">
<div class="btn-toolbar pull-right">
<div class="btn-group">
<a class="btn btn-circle show-tooltip" title="Add new record" href="#"><i class="fa fa-plus"></i></a>
<a class="btn btn-circle show-tooltip" title="Edit selected" href="#"><i class="fa fa-edit"></i></a>
<a class="btn btn-circle show-tooltip" title="Delete selected" href="#"><i class="fa fa-trash-o"></i></a>
</div>
<div class="btn-group">
<a class="btn btn-circle show-tooltip" title="Print" href="#"><i class="fa fa-print"></i></a>
<a class="btn btn-circle show-tooltip" title="Export to PDF" href="#"><i class="fa fa-file-text-o"></i></a>
<a class="btn btn-circle show-tooltip" title="Export to Exel" href="#"><i class="fa fa-table"></i></a>
</div>
<div class="btn-group">
<a class="btn btn-circle show-tooltip" title="Refresh" href="#"><i class="fa fa-repeat"></i></a>
</div>
</div>
<br/><br/>
<div class="table-responsive">
<table class="table table-advance">
<thead>
<tr>
	<th style="width:18px">SL</th>
	<th class="text-center">Status</th>
	<th class="text-center">First Name</th>
	<th class="text-center">last Name</th>
	<th>Address</th>
	<th class="text-center">join</th>
	<th class="visible-md visible-lg" style="width:130px">Action</th>
</tr>
</thead>
<tbody>
@foreach($user_admin as $user_admin)
<tr class="table-flag-green">
	<td>{{ $user_admin->user_admin_id }}</td>
	<td class="text-center">
		@if($user_admin->status==1)
		<span class="label label-success">{{ __('Active') }}</span>
		@elseif($user_admin->status==0)
		<span class="label label-warning">{{ __('Deactive') }}</span>
		@endif
	</td>
	<td class="text-center">{{ $user_admin->first_name }}</td>
	<td class="text-center">{{ $user_admin->last_name }}</td>
	<td>{{ $user_admin->address }}</td>
	<td class="text-center">{{ Carbon::parse($user_admin->created_at)->format('d-m-Y') }}</td>
	<td class="visible-md visible-lg">
		<div class="btn-group">
			<a class="btn btn-sm show-tooltip" title="View" href="{{ url('/master/user-view/'.$user_admin->user_admin_id) }}"><i class="fa fa-search-plus"></i></a>
			@if($user_admin->status==0)
			<a class="btn btn-sm btn-success show-tooltip" title="Active" href="{{ url('/master/user_status/'.$user_admin->user_admin_id.'/'.$user_admin->status) }}"><i class="fa fa-check"></i></a>
			@elseif($user_admin->status==1)
			<a class="btn btn-sm btn-danger show-tooltip" title="Deactive" href="{{ url('/master/user_status/'.$user_admin->user_admin_id.'/'.$user_admin->status) }}"><i class="fa fa-times"></i></a>
			@endif
		</div>
	</td>
</tr>
@endforeach
</tbody>
</table>
</div>

<div class="text-center">
<ul class="pagination">
<li><a href="#">← Prev</a></li>
<li><a href="#">1</a></li>
<li><a href="#">2</a></li>
<li class="active"><a href="#">3</a></li>
<li><a href="#">4</a></li>
<li><a href="#">5</a></li>
<li><a href="#">Next → </a></li>
</ul>
</div>
</div>
</div>
</div>
</div>

@endsection

@section('js')

<!--page specific plugin scripts-->
	
@endsection