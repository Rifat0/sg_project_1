<!DOCTYPE html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apps Zones</title>
	  <link rel="shortcut icon" href="{{ asset('template/front_end/img/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('template/front_end/img/favicon.ico') }}" type="image/x-icon">
	 <!-- Bootstrap -->
    <link href="{{ asset('template/front_end/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/front_end/css/style.css') }}" rel="stylesheet">

  </head>
    <body style="background-color:#0E212C;">

    <!-- Static navbar -->
    	<nav class="navbar navbar-default navbar-static-top" style="color:white;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html" style="font-size:28px; color:black;"><b><img src="{{ asset('template/front_end/img/logo.png') }}" class="img-responsive" style="width:20px; float:left;" alt="Responsive image">&nbsp;Apps Zones</b></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ url('/') }}" style="color:black;"><b>Home</b></a></li>
            <li><a href="{{ url('/careers') }}" style="color:black;"><b>Careers</b></a></li>
            <li><a href="{{ url('/support') }}" style="color:black;"><b>Support</b></a></li>
            <li><a href="{{ url('/all_service') }}" style="color:black;"><b>Service</b></a></li>
            <li><a href="{{ url('/tutorial') }}" style="color:black;"><b>Tutorial</b></a></li>
            <li><a href="{{ url('/signup') }}" style="color:black;"><b>Sign Up</b></a></li>
            <li><a href="{{ url('/signin') }}" style="color:black;"><b>Sign In</b></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	  <div class="container">

    @yield('content')

    </div><br><br><br><br><br>
  <script src="{{ asset('template/front_end/js/jquery.min.js') }}"></script>
  <script src="{{ asset('template/front_end/js/bootstrap.min.js') }}"></script>
  </body>

</html>