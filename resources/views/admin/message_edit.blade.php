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
            <h3>Message Detail</h3>
            @include('home.message')
        </div>
        <form class="form p-t-20" action="{{route('admin_message_update',['id'=>$data->id])}}" method="post"
              enctype="multipart/form-data">
            @csrf
            <table id="myTable" class="table table-bordered table-striped">
                <td>
                    <tr>
                        <th>ID</th>
                        <td>{{ $data->id }}</td>
                    </tr>
                <th>Name</th>
                <td>{{ $data->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $data->email }}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{ $data->phone }}</td>
                </tr>
                <tr>
                    <th>Subject</th>
                    <td>{{ $data->subject }}</td>
                </tr>
                <tr>
                    <th>Messages</th>
                    <td>{{ $data->message }}</td>
                <tr>
                </tr>
                <th>Admin Note</th>
                <td>
                    <textarea id="note" name="note">{{ $data->note }}</textarea>
                </td>
                <tr>
                    <td></td>
                    <td>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update
                                News
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




