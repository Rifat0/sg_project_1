@extends('front_end.layout')

@section('content')

<div class="container" style="min-height:464px;">
	<div class="col-md-12 col-lg-12">
		<div class="row">
			<center><h3 style="color:white;"><u>Softwares</u></h3></center>	
            	<div class="col-xs-12 col-md-6">
			  	<center><p style="color:white;"><b>Personal Accounting Software</b></p></center>
				<a href="software_content/18.html" class="thumbnail">
				  <img src="{{ asset('template/front_end/img/service/account-1.png') }}" alt="...">
				</a>
			  </div>
			<div class="col-xs-12 col-md-6">
			  	<center><p style="color:white;"><b>Attendance Management Software</b></p></center>
				<a href="software_content/19.html" class="thumbnail">
				  <img src="{{ asset('template/front_end/img/service/school.png') }}" alt="...">
				</a>
			  </div>
		</div>
	</div>	
</div>

@endsection