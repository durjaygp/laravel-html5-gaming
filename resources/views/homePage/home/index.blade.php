@extends('homePage.master')
@section('title')
    Home Page
@endsection
@section('content')
    <!-- banner-area -->
    @php
        $blogs = \App\Models\Blog::latest()->whereStatus(1)->take(5)->get();
    @endphp
    <section class="home-six-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-content">
                        <h2 class="title-one">gaming</h2>
                        <h3 class="title-two">world class <span>Blog</span></h3>
                    </div>
                    <div class="banner-news-heading">
                        <div class="headline">
                            <h5>Latest <span>News</span></h5>
                        </div>
                        <div class="social-link">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="banner-magazine-active">
                        @foreach($blogs as $row)
                        <div class="banner-magazine-item red">
                            <div class="banner-magazine-thumb">
                                <img src="{{asset($row->image)}}" alt="">
                            </div>
                            <div class="banner-magazine-content">
                                <span class="date">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $row->created_at)->format('M d, Y h:i A')}}</span>
                                <h5 class="title"><a href="{{route('home.blogDetails',$row->slug)}}">{{$row->name}}</a></h5>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-area-end -->
    <!-- area-bg-one -->
    <div class="area-bg-one">
        <!-- latest-games-area -->
        <section class="latest-games-area pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <div class="section-title mb-50">
                            <h2>LATEST <span>Games</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @php
                    $games = \App\Models\Game::whereStatus(1)->get();
                    @endphp
                    @foreach($games as $row)
                    <div class="col-md-4">
                        <div class="latest-games-items mb-30">
                            <div class="latest-games-thumb">
                                <a href="#"><img src="{{asset($row->image)}}" alt=""></a>
                            </div>
                            <div class="latest-games-content">
                                <h4><a href="{{$row->link}}">{{$row->name}}</a></h4>
                                <p>entry fee : <span>free</span></p>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </section>
        <!-- latest-games-area-end -->
    </div>
    <!-- area-bg-one-end -->
    <!-- blog-area -->
    @php
    $blogs = \App\Models\Blog::latest()->whereStatus(1)->take(3)->get();
    @endphp
    <section class="blog-area pt-115 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title title-style-three text-center mb-70">
                        <h2>Latest News <span>Articles</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($blogs as $row)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-post blog-style-two mb-50">
                            <div class="blog-thumb mb-30">
                                <a href="{{route('home.blogDetails',$row->slug)}}"><img src="{{asset($row->image)}}" alt=""></a>
                            </div>
                            <div class="blog-post-content">
                                <h4><a href="{{route('home.blogDetails',$row->slug)}}">{{$row->name}}</a></h4>
                                <div class="blog-meta">
                                    <ul>
                                        <li><i class="far fa-clock"></i>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $row->created_at)->format('M d, Y h:i A')}}</li>
                                    </ul>
                                </div>
                                <p>{{\Illuminate\Support\Str::limit($row->description, 90)}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- blog-area-end -->
@endsection
