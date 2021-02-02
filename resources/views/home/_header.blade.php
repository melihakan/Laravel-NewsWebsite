@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp

<!DOCTYPE html>
<html>
<head>
    <style>
#myHeader {

padding-left: 300px;


}

    </style>
<header>

    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top black-bg d-none d-md-block">
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>
                                    @if ($setting->twitter != null) <a href="{{$setting->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a> @endif
                                    @if ($setting->instagram != null) <a href="{{$setting->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a> @endif
                                    <li> <a href="#"><i class="fab fa-pinterest-p"></i></a></li>

                                </ul>
                            </div>

                            <div class="header-info-right">
                                <ul class="header-social">
                                    <li class="nav-item dropdown ">
                                        @auth
                                        <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href=""  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class='fas fa-user-circle' style='font-size:20px'></i><span class="hidden-md-down">{{Auth::user()->name}}</span> </a>
                                        <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                            <!-- text-->
                                            <a href="{{route('myprofile')}}" class="dropdown-item" style="color: black"> My Profile</a>
                                            <!-- text-->

                                            <a href="javascript:void(0)" class="dropdown-item" style="color: black"> Account Setting</a>
                                            <!-- text-->
                                            <div class="dropdown-divider"></div>
                                            <!-- text-->
                                            <a href="{{route('logout')}}" class="dropdown-item" style="color: black"> Logout</a>
                                            <!-- text-->

                                        @endauth
                                        @guest
                                                <li><a href="{{route('login')}}" class="dropdown-item" style="color: white">Login</a></li>
                                                <li><a href="{{route('register')}}" class="dropdown-item" style="color: white">Join</a></li>

                                        @endguest
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-mid d-none d-md-block">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <div class="logo">
                                <a href="{{route('home')}}"><img src="{{ asset('assets')}}/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="header-banner f-right ">
                                <img src="{{ asset('assets')}}/img/hero/header_card.jpg" alt="">
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            @include('home._category')
        </div>
    </div>
    <!-- Header End -->

</header>
</html>
