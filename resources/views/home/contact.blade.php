@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
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
@section('title','Contact'.$setting->title)



<!-- ================ contact section start ================= -->
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>İletişim Bilgileri</h3>
                {!! $setting->contact !!}
            </div>
            <div class="col-md-4">
                <h3>İletişim Formu</h3>
                @include('home.message')
                <form action="{{route('sendmessage')}}" method="post">
                    @csrf

                    <div class="mt-10">
                        <input type="text" name="name" placeholder="Name & Surname" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name & Surname'" required="" class="single-input">
                    </div>
                    <div class="mt-10">
                        <input type="text" name="phone" placeholder="Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" required="" class="single-input">
                    </div>
                    <div class="mt-10">
                        <input type="text" name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" class="single-input">
                    </div>
                    <div class="mt-10">
                        <input type="text" name="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'" required="" class="single-input">
                    </div>
                    <div class="mt-10">
                        <textarea class="single-textarea" name="message"  placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required=""></textarea>
                    </div>
        <!-- For Gradient Border Use -->
        <!-- <div class="mt-10">
                    <div class="primary-input">
                        <input id="primary-input" type="text" name="first_name" placeholder="Primary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'">
                        <label for="primary-input"></label>
                    </div>
                </div> -->
        <br>
        <div class="pull-right">
            <button type="submit" class="button button-contactForm boxed-btn">Send</button>

        </div>
        </form>

            </div>
        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->

@include('home._footer')

