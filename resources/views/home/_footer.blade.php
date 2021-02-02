@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp

<footer>
    <!-- Footer Start-->
    <div class="footer-area footer-padding fix">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12">
                    <div class="single-footer-caption">
                        <div class="single-footer-caption">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="{{route('home')}}"><img src="{{ asset('assets')}}/img/logo/logo2_footer.png" alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <h2 style="color:white">Address</h2>
                                    <a style="color:grey"><strong>Company : </strong> {{$setting->company}} </a><br>
                                    <a style="color:grey"><strong>Address : </strong> {{$setting->address}} </a><br>
                                    <a style="color:grey"><strong>Phone : </strong> {{$setting->phone}} </a><br>
                                    <a style="color:grey"><strong>Fax : </strong> {{$setting->fax}} </a><br>
                                    <a style="color:grey"><strong>Email : </strong> {{$setting->email}} </a><br>


                                </div>
                            </div>
                            <br>
                            <!-- social -->
                            <div class="footer-social">
                                @if ($setting->twitter != null) <a href="{{$setting->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a> @endif
                                @if ($setting->instagram != null) <a href="{{$setting->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a> @endif
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4  col-sm-6">
                    <div class="single-footer-caption mt-60">
                        <div class="footer-tittle">
                            <h4>Newsletter</h4>
                            <p>Heaven fruitful doesn't over les idays appear creeping</p>
                            <!-- Form -->
                            <div class="footer-form" >
                                <div id="mc_embed_signup">
                                    <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                          method="get" class="subscribe_form relative mail_part">
                                        <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                               class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                               onblur="this.placeholder = ' Email Address '">
                                        <div class="form-icon">
                                            <button type="submit" name="submit" id="newsletter-submit"
                                                    class="email_icon newsletter-submit button-contactForm"><img src="{{ asset('assets')}}/img/logo/form-iocn.png" alt=""></button>
                                        </div>
                                        <div class="mt-10 info"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                    <div class="single-footer-caption mb-50 mt-60">
                        <div class="footer-tittle">
                            <h4>Instagram Feed</h4>
                        </div>
                        <div class="instagram-gellay">
                            <ul class="insta-feed">
                                <li><a href="#"><img src="{{ asset('assets')}}/img/post/instra1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="{{ asset('assets')}}/img/post/instra2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="{{ asset('assets')}}/img/post/instra3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="{{ asset('assets')}}/img/post/instra4.jpg" alt=""></a></li>
                                <li><a href="#"><img src="{{ asset('assets')}}/img/post/instra5.jpg" alt=""></a></li>
                                <li><a href="#"><img src="{{ asset('assets')}}/img/post/instra6.jpg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom aera -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="footer-border">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="footer-copy-right">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | {{$setting->company}}
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer-menu f-right">
                            <ul>
                                <li><a href="#">Terms of use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>

<!-- JS here -->

<!-- All JS Custom Plugins Link Here here -->
<script src="{{ asset('assets')}}/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{ asset('assets')}}/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{ asset('assets')}}/js/popper.min.js"></script>
<script src="{{ asset('assets')}}/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="{{ asset('assets')}}/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{ asset('assets')}}/js/owl.carousel.min.js"></script>
<script src="{{ asset('assets')}}/js/slick.min.js"></script>
<!-- Date Picker -->
<script src="{{ asset('assets')}}/js/gijgo.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{ asset('assets')}}/js/wow.min.js"></script>
<script src="{{ asset('assets')}}/js/animated.headline.js"></script>
<script src="{{ asset('assets')}}/js/jquery.magnific-popup.js"></script>

<!-- Breaking New Pluging -->
<script src="{{ asset('assets')}}/js/jquery.ticker.js"></script>
<script src="{{ asset('assets')}}/js/site.js"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="{{ asset('assets')}}/js/jquery.scrollUp.min.js"></script>
<script src="{{ asset('assets')}}/js/jquery.nice-select.min.js"></script>
<script src="{{ asset('assets')}}/js/jquery.sticky.js"></script>

<!-- contact js -->
<script src="{{ asset('assets')}}/js/contact.js"></script>
<script src="{{ asset('assets')}}/js/jquery.form.js"></script>
<script src="{{ asset('assets')}}/js/jquery.validate.min.js"></script>
<script src="{{ asset('assets')}}/js/mail-script.js"></script>
<script src="{{ asset('assets')}}/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{ asset('assets')}}/js/plugins.js"></script>
<script src="{{ asset('assets')}}/js/main.js"></script>

