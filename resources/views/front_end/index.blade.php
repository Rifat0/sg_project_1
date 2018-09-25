@extends('front_end.layout')

@section('content')

		<div class="col-md-6 col-lg-6"><br>
			  <p style="font-size:18px; color:#33EA20; font-family:arial black;"><b>Software helps you digitalization and develop<br> in your life.</b></p><br><br>	
			  <img src="{{ asset('template/front_end/img/Software-PNG.png') }}" class="img-responsive img-circle" alt="Responsive image">		
		</div>
		<div class="col-md-6 col-lg-6">	
			@if(count($errors))
				<div class="row">
			        <div class="col-lg-12">
			            @if ($errors->any())
			                <div class="alert alert-danger">
			                    <ul>
			                        @foreach ($errors->all() as $error)
			                            <li><strong>{{ $error }}</strong></li>
			                        @endforeach
			                    </ul>
			                </div>
			            @endif
			        </div>
			    </div>
			        
			@endif
			@if (session('error_message'))

			    <div class="row">
			        <div class="col-lg-12">
			            <div class="alert alert-danger">
			                <strong>{{ session('error_message') }}</strong>
			            </div>
			        </div>
			    </div>
			        
			@endif

			  <form action="{{ url('user/login') }}" method="post" accept-charset="utf-8" class="navbar-form navbar-left">
			  	@csrf
				<div class="form-group">
                  <input type="text" name="mobile_email" class="form-control" placeholder="Email or Mobile" required>
				  <input type="password" name="password" class="form-control" placeholder="Password" required>
				</div>
				<button type="submit" name="login" class="btn btn-default">Log In</button>
			  </form><br><br><br>
			  
			  <p style="font-size:18px; color:#33EA20; font-family:arial black;"><b>&nbsp; Create an account</b></p>			  
			  <p style="font-size:14px; color:#FEFDFD; font-family:arial black;"><b>&nbsp;&nbsp; It's free and always will be.</b></p>
		          <h3>
		              <font color="red">  
						 @if (session('status'))

						    {{ session('status') }}
						        
						@endif	
					 </font>              
		          </h3> 

		      <form action="{{ url('user/register') }}" method="post"  accept-charset="utf-8" class="col-md-offset-1" >
			  	@csrf
				  <div class="form-inline">					
						<input type="text" name="first_name" class="form-control" placeholder="Fast Name" required>				
						<input type="text" name="last_name" class="form-control" placeholder="Last Name" required>				
					</div><br>				  
				  <input type="text" name="mobile_email" class="form-control" placeholder="Mobile number or email address" style="width:73%;" required><br>					 
				  <input type="password" name="password" class="form-control" placeholder="New password" style="width:73%;" required><br>
				  <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password" style="width:73%;" required><br>
				  <label><p style="color:white; font-size:16px;"><b>Birthday</b></p></label>	
					<div class="row">
					  <div class="col-xs-3">
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
					  <div class="col-xs-3">
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
					  <div class="col-xs-3">
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
					<label><p style="color:white; font-size:16px;"><b>Gender</b></p></label><br>			  					  			
					<label class="radio-inline">
					  <input type="radio" name="gender" id="inlineRadio1" value="Female" required><p style="color:white; font-size:18px;"><b>Female</b></p>
					</label>
					<label class="radio-inline">
					  <input type="radio" name="gender" id="inlineRadio2" value="Male" required><p style="color:white; font-size:18px;"><b>Male</b></p>
					</label>
					<br><br>			  
				  <button type="submit" name="submit" class="btn btn-success btn-lg btn-block" style="width:73%;"><b>Submit</b></button>				  
			  </form>			  
		</div>	
@endsection