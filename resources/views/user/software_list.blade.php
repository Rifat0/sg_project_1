@extends('user.layouts.layout')

@section('css')

<!--page specific plugin css-->

@endsection

@section('content')

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


<!-- BEGIN Tiles -->
<div class="row">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-3">
				<a class="tile" href="{{ url('/user/dashboard') }}" target="__blank">
					<div class="img">
						<i class="fa fa-comments"></i>
					</div>
					<div class="content">
						<p class="big">POS</p>
						<p class="title">Point of Sale</p>
					</div>
				</a>
				
			</div>		
			<div class="col-md-3">
				<a class="tile" href="{{ url('/user/dashboard') }}" target="__blank">
					<div class="img">
						<i class="fa fa-comments"></i>
					</div>
					<div class="content">
						<p class="big">PAS</p>
						<p class="title">Personal Accounting Software</p>
					</div>
				</a>				
			</div>
			<div class="col-md-3">
				<a class="tile" href="{{ url('/user/dashboard') }}" target="__blank">
					<div class="img">
						<i class="fa fa-comments"></i>
					</div>
					<div class="content">
						<p class="big">PDS</p>
						<p class="title">Private Dating  Software</p>
					</div>
				</a>				
			</div>
			<div class="col-md-3">
				<a class="tile" href="{{ url('/user/dashboard') }}" target="__blank">
					<div class="img">
						<i class="fa fa-comments"></i>
					</div>
					<div class="content">
						<p class="big">DMS</p>
						<p class="title">Delivery Management Software</p>
					</div>
				</a>				
			</div>					
		</div>
	</div>
</div>


<!-- END Tiles -->

@endsection

@section('js')

<!--page specific plugin scripts-->
	
@endsection