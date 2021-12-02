<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="fav">

    <title>EMS - Dashboard</title>
    
	<!-- Vendors Style-->
@include('partials.m_top')
     
  </head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">
@include('partials.m_header')

  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="{{ url('/') }}">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="../images/logo-dark.png" alt="">
						  <h3><b>EMS</b>Project</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		@can('master.admin')  
		<li>
          <a href="/employee">
            <i data-feather="pie-chart"></i>
			     <span>Employee Management</span>
          </a>
        </li> 
@endcan
        <li class="header nav-small-cap">Interface</li>

          <li>
          <a href="{{route('e-profile', \Auth::user()->username ?? null)}}">
            <i data-feather="pie-chart"></i>
           <span>Profile</span>
          </a>
        </li>   		  
		  @can('master.admin')  
        <li class="treeview">
          <a href="#">
            <i data-feather="grid"></i>
            <span>System Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('country.index') }}"><i class="ti-more"></i>Country</a></li>
            <li><a href="{{ route('city.index') }}"><i class="ti-more"></i>City</a></li>
            <li><a href="{{ route('state.index') }}"><i class="ti-more"></i>State</a></li>
            <li><a href="{{ route('department.index') }}"><i class="ti-more"></i>Department</a></li>
          </ul>
        </li>
        @endcan
@can('master.admin')
		<li class="treeview">
          <a href="#">
            <i data-feather="server"></i>
			<span>User Manegement</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('user.index') }}"><i class="ti-more"></i>Users</a></li>
            <li><a href="{{ route('user.create') }}"><i class="ti-more"></i>Add New User</a></li>
          </ul>
        </li>
        @endcan
		    
		<li>
    <a href="{{ route('logout') }}"
       onclick="event.preventDefault();document.getElementById('logout-form').submit();"> 
      <i data-feather="lock"></i>
      <span> {{ __('SignOut') }}</span>
         </a>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> @csrf </form>
        </li> 
        
      </ul>
    </section>
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>
  <!-- Content Wrapper. Contains page content -->
  @yield('admin-content')
  <!-- /.content-wrapper -->
@include('partials.m_footer')


</div>
<!-- ./wrapper -->
  	
	 
	<!-- Vendor JS -->
@include('partials.m_bottom')
	
</body>
</html>
