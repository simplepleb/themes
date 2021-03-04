<!-- Start Header Area -->
<header class="header-area header-transparent">
    <div class="main-header d-none d-lg-block">
        <!-- main menu start -->
        <div class="main-menu-wrapper sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <!-- logo area start -->
                        <div class="brand-logo">
                            <a href="/">
                                <img src="{!! Theme::asset()->url('assets/img/logo/logo.png') !!}" alt="{{ config('app.name') }}">
                            </a>
                        </div>
                        <!-- logo area end -->
                    </div>
                    <div class="col-lg-9">
                        <div class="main-menu-inner">
                            <!-- main menu navbar start -->
                            <nav class="main-menu">
                                <ul>
                                    <li><a href="#">Home</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Drop Down One</a></li>
                                            <li><a href="#">Drop Down 2</a></li>
                                            <li><a href="#">Drop Down 3</a></li>
                                            <li><a href="#">Drop Down 4</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">About us</a>
                                    </li>
                                    <li><a href="#"> Pages </a>
                                        <ul class="dropdown">
                                            <li><a href="#">Team</a></li>
                                            <li><a href="#">Faq</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Blog</a>
                                    </li>
                                    <li>
                                        <a href="#">Pricing</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- main menu navbar end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main menu end -->

        <!-- header bottom start -->
        <div class="header-bottom-wrapper">
            <div class="container">
                <div class="bdr-top"></div>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="header-social-link">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Google+</a></li>
                            <li><a href="#">Pinterest</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="caller-area text-right">
                            <li class="mail">
                                <a href="mailto:diginserv@gmail.com">
                                    <i class="fa fa-envelope-o"></i>
                                    example@gmail.com
                                </a>
                            </li>
                            <li class="call">
                                <a href="tel:+0123456789">
                                    <i class="fa fa-phone"></i>
                                    +0123456789
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- header bottom end -->
    </div>

    <!-- mobile header start -->
    <!-- mobile header start -->
    <div class="mobile-header d-lg-none d-md-block sticky">
        <!--mobile header top start -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="mobile-main-header">
                        <div class="mobile-logo">
                            <a href="/">
                                <img src="{!! Theme::asset()->url('assets/img/logo/logo.png') !!}" alt="{{ config('app.name') }}">
                            </a>
                        </div>
                        <div class="mobile-menu-toggler">
                            <button class="mobile-menu-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile header top start -->
    </div>
    <!-- mobile header end -->
    <!-- mobile header end -->

    <!-- offcanvas mobile menu start -->
    <!-- off-canvas menu start -->
    <aside class="off-canvas-wrapper">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="btn-close-off-canvas">
                <i class="fa fa-close"></i>
            </div>

            <div class="off-canvas-inner">
                <!-- search box start -->
                <div class="search-box-offcanvas">
                    <form>
                        <input type="text" placeholder="Search Here...">
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- search box end -->

                <!-- mobile menu start -->
                <div class="mobile-navigation">
                    <!-- mobile menu navigation start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><a href="/">Home</a>
                                <ul class="dropdown">
                                    <li><a href="#">Drop Down One</a></li>
                                    <li><a href="#">Drop Down 2</a></li>
                                    <li><a href="#">Drop Down 3</a></li>
                                    <li><a href="#">Drop Down 4</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">about us</a>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="#">Team</a></li>
                                    <li><a href="#">Faq</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="#">Drop Down One</a></li>
                                    <li><a href="#">Drop Down 2</a></li>
                                    <li><a href="#">Drop Down 3</a></li>
                                    <li><a href="#">Drop Down 4</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Pricing</a>
                            </li>
                            <li>
                                <a href="#">Contact us</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->

                <!-- offcanvas widget area start -->
                <div class="offcanvas-widget-area">
                    <div class="off-canvas-contact-widget">
                        <ul>
                            <li><i class="fa fa-mobile"></i>
                                <a href="#">0123456789</a>
                            </li>
                            <li><i class="fa fa-envelope-o"></i>
                                <a href="#">info@yourdomain.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="off-canvas-social-widget">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
                <!-- offcanvas widget area end -->
            </div>
        </div>
    </aside>
    <!-- off-canvas menu end -->
    <!-- offcanvas mobile menu end -->

</header>
<!-- end Header Area -->
