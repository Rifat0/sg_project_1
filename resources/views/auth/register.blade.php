@extends('layouts.app')

@section('content')
<br> <br> 
<div class="container" style="min-height:464px;">
    <div class="col-md-3 col-lg-3"></div>
        <div class="col-md-6 col-lg-6" style="background-color:white;">
            <div style="margin:0px 20px 0px 20px; ">
                <form method="POST" action="{{ route('register') }}" accept-charset="utf-8" class="" style="padding:25px 55px 15px 55px;">
                    @csrf
                    <br>  
                        <p style="font-size:18px; color:black; font-family:arial black;"><b>Create an account</b></p>             
                        <p style="font-size:14px; color:black; font-family:arial black;"><b>It's free and always will be.</b></p>
                        
                        <input id="firstName" type="text" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" name="firstName" value="{{ old('firstName') }}" style="width:100%;" placeholder="Enter First Name" required autofocus>

                        @if ($errors->has('firstName'))
                            <span class="invalid-feedback" role="alert">
                            <strong><font color="red">{{ $errors->first('firstName') }}</font></strong>
                            </span>
                        @endif

                        <br>
                        
                        <input id="lastName" type="text" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" value="{{ old('lastName') }}" style="width:100%;" placeholder="Enter Last Name" required>

                        @if ($errors->has('lastName'))
                            <span class="invalid-feedback" role="alert">
                            <strong><font color="red">{{ $errors->first('lastName') }}</font></strong>
                            </span>
                        @endif

                        <br>
                    
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter Mobile number or Email address" style="width:100%;">

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                            <strong><font color="red">{{ $errors->first('email') }}</font></strong>
                            </span>
                        @endif
                    
                    <br>
                    
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" style="width:100%;" placeholder="Enter Password">

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                            <strong><font color="red">{{ $errors->first('password') }}</font></strong>
                            </span>
                        @endif
                    <br>
                    
                    <label for="exampleInputName2">
                        <p style="color:black; font-size:16px;"><b>Birthday</b></p>
                    </label>
                    
                    <div class="row">
                        <div class="col-xs-4">
                            <select name="birthday" class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }}">
                                <option>Day</option>  
                                <option value="1">1</option>
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

                            @if ($errors->has('birthday'))
                                <span class="invalid-feedback" role="alert">
                                <strong><font color="red">{{ $errors->first('birthday') }}</font></strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-xs-4">
                            <select name="birthMonth" class="form-control{{ $errors->has('birthMonth') ? ' is-invalid' : '' }}">
                                <option">Month</option>
                                <option value="January">January</option>
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

                            @if ($errors->has('birthMonth'))
                                <span class="invalid-feedback" role="alert">
                                <strong><font color="red">{{ $errors->first('birthMonth') }}</font></strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-xs-4">
                            <select name="birthYear" class="form-control{{ $errors->has('birthYear') ? ' is-invalid' : '' }}">
                                <option>Year</option> 
                                <option value="1985">1985</option>
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

                            @if ($errors->has('birthYear'))
                                <span class="invalid-feedback" role="alert">
                                <strong><font color="red">{{ $errors->first('birthYear') }}</font></strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <br>      
                    
                    <label for="exampleInputName2">
                        <p style="color:black; font-size:16px;"><b>Gender</b></p>
                    </label>

                    <br>                      
                    
                    <label class="radio-inline">
                        <input type="radio" name="gender" id="inlineRadio1" value="Female" class="{{ $errors->has('gender') ? ' is-invalid' : '' }}">
                        <p style="color:black; font-size:18px;"><b>Female</b></p>
                    </label>

                    <label class="radio-inline">
                        <input type="radio" name="gender" id="inlineRadio2" value="Male" class="{{ $errors->has('gender') ? ' is-invalid' : '' }}">
                        <p style="color:black; font-size:18px;"><b>Male</b></p>
                    </label>

                    @if ($errors->has('gender'))
                        <span class="invalid-feedback" role="alert">
                        <strong><font color="red">{{ $errors->first('gender') }}</font></strong>
                        </span>
                    @endif

                    <br>

                    <button type="submit" class="btn btn-success btn-lg btn-block" style="width:100%;">
                        <b>{{ __('Submit') }}</b>
                    </button>

                    <br>
                </form>             
            </div>  
        </div>  
    <div class="col-md-3 col-lg-3"></div>       
</div><br> <br>
@endsection
