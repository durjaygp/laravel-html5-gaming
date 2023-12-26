<header>
    <div class="header-top-area d-none d-lg-block">
        <div class="container-fluid container-full-padding">
            <div class="row align-items-center">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="header-top-offer">
                        <p>Exclusive Black Friday ! Offer</p>
                        <span class="coming-time" data-countdown="2020/6/20"></span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-top-right">
                        <div class="header-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <div class="header-top-action">
                            <ul>
                                <li>
                                    <div class="header-top-mail">
                                        <p><span>|</span><i class="far fa-envelope"></i><a href="https://themebeyond.com/cdn-cgi/l/email-protection#c4adaaa2ab84a3a9a5ada8eaa7aba9"><span class="__cf_email__" data-cfemail="f59c9b939ab59290969a9c9b939adb969a98">[email&#160;protected]</span></a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="header-user-login">
                                        <a href="#"><i class="fas fa-user"></i>Login</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sticky-header" class="main-header">
        <div class="container-fluid container-full-padding">
            <div class="row">
                <div class="col-12">
                    <div class="main-menu">
                        <nav>
                            <div class="logo">
                                <a href="index-2.html"><img src="{{asset('geco')}}/img/logo/logo.png" alt="Logo"></a>
                            </div>
                            <div id="mobile-menu" class="navbar-wrap d-none d-lg-flex">
                                <ul>
                                    <li class="show"><a href="#">Home</a>
                                        <ul class="submenu">
                                            <li><a href="index-2.html">Home One</a></li>
                                            <li><a href="index-3.html">Home Two</a></li>
                                            <li><a href="index-4.html">Home Three</a></li>
                                            <li class="active"><a href="index.html">Home Four</a></li>
                                            <li><a href="index-5.html">Home Five</a></li>
                                            <li><a href="index-6.html">Home Six</a></li>
                                            <li><a href="index-7.html">Home Seven</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul class="submenu">
                                            <li><a href="about-us.html">About Story</a></li>
                                            <li><a href="upcoming-games.html">Upcoming Games</a></li>
                                            <li><a href="game-single.html">Game Single</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="game-overview.html">Overview</a></li>
                                    <li><a href="community.html">Community</a></li>
                                    <li><a href="shop.html">Store</a></li>
                                    <li><a href="#">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">News Page</a></li>
                                            <li><a href="blog-details.html">News Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">contact</a></li>
                                </ul>
                            </div>
                            <div class="header-action">
                                <ul>
                                    <li class="header-shop-cart"><a href="#"><i class="fas fa-shopping-basket"></i><span>0</span></a>
                                        <ul class="minicart">
                                            <li class="d-flex align-items-start">
                                                <div class="cart-img">
                                                    <a href="#">
                                                        <img src="{{asset('geco')}}/img/product/cart_p01.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="cart-content">
                                                    <h4>
                                                        <a href="#">Xbox One Controller</a>
                                                    </h4>
                                                    <div class="cart-price">
                                                        <span class="new">$229.9</span>
                                                        <span>
                                                                    <del>$229.9</del>
                                                                </span>
                                                    </div>
                                                </div>
                                                <div class="del-icon">
                                                    <a href="#">
                                                        <i class="far fa-trash-alt"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="total-price">
                                                    <span class="f-left">Total:</span>
                                                    <span class="f-right">$239.9</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkout-link">
                                                    <a href="cart.html">Profile</a>

                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <a class="red-color" href="{{route('logout')}}"
                                                           onclick="event.preventDefault();
                                                this.closest('form').submit();">Logout</a>
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
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
