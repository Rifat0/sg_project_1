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

	<div class="clearfix">
		<div class="pull-right">
			<div class="btn-toolbar">
				<div class="btn-group">
				<a href="{{ url('/master/create-tutorial') }}" class="btn btn-primary show-tooltip" title="" data-original-title="Create new tutorial"><i class="fa fa-plus"></i> Create</a>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<div class="box">
	<div class="box-title">
		<h3><i class="fa fa-table"></i></h3>
		<div class="box-tool">
		<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
		<a data-action="close" href="#"><i class="fa fa-times"></i></a>
		</div>
	</div>
	<div class="box-content">
		<div class="table-big">
			<table class="table table-striped table-hover fill-head">
				<thead>
					<tr>
					<th>#</th>
					<th>Title</th>
					<th>Link</th>
					<th style="width: 150px">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($tutorial_list as $tutorial_data)
					<tr>
						<td>{{ $tutorial_data->tutorial_id }}</td>
						<td>{{ $tutorial_data->tutorial_title }}</td>
						<td>{{ $tutorial_data->tutorial_link }}</td>
						<td>
						<a class="btn btn-primary btn-sm" href="{{ url('/master/tutorial-edit/'.$tutorial_data->tutorial_id) }}"><i class="fa fa-edit"></i> Edit</a>
						<a class="btn btn-danger btn-sm" href="{{ url('/master/tutorial-delete/'.$tutorial_data->tutorial_id) }}"><i class="fa fa-trash-o"></i> Delete</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	</div>
	</div>
</div>

@endsection

@section('js')

<!--page specific plugin scripts-->
	
@endsection