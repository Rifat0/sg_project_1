@extends('front_end.layout')

@section('content')

<div class="container" style="min-height:464px;">
		<div class="col-md-3 col-lg-3"></div>
		<div class="col-md-6 col-lg-6" ><br><br><br>
			<div style="background-color:white;" class="col-md-12 col-lg-12" style="margin:0px 20px 0px 20px; ">
					<center>
						<h3>
					        <font color="red">  
								 
							</font>              
					    </h3>
					</center> 				
				  <form action="http://appszones.com/web_controller/support" method="post" accept-charset="utf-8" style="padding:0px 20px 0px 20px;">	<br><br>	
					<p style="font-size:18px; color:black; font-family:arial black;"><b>Hi. How can we help?</b></p>			  				  			 				  
					  <input type="text" name="email" class="form-control" placeholder="Email address" style="width:100%;" required><br>					 
					  <label for="exampleInputName2"><p style="color:black; font-size:16px;"><b>Your Messages </b></p></label>	
					  <textarea type="text" name="messages" class="form-control" rows="3" required></textarea><br>			
					  <br>			  
					  <button type="submit" name="submit" class="btn btn-success btn-lg btn-block" style="width:100%;"><b>Submit</b></button>	
				  </form><br><br>			  
			</div>	
		</div>	
		<div class="col-md-3 col-lg-3"></div>		
	</div><br> <br><br><br> 

@endsection