@extends('front_end.layout')

@section('content')

<div class="container" style="min-height:464px;">
	<div class="col-md-12 col-lg-12">
		<div class="row">
			<center><h3 style="color:white;"><u>Tutorial</u></h3></center>	
			@foreach($tutorial_list as $tutorial_data)							
			  <div class="col-xs-12 col-md-6">
			  	<center><p style="color:white;"><strong>{{ $tutorial_data->tutorial_title }}</strong></p></center>
				<iframe width="100%" height="315" src="{{ $tutorial_data->tutorial_link }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			  </div>
	     	@endforeach  						  
		</div>
	</div>	
</div><br>  <br>  <br>  <br>  

@endsection