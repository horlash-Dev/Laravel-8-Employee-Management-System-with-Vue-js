 <header class="main-header">
            <div class="topbar">
                <div class="container">
                    <div class="topbar__left">
                         @guest
                            @if (Route::has('login'))
                                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            @endif

                            @if (Route::has('register'))
                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                        <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();document.getElementById('logout-form').submit();">  {{ __('SignOut') }}
                                 </a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> @csrf </form>
                                @endguest
                    </div><!-- /.topbar__left -->
                </div><!-- /.container -->
            </div><!-- /.topbar -->
            <nav class="main-menu">
                <div class="container">
                    <div class="logo-box">
                        <a href="index-2.html" aria-label="logo image"><img src="assets/images/logo-dark.png" width="155" alt=""></a>
                        <span class="fa fa-bars mobile-nav__toggler"></span>
                    </div><!-- /.logo-box -->
                    <ul class="main-menu__list">
                        <li class="dropdown">
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        @guest
                        <li class="dropdown">
                            <a href="about.html">Register</a>
                            <!-- <ul>
                                <li><a href="team.html"></a></li>
                                <li><a href="team-details.html">Team Details</a></li>
                            </ul> -->
                        </li>
                        @endguest
                        @auth
                        <li class="dropdown"><a href="{{ route('home')}}">DASHBOARD</a>
                        </li>
                        @endauth
                    </ul>
                    <!-- /.main-menu__list -->
                    @auth
                    <div class="main-header__info">
                        <div class="main-header__info-phone">
                            <i class="pylon-icon-tech-support"></i>
                            <div class="main-header__info-phone-content">
                                <span>{{ Auth::user()->username }}</span>
                                <h3><a href="">{{ Auth::user()->username }}</a></h3>
                            </div>
                        </div><!-- /.main-header__info-phone -->
                    </div> 
                    @endauth
                    <!-- /.main-header__info -->
                </div><!-- /.container -->
            </nav>
            <!-- /.main-menu -->
        </header><!-- /.main-header -->