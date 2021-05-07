<div id="header-holder">
    <div class="cloud-bg"></div>
    <nav id="nav" class="navbar navbar-full">
        <div class="container-fluid">
            <div class="container container-nav">
                <div class="row">
                    <div class="col-md-12">
                        <div class="navbar-header">
                            <button aria-expanded="false" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="/"><img src="{!! Theme::asset()->url('assets/images/logo.svg') !!}" alt="{{ config('app.name') }}"></a>
                        </div>
                        <div style="height: 1px;" role="main" aria-expanded="false" class="navbar-collapse collapse navbar-collapse-centered" id="bs">

                            @isset($nav_main)
                                {!! $nav_main->asUl( ['class' => 'nav navbar-nav navbar-nav-centered'], [] ) !!}
                                {{--   This requires MenuMaker Module (https://github.com/simplepleb/menumaker-module.git) --}}
                            @else
                            <ul class="nav navbar-nav navbar-nav-centered">
                                <li class="nav-item"><a class="nav-link" href="home-light.html">Light Header</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Hosting Services</a>
                                    <div class="dropdown-menu custom-dropdown-menu">
                                        <div class="dropdown-items-holder">
                                            <div class="items-with-icon">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-6">
                                                        <a href="webhosting.html" class="link-with-icon">
                                                            <span class="icon"><img src="{!! Theme::asset()->url('assets/images/server1.svg') !!}" alt=""></span>
                                                            <span class="text">Web Hosting</span>
                                                        </a>
                                                        <a href="cloudhosting.html" class="link-with-icon">
                                                            <span class="icon"><img src="{!! Theme::asset()->url('assets/images/server2.svg') !!}" alt=""></span>
                                                            <span class="text">Cloud Hosting</span>
                                                        </a>
                                                        <a href="vpshosting.html" class="link-with-icon">
                                                            <span class="icon"><img src="{!! Theme::asset()->url('assets/images/server3.svg') !!}" alt=""></span>
                                                            <span class="text">VPS Hosting</span>
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6">
                                                        <a href="wordpresshosting.html" class="link-with-icon">
                                                            <span class="icon"><img src="{!! Theme::asset()->url('assets/images/server4.svg') !!}" alt=""></span>
                                                            <span class="text">Wordpress Hosting</span>
                                                        </a>
                                                        <a href="dedicatedhosting.html" class="link-with-icon">
                                                            <span class="icon"><img src="{!! Theme::asset()->url('assets/images/server5.svg') !!}" alt=""></span>
                                                            <span class="text">Dedicated Hosting</span>
                                                        </a>
                                                        <a href="domains.html" class="link-with-icon">
                                                            <span class="icon"><img src="{!! Theme::asset()->url('assets/images/server6.svg') !!}" alt=""></span>
                                                            <span class="text">Domain Names</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="items">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-6">
                                                        <a href="#" class="link">Hustbee Features</a>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6">
                                                        <a href="#" class="link">Website builder</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="domains.html">Domains</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Support</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="about.html">About</a></li>
                                        <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                                        <li><a class="dropdown-item" href="privacy.html">Privacy</a></li>
                                    </ul>
                                </li>
                            </ul>
                            @endisset
                            <ul class="nav navbar-nav navbar-right other-navbar">
                                <li class="nav-item">
                                    @auth
                                        <a class="nav-link btn-client-area" href="{{ route('backend.dashboard') }}"><img src="{!! Theme::asset()->url('assets/images/lock.svg') !!}" alt="">{{ __('Client Area') }}</a>
                                    @endauth
                                    @guest
                                        <a class="nav-link btn-client-area" href="{{ route('login') }}"><img src="{!! Theme::asset()->url('assets/images/lock.svg') !!}" alt="">{{ __('Login') }}</a>
                                    @endguest

                                    @if( \Module::has('chat'))<div class="chat-info"><i class="hstb hstb-right-arrow"></i>{{ __('Chat Available') }}</div> @endif
                                </li>
                                @if( \Module::has('chat'))
                                <li class="nav-item">
                                    <a class="nav-link btn-chat" href="#"><i class="hstb hstb-chat"></i></a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div id="top-content" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-slider">
                        <div class="slide">
                            <div class="row rtl-row">
                                <div class="col-sm-5">
                                    <div class="img-holder">
                                        <img src="{!! Theme::asset()->url('assets/images/slide-img1.png') !!}" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="b-text">Outstanding Web<br>Hosting for you.</div>
                                    <div class="m-text">Starting at only <span class="bold">$2.38/mo*</span></div>
                                    <a href="#" class="hbtn hbtn-primary hbtn-lg">Hosting Services</a>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="row rtl-row">
                                <div class="col-sm-5">
                                    <div class="img-holder">
                                        <img src="{!! Theme::asset()->url('assets/images/slide-img2.png') !!}" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="b-text">Create your first<br>website today.</div>
                                    <div class="m-text">Starting at only <span class="bold">$2.38/mo*</span></div>
                                    <a href="#" class="hbtn hbtn-primary hbtn-lg">Create now</a>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="row rtl-row">
                                <div class="col-sm-5">
                                    <div class="img-holder">
                                        <img src="{!! Theme::asset()->url('assets/images/slide-img3.png') !!}" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="b-text">Build your site<br>with page builder</div>
                                    <div class="m-text">Starting at only <span class="bold">$2.38/mo*</span></div>
                                    <a href="#" class="hbtn hbtn-primary hbtn-lg">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="main-domain-search-holder">
                                        <div class="b-text">Simple, affordable<br>Web Hosting</div>
                                        <form>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-items">
                                                        <input type="text" class="form-control domain-input" name="domain" placeholder="My domain name" autocapitalize="none" />
                                                        <span class="input-items-btn">
                                                            <input type="submit" class="btn search" value="Search" />
                                                            <input type="submit" name="transfer" class="btn transfer" value="Transfer" />
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="m-text">Starting at only <span class="bold">$2.38/mo*</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
