@php
    $parentCategories = \App\Http\Controllers\HomeController::categoryList()
@endphp
<div class="header-area">
    <div class="main-header ">
        <div class="header-bottom header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                        <!-- sticky -->
                        <div class="sticky-logo">
                            <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-md-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li><a href="categori.html">Category</a></li>
                                    <li><a href="{{route('aboutus')}}">Aboutus</a></li>
                                    <li><a href="{{route('references')}}">References</a></li>
                                    <li><a href="{{route('fag')}}">FAQ</a></li>
                                    <li><a href="{{route('contact')}}">Contact</a></li>

                                    <li><a href="latest_news.html">Latest News</a></li>
{{--                                    <li><a href="contact.html">Contact</a></li>--}}
                                    <li><a href="#">Pages</a>
                                        <ul class="submenu">
                                            @foreach($parentCategories as $rs)
                                                <li><a href="elements.html">{{$rs->title}}</a></li>
{{--                                                <li><a href="blog.html">Blog</a></li>--}}
{{--                                                <li><a href="single-blog.html">Blog Details</a></li>--}}
{{--                                                <li><a href="details.html">Categori Details</a></li>--}}
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4">
                        <div class="header-right-btn f-right d-none d-lg-block">
                            <i class="fas fa-search special-tag"></i>
                            <div class="search-box">
                                <form action="#">
                                    <input type="text" placeholder="Search">

                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-md-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
