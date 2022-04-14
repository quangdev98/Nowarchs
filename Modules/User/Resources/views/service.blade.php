@extends('user::layouts.master')

@section('content')

<div data-elementor-type="wp-page" data-elementor-id="47" class="elementor elementor-47"
data-elementor-settings="[]">
<div class="elementor-section-wrap">
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-415637a elementor-section-full_width elementor-section-height-default elementor-section-height-default"
        data-id="415637a" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7c0e239"
                data-id="7c0e239" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-70ad329 elementor-align-left elementor-widget elementor-widget-pages-service"
                        data-id="70ad329" data-element_type="widget"
                        data-widget_type="pages-service.default">
                        <div class="elementor-widget-container">
                            <!-- Header Banner section -->
                            @include('user::layouts.partials.banner_header')
                            <!-- Services section -->
                            <section class="services section-padding2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 text-center mb-30">
                                            <div class="section-subtitle">What We Do</div>
                                            <div class="section-title">Our Services</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="item bg-1">
                                                <div class="con">
                                                    <div class="icon-img"><img
                                                            src="{{ asset('User/images/1.png') }}" alt="">
                                                    </div>
                                                    <h5>Architectural Design</h5>
                                                    <p>Architecture bibendum eros onne vane the sutate the
                                                        sit ame vehicula nubare alacera in evensa sitae
                                                        zusto.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="item bg-2">
                                                <div class="con">
                                                    <div class="icon-img"><img
                                                            src="{{ asset('User/images/2.png') }}" alt="">
                                                    </div>
                                                    <h5>Interior Design</h5>
                                                    <p>Architecture bibendum eros onne vane the sutate the
                                                        sit ame vehicula nubare alacera in evensa sitae
                                                        zusto.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="item bg-3">
                                                <div class="con">
                                                    <div class="icon-img"><img
                                                            src="{{ asset('User/images/3.png') }}" alt="">
                                                    </div>
                                                    <h5>Exterior Design</h5>
                                                    <p>Architecture bibendum eros onne vane the sutate the
                                                        sit ame vehicula nubare alacera in evensa sitae
                                                        zusto.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="item bg-4">
                                                <div class="con">
                                                    <div class="icon-img"><img
                                                            src="{{ asset('User/images/7.png') }}" alt="">
                                                    </div>
                                                    <h5>Decor Plan</h5>
                                                    <p>Architecture bibendum eros onne vane the sutate the
                                                        sit ame vehicula nubare alacera in evensa sitae
                                                        zusto.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="item bg-5">
                                                <div class="con">
                                                    <div class="icon-img"><img
                                                            src="{{ asset('User/images/5.png') }}" alt="">
                                                    </div>
                                                    <h5>3D Modelling</h5>
                                                    <p>Architecture bibendum eros onne vane the sutate the
                                                        sit ame vehicula nubare alacera in evensa sitae
                                                        zusto.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="item bg-6">
                                                <div class="con">
                                                    <div class="icon-img"><img
                                                            src="{{ asset('User/images/6-1.p') }}ng" alt="">
                                                    </div>
                                                    <h5>Furniture Design</h5>
                                                    <p>Architecture bibendum eros onne vane the sutate the
                                                        sit ame vehicula nubare alacera in evensa sitae
                                                        zusto.</p>
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
