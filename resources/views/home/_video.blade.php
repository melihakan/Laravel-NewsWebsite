<!-- Start Youtube -->

<div class="youtube-area video-padding">

    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="video-items-active">

                    @foreach($slider as $rs)
                    <div class="video-items text-center">
                        <img src="{{Storage::url($rs->image)}} "style="width: 1100px;height: 300px" frameborder="0"></a>
                        <a href="{{route('news',['id'=>$rs->id,'slug'=>$rs->slug])}}"> <h3>{{$rs->title}}</h3></a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="video-info">
            <div class="row">
                <div class="col-lg-6">
                    <div class="video-caption">
                        <div class="top-caption">
                            <span class="color1">Politics</span>
                        </div>
                        <div class="bottom-caption">
                            <h2></h2>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testmonial-nav text-center">
                        <div class="single-video">


                        </div>
                        <div class="single-video">

                        </div>
                        <div class="single-video">

                        </div>
                        <div class="single-video">

                        </div>
                        <div class="single-video">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Start youtube -->

<!--  Recent Articles start -->
<div class="recent-articles">
    <div class="container">
        <div class="recent-wrapper">
            <!-- section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-30">
                        <h3>Recent Articles</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="recent-active dot-style d-flex dot-style">
                        <div class="single-recent mb-100">
                            <div class="what-img">
                                <img src="{{ asset('assets')}}/img/news/recent1.jpg" alt="">
                            </div>
                            <div class="what-cap">
                                <span class="color1">Night party</span>
                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                            </div>
                        </div>
                        @foreach($last as $rs)
                        <div class="single-recent mb-100">
                            <div class="what-img">
                                <img src="{{Storage::url($rs->image)}}" alt="">
                            </div>
                            <div class="what-cap">
                                <span class="color1">{{$rs->title}}</span>
                                <h4><a href="{{route('news',['id'=>$rs->id,'slug'=>$rs->slug])}}">{{$rs->title}}</a></h4>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Recent Articles End -->
<!--Start pagination -->
<div class="pagination-area pb-45 text-center">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="single-wrap d-flex justify-content-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-start">
                            <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow roted"></span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">01</a></li>
                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                            <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow right-arrow"></span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End pagination  -->
</main>
