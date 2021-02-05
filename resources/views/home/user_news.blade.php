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
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>Title(s)</th>
                                    <th>Images</th>
                                    <th>Images Gallery</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                    <tbody>

                    @foreach ($datalist as $rs)

                        <tr>
                            <td>{{ $rs->id }}</td>
                            <td>
                                {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title)}}
                            </td>
                            <td>{{ $rs->title }}</td>

                            <td>
                                @if($rs->image)
                                    <img src = "{{Storage::url($rs->image)}}" height="30" alt="">
                                @endif
                            </td>
                            <td><a href="{{route('user_image_add',['news_id' => $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                    <img src="{{asset('assets/admin/images')}}/gallery.png" height="25"></a></td>

                            <td>{{ $rs->status }}</td>
                            <td><a href="{{route('user_news_edit',['id'=> $rs->id])}}" style="color: red"> Edit</a></td>
                            <td><a href="{{route('user_news_delete',['id'=> $rs->id])}}" style="color: red" onclick="return confirm('Delete! Are you sure ?')"> Delete</a></td>
                        </tr>

                    @endforeach
                    <a href="{{route('user_news_add')}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Add News </a>
                    @include('home.message')
                    </tbody>
                            </table>
                        </div>
    </div>


    </div>
</div>


@include('home._footer')
