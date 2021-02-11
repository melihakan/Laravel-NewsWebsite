
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

            <!--================Blog Area =================-->
            <section class="blog_area single-post-area section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 posts-list">
                            <div class="single-post">
                                @foreach($datalist as $rs)
                                <div class="feature-img">
                                    <img class="img-fluid" src="{{Storage::url($rs->image)}}" alt="">
                                </div>
                                @endforeach
                                <div class="blog_details">
                                    <h2>{{$data->title}}</h2>

                                    <ul class="blog-info-link mt-3 mb-4">

                                        <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                    </ul>
                                    <p class="excert">
                                     {!! $data->detail !!}
                                    </p>


                                </div>

                            </div>

{{--                            @php--}}
{{--                                $countreview = \App\Http\Controllers\HomeController::countreview($data->id);--}}
{{--                            @endphp--}}
                            <div class="comments-area">
                                <h4> Comments</h4>
                                <div class="comment-list">
                                    <div class="single-comment justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">
                                   @foreach($reviews as $rs)
                                            <div class="desc">
                                                <p class="comment">
                                                   <strong>{{$rs->subject}}</strong><br>
                                                    {{$rs->review}}

                                                </p>
                                                <p>{{$rs->rate}}</p>
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <h5>
                                                            <a href="#">{{$rs->user->name}}</a>
                                                        </h5>
                                                        <p class="date">{{$rs->created_at}} </p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                            </div>
                            <div class="comment-form">
                                <h4>Comment</h4>
                                @livewire('review',['id' => $data->id])

{{--                                <form class="form-contact comment_form" action="#" id="commentForm">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-12">--}}
{{--                                            <div class="form-group">--}}
{{--                              <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"--}}
{{--                                        placeholder="Write Comment"></textarea>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <input class="form-control" name="name" id="name" type="text" placeholder="Name">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <input class="form-control" name="email" id="email" type="email" placeholder="Email">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-12">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <input class="form-control" name="website" id="website" type="text" placeholder="Website">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
                                @livewireScripts
                            </div>

                        </div>

                    </div>
                </div>
            </section>
            <!--================ Blog Area end =================-->


        </div>

    </div>
</section>

<!-- ================ contact section end ================= -->

@include('home._footer')
