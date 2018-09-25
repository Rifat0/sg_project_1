@extends('front_end.layout')

@section('content')

<div class="container" style="min-height:464px; background-color:white;"><br>
		<center><p style="font-size:18px; color:black; font-family:arial black;"><b>Apply for Job</b></p></center>
		<center>
			<h3>
		        <font color="red">  
					 
				</font>              
		    </h3>
		</center>     
	<form action="http://appszones.com/web_controller/careers" method="post" enctype="multipart/form-data" accept-charset="utf-8" style="padding:0px 20px 0px 20px;">
		<div class="col-md-6 col-lg-6">
			<label for="exampleInputName2"><p style="color:black; font-size:16px;"><b>Fast Name</b></p></label>
			<input type="text" name="first_name" class="form-control" placeholder="First Name" style="width:100%;" required><br>
			<label for="exampleInputName2"><p style="color:black; font-size:16px;"><b>Last Name</b></p></label>
			<input type="text" name="last_name" class="form-control" placeholder="Last Name" style="width:100%;" required><br>
			<label for="exampleInputName2"><p style="color:black; font-size:16px;"><b>Email</b></p></label>
			<input type="text" name="email" class="form-control" placeholder="Email" style="width:100%;" required><br>
			<label for="exampleInputName2"><p style="color:black; font-size:16px;"><b>Mobile</b></p></label>
			<input type="text" name="mobile" class="form-control" placeholder="Mobile" style="width:100%;" required><br>
			<label for="exampleInputName2"><p style="color:black; font-size:16px;"><b>Location (City) </b></p></label>
			<input type="text" name="city" class="form-control" placeholder="City" style="width:100%;" required><br>	
		</div>
		<div class="col-md-6 col-lg-6" >
			<div style="" class="col-md-12 col-lg-12" style="margin:0px 20px 0px 20px; ">
					  <label for="exampleInputName2"><p style="color:black; font-size:16px;"><b>APPS ZONES ID</b></p></label>									  				  			 				  
					  <input type="text" name="account_id" class="form-control" placeholder="Id" style="width:100%;" required><br>					 
					  <label for="exampleInputName2"><p style="color:black; font-size:16px;"><b>Resume/CV Uploding Only pdf file and the filename will be your mobile number</b></p></label>
					  <input type="file" name="cv" id="exampleInputFile" required><br>	
					  <label for="exampleInputName2"><p style="color:black; font-size:16px;"><b>Gender</b></p></label>	
						<select name="gender" class="form-control" required>
						  <option>Female</option>
						  <option>Male</option>
						</select>		
					  <br>	
					  <label for="exampleInputName2"><p style="color:black; font-size:16px;"><b>Apply For</b></p></label>	
						<select name="apply_for" class="form-control" required>
						  <option>Select</option>
						  <option>Web Designer</option>
						  <option>Web Developer</option>
						  <option>Programmer</option>
						  <option>Software Engineer</option>
						  <option>Hacker</option>
						  <option>Database Developer</option>
						  <option>Marketing</option>
						  <option>Custommer Support</option>
						  <option>SEO Expert</option>
						</select>		
					  <br>			  
			<button type="submit" name="submit" class="btn btn-success btn-lg btn-block" style="width:100%;"><b>Submit</b></button>			  
			</div>	
		</div>	
	</form>		
</div>

@endsection