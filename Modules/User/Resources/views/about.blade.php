@extends('user::layouts.master')

@section('content')
    <div data-elementor-type="wp-page" data-elementor-id="45" class="elementor elementor-45" data-elementor-settings="[]">
        <div class="elementor-section-wrap">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-76450ab elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="76450ab" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-94d041b"
                        data-id="94d041b" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-efd6b61 elementor-align-left elementor-widget elementor-widget-pages-about"
                                data-id="efd6b61" data-element_type="widget" data-widget_type="pages-about.default">
                                <div class="elementor-widget-container">
                                    <!-- Header Banner section -->
                                    @include('user::layouts.partials.banner_header')
                                    <!-- About section -->
                                    <section class="section-padding2">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12 mb-120 animate-box" data-animate-effect="fadeInUp">
                                                    <div class="about">
                                                        <figure>
                                                            <img src="{{ asset('User/images/about.jpg') }}" alt="">
                                                        </figure>
                                                        <div class="caption">
                                                            <div class="section-number">.01</div>
                                                            <div class="section-subtitle">About us</div>
                                                            <div class="section-title">Our Firm Story</div>
                                                            <p>Architecture the inila duman aten elit finibus vivera
                                                                alacus company design drudean seneice miuscibe
                                                                noneten the fermen. The design architecture duiman
                                                                finibus viverra nec a lacus drudeane sene voice
                                                                fermen.</p>
                                                            <p>Design architecture duiman at elit finibus viverra
                                                                nec a lacus vivento nuse ane sene voice the volume
                                                                the miss drana inc fermen.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                                                    <div class="about left">
                                                        <figure>
                                                            <img src="{{ asset('User/images/project.jpg') }}" alt="">
                                                        </figure>
                                                        <div class="caption">
                                                            <div class="section-number">.02</div>
                                                            <div class="section-subtitle">Our Story</div>
                                                            <div class="section-title">How we started</div>
                                                            <p>Architecture the inila duman aten elit finibus vivera
                                                                alacus themone sen drudean seneice miuscibe noneten
                                                                the fermen. The design architecture duiman finibus
                                                                viverra nec a lacus drudeane sene voice fermen.</p>
                                                            <ul class="about-list">
                                                                <li>
                                                                    <div class="icon">
                                                                        <span class="ti-check"></span>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>Architecture the inila duman aten fermen.
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="icon">
                                                                        <span class="ti-check"></span>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>The design architecture duiman finibus.
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="icon">
                                                                        <span class="ti-check"></span>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>Placus udeane sene voice miss cuse aten.
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                            </ul>
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
                class="elementor-section elementor-top-section elementor-element elementor-element-9311f51 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="9311f51" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c0c5f17"
                        data-id="c0c5f17" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-0040c01 elementor-align-left elementor-widget elementor-widget-home-multi-team"
                                data-id="0040c01" data-element_type="widget" data-widget_type="home-multi-team.default">
                                <div class="elementor-widget-container">

                                    <section class="team section-padding">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12 text-center mb-30">
                                                    <div class="section-number">.03</div>
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
@endsection
