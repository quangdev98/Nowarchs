@extends('user::layouts.master')

@section('content')

        @include('user::layouts.partials.banner_header')
        <section class="section-padding2 wrap-blog-detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{ asset('User/images/1.jpg') }}" class="mb-30 image-detail-blog" alt="">
                    </div>
                    <div class="col-md-12">
                        <div class="section-title">LUXURIOUS AND ULTRA MODERN HOMES IN THE WORLD</div>
                        <p class="mb-30">Quisque pretium fermentum quam, sit amet cursus ante sollicitudin vel. Morbi
                            consequat risus consequat, porttitor orci sit amet, iaculis nisl. Integer quis sapien nec
                            elit ultrices euismod sit amet id lacus. Sed a imperdiet erat. Duis eu est dignissim lacus
                            dictum hendrerit quis vitae mi. Fusce eu nulla ac nisi cursus tincidunt. Interdum et
                            malesuada fames ac ante ipsum primis in faucibus. Integer tristique sem eget leo faucibus
                            porttitor.</p>
                        <p class="mb-30">Nulla vitae metus tincidunt, varius nunc quis, porta nulla. Pellentesque vel
                            dui nec libero auctor pretium id sed arcu. Nunc consequat diam id nisl blandit dignissim.
                            Etiam commodo diam dolor, at scelerisque sem finibus sit amet. Curabitur id lectus eget
                            purus finibus laoreet. Nam eget lectus ac sem luctus hendrerit sed nec magna. Maecenas
                            vulputate magna sed nunc pellentesque, in consectetur nisi condimentum.</p>
                        <div class="row savoye-photos">
                            <div class="col-md-6 mb-30">
                                <div class="portfolio-item-wrapp">
                                    <div class="portfolio-item">
                                        <div class="gallery-masonry-wrapper">
                                            <a class="gallery-masonry-item-img-link d-block" data-fancybox="images"
                                                href="{{ asset('User/images/1.jpg') }}"
                                                data-caption="Ultra Modern Homes"> <img
                                                    src="{{ asset('User/images/1.jpg') }}" alt="" width="1920"
                                                    height="1080" class="alignnone size-full wp-image-9"
                                                    srcset="https://shtheme.com/demosd/nowarch/wp-content/uploads/2022/01/1.jpg 1920w, https://shtheme.com/demosd/nowarch/wp-content/uploads/2022/01/1-300x169.jpg 300w, https://shtheme.com/demosd/nowarch/wp-content/uploads/2022/01/1-1024x576.jpg 1024w, https://shtheme.com/demosd/nowarch/wp-content/uploads/2022/01/1-768x432.jpg 768w, https://shtheme.com/demosd/nowarch/wp-content/uploads/2022/01/1-1536x864.jpg 1536w, https://shtheme.com/demosd/nowarch/wp-content/uploads/2022/01/1-1568x882.jpg 1568w"
                                                    sizes="(max-width: 1920px) 100vw, 1920px" />
                                                <div class="gallery-masonry-item-img"></div>
                                                <div class="gallery-masonry-item-content">
                                                    <h4 class="gallery-masonry-item-title">Ultra Modern Homes</h4>
                                                    <div class="gallery-masonry-item-category">Casablanca, Morocco</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-30">
                                <div class="portfolio-item-wrapp">
                                    <div class="portfolio-item">
                                        <div class="gallery-masonry-wrapper">
                                            <a class="gallery-masonry-item-img-link d-block" data-fancybox="images"
                                                href="{{ asset('User/images/3.jpg') }}"
                                                data-caption="Ultra Modern Homes"> <img loading="lazy"
                                                    src="{{ asset('User/images/3.jpg') }}" alt="" width="1920"
                                                    height="1080" class="alignnone size-full wp-image-11"
                                                    srcset="https://shtheme.com/demosd/nowarch/wp-content/uploads/2022/01/3.jpg 1920w, https://shtheme.com/demosd/nowarch/wp-content/uploads/2022/01/3-300x169.jpg 300w, https://shtheme.com/demosd/nowarch/wp-content/uploads/2022/01/3-1024x576.jpg 1024w, https://shtheme.com/demosd/nowarch/wp-content/uploads/2022/01/3-768x432.jpg 768w, https://shtheme.com/demosd/nowarch/wp-content/uploads/2022/01/3-1536x864.jpg 1536w, https://shtheme.com/demosd/nowarch/wp-content/uploads/2022/01/3-1568x882.jpg 1568w"
                                                    sizes="(max-width: 1920px) 100vw, 1920px" />
                                                <div class="gallery-masonry-item-img"></div>
                                                <div class="gallery-masonry-item-content">
                                                    <h4 class="gallery-masonry-item-title">Ultra Modern Homes</h4>
                                                    <div class="gallery-masonry-item-category">Strasbourg, France</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="post-comment-section">
                    <div class="row">
                        <!-- Comment -->



                        <div class="col-md-7">
                            <h3 class="comments-title">Comment (1)</h3>

                            <div class="post-comment-wrap">
                                <div class="post-user-comment"> <img alt=''
                                        src='https://secure.gravatar.com/avatar/9ed0660bf8be17e64ab4f55d07938eb2?s=100&amp;d=mm&amp;r=g'
                                        srcset='https://secure.gravatar.com/avatar/9ed0660bf8be17e64ab4f55d07938eb2?s=200&#038;d=mm&#038;r=g 2x'
                                        class='avatar avatar-100 photo' height='100' width='100' loading='lazy' />
                                </div>
                                <div class="post-user-content">
                                    <h6><a href='https://shtheme.com/demosd/nowarch' rel='external nofollow ugc'
                                            class='url'>admin</a><span> January 17, 2022</span></h6>
                                    <p>Photography ultricies nibh non dolor maximus scee the inte molliser faubs neque
                                        nec tincidunte aliquam erat volutpat.</p>
                                    <a rel='nofollow' class='comment-reply-link'
                                        href='indexa0cb.html?p=21&amp;replytocom=2#respond' data-commentid="2"
                                        data-postid="21" data-belowelement="comment-2" data-respondelement="respond"
                                        data-replyto="Reply to admin" aria-label='Reply to admin'>Reply</a>
                                </div>
                            </div>

                            </li><!-- #comment-## -->
                        </div>

                        <div class="col-md-4 offset-md-1">
                            <div id="respond" class="comment-respond">
                                <h3 id="reply-title" class="comment-reply-title">Leave a comments <small><a
                                            rel="nofollow" id="cancel-comment-reply-link"
                                            href="index3965.html?p=21#respond" style="display:none;">Cancel
                                            reply</a></small></h3>
                                <form action="https://shtheme.com/demosd/nowarch/wp-comments-post.php" method="post"
                                    id="commentform" class="row" novalidate>
                                    <div class="col-md-12">
                                        <input type="text" id="name" placeholder="Full Name *" name="author">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="email" placeholder="Email Address *" id="email" name="email">
                                    </div>
                                    <p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent"
                                            name="wp-comment-cookies-consent" type="checkbox" value="yes" /> <label
                                            for="wp-comment-cookies-consent">Save my name, email, and website in this
                                            browser for the next time I comment.</label></p>
                                    <div class="col-md-12">
                                        <textarea name="comment" id="message" cols="40" rows="4"
                                            placeholder="Write a Comment..."></textarea>
                                    </div>
                                    <p class="form-submit"><input name="submit" type="submit" id="submit"
                                            class="butn-dark mt-20" value="Post a Comment" /> <input type='hidden'
                                            name='comment_post_ID' value='21' id='comment_post_ID' />
                                        <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                    </p>
                                </form>
                            </div><!-- #respond -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Prev-Next Post -->
        <div class="post-prev-next mb-90">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <div class="post-prev-next-left">
                                &laquo; <a href="index5831.html?p=19" rel="prev">THIS ULTRA-MODERN MOUNTAIN HOME GOES
                                    ABOVE AND BEYOND</a> </div>
                            <div class="post-prev-next-right"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection