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
                    <h4 class="text-themecolor">User Edit </h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">User Page</li>
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
                        <form class="form p-t-20" action="{{route('admin_user_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="pwd1">Name</label>
                                <div class="input-group mb-3">

                                    <input type="text"  name="name" value="{{$data->name}}" class="form-control"
                                           aria-describedby="basic-addon3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pwd1">Email</label>
                                <div class="input-group mb-3">

                                    <input type="email"  name="email" value="{{$data->email}}" class="form-control"
                                           aria-describedby="basic-addon3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pwd1">Phone</label>
                                <div class="input-group mb-3">

                                    <input type="text" name="phone" value="{{$data->phone}}" class="form-control"
                                           aria-describedby="basic-addon3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pwd1">Address</label>
                                <div class="input-group mb-3">

                                    <input type="text" name="address" value="{{$data->address}}" class="form-control"
                                           aria-describedby="basic-addon3">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pwd1">Image</label>
                                <div class="input-group mb-3">

                                    <input type="file" name="image" class="form-control" placeholder="New"
                                           aria-describedby="basic-addon3">
                                    @if($data->profile_photo_path)
                                        <img src = "{{Storage::url($data->profile_photo_path)}}" height="60" alt="">
                                    @endif
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update News</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection



