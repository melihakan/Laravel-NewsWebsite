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

<section class="content">
    <!--*******************************-->

    <div class="card-body">
        <div class="card-header">
            <h3>User Roles </h3>
            @include('home.message')
        </div>


        <table id="myTable" class="table table-bordered table-striped">
            <td>
                <tr>
                    <th>ID</th>
                    <td>{{ $data->id }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ $data->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $data->email }}</td>
                </tr>
                <tr>
                    <th>Roles</th>
                    <td>
                        <table>
                            @foreach($data->roles as $row)
                                <tr>
                                    <td>{{$row->name}}</td>
                                    <td>-></td>
                                    <td>
                                        <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}}"
                                           onclick="return confirm('Delete! Are you sure ?')" style="color: red"> Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </td>
                </tr>
                <tr>
                    <th>Add Role</th>
                    <td>
                        <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id,])}}" method="post"
                              enctype="multipart/form-data">
                            @csrf

                            <select name="roleid">
                                @foreach($datalist as $rs)
                                    <option value="{{$rs->id}}">{{$rs->name}}</option>
                                @endforeach
                            </select>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Add Role

                                </button>
                            </div>
                        </form>
                    </td>
                </tr>
        </table>
    </div>
    </form>
    </div>
    </div>
</section>




