<div class="footer container-fluid">
    <a class="btn-go-top" href="#"><i class="hstb hstb-down-arrow"></i></a>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <div class="footer-menu">
                    <h4>{{ __('Footer 1') }}</h4>
                    @isset($hustbee_footer_1)
                        {!! $hustbee_footer_1->asUl( ['class' => 'footer-menu'], [] ) !!}
                      {{--   This requires MenuMaker Module (https://github.com/simplepleb/menumaker-module.git) --}}
                    @else
                    <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Press & Media</a></li>
                            <li><a href="#">News & Blog</a></li>
                            <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                    @endisset
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <div class="footer-menu">
                    <h4>{{ __('Footer 2') }}</h4>
                    @isset($hustbee_footer_2)
                        {!! $hustbee_footer_2->asUl( ['class' => 'footer-menu'], [] ) !!}
                        {{--   This requires MenuMaker Module (https://github.com/simplepleb/menumaker-module.git) --}}
                    @else
                    <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Press & Media</a></li>
                            <li><a href="#">News & Blog</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Careers</a></li>
                    </ul>
                    @endisset
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <div class="footer-menu">
                    <h4>{{ __('Footer 3') }}</h4>
                    @isset($hustbee_footer_3)
                        {!! $hustbee_footer_3->asUl( ['class' => 'footer-menu'], [] ) !!}
                        {{--   This requires MenuMaker Module (https://github.com/simplepleb/menumaker-module.git) --}}
                    @else
                    <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Press & Media</a></li>
                            <li><a href="#">News & Blog</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Careers</a></li>
                    </ul>
                    @endisset

                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <div class="footer-menu">
                    <h4>{{ __('Footer 4') }}</h4>

                    @isset($hustbee_footer_4)
                        {!! $hustbee_footer_4->asUl( ['class' => 'footer-menu'], [] ) !!}
                        {{--   This requires MenuMaker Module (https://github.com/simplepleb/menumaker-module.git) --}}
                    @else
                    <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Press & Media</a></li>
                            <li><a href="#">News & Blog</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Careers</a></li>
                    </ul>
                    @endisset
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="footer-menu custom-footer-menu">
                    <h4>Contact us</h4>
                    <ul class="social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                    <ul>
                        <li>Tel: +(973) 17 880038</li>
                        <li><a href="#">Chatting service</a></li>
                        <li><a href="#">Submit a ticket</a></li>
                        <li><a href="#">Our location</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="row">
                <div class="col-md-6">
                    <div class="sub-footer-menu">
                        <ul>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="copyright">© Copyright 2021 <a href="https://www.simple-pleb.com">SimplePleb</a>, All Rights Reserved</div>
                </div>
            </div>
        </div>
    </div>
</div>
