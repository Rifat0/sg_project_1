<!-- BEGIN Container -->
<div class="container" id="main-container">
<!-- BEGIN Sidebar -->
<div id="sidebar" class="navbar-collapse collapse">
<!-- BEGIN Navlist -->
<ul class="nav nav-list">
<!-- END Search Form -->
<li class="active">
	<a href="{{ url('/master/dashboard') }}">
		<i class="fa fa-dashboard"></i>
		<span>Dashboard</span>
	</a>
</li>

<li>
<a href="#" class="dropdown-toggle">
<i class="fa fa-desktop"></i>
<span>Front End</span>
<b class="arrow fa fa-angle-right"></b>
</a>

<!-- BEGIN Submenu -->
<ul class="submenu">
<li><a href="{{ url('/master/service-list') }}">Service</a></li>
<li><a href="{{ url('/master/tutorial-list') }}">Tutorial</a></li>
</ul>
<!-- END Submenu -->
</li>

<li>
	<a href="{{ url('/master/user-list') }}">
		<i class="fa fa-user"></i>
		<span>User</span>
	</a>
</li>

</ul>
<!-- END Navlist -->

<!-- BEGIN Sidebar Collapse Button -->
<div id="sidebar-collapse" class="visible-lg">
<i class="fa fa-angle-double-left"></i>
</div>
<!-- END Sidebar Collapse Button -->
</div>
<!-- END Sidebar -->

<!-- BEGIN Content -->
<div id="main-content">