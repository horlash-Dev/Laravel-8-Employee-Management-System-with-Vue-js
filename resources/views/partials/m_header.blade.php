  <header class="main-header">
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top pl-30">
      <!-- Sidebar toggle button-->
    <div>
      <ul class="nav">
      <li class="btn-group nav-item">
        <a href="#" class="waves-effect waves-light nav-link rounded svg-bt-icon" data-toggle="push-menu" role="button">
          <i class="nav-link-icon mdi mdi-menu"></i>
          </a>
      </li>
      <li class="btn-group nav-item">
        <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="Full Screen">
          <i class="nav-link-icon mdi mdi-crop-free"></i>
          </a>
      </li> 
          <li class="btn-group nav-item">
        <a href="#"  class="nav-link svg-bt-icon">
          {{auth()->user()->username ?? null}}
          </a>
      </li>     
      </ul>
    </div>
    
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">
      <!-- full Screen -->   
  
        <!-- User Account-->

          <li class="dropdown user user-menu">  
      <a href="#" class="waves-effect waves-light rounded dropdown-toggle p-0" data-toggle="dropdown" title="User">
        <img src="{{ asset('dashboard/images/avatar/5.jpg')}}" alt="">
      </a>
      <ul class="dropdown-menu animated flipInX">
        <li class="user-body">
         <a class="dropdown-item" href="#"><i class="ti-user text-muted mr-2"></i>{{auth()->user()->username ?? null}} </a>
         <div class="dropdown-divider"></div>
        </li>
      </ul>
          </li>
      
        </ul>
      </div>
    </nav>
  </header>