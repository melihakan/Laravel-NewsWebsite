<!DOCTYPE html>


<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>TheGazette - News Magazine HTML5 Template | Home</title>
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Gazzetee">
    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('assets')}}/img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/core-style.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/style.css">

    <!-- Responsive CSS -->
    <link href="{{ asset('assets')}}/css/responsive.css" rel="stylesheet">

</head>
<body>
@include('home._header');

<!-- Main Content Area Start -->
<section class="main-content-wrapper section_padding_100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9">
                <!-- Gazette Welcome Post -->
                <div class="gazette-welcome-post">
                    <!-- Post Tag -->
                    <div class="gazette-post-tag">
                        <a href="#">Politices</a>
                    </div>
                    <h2 class="font-pt">What's behind the world obsession with gems?</h2>
                    <p class="gazette-post-date">March 29, 2016</p>
                    <!-- Post Thumbnail -->
                    <div class="blog-post-thumbnail my-5">
                        <img src="img/blog-img/1.jpg" alt="post-thumb">
                    </div>
                    <!-- Post Excerpt -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ultrices egestas nunc, quis
                        venenatis orci tincidunt id. Fusce commodo blandit eleifend. Nullam viverra tincidunt dolor, at
                        pulvinar dui. Nullam at risus ut ipsum viverra posuere. Aliquam quis convallis enim. Nunc
                        pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a
                        iaculis justo finibus non. Suspendisse in fermentum nunc. Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Suspendisse ultrices egestas nunc, quis venenatis orci tincidunt
                        id. Fusce commodo blandit eleifend.</p>
                    <!-- Reading More -->
                    <div class="post-continue-reading-share d-sm-flex align-items-center justify-content-between mt-30">
                        <div class="post-continue-btn">
                            <a href="#" class="font-pt">Continue Reading <i class="fa fa-chevron-right"
                                                                            aria-hidden="true"></i></a>
                        </div>
                        <div class="post-share-btn-group">
                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <div class="gazette-todays-post section_padding_100_50">
                    <div class="gazette-heading">
                        <h4>today’s most popular</h4>
                    </div>
                    <!-- Single Today Post -->
                    <div class="gazette-single-todays-post d-md-flex align-items-start mb-50">
                        <div class="todays-post-thumb">
                            <img src="img/blog-img/2.jpg" alt="">
                        </div>
                        <div class="todays-post-content">
                            <!-- Post Tag -->
                            <div class="gazette-post-tag">
                                <a href="#">News</a>
                            </div>
                            <h3><a href="#" class="font-pt mb-2">$250-million mansion is most expensive</a></h3>
                            <span class="gazette-post-date mb-2">March 29, 2016</span>
                            <a href="#" class="post-total-comments">3 Comments</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ultrices egestas
                                nunc, quis venenatis orci tincidunt id. Fusce commodo blandit eleifend. Nullam viverra
                                tincidunt dolor, at pulvinar dui. Nullam at risus ut ipsum viverra posuere.</p>
                        </div>
                    </div>
                    <!-- Single Today Post -->
                    <div class="gazette-single-todays-post d-md-flex align-items-start mb-50">
                        <div class="todays-post-thumb">
                            <img src="img/blog-img/3.jpg" alt="">
                        </div>
                        <div class="todays-post-content">
                            <!-- Post Tag -->
                            <div class="gazette-post-tag">
                                <a href="#">Life</a>
                            </div>
                            <h3><a href="#" class="font-pt mb-2">Homeless man steals $350,000 </a></h3>
                            <p class="gazette-post-date mb-2">March 29, 2016</p>
                            <a href="#" class="post-total-comments">3 Comments</a>
                            <p>Aliquam quis convallis enim. Nunc pulvinar molestie sem id blandit. Nunc venenatis
                                interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in
                                fermentum nunc.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-3 col-md-6">
                <div class="sidebar-area">
                    <!-- Breaking News Widget -->
                    <div class="breaking-news-widget">
                        <div class="widget-title">
                            <h5>breaking news</h5>
                        </div>
                        <!-- Single Breaking News Widget -->
                        <div class="single-breaking-news-widget">
                            <img src="img/blog-img/bn-1.jpg" alt="">
                            <div class="breakingnews-title">
                                <p>breaking news</p>
                            </div>
                            <div class="breaking-news-heading gradient-background-overlay">
                                <h5 class="font-pt">China leads new global skyscraper record</h5>
                            </div>
                        </div>
                        <!-- Single Breaking News Widget -->
                        <div class="single-breaking-news-widget">
                            <img src="img/blog-img/bn-2.jpg" alt="">
                            <div class="breakingnews-title">
                                <p>breaking news</p>
                            </div>
                            <div class="breaking-news-heading gradient-background-overlay">
                                <h5 class="font-pt">Can a zebra crossing change its stripes?</h5>
                            </div>
                        </div>
                    </div>

                    <!-- Don't Miss Widget -->
                    <div class="donnot-miss-widget">
                        <div class="widget-title">
                            <h5>Don't miss</h5>
                        </div>
                        <!-- Single Don't Miss Post -->
                        <div class="single-dont-miss-post d-flex mb-30">
                            <div class="dont-miss-post-thumb">
                                <img src="img/blog-img/dm-1.jpg" alt="">
                            </div>
                            <div class="dont-miss-post-content">
                                <a href="#" class="font-pt">EU council reunites</a>
                                <span>Nov 29, 2017</span>
                            </div>
                        </div>
                        <!-- Single Don't Miss Post -->
                        <div class="single-dont-miss-post d-flex mb-30">
                            <div class="dont-miss-post-thumb">
                                <img src="img/blog-img/dm-2.jpg" alt="">
                            </div>
                            <div class="dont-miss-post-content">
                                <a href="#" class="font-pt">A new way to travel the world</a>
                                <span>March 29, 2016</span>
                            </div>
                        </div>
                        <!-- Single Don't Miss Post -->
                        <div class="single-dont-miss-post d-flex mb-30">
                            <div class="dont-miss-post-thumb">
                                <img src="img/blog-img/dm-3.jpg" alt="">
                            </div>
                            <div class="dont-miss-post-content">
                                <a href="#" class="font-pt">Why choose a bank?</a>
                                <span>March 29, 2016</span>
                            </div>
                        </div>
                    </div>
                    <!-- Advert Widget -->
                    <div class="advert-widget">
                        <div class="widget-title">
                            <h5>Advert</h5>
                        </div>
                        <div class="advert-thumb mb-30">
                            <a href="#"><img src="img/bg-img/add.png" alt=""></a>
                        </div>
                    </div>
                    <!-- Subscribe Widget -->
                    <div class="subscribe-widget">
                        <div class="widget-title">
                            <h5>subscribe</h5>
                        </div>
                        <div class="subscribe-form">
                            <form action="#">
                                <input type="email" name="email" id="subs_email" placeholder="Your Email">
                                <button type="submit">subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            @include('home._video');
            @include('home._slide');
        </div>
    </div>
</section>
    <!-- Main Content Area End -->

@include('home._footer');


</body>
</html>
