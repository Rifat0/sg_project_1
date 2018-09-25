<!-- Start Head --> 
@include ('user.layouts.header')

<!-- Start Navigation -->
@include ('user.layouts.nav_bar')

<!-- Start Sidebanr -->
@include ('user.layouts.side_bar')

<!-- Start Content -->
@yield('content')
        
<!-- Start footer -->
@include ('user.layouts.footer')