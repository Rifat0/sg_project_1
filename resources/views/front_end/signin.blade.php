@extends('front_end.layout')

@section('content')
<div class="container" style="min-height:464px;">
		<div class="col-md-3 col-lg-3"></div>
		<div class="col-md-6 col-lg-6" style="margin:50px auto; background-color:white;">
			<div style="padding:78px 0px 38px 0px; ">
				<center>
			        <h3>
						<font color="red">
							@if(count($errors))
							@if ($errors->any())
							@foreach ($errors->all() as $error)
							{{ $error }}
							@endforeach
							@endif
							@endif
							@if (session('error_message'))
							{{ session('error_message') }}
							 @endif
						</font>
					</h3>
				</center>				
		        <form action="{{ url('user/login') }}" method="post" style="padding:25px 55px 15px 55px;" accept-charset="utf-8" class="separate-sections">
		        	@csrf
				<div class="form-group">
				  <input name="mobile_email" class="form-control" placeholder="Email or Mobile" required="" type="text" autofocus><br>
				  <input name="password" class="form-control" placeholder="Password" required="" type="password">
				</div>
				<button type="submit" name="login" class="btn btn-success btn-lg btn-block"><b>Log In</b></button>	
			  </form><br><br><br>			  
			</div>	
		</div>	
		<div class="col-md-3 col-lg-3"></div>		
	</div>


@endsection