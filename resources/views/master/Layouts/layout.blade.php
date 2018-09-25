<!-- Start Head --> 
@include ('master.layouts.header')

<!-- Start Navigation -->
@include ('master.layouts.nav_bar')

<!-- Start Sidebanr -->
@include ('master.layouts.side_bar')

<!-- Start Content -->
@yield('content')
        
<!-- Start footer -->
@include ('master.layouts.footer')