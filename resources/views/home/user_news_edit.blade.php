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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
</head>

<body>
@include('home._header')

<div class="row">
    <div class="col-2">
        @include('home.usermenu')
    </div>


    <div class="col-10">
        <form class="form p-t-20" action="{{route('user_news_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <br>
                <br>
                <label >Category</label>
                <br>
                <select class="form-control select2" name="category_id" style="width: 100%">
                    @foreach($datalist as $rs)
                        <option value="{{ $rs->id }}" @if($rs->id == $data->category_id) selected="selected" @endif>
                            {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                        </option>
                    @endforeach

                </select>

            </div>
            <br>
            <div class="form-group">
                <br>
                <label for="pwd1">Title</label>
                <div class="input-group mb-3">

                    <input type="text" id="title" name="title" value="{{$data->title}}" class="form-control" placeholder="Title" aria-label="Password"
                           aria-describedby="basic-addon3">
                </div>
            </div>
            <div class="form-group">
                <label for="pwd1">Keywords</label>
                <div class="input-group mb-3">

                    <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control" placeholder="Keywords" aria-label="Password"
                           aria-describedby="basic-addon3">
                </div>
            </div>
            <div class="form-group">
                <label for="pwd1">Description</label>
                <div class="input-group mb-3">

                    <input type="text" name="description" value="{{$data->description}}" class="form-control" placeholder="Description" aria-label="Password"
                           aria-describedby="basic-addon3">
                </div>
            </div>

            <div class="form-group">
                <label for="pwd1">Image</label>
                <div class="input-group mb-3">

                    <input type="file" name="image" class="form-control" placeholder="New"
                           aria-describedby="basic-addon3">
                    @if($rs->image)
                        <img src = "{{Storage::url($rs->image)}}" height="60" alt="">
                    @endif
                </div>
            </div>



            <div class="form-group">
                <label for="pwd1">Detail</label>
                <textarea id="detail" name="detail" >{{"$data->detail"}}</textarea>
                <script>
                    CKEDITOR.replace( 'detail' );
                </script>
                <div class="input-group mb-3">


                </div>
            </div>

            <div class="form-group">
                <label for="pwd1">New</label>
                <div class="input-group mb-3">

                    <input type="text" name="new" value="{{"$data->new"}}" class="form-control" placeholder="New" aria-label="Password"
                           aria-describedby="basic-addon3">
                </div>
            </div>

            <div class="form-group">
                <label for="pwd1">Blog</label>
                <div class="input-group mb-3">

                    <input type="text" name="blog" value="{{"$data->blog"}}" class="form-control" placeholder="Blog" aria-label="Password"
                           aria-describedby="basic-addon3">
                </div>
            </div>


            <div class="form-group">
                <label for="pwd1">Slug</label>
                <div class="input-group mb-3">

                    <input type="text" name="slug" value="{{"$data->slug"}}" class="form-control" placeholder="Slug" aria-label="Password"
                           aria-describedby="basic-addon3">
                </div>
            </div>
            <div class="form-group">
                <label>Status</label>
                <br>
                <select class="form-control select2" name="status" style="width: 100%">
                    <option selected="selected">{{"$data->status"}}</option>
                    <option>False</option>
                </select>
                <br>
            </div>
            <br>
            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update News</button>

        </form>

    </div>
</div>


</div>
</div>


@include('home._footer')
</body>
