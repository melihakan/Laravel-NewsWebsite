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
                    <h4 class="text-themecolor">Settings Edit </h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                        <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i
                                class="fa fa-plus-circle"></i> Create Setting
                        </button>
                    </div>
                </div>
            </div>

            <div class="content">


                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <ul class="nav nav-pills m-t-30 m-b-30">
                                <li class=" nav-item"> <a href="#navpills-1" class="nav-link active" data-toggle="tab" aria-expanded="false">General</a> </li>
                                <li class="nav-item"> <a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false">Smtp Email</a> </li>
                                <li class="nav-item"> <a href="#navpills-3" class="nav-link" data-toggle="tab" aria-expanded="true">Social Media</a> </li>
                                <li class="nav-item"> <a href="#navpills-4" class="nav-link" data-toggle="tab" aria-expanded="true">About Us</a> </li>
                                <li class="nav-item"> <a href="#navpills-5" class="nav-link" data-toggle="tab" aria-expanded="true">Contact Page</a> </li>
                                <li class="nav-item"> <a href="#navpills-6" class="nav-link" data-toggle="tab" aria-expanded="true">References</a> </li>
                            </ul>
                            <div class="tab-content br-n pn">
                                <div id="navpills-1" class="tab-pane active">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <div class="card">
                                                    <form class="form p-t-20" action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                                                        @csrf

                                                        <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control"
                                                               aria-describedby="basic-addon3">
                                                        <div class="form-group">
                                                            <label for="pwd1">Title</label>
                                                            <div class="input-group mb-3">

                                                                <input type="text" id="title" name="title" value="{{$data->title}}" class="form-control" placeholder="Title"
                                                                       aria-describedby="basic-addon3">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pwd1">Keywords</label>
                                                            <div class="input-group mb-3">

                                                                <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control" placeholder="Keywords"
                                                                       aria-describedby="basic-addon3">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pwd1">Description</label>
                                                            <div class="input-group mb-3">

                                                                <input type="text" name="description" value="{{$data->description}}" class="form-control" placeholder="Description"
                                                                       aria-describedby="basic-addon3">
                                                            </div>
                                                        </div>


                                                        <div class="form-group">
                                                            <label for="pwd1">Company</label>
                                                            <div class="input-group mb-3">

                                                                <input type="text" name="company" value="{{$data->company}}" class="form-control" placeholder="Company"
                                                                       aria-describedby="basic-addon3">
                                                            </div>
                                                        </div>


                                                        <div class="form-group">
                                                            <label for="pwd1">Address</label>
                                                            <div class="input-group mb-3">

                                                                <input type="text" name="address" value="{{$data->address}}" class="form-control" placeholder="Address"
                                                                       aria-describedby="basic-addon3">
                                                            </div>
                                                        </div>


                                                        <div class="form-group">
                                                            <label for="pwd1">Phone</label>
                                                            <div class="input-group mb-3">

                                                                <input type="number" name="phone" value="{{$data->phone}}" class="form-control" placeholder="Phone"
                                                                       aria-describedby="basic-addon3">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pwd1">Fax</label>
                                                            <div class="input-group mb-3">

                                                                <input type="text" name="fax" value="{{$data->fax}}" class="form-control" placeholder="Fax"
                                                                       aria-describedby="basic-addon3">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pwd1">Email</label>
                                                            <div class="input-group mb-3">

                                                                <input type="text" name="email" value="{{$data->email}}" class="form-control" placeholder="Email"
                                                                       aria-describedby="basic-addon3">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Status</label>
                                                            <select class="form-control select2" name="status" style="width: 100%">
                                                                <option selected="selected">{{"$data->status"}}</option>
                                                                <option>True</option>


                                                            </select>
                                                        </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="navpills-2" class="tab-pane">
                                    <div class="row">
                                        <div class="col-md-8">   <div class="form-group">
                                                <label for="pwd1">Smtpserver</label>
                                                <div class="input-group mb-3">

                                                    <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control" placeholder="Smtpserver"
                                                           aria-describedby="basic-addon3">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="pwd1">Smtpemail</label>
                                                <div class="input-group mb-3">

                                                    <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control" placeholder="Smtpemail"
                                                           aria-describedby="basic-addon3">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="pwd1">Smtppassword</label>
                                                <div class="input-group mb-3">

                                                    <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control" placeholder="Smtppassword"
                                                           aria-describedby="basic-addon3">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="pwd1">Smtpport</label>
                                                <div class="input-group mb-3">

                                                    <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control" placeholder="Smtpport"
                                                           aria-describedby="basic-addon3">
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                                <div id="navpills-3" class="tab-pane">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="pwd1">Facebook</label>
                                                <div class="input-group mb-3">

                                                    <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control" placeholder="Facebook"
                                                           aria-describedby="basic-addon3">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="pwd1">Instagram</label>
                                                <div class="input-group mb-3">

                                                    <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control" placeholder="Instagram"
                                                           aria-describedby="basic-addon3">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="pwd1">Twitter</label>
                                                <div class="input-group mb-3">

                                                    <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control" placeholder="Twitter"
                                                           aria-describedby="basic-addon3">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="pwd1">Youtube</label>
                                                <div class="input-group mb-3">

                                                    <input type="text" name="youtube" value="{{$data->youtube}}" class="form-control" placeholder="Youtube"
                                                           aria-describedby="basic-addon3">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div id="navpills-4" class="tab-pane">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="pwd1">Aboutus</label>
                                                <div class="input-group mb-3">
                                                    <textarea id="aboutus" name="aboutus" >{{"$data->aboutus"}}</textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div id="navpills-5" class="tab-pane">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="pwd1">Contact</label>
                                                <div class="input-group mb-3">
                                                    <textarea id="contact" name="contact" >{{"$data->contact"}}</textarea>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div id="navpills-6" class="tab-pane">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="pwd1">References</label>
                                                <div class="input-group mb-3">
                                                    <textarea id="references" name="references" >{{"$data->references"}}</textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <script>
                                    $(document).ready(function() {
                                        $('#aboutus').summernote();
                                        $('#contact').summernote();
                                        $('#references').summernote();

                                    });
                                </script>
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update News</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>






                            <!--*******************************-->
            <div class="card body-primary">














                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection



