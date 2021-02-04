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
            <h3>Review Detail</h3>
            @include('home.message')
        </div>
        <form class="form p-t-20" action="{{route('admin_review_update',['id'=>$data->id])}}" method="post"
              enctype="multipart/form-data">
            @csrf
            <table id="myTable" class="table table-bordered table-striped">
                <td>
                    <tr>
                        <th>ID</th>
                        <td>{{ $data->id }}</td>
                    </tr>
                <th>Name</th>
                <td>{{ $data->user->name }}</td>
                </tr>
                <tr>
                    <th>News</th>
                    <td>{{ $data->news->title }}</td>
                </tr>
                <tr>
                    <th>Subject</th>
                    <td>{{ $data->subject }}</td>
                </tr>
                <tr>
                    <th>Reviews</th>
                    <td>{{ $data->review }}</td>
                <tr>
                <tr>
                    <th>Ip</th>
                    <td>{{ $data->IP }}</td>
                <tr>
                <tr>
                    <th>Created Date</th>
                    <td>{{ $data->created_at }}</td>
                <tr>
                <tr>
                    <th>Updated Date</th>
                    <td>{{ $data->updated_at }}</td>
                <tr>
                </tr>
                <th>Status</th>
                <td>
                    <select name="status">
                        <option selected>{{$data->status}}</option>
{{--                        <option selected>{{$data->status}}</option> Data geliyor Sorun yok--}}
                        <option>True</option>
                        <option>False</option>
                    </select>
                </td>
                <tr>
                    <td></td>
                    <td>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update
                                Review
                            </button>
                        </div>
                    </td>
                </tr>
            </table>
    </div>
    </form>
    </div>
    </div>
</section>




