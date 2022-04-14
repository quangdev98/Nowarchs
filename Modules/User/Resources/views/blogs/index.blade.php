@extends('user::layouts.master')

@section('content')
<!-- Header Banner section -->
@include('user::layouts.partials.banner_header')
    <section class="blog section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-30">
                    <div class="section-subtitle"> Our Blog </div>
                    <div class="section-title"> News & Trends </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="item">
                                <div class="post-img">
                                    <a href="index3965.html?p=21">
                                        <div class="img"> <img src="{{ asset('User/images/1.jpg') }}" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="cont">
                                    <div class="info"> <a href="index3965.html?p=21"><span>Event</span></a>
                                        January
                                        17, 2022 </div>
                                    <h3><a href="index3965.html?p=21">LUXURIOUS AND ULTRA MODERN HOMES IN THE
                                            WORLD</a></h3>
                                    <p> Quisque pretium fermentum quam, sit amet cursus ante sollicitudin vel. Morbi
                                        consequat risus consequat, porttitor orci sit amet, iaculis nisl. Integer
                                        quis sapien nec elit ultrices euismod sit amet id lacus. Sed a imperdiet
                                        erat. Duis eu est dignissim... </p>
                                    <div class="butn-dark mt-30 mb-30"><a href="index3965.html?p=21"><span>Read More
                                                <i class="ti-arrow-right"></i></span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="item">
                                <div class="post-img">
                                    <a href="index5831.html?p=19">
                                        <div class="img"> <img src="{{ asset('User/images/2.jpg') }}" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="cont">
                                    <div class="info"> <a href="index5831.html?p=19"><span>Event</span></a>
                                        January
                                        17, 2022 </div>
                                    <h3><a href="index5831.html?p=19">THIS ULTRA-MODERN MOUNTAIN HOME GOES ABOVE AND
                                            BEYOND</a></h3>
                                    <p> Quisque pretium fermentum quam, sit amet cursus ante sollicitudin vel. Morbi
                                        consequat risus consequat, porttitor orci sit amet, iaculis nisl. Integer
                                        quis sapien nec elit ultrices euismod sit amet id lacus. Sed a imperdiet
                                        erat. Duis eu est dignissim... </p>
                                    <div class="butn-dark mt-30 mb-30"><a href="index5831.html?p=19"><span>Read More
                                                <i class="ti-arrow-right"></i></span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="item">
                                <div class="post-img">
                                    <a href="indexd8eb.html?p=17">
                                        <div class="img"> <img src="{{ asset('User/images/3.jpg') }}" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="cont">
                                    <div class="info"> <a href="indexd8eb.html?p=17"><span>Event</span></a>
                                        January
                                        17, 2022 </div>
                                    <h3><a href="indexd8eb.html?p=17">A BRIEF HISTORY ON THE BEGINNINGS OF MODERN
                                            ARCHITECTURE</a></h3>
                                    <p> Quisque pretium fermentum quam, sit amet cursus ante sollicitudin vel. Morbi
                                        consequat risus consequat, porttitor orci sit amet, iaculis nisl. Integer
                                        quis sapien nec elit ultrices euismod sit amet id lacus. Sed a imperdiet
                                        erat. Duis eu est dignissim... </p>
                                    <div class="butn-dark mt-30 mb-30"><a href="indexd8eb.html?p=17"><span>Read More
                                                <i class="ti-arrow-right"></i></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-md-12 mt-30 mb-30 text-center">
                            <ul class="blog-pagination-wrap align-center">
                                <li><span aria-current="page" class="page-numbers current">1</span></li>
                                <li><a class="page-numbers" href="index7bc8.html?page_id=25&amp;paged=2">2</a></li>
                                <li><a class="next page-numbers" href="index7bc8.html?page_id=25&amp;paged=2"><i
                                            class="ti-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-sidebar row">

                        <div id="search-2" class="single-widget mb-45 widget_search">
                            <div class="col-md-12">
                                <div class="widget search">
                                    <form action="https://shtheme.com/demosd/nowarch/">
                                        <input type="text" name="s" placeholder="Type here ...">
                                        <button type="submit"><i class="ti-search" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                            </div>


                        </div>

                        <div class="col-md-12">
                            <div class="widget">
                                <div class="widget-title">
                                    <h3 class="widget-title">Recent Posts</h3>
                                </div>
                                <ul class="recent">
                                    <li>
                                        <div class="thum"> <img src="{{ asset('User/images/1.jpg') }}" alt="">
                                        </div> <a href="index3965.html?p=21">LUXURIOUS AND ULTRA MODERN HOMES IN THE
                                            WORLD</a>
                                    </li>
                                    <li>
                                        <div class="thum"> <img src="{{ asset('User/images/2.jpg') }}" alt="">
                                        </div> <a href="index5831.html?p=19">THIS ULTRA-MODERN MOUNTAIN HOME GOES
                                            ABOVE AND BEYOND</a>
                                    </li>
                                    <li>
                                        <div class="thum"> <img src="{{ asset('User/images/3.jpg') }}" alt="">
                                        </div> <a href="indexd8eb.html?p=17">A BRIEF HISTORY ON THE BEGINNINGS OF
                                            MODERN ARCHITECTURE</a>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <div id="categories-3" class="single-widget mb-45 widget_categories">
                            <h3 class="widget-title">Categories</h3>
                            <ul>
                                <li class="cat-item cat-item-2"><a href="index3f7b.html?cat=2">Architectural
                                        Design</a>
                                </li>
                                <li class="cat-item cat-item-4"><a href="indexaa1e.html?cat=4">Exterior Design</a>
                                </li>
                                <li class="cat-item cat-item-3"><a href="index81ea.html?cat=3">Interior Design</a>
                                </li>
                            </ul>

                        </div>
                        <div id="tag_cloud-2" class="single-widget mb-45 widget_tag_cloud">
                            <h3 class="widget-title">Tags</h3>
                            <div class="tagcloud">
                                <ul class='wp-tag-cloud' role='list'>
                                    <li><a href="indexe44a.html?tag=3d-modelling"
                                            class="tag-cloud-link tag-link-10 tag-link-position-1" style="font-size: 11px;"
                                            aria-label="3D Modelling (2 items)">3D
                                            Modelling</a></li>
                                    <li><a href="index00ec.html?tag=architecture"
                                            class="tag-cloud-link tag-link-6 tag-link-position-2" style="font-size: 11px;"
                                            aria-label="Architecture (2 items)">Architecture</a></li>
                                    <li><a href="indexe036.html?tag=design"
                                            class="tag-cloud-link tag-link-11 tag-link-position-3" style="font-size: 11px;"
                                            aria-label="Design (2 items)">Design</a></li>
                                    <li><a href="indexac00.html?tag=exterior"
                                            class="tag-cloud-link tag-link-8 tag-link-position-4" style="font-size: 11px;"
                                            aria-label="Exterior (2 items)">Exterior</a>
                                    </li>
                                    <li><a href="index03af.html?tag=interior"
                                            class="tag-cloud-link tag-link-7 tag-link-position-5" style="font-size: 11px;"
                                            aria-label="Interior (2 items)">Interior</a>
                                    </li>
                                    <li><a href="index78c0.html?tag=project"
                                            class="tag-cloud-link tag-link-9 tag-link-position-6" style="font-size: 11px;"
                                            aria-label="Project (2 items)">Project</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
