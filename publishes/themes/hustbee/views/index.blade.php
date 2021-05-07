<?php
 $custom_fields = theme_values('hustbee');
 // dd( $custom_fields );
?>
<div class="features container-fluid">
    <div class="container">
        <div class="row rtl-row">
            <div class="col-sm-5">
                <div class="img-holder">
                    <img src="{!! Theme::asset()->url('assets/images/feature1.png') !!}" alt="">
                </div>
            </div>
            <div class="col-sm-7">
                <div class="feature-info">
                    <div class="feature-title">{{ __('hustbee::theme.Hosting For Every Website') }}</div>
                    <div class="feature-text">{{ __('hustbee::theme.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas posuere euismod dui eget ultrices. Cras condimentum dui eget erat commodo, in venenatis eros blandit.') }}</div>
                    <div class="feature-link"><a href="#" class="hbtn hbtn-default">{{ __('hustbee::theme.Home Button 1') }}!</a></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5">
                <div class="img-holder">
                    @isset( $custom_fields )
                        {{ $home_title }}
                        <img src="{!! Theme::asset()->url('assets/images/feature2.png') !!}" alt="">
                    @else
                        <img src="{!! Theme::asset()->url('assets/images/feature2.png') !!}" alt="">
                    @endisset
                </div>
            </div>
            <div class="col-sm-7 def-aligned">
                <div class="feature-info">
                    <div class="feature-title">{{ __('hustbee::theme.In a hurry? let’s start!') }}</div>
                    <div class="feature-text">{{ __('hustbee::theme.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas posuere euismod dui eget ultrices. Cras condimentum dui eget erat commodo, in venenatis eros blandit') }}</div>
                    <div class="feature-link"><a href="#" class="hbtn hbtn-default">{{ __('hustbee::theme.Home Button 2') }}!</a></div>
                </div>
            </div>
        </div>
        <div class="row rtl-row">
            <div class="col-sm-5">
                <div class="img-holder">
                    <img src="{!! Theme::asset()->url('assets/images/feature3.png') !!}" alt="">
                </div>
            </div>
            <div class="col-sm-7">
                <div class="feature-info">
                    <div class="feature-title">{{ __('Grow with us') }}</div>
                    <div class="feature-text">{{ __ ('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas posuere euismod dui eget ultrices. Cras condimentum dui eget erat commodo, in venenatis eros blandit') }}</div>
                    <div class="feature-link"><a href="#" class="hbtn hbtn-default">{{ __('hustbee::theme.Home Button 3') }}</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pricing container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="row-title">Our hosting services</div>
            </div>
        </div>
        <div class="row custom-padding">
            <div class="col-sm-6 col-md-4">
                <div class="pricing-box">
                    <div class="pricing-title">Web Hosting</div>
                    <div class="pricing-icon">
                        <div class="icon"><img src="{!! Theme::asset()->url('assets/images/server1.svg') !!}" alt=""></div>
                    </div>
                    <div class="pricing-details">
                        <ul>
                            <li>User-friendly building tools</li>
                            <li>Host unlimited domains</li>
                            <li>Perfect for small sites/blogs</li>
                        </ul>
                    </div>
                    <div class="pricing-price">
                        <div class="price-info">Starting at only</div>
                        <div class="price">
                            <span class="currency">$</span><span class="num">2.75</span><span class="duration">/mo</span>
                        </div>
                    </div>
                    <div class="pricing-button">
                        <a href="webhosting.html">Get Started!</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="pricing-box">
                    <div class="pricing-title">Wordpress Hosting</div>
                    <div class="pricing-icon">
                        <div class="icon"><img src="{!! Theme::asset()->url('assets/images/server4.svg') !!}" alt=""></div>
                    </div>
                    <div class="pricing-details">
                        <ul>
                            <li>Host up to 2 websites</li>
                            <li>Experience faster load times</li>
                            <li>Easy to use WP control panel</li>
                        </ul>
                    </div>
                    <div class="pricing-price">
                        <div class="price-info">Starting at only</div>
                        <div class="price">
                            <span class="currency">$</span><span class="num">5.34</span><span class="duration">/mo</span>
                        </div>
                    </div>
                    <div class="pricing-button">
                        <a href="wordpresshosting.html">See Plans</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="pricing-box">
                    <div class="pricing-title">Cloud Hosting</div>
                    <div class="pricing-icon">
                        <div class="icon"><img src="{!! Theme::asset()->url('assets/images/server2.svg') !!}" alt=""></div>
                    </div>
                    <div class="pricing-details">
                        <ul>
                            <li>Up to 2X Faster</li>
                            <li>4X More Scalable</li>
                            <li>Intuitive Dashboard</li>
                        </ul>
                    </div>
                    <div class="pricing-price">
                        <div class="price-info">Starting at only</div>
                        <div class="price">
                            <span class="currency">$</span><span class="num">7.99</span><span class="duration">/mo</span>
                        </div>
                    </div>
                    <div class="pricing-button">
                        <a href="cloudhosting.html">Know more</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="pricing-box">
                    <div class="pricing-title">VPS Hosting</div>
                    <div class="pricing-icon">
                        <div class="icon"><img src="{!! Theme::asset()->url('assets/images/server3.svg') !!}" alt=""></div>
                    </div>
                    <div class="pricing-details">
                        <ul>
                            <li>Dedicated Control</li>
                            <li>Full Root Access</li>
                            <li>Scalable Resources</li>
                        </ul>
                    </div>
                    <div class="pricing-price">
                        <div class="price-info">Starting at only</div>
                        <div class="price">
                            <span class="currency">$</span><span class="num">20.40</span><span class="duration">/mo</span>
                        </div>
                    </div>
                    <div class="pricing-button">
                        <a href="vpshosting.html">Get Started!</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="pricing-box">
                    <div class="pricing-title">Dedicated Hosting</div>
                    <div class="pricing-icon">
                        <div class="icon"><img src="{!! Theme::asset()->url('assets/images/server5.svg') !!}" alt=""></div>
                    </div>
                    <div class="pricing-details">
                        <ul>
                            <li>Full root access</li>
                            <li>4 core CPU | 8GB RAM | 1TB disk</li>
                            <li>Unmetered bandwith</li>
                        </ul>
                    </div>
                    <div class="pricing-price">
                        <div class="price-info">Starting at only</div>
                        <div class="price">
                            <span class="currency">$</span><span class="num">22.80</span><span class="duration">/mo</span>
                        </div>
                    </div>
                    <div class="pricing-button">
                        <a href="dedicatedhosting.html">See Plans</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="pricing-box">
                    <div class="pricing-title">Domain names</div>
                    <div class="pricing-icon">
                        <div class="icon"><img src="{!! Theme::asset()->url('assets/images/server6.svg') !!}" alt=""></div>
                    </div>
                    <div class="pricing-details">
                        <ul>
                            <li>User-friendly building tools</li>
                            <li>Host unlimited domains</li>
                            <li>Perfect for small sites/blogs</li>
                        </ul>
                    </div>
                    <div class="pricing-price">
                        <div class="price-info">Starting at only</div>
                        <div class="price">
                            <span class="currency">$</span><span class="num">50.22</span><span class="duration">/mo</span>
                        </div>
                    </div>
                    <div class="pricing-button">
                        <a href="domains.html">Know more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@sections('latest-news')
@sections('domain-search')
@sections('support-links')


