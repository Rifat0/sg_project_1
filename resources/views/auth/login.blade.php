@extends('layouts.app')

@section('content')

<div class="container" style="min-height:464px;">
    <div class="col-md-3 col-lg-3"></div>
        <div class="col-md-6 col-lg-6" style="margin:50px auto; background-color:white;">
            <div style="padding:78px 0px 38px 0px; ">
                <form method="POST" action="{{ route('login') }}" style="padding:25px 55px 15px 55px;" accept-charset="utf-8" class="separate-sections">
                    @csrf
                    <div class="form-group">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter Email or Mobile" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        <br>

                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Enter Password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <button type="submit" name="login" type="submit" class="btn btn-success btn-lg btn-block"><b>{{ __('Log In') }}</b></button>

                </form>
                <br><br><br>             
            </div>  
        </div>  
    <div class="col-md-3 col-lg-3"></div>       
</div><br>  <br>  <br>  <br>

@endsection
