<!DOCTYPE html>
<html>

<!-- Mirrored from thetheme.io/flaty/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Sep 2018 18:37:30 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title> 
	<?php 
	if($segment = Request::segment(1)) { echo str_replace('-', ' ', ucfirst($segment)); } 
	if($segment = Request::segment(2)) { echo " | ";  echo str_replace('-', ' ', ucfirst($segment)); } 
	?>
</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

<!--base css styles-->
<link href="{{ asset('public/backend/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('public/backend/assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

<!--flaty css styles-->
<link href="{{ asset('public/backend/css/flaty.css') }}" rel="stylesheet">
<link href="{{ asset('public/backend/css/flaty-responsive.css') }}" rel="stylesheet">

<!-- Custom -->
@yield('css')

<link rel="shortcut icon" href="img/favicon.html">
</head>

<body>
