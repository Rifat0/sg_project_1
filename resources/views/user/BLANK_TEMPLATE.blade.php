@extends('user.layouts.layout')

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
		<a href="{{ url('/user/dashboard') }}">Home</a>
		<span class="divider"><i class="fa fa-angle-right"></i></span>
		</li>
		<li class="active">{{ str_replace('-', ' ', ucfirst($segment1)) }}</li>
	</ul>
</div>

@endsection

@section('js')

<!--page specific plugin scripts-->
	
@endsection