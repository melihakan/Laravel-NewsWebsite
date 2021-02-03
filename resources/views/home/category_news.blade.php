<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="ForeverDeeps">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="author" content="MelihAKAN">

    {{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets')}}/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/ticker-style.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/slicknav.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/slick.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/style.css">
</head>

<body>
@include('home._header')
@section('title','User Profile')



<!-- ================ contact section start ================= -->
<section class="contact-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    @foreach($datalist as $rs)
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0" src="{{Storage::url($rs->image)}}" alt="">
                            <a href="#" class="blog_item_date">
                                <h3>15</h3>
                                <p>Jan</p>
                            </a>
                        </div>

                        <div class="blog_details">
                            <a class="d-inline-block" href="#">
                                <h2>{{($rs->title)}}</h2>
                            </a>
                            <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                he earth it first without heaven in place seed it second morning saying.</p>
                            <ul class="blog-info-link">
                                <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                            </ul>
                        </div>
                    </article>

                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0" src="{{asset('assets')}}/img/blog/single_blog_2.png" alt="">
                            <a href="#" class="blog_item_date">
                                <h3>15</h3>
                                <p>Jan</p>
                            </a>
                        </div>

                        <div class="blog_details">
                            <a class="d-inline-block" href="single-blog.html">
                                <h2>Google inks pact for new 35-storey office</h2>
                            </a>
                            <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                he earth it first without heaven in place seed it second morning saying.</p>
                            <ul class="blog-info-link">
                                <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                            </ul>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->

@include('home._footer')
