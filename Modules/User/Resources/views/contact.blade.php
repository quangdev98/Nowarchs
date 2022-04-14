@extends('user::layouts.master')

@section('content')

<div data-elementor-type="wp-page" data-elementor-id="49" class="elementor elementor-49"
data-elementor-settings="[]">
<div class="elementor-section-wrap">
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-9afa3cd elementor-section-full_width elementor-section-height-default elementor-section-height-default"
        data-id="9afa3cd" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-28c8238"
                data-id="28c8238" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-f012a08 elementor-align-left elementor-widget elementor-widget-pages-contact"
                        data-id="f012a08" data-element_type="widget"
                        data-widget_type="pages-contact.default">
                        <div class="elementor-widget-container">
                            <!-- Header Banner section -->
                            @include('user::layouts.partials.banner_header')
                            <!-- Contact section -->
                            <section class="contact section-padding2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="section-subtitle">Location</div>
                                            <div class="section-title">Contact Us</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-90">
                                            <p>Thank you so much for reaching out to us - we are excited to
                                                connect with you! Tell us about you. If you do not receive
                                                response within 24 hours, please contact us directly email
                                                or phone.</p>
                                            <ul class="list-unstyled contact-list">
                                                <li>
                                                    <div class="icon"><span class="ti-headphone-alt"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p><a href="tel:+1123-456-0606">+1 123-456-0606</a>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon"><span class="ti-email"></span></div>
                                                    <div class="text">
                                                        <p><a
                                                                href="mailto:info@architecture.com">info@architecture.com</a>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon"><span class="ti-location-pin"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>120 King St, Charleston SC 29401 USA</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4 offset-md-2 mb-90">
                                            <h5>Get in touch</h5>
                                            <div role="form" class="wpcf7" id="wpcf7-f7-p49-o1" lang="en-US"
                                                dir="ltr">
                                                <div class="screen-reader-response"></div>
                                                <form
                                                    action=""
                                                    method="post" class="wpcf7-form"
                                                    novalidate="novalidate">
                                                    <div style="display: none;">
                                                        <input type="hidden" name="_wpcf7" value="7" />
                                                        <input type="hidden" name="_wpcf7_version"
                                                            value="5.0.2" />
                                                        <input type="hidden" name="_wpcf7_locale"
                                                            value="en_US" />
                                                        <input type="hidden" name="_wpcf7_unit_tag"
                                                            value="wpcf7-f7-p49-o1" />
                                                        <input type="hidden" name="_wpcf7_container_post"
                                                            value="49" />
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <span
                                                                class="wpcf7-form-control-wrap your-name"><input
                                                                    type="text" name="your-name" value=""
                                                                    size="40"
                                                                    class="wpcf7-form-control wpcf7-text"
                                                                    aria-invalid="false"
                                                                    placeholder="Full Name *" /></span>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <span
                                                                class="wpcf7-form-control-wrap your-email"><input
                                                                    type="email" name="your-email" value=""
                                                                    size="40"
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                    aria-required="true"
                                                                    aria-invalid="false"
                                                                    placeholder="Email *" /></span>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <span
                                                                class="wpcf7-form-control-wrap your-message"><textarea
                                                                    name="your-message" cols="40" rows="10"
                                                                    class="wpcf7-form-control wpcf7-textarea"
                                                                    id="message" aria-invalid="false"
                                                                    placeholder="Your Message"></textarea></span>
                                                        </div>
                                                        <div class="col-md-12 mt-20">
                                                            <div class="butn-dark"><input type="submit"
                                                                    value="Submit"
                                                                    class="wpcf7-form-control wpcf7-submit" />
                                                            </div>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="wpcf7-response-output wpcf7-display-none">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d838.6467795218418!2d-79.93308707079942!3d32.77668842639422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88fe7a104df45875%3A0x961a7ca2436378eb!2s120%20King%20St%2C%20Charleston%2C%20SC%2029401%2C%20Amerika%20Birle%C5%9Fik%20Devletleri!5e0!3m2!1str!2str!4v1637798294140!5m2!1str!2str"
                                                width="100%" height="550" style="border:0;"
                                                allowfullscreen="" loading="lazy"></iframe>
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
