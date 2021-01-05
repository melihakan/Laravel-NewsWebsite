<html>
<head>
    <title>Image Gallery</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets')}}/admin/assets/images/favicon.png">
    <link href="{{ asset('assets')}}/admin/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="{{ asset('assets')}}/admin/assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('assets')}}/admin/dist/css/style.min.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{ asset('assets')}}/admin/dist/css/pages/dashboard1.css" rel="stylesheet">
</head>
</html>


            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">{{$data ->title}} </h4>
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
                        <form class="form p-t-20" action="{{route('admin_image_store',['news_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="pwd1">Title</label>
                                <div class="input-group mb-3">

                                    <input type="text" id="title" name="title" class="form-control" placeholder="Title" aria-label="Password"
                                           aria-describedby="basic-addon3">
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="pwd1">Image</label>
                                <div class="input-group mb-3">

                                    <input type="file" name="image" class="form-control" placeholder="New" aria-label="Password"
                                           aria-describedby="basic-addon3">
                                </div>
                            </div>


                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Add Image</button>



                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title(s)</th>
                                    <th>Images</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($images as $rs)

                                    <tr>
                                        <td>{{ $rs->id }}</td>
                                        <td>{{ $rs->title}}</td>
                                        <td>
                                            @if($rs->image)
                                                <img src = "{{Storage::url($rs->image)}}" height="60" alt="">
                                            @endif
                                        </td>
                                        <td><a href="{{route('admin_image_delete',['id' => $rs->id,'news_id'=>$data->id])}}" onclick="return confirm('Are You Sure ?')">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>


                        </form>
                    </div>
                </div>
            </div>






