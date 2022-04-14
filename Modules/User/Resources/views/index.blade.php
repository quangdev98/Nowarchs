@extends('user::layouts.master')

@section('content')
    {{-- <div class="content-wrapper"> --}}
        <!-- Lines section -->
        <section class="content-lines-wrapper">
            <div class="content-lines-inner">
                <div class="content-lines"></div>
            </div>
        </section>
        <div data-elementor-type="wp-page" data-elementor-id="43" class="elementor elementor-43"
            data-elementor-settings="[]">
            <div class="elementor-section-wrap">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-01b8456 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="01b8456" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5ec1e36"
                            data-id="5ec1e36" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-a1fe15f elementor-align-left elementor-widget elementor-widget-home-multi-slider"
                                    data-id="a1fe15f" data-element_type="widget"
                                    data-widget_type="home-multi-slider.default">
                                    <div class="elementor-widget-container">

                                        <header class="header slider-fade">
                                            <div class="owl-carousel owl-theme">
                                                <div class="item bg-img" data-overlay-dark="3"
                                                    data-background="{{ asset('User/images/1.jpeg') }}">
                                                    <div class="v-middle caption">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-md-12 text-center">
                                                                    <div class="o-hidden">
                                                                        <h6>Residental</h6>
                                                                        <h1>The Brown House</h1>
                                                                        <div class="butn-dark mt-30 mb-30"><a
                                                                                href="{{ route('user.project.show') }}"><span>See
                                                                                    project <i
                                                                                        class="ti-arrow-right"></i></span></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item bg-img" data-overlay-dark="3"
                                                    data-background="{{ asset('User/images/2.jpeg') }}">
                                                    <div class="v-middle caption">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-md-12 text-center">
                                                                    <div class="o-hidden">
                                                                        <h6>Residental</h6>
                                                                        <h1>The Soft Villa</h1>
                                                                        <div class="butn-dark mt-30 mb-30"><a
                                                                                href="{{ route('user.project.show') }}"><span>See
                                                                                    project <i
                                                                                        class="ti-arrow-right"></i></span></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item bg-img" data-overlay-dark="3"
                                                    data-background="{{ asset('User/images/3.jpeg') }}">
                                                    <div class="v-middle caption">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-md-12 text-center">
                                                                    <div class="o-hidden">
                                                                        <h6>Residental</h6>
                                                                        <h1>South Dan House</h1>
                                                                        <div class="butn-dark mt-30 mb-30"><a
                                                                                href="{{ route('user.project.show') }}"><span>See
                                                                                    project <i
                                                                                        class="ti-arrow-right"></i></span></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="social-icon">
                                                <a href="https://www.facebook.com/"><i class="ti-facebook"></i></a>
                                                <a href="https://twitter.com/"><i class="ti-twitter"></i></a>
                                                <a href="https://www.instagram.com/"><i class="ti-instagram"></i></a>
                                                <a href="https://www.pinterest.com/"><i class="ti-pinterest"></i></a>
                                            </div>
                                        </header>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-52a4146 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="52a4146" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-aaa642a"
                            data-id="aaa642a" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-922d6ed elementor-align-left elementor-widget elementor-widget-home-multi-about"
                                    data-id="922d6ed" data-element_type="widget"
                                    data-widget_type="home-multi-about.default">
                                    <div class="elementor-widget-container">

                                        <!-- About section -->
                                        <section class="about section-padding">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                                                        <div class="about">
                                                            <figure> <img src="{{ asset('User/images/about.jpg') }}"
                                                                    alt=""> </figure>
                                                            <div class="caption">
                                                                <div class="section-number">.01</div>
                                                                <div class="section-subtitle">Get to know us</div>
                                                                <div class="section-title">About Company</div>
                                                                <p>Architecture the inila duman aten elit finibus vivera
                                                                    alacus company design drudean seneice miuscibe
                                                                    noneten the fermen. The design architecture duiman
                                                                    finibus viverra nec a lacus drudeane sene voice
                                                                    fermen.</p>
                                                                <p>Design architecture duiman at elit finibus viverra
                                                                    nec a lacus vivento nuse ane sene voice the volume
                                                                    the miss drana inc fermen.</p>
                                                                <div class="butn-dark"><a
                                                                        href="{{ route('user.about') }}"><span>Read more
                                                                            <i class="ti-arrow-right"></i></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-36800d1 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="36800d1" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cfb170d"
                            data-id="cfb170d" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-f9afc00 elementor-align-left elementor-widget elementor-widget-home-multi-service"
                                    data-id="f9afc00" data-element_type="widget"
                                    data-widget_type="home-multi-service.default">
                                    <div class="elementor-widget-container">

                                        <section class="services mb-90">
                                            <div class="container">
                                                <div class="row">
                                                    <!-- You can access the background images on the services style line in the style.css file. -->
                                                    <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                                                        <div class="owl-carousel owl-theme">
                                                            <div class="item bg-1">
                                                                <div class="con">
                                                                    <div class="icon-img"><img
                                                                            src="{{ asset('User/images/1.png') }}" alt="">
                                                                    </div>
                                                                    <h5>Architectural Design</h5>
                                                                    <p>Architecture bibendum eros onne vane the sutate
                                                                        the sit ame vehicula nubare alacera in evensa
                                                                        sitae zusto.</p>
                                                                </div>
                                                            </div>
                                                            <div class="item bg-2">
                                                                <div class="con">
                                                                    <div class="icon-img"><img
                                                                            src="{{ asset('User/images/2.png') }}" alt="">
                                                                    </div>
                                                                    <h5>Interior Design</h5>
                                                                    <p>Architecture bibendum eros onne vane the sutate
                                                                        the sit ame vehicula nubare alacera in evensa
                                                                        sitae zusto.</p>
                                                                </div>
                                                            </div>
                                                            <div class="item bg-3">
                                                                <div class="con">
                                                                    <div class="icon-img"><img
                                                                            src="{{ asset('User/images/3.png') }}" alt="">
                                                                    </div>
                                                                    <h5>Exterior Design</h5>
                                                                    <p>Architecture bibendum eros onne vane the sutate
                                                                        the sit ame vehicula nubare alacera in evensa
                                                                        sitae zusto.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-5d68dfc elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="5d68dfc" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-770ea1e"
                            data-id="770ea1e" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-aece2f0 elementor-align-left elementor-widget elementor-widget-home-multi-portfolio"
                                    data-id="aece2f0" data-element_type="widget"
                                    data-widget_type="home-multi-portfolio.default">
                                    <div class="elementor-widget-container">

                                        <section class="projects section-padding">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12 mb-30">
                                                        <div class="section-number">.03</div>
                                                        <div class="section-subtitle">Portfolio</div>
                                                        <div class="section-title">Our Projects</div>
                                                    </div>
                                                </div>
                                                <div class="projects-carousel owl-theme owl-carousel">
                                                    <div class="projects-single">
                                                        <div class="projects-img"> <img
                                                                src="{{ asset('User/images/5.jpg') }}" alt=""> </div>
                                                        <div class="projects-content">
                                                            <div class="projects-tagline">ARCHITECTURE</div>
                                                            <div class="projects-title"><a
                                                                    href="{{ route('user.project.show') }}">BOX
                                                                    HOUSE, IN LONDON</a></div>
                                                            <div class="projects-arrow"> <a
                                                                    href="{{ route('user.project.show') }}"><span
                                                                        class="ti-arrow-right"></span></a> </div>
                                                        </div>
                                                    </div>
                                                    <div class="projects-single">
                                                        <div class="projects-img"> <img
                                                                src="{{ asset('User/images/4.jpg') }}" alt=""> </div>
                                                        <div class="projects-content">
                                                            <div class="projects-tagline">URBAN DESIGN</div>
                                                            <div class="projects-title"><a
                                                                    href="{{ route('user.project.show') }}">SPACEX
                                                                    VILLA, IN NEW YORK</a></div>
                                                            <div class="projects-arrow"> <a
                                                                    href="{{ route('user.project.show') }}"><span
                                                                        class="ti-arrow-right"></span></a> </div>
                                                        </div>
                                                    </div>
                                                    <div class="projects-single">
                                                        <div class="projects-img"> <img
                                                                src="{{ asset('User/images/3-1.jpg') }}" alt=""> </div>
                                                        <div class="projects-content">
                                                            <div class="projects-tagline">INTERIOR DESIGN</div>
                                                            <div class="projects-title"><a
                                                                    href="{{ route('user.project.show') }}">THE
                                                                    SOFT VILLA, IN CANADA</a></div>
                                                            <div class="projects-arrow"> <a
                                                                    href="{{ route('user.project.show') }}"><span
                                                                        class="ti-arrow-right"></span></a> </div>
                                                        </div>
                                                    </div>
                                                    <div class="projects-single">
                                                        <div class="projects-img"> <img
                                                                src="{{ asset('User/images/2-1.jpg') }}" alt=""> </div>
                                                        <div class="projects-content">
                                                            <div class="projects-tagline">EXTERIOR DESIGN</div>
                                                            <div class="projects-title"><a
                                                                    href="{{ route('user.project.show') }}">BROWN
                                                                    HOUSE, IN NEW YORK</a></div>
                                                            <div class="projects-arrow"> <a
                                                                    href="{{ route('user.project.show') }}"><span
                                                                        class="ti-arrow-right"></span></a> </div>
                                                        </div>
                                                    </div>
                                                    <div class="projects-single">
                                                        <div class="projects-img"> <img
                                                                src="{{ asset('User/images/1-1.jpg') }}" alt=""> </div>
                                                        <div class="projects-content">
                                                            <div class="projects-tagline">URBAN DESIGN</div>
                                                            <div class="projects-title"><a
                                                                    href="{{ route('user.project.show') }}">SPACEX
                                                                    VILLA, IN NEW YORK</a></div>
                                                            <div class="projects-arrow"> <a
                                                                    href="{{ route('user.project.show') }}"><span
                                                                        class="ti-arrow-right"></span></a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-26de352 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="26de352" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-caaf155"
                            data-id="caaf155" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-0d79bbc elementor-align-left elementor-widget elementor-widget-home-multi-video"
                                    data-id="0d79bbc" data-element_type="widget"
                                    data-widget_type="home-multi-video.default">
                                    <div class="elementor-widget-container">

                                        <section class="section-padding">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                                                        <div class="project-video left">
                                                            <figure>
                                                                <img src="{{ asset('User/images/project.jpg') }}" alt=""
                                                                    class="img-fluid">
                                                                <div class="row">
                                                                    <div
                                                                        class="col-md-12 offset-md-4 valign v-middle clear">
                                                                        <div class="vid-area">
                                                                            <div class="vid-icon">
                                                                                <a class="play-button vid"
                                                                                    href="https://youtu.be/y9j-BL5ocW8?t=12">
                                                                                    <svg class="circle-fill">
                                                                                        <circle cx="43" cy="43" r="39"
                                                                                            stroke="#fff" stroke-width="1">
                                                                                        </circle>
                                                                                    </svg>
                                                                                    <svg class="circle-track">
                                                                                        <circle cx="43" cy="43" r="39"
                                                                                            stroke="none" stroke-width="1"
                                                                                            fill="none"></circle>
                                                                                    </svg> <span class="polygon">
                                                                                        <i class="ti-control-play"></i>
                                                                                    </span> </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <div class="caption">
                                                                <div class="section-number">.04</div>
                                                                <div class="section-subtitle">Take a look at our</div>
                                                                <div class="section-title">Recent Project</div>
                                                                <p>Take a look at our most recent project. Architecture
                                                                    the inila miss uman saten eliten finibus vivera
                                                                    alacus themone the drudean seneice muscibe noten
                                                                    tofermen. Design architecture duiman viverra nec a
                                                                    fermen.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-b774bdd elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="b774bdd" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7b5cad1"
                            data-id="7b5cad1" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-3169994 elementor-align-left elementor-widget elementor-widget-home-multi-blog"
                                    data-id="3169994" data-element_type="widget" data-widget_type="home-multi-blog.default">
                                    <div class="elementor-widget-container">

                                        <section class="blog section-padding">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12 text-center mb-30">
                                                        <div class="section-number">.05</div>
                                                        <div class="section-subtitle">Our Blog</div>
                                                        <div class="section-title">Latest News</div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="owl-carousel owl-theme">
                                                            <div class="item">
                                                                <div class="post-img">
                                                                    <a href="{{ route('user.blog.show') }}">
                                                                        <div class="img"> <img
                                                                                src="{{ asset('User/images/3.jpg') }}"
                                                                                alt=""> </div>
                                                                    </a>
                                                                </div>
                                                                <div class="cont">
                                                                    <div class="info"> <a
                                                                            href="{{ route('user.blog.show') }}"><span>Event</span></a>
                                                                        January 17, 2022 </div>
                                                                    <h5><a href="{{ route('user.blog.show') }}">A BRIEF HISTORY ON
                                                                            THE BEGINNINGS OF MODERN ARCHITECTURE</a>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="post-img">
                                                                    <a href="{{ route('user.blog.show') }}">
                                                                        <div class="img"> <img
                                                                                src="{{ asset('User/images/2.jpg') }}"
                                                                                alt=""> </div>
                                                                    </a>
                                                                </div>
                                                                <div class="cont">
                                                                    <div class="info"> <a
                                                                            href="{{ route('user.blog.show') }}"><span>Event</span></a>
                                                                        January 17, 2022 </div>
                                                                    <h5><a href="{{ route('user.blog.show') }}">THIS ULTRA-MODERN
                                                                            MOUNTAIN HOME GOES ABOVE AND BEYOND</a></h5>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="post-img">
                                                                    <a href="{{ route('user.blog.show') }}">
                                                                        <div class="img"> <img
                                                                                src="{{ asset('User/images/1.jpg') }}"
                                                                                alt=""> </div>
                                                                    </a>
                                                                </div>
                                                                <div class="cont">
                                                                    <div class="info"> <a
                                                                            href="{{ route('user.blog.show') }}"><span>Event</span></a>
                                                                        January 17, 2022 </div>
                                                                    <h5><a href="{{ route('user.blog.show') }}">LUXURIOUS AND
                                                                            ULTRA MODERN HOMES IN THE WORLD</a></h5>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="post-img">
                                                                    <a href="{{ route('user.blog.show') }}">
                                                                        <div class="img"> <img
                                                                                src="{{ asset('User/images/3.jpg') }}"
                                                                                alt=""> </div>
                                                                    </a>
                                                                </div>
                                                                <div class="cont">
                                                                    <div class="info"> <a
                                                                            href="{{ route('user.blog.show') }}"><span>Event</span></a>
                                                                        January 17, 2022 </div>
                                                                    <h5><a href="{{ route('user.blog.show') }}">A BRIEF HISTORY ON
                                                                            THE BEGINNINGS OF MODERN ARCHITECTURE</a>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-00067dd elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="00067dd" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-28cbbff"
                            data-id="28cbbff" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-219f8e1 elementor-align-left elementor-widget elementor-widget-home-multi-testimonials"
                                    data-id="219f8e1" data-element_type="widget"
                                    data-widget_type="home-multi-testimonials.default">
                                    <div class="elementor-widget-container">

                                        <section class="section-padding">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                                                        <div class="testimonials left">
                                                            <figure> <img src="{{ asset('User/images/client.jpg') }}"
                                                                    alt="" class="img-fluid"> </figure>
                                                            <div class="caption testimonials">
                                                                <div class="owl-carousel owl-theme">
                                                                    <div class="item-box">
                                                                        <span class="quote"><img
                                                                                src="{{ asset('User/images/quot.png') }}"
                                                                                alt=""></span>
                                                                        <p>Architecture the inila duman aten elit
                                                                            finibus vivera alacus theonen sruden seneice
                                                                            miuscibe noneten fermen. The design
                                                                            architecture duiman finibus viverra nec a
                                                                            lacus drudeane sene voice fermen.
                                                                            Architecture vivente the nolume the miss
                                                                            drana incabout miss fermen.</p>
                                                                        <div class="info">
                                                                            <div class="author-img"> <img
                                                                                    src="{{ asset('User/images/1-1.jpg') }}"
                                                                                    alt=""> </div>
                                                                            <div class="cont">
                                                                                <h6>Enrico Brown</h6>

                                                                                <span>HHM Director</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-box">
                                                                        <span class="quote"><img
                                                                                src="{{ asset('User/images/quot.png') }}"
                                                                                alt=""></span>
                                                                        <p>Architecture the inila duman aten elit
                                                                            finibus vivera alacus theonen sruden seneice
                                                                            miuscibe noneten fermen. The design
                                                                            architecture duiman finibus viverra nec a
                                                                            lacus drudeane sene voice fermen.
                                                                            Architecture vivente the nolume the miss
                                                                            drana incabout miss fermen.</p>
                                                                        <div class="info">
                                                                            <div class="author-img"> <img
                                                                                    src="{{ asset('User/images/2-1.jpg') }}"
                                                                                    alt=""> </div>
                                                                            <div class="cont">
                                                                                <h6>Emily White</h6>

                                                                                <span>IOT Company</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-box">
                                                                        <span class="quote"><img
                                                                                src="{{ asset('User/images/quot.png') }}"
                                                                                alt=""></span>
                                                                        <p>Architecture the inila duman aten elit
                                                                            finibus vivera alacus theonen sruden seneice
                                                                            miuscibe noneten fermen. The design
                                                                            architecture duiman finibus viverra nec a
                                                                            lacus drudeane sene voice fermen.
                                                                            Architecture vivente the nolume the miss
                                                                            drana incabout miss fermen.</p>
                                                                        <div class="info">
                                                                            <div class="author-img"> <img
                                                                                    src="{{ asset('User/images/3-1.jpg') }}"
                                                                                    alt=""> </div>
                                                                            <div class="cont">
                                                                                <h6>Daniel Martin</h6>

                                                                                <span>TOGO Director</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="section-number">.06</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-b92759c elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="b92759c" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0cdbf21"
                            data-id="0cdbf21" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-e76028a elementor-align-left elementor-widget elementor-widget-home-multi-team"
                                    data-id="e76028a" data-element_type="widget" data-widget_type="home-multi-team.default">
                                    <div class="elementor-widget-container">

                                        <section class="team section-padding">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12 text-center mb-30">
                                                        <div class="section-number">.07</div>
                                                        <div class="section-subtitle">Our Experts</div>
                                                        <div class="section-title">Creative Team</div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="owl-carousel owl-theme">
                                                            <div class="item">
                                                                <div class="position-re o-hidden"> <img
                                                                        src="{{ asset('User/images/1-1.jpg') }}" alt="">
                                                                </div>
                                                                <div class="con">
                                                                    <h5>Enrico Brown</h5>
                                                                    <p>dipl. Arch ETH/SIA</p>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="position-re o-hidden"> <img
                                                                        src="{{ asset('User/images/2-1.jpg') }}" alt="">
                                                                </div>
                                                                <div class="con">
                                                                    <h5>Olivia White</h5>
                                                                    <p>dipl. Arch FH</p>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="position-re o-hidden"> <img
                                                                        src="{{ asset('User/images/3-1.jpg') }}" alt="">
                                                                </div>
                                                                <div class="con">
                                                                    <h5>Daniel Martin</h5>
                                                                    <p>M.A. FH in Architecture</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    {{-- </div> --}}
@endsection
