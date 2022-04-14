@extends('user::layouts.master')
@section('content')

@include('user::layouts.partials.banner_header')
<!-- Project page section -->
<section class="project-page section-padding2">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- Gallery -->
            <div class="owl-carousel owl-theme">
                <div class="portfolio-item">
                    <img class="img-fluid" src="{{ asset('User/images/1.jpeg') }}" alt="">
                </div>
                <div class="portfolio-item">
                    <img class="img-fluid" src="{{ asset('User/images/2.jpeg') }}" alt="">
                </div>
                <div class="portfolio-item">
                    <img class="img-fluid" src="{{ asset('User/images/3.jpeg') }}" alt="">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="project-bar">
                        <div
                            class="row justify-content-between align-items-center text-center text-lg-start">
                            <div class="col-md-3 mb-15">
                                <h5>Client</h5>
                                <p>Enrico Martin</p>
                            </div>
                            <div class="col-md-3 mb-15">
                                <h5>Date</h5>
                                <p>June 2021</p>
                            </div>
                            <div class="col-md-3 mb-15">
                                <h5>Location</h5>
                                <p>New York, NY</p>
                            </div>
                            <div class="col-md-3 mb-15">
                                <h5>Service</h5>
                                <p>Architecture design</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-30 mb-30">
            <div class="section-subtitle">EXTERIOR DESIGN</div>
            <div class="section-title">BROWN HOUSE, IN NEW YORK</div>

            <style type="text/css">
                #gallery-2 {
                    margin: auto;
                }

                #gallery-2 .gallery-item {
                    float: left;
                    margin-top: 10px;
                    text-align: center;
                    width: 33%;
                }

                #gallery-2 img {
                    border: 2px solid #cfcfcf;
                }

                #gallery-2 .gallery-caption {
                    margin-left: 0;
                }

                /* see gallery_shortcode() in wp-includes/media.php */
            </style>
            <div id='gallery-2' class='gallery galleryid-31 gallery-columns-3 gallery-size-full'>
                <dl class='gallery-item'>
                    <dt class='gallery-icon landscape'>
                        <a href='index052a.html?attachment_id=9'><img width="1920" height="1080"
                                src="wp-content/uploads/2022/01/1.jpg" class="attachment-full size-full"
                                alt="" loading="lazy"
                                srcset="https://shtheme.com/demosd/nowarch/wp-content/uploads/2022/01/1.jpg 1920w, https://shtheme.com/demosd/nowarch/wp-content/uploads/2022/01/1-300x169.jpg 300w, https://shtheme.com/demosd/nowarch/wp-content/uploads/2022/01/1-1024x576.jpg 1024w, https://shtheme.com/demosd/nowarch/wp-content/uploads/2022/01/1-768x432.jpg 768w, https://shtheme.com/demosd/nowarch/wp-content/uploads/2022/01/1-1536x864.jpg 1536w, https://shtheme.com/demosd/nowarch/wp-content/uploads/2022/01/1-1568x882.jpg 1568w"
                                sizes="(max-width: 1920px) 100vw, 1920px" /></a>
                    </dt>
                </dl>
                <dl class='gallery-item'>
                    <dt class='gallery-icon landscape'>
                        <a href='indexc6f9.html?attachment_id=10'><img width="1920" height="1080"
                                src="wp-content/uploads/2022/01/2.jpg" class="attachment-full size-full"
                                alt="" loading="lazy"
                                srcset="https://shtheme.com/demosd/nowarch/wp-content/uploads/2022/01/2.jpg 1920w, https://shtheme.com/demosd/nowarch/wp-content/uploads/2022/01/2-300x169.jpg 300w, https://shtheme.com/demosd/nowarch/wp-content/uploads/2022/01/2-1024x576.jpg 1024w, https://shtheme.com/demosd/nowarch/wp-content/uploads/2022/01/2-768x432.jpg 768w, https://shtheme.com/demosd/nowarch/wp-content/uploads/2022/01/2-1536x864.jpg 1536w, https://shtheme.com/demosd/nowarch/wp-content/uploads/2022/01/2-1568x882.jpg 1568w"
                                sizes="(max-width: 1920px) 100vw, 1920px" /></a>
                    </dt>
                </dl>
                <dl class='gallery-item'>
                    <dt class='gallery-icon landscape'>
                        <a href='indexbd32.html?attachment_id=11'><img width="1920" height="1080"
                                src="wp-content/uploads/2022/01/3.jpg" class="attachment-full size-full"
                                alt="" loading="lazy"
                                srcset="https://shtheme.com/demosd/nowarch/wp-content/uploads/2022/01/3.jpg 1920w, https://shtheme.com/demosd/nowarch/wp-content/uploads/2022/01/3-300x169.jpg 300w, https://shtheme.com/demosd/nowarch/wp-content/uploads/2022/01/3-1024x576.jpg 1024w, https://shtheme.com/demosd/nowarch/wp-content/uploads/2022/01/3-768x432.jpg 768w, https://shtheme.com/demosd/nowarch/wp-content/uploads/2022/01/3-1536x864.jpg 1536w, https://shtheme.com/demosd/nowarch/wp-content/uploads/2022/01/3-1568x882.jpg 1568w"
                                sizes="(max-width: 1920px) 100vw, 1920px" /></a>
                    </dt>
                </dl><br style="clear: both" />
            </div>
            <p>Architecture lonon lorem ac erat suscipit bibendum. Nulla facilisi. Sedeuter nunc volutpat,
                mollis sapien vel, conseyer turpeutionyer masin libero sempe. Fusceler mollis augue sit amet
                hendrerit vestibulum. Duisteyerionyer venenatis lacus.</p>
            <p>Villa gravida eros ut turpis interdum ornare. Interdum et malesu they adamale fames ac
                anteipsu pimsine faucibus. Curabitur arcu site feugiat in torto.</p>
            <p>Nedana theme erodino setlie suscipe no curabit tristique. Fobes inilla duiman at elit finibus
                viverra nec a drudea seneoice misus lacus themo the drudea seneoice misuscive non sagie
                duiman at elit the fermen.</p>
            <ul class="about-list mt-30">
                <li>
                    <div class="icon">
                        <span class="ti-check"></span>
                    </div>
                    <div class="text">
                        <p>Architecture the inila duman aten fermen.</p>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <span class="ti-check"></span>
                    </div>
                    <div class="text">
                        <p>The design architecture duiman finibus.</p>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <span class="ti-check"></span>
                    </div>
                    <div class="text">
                        <p>Placus udeane sene voice miss cuse aten.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
</section>
<!-- Prev-Next Projects -->
<div class="projects-prev-next mb-90">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div class="projects-prev-next-left">
                    &laquo; <a href="indexaf29.html?portfolio=the-soft-villa-in-canada" rel="prev">THE SOFT
                        VILLA, IN CANADA</a> </div>
                <div class="projects-prev-next-right"> <a
                        href="indexc867.html?portfolio=spacex-villa-in-new-york-2" rel="next">SPACEX VILLA,
                        IN NEW YORK</a> &raquo; </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
