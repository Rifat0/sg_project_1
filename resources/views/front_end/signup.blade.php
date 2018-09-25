@extends('front_end.layout')

@section('content')
<div class="container" style="min-height:464px;">
		<div class="col-md-3 col-lg-3"></div>
		<div class="col-md-6 col-lg-6" style="background-color:white;">
			<div style="margin:0px 20px 0px 20px; ">
				<form role="form" method="post" action="{{ url('user/register') }}" accept-charset="utf-8" style="padding:25px 55px 15px 55px;"><br>	
					@csrf
					<p style="font-size:18px; color:black; font-family:arial black;"><b>Create an account</b></p>			  
					<p style="font-size:14px; color:black; font-family:arial black;"><b>It's free and always will be.</b></p>

					<h3>
		              <font color="red">  
						@if (session('status'))
						{{ session('status') }}
						@endif
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

					  <input name="first_name" class="form-control" id="exampleInputName2" style="width:100%;" placeholder="Fast Name" required="" type="text" autofocus><br>					
					  <input name="last_name" class="form-control" id="exampleInputEmail2" style="width:100%;" placeholder="Last Name" required="" type="text"><br>				 				  
					  <input name="mobile_email" class="form-control" placeholder="Mobile number or email address" style="width:100%;" required="" type="text"><br>					 
					  <input name="password" class="form-control" placeholder="New password" style="width:100%;" required="" type="password"><br>
				  	<input type="password" name="password_confirmation" class="form-control" style="width:100%;" placeholder="Confirm password" style="width:73%;" required><br>
					  <label for="exampleInputName2"><p style="color:black; font-size:16px;"><b>Birthday</b></p></label>
					 <div class="row">
						  <div class="col-xs-4">
								<select type="number" name="birthday" class="form-control">
								  <option>Day</option>	
								  <option>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								  <option>6</option>
								  <option>7</option>
								  <option>8</option>
								  <option>9</option>
								  <option>10</option>
								  <option>11</option>
								  <option>12</option>
								  <option>13</option>
								  <option>14</option>
								  <option>15</option>
								  <option>16</option>
								  <option>17</option>
								  <option>18</option>
								  <option>19</option>
								  <option>20</option>
								  <option>21</option>
								  <option>22</option>
								  <option>23</option>
								  <option>24</option>
								  <option>25</option>
								  <option>26</option>
								  <option>27</option>
								  <option>28</option>
								  <option>29</option>
								  <option>30</option>
								  <option>31</option>
								</select>
						  </div>
						  <div class="col-xs-4">
								<select type="text" name="birthmonth" class="form-control">
								  <option>Month</option>
								  <option>January</option>
								  <option>February</option>
								  <option>March</option>
								  <option>April</option>
								  <option>June</option>
								  <option>July</option>
								  <option>August</option>
								  <option>September</option>
								  <option>October</option>
								  <option>November</option>
								  <option>December</option>
								</select>
						  </div>
						  <div class="col-xs-4">
								<select type="number" name="birthyear" class="form-control">
								  <option>Year</option>	
								  <option>1985</option>
								  <option>1986</option>
								  <option>1987</option>
								  <option>1988</option>
								  <option>1989</option>
								  <option>1990</option>
								  <option>1991</option>
								  <option>1992</option>
								  <option>1993</option>
								  <option>1994</option>
								  <option>1995</option>
								  <option>1996</option>
								  <option>1997</option>
								  <option>1998</option>
								  <option>1999</option>
								  <option>2000</option>
								  <option>2001</option>
								  <option>2002</option>
								  <option>2003</option>
								  <option>2004</option>
								  <option>2005</option>
								  <option>2006</option>
								  <option>2007</option>
								  <option>2008</option>
								  <option>2009</option>
								  <option>2010</option>
								</select>
						  </div>
						</div><br>
						<label><p style="color:black; font-size:16px;"><b>Gender</b></p></label><br>		
						<label class="radio-inline">
						  <input name="gender" id="inlineRadio1" value="Female" required="" type="radio"><p style="color:black; font-size:18px;"><b>Female</b></p>
						</label>
						<label class="radio-inline">
						  <input name="gender" id="inlineRadio2" value="Male" required="" type="radio"><p style="color:black; font-size:18px;"><b>Male</b></p>
						</label>
						<br>			  
					  <button type="submit" name="submit" class="btn btn-success btn-lg btn-block" style="width:100%;"><b>Submit</b></button><br>	
				</form>			  
			</div>	
		</div>	
		<div class="col-md-3 col-lg-3"></div>		
	</div>


@endsection