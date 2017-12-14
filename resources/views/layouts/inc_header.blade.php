<header class="b-topBar wow slideInDown" data-wow-delay="0.7s">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-xs-6">
                &nbsp;
            </div>
            <div class="col-md-4 col-xs-6">
                <nav class="b-topBar__nav">
                    <ul>
                        <li><!--<a href="#">Rider Talk</a></li>-->
                        <li><!--<a href="#" class="nav-orange">Special Offer</a>--></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-4 col-xs-6" id="app-navbar-collapse">
                <nav class="b-topBar__nav">
                    <ul>
                        @if (Auth::guest())
                            <li class="nav-top-bg"><a href="{{ route('register') }}">Register</a></li>
                            <li class="nav-top-bg"><a href="{{ route('login') }}">Sign in</a></li>
                           <!--  <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li> -->
                        @else
                            <li class="dropdown nav-top-bg">
                                <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a> -->
                            </li>
                            <li class="nav-top-bg">
                                <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                                

                                <!-- <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li> -->
                        @endif
                    </ul>
                </nav>
            </div>
            <!--
            <div class="col-md-2 col-xs-6">
                <div class="b-topBar__lang">
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle='dropdown'>Language</a>
                        <a class="m-langLink dropdown-toggle" data-toggle='dropdown' href="#"><span class="b-topBar__lang-flag m-en"></span>EN<span class="fa fa-caret-down"></span></a>
                        <ul class="dropdown-menu h-lang">
                            <li><a class="m-langLink dropdown-toggle" data-toggle='dropdown' href="#"><span class="b-topBar__lang-flag m-en"></span>EN</a></li>
                            <li><a class="m-langLink dropdown-toggle" data-toggle='dropdown' href="#"><span class="b-topBar__lang-flag m-es"></span>UR</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
</header><!--b-topBar-->