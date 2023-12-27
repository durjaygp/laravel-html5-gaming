<header>
    <div id="sticky-header" class="main-header">
        <div class="container-fluid container-full-padding">
            <div class="row">
                <div class="col-12">
                    <div class="main-menu">
                        <nav>
                            <div class="logo">
                                <a href="{{route('home')}}"><img src="{{asset('geco')}}/img/logo/logo.png" alt="Logo"></a>
                            </div>
                            <div id="mobile-menu" class="navbar-wrap d-none d-lg-flex">
                                <ul>
                                    <li class="{{ Route::is('home') ? 'show' : '' }}"><a href="{{route('home')}}">Home</a></li>
{{--                                    <li><a href="game-overview.html">About Us</a></li>--}}
                                    <li class="{{ Route::is('game') ? 'show' : '' }}"><a href="{{route('game')}}">Games</a></li>
                                    <li class="{{ Route::is('home.blogs') ? 'show' : '' }}"><a href="{{route('home.blogs')}}">Blog</a></li>
                                    <li class="{{ Route::is('home.contact') ? 'show' : '' }}"><a href="{{route('home.contact')}}">Contact Us</a></li>

                                    @if(auth()->check())
                                        <li><a href="{{route('login')}}">{{auth()->user()->name}} </a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">My Games</a></li>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <li>
                                                        <a href="{{ route('logout') }}"
                                                           onclick="event.preventDefault(); this.closest('form').submit();">
                                                            Logout
                                                        </a>
                                                    </li>
                                                </form>
                                            </ul>
                                        </li>
                                    @else
                                        <li><a href="{{route('login')}}">Login</a>
                                            <ul class="submenu">
                                                <li><a href="{{route('login')}}">Login</a></li>
                                                <li><a href="{{route('register')}}">Sign Up</a></li>
                                            </ul>
                                        </li>
                                    @endauth



                                    <li class="header-search"><a href="#" data-toggle="modal" data-target="#search-modal"><i class="fas fa-search"></i></a></li>
                                </ul>
                            </div>

                        </nav>
                    </div>
                    <div class="mobile-menu"></div>
                </div>
                <!-- Modal Search -->
                <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form>
                                <input type="text" placeholder="Search here...">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
