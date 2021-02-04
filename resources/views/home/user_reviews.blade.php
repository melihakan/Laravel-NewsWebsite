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

        <div class="row">
            <div class="col-2">
                @include('home.usermenu')
            </div>


            <div class="col-10">



                        <div class="table-responsive m-t-40">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                    <tr>
                        <th>Id</th>
                        <th>News</th>
                        <th>Subject</th>
                        <th>Review</th>
                        <th>Rate</th>
                        <th>Status</th>
                        <th>Date</th>

                        <th class="text-nowrap">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @include('home.message')
                    @foreach($datalist as $rs)
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>
                            <a href="{{route('news',['id'=>$rs->news->id,'slug'=>$rs->news->slug])}}" style="color: black">{{$rs->news->title}}</a>
                        </td>
                        <td>{{$rs->subject}}</td>
                        <td>{{$rs->review}}</td>
                        <td>{{$rs->rate}}</td>
                        <td>{{$rs->status}}</td>
                        <td>{{$rs->created_at}}</td>

                        <td class="text-nowrap">
                            <a href="{{route('admin_review_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete, Are you Sure ?')" data-toggle="tooltip" data-original-title="Close">
                                <i class="fa fa-close text-danger">Delete</i> </a>
                        </td>
                    </tr>
                    @endforeach


                    </tbody>
                            </table>
                        </div>
    </div>


    </div>
</div>


@include('home._footer')
