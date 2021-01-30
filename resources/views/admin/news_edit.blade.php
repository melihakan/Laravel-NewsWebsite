@extends('layouts.admin')
@section('title','Admin Panel Home Page')
@section('javascript')

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection

@section('content')

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">News Edit </h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                        <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i
                                class="fa fa-plus-circle"></i> Create New
                        </button>
                    </div>
                </div>
            </div>
            <!--*******************************-->
            <div class="card body-primary">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Form with view only</h4>
                </div>
                <div class="card-body">
                    <div class="card">
                        <form class="form p-t-20" action="{{route('admin_news_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label >Parent</label>
                                <select class="form-control select2" name="category_id" style="width: 100%">
                                    @foreach($datalist as $rs)
                                        <option value="{{ $rs->id }}" @if($rs->id == $data->category_id) selected="selected" @endif>{{ $rs->title }}</option>
                                    @endforeach

                                </select>

                            </div>
                            <div class="form-group">
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

                                    <input type="file" name="image" class="form-control" placeholder="New" aria-label="Password"
                                           aria-describedby="basic-addon3">
                                    @if($rs->image)
                                        <img src = "{{Storage::url($rs->image)}}" height="60" alt="">
                                    @endif
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="pwd1">Detail</label>

                                <script>
                                    $(document).ready(function() {
                                        $('#summernote').summernote();
                                    });
                                </script>
                                <div class="input-group mb-3">

                                    <textarea id="summernote" name="detail" >{{"$data->detail"}}</textarea>
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
                                <select class="form-control select2" name="status" style="width: 100%">
                                    <option selected="selected">{{"$data->status"}}</option>
                                    <option>False</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update News</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection



