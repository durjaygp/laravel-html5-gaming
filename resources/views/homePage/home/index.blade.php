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
                    $games = \App\Models\Game::whereStatus(1)->take(15)->get();
                    @endphp
                </div>
                <div class="row">
                    @foreach($games as $row)
                        <div class="col-lg-4 col-md-6">
                            <div class="upcoming-game-item mb-40">
                                <div class="upcoming-game-head">
                                    <div class="uc-game-head-title">
                                        <span>SEPTEMBER 22, 2020</span>
                                        <h4><a href="#">{{$row->name}}</a></h4>
                                    </div>
                                </div>
                                <div class="upcoming-game-thumb">
                                    <img src="{{asset($row->image)}}" alt="">
                                    <div class="upcoming-game-cart">
                                        <a href="#" class="btn transparent-btn"><i class="fas fa-play-circle"></i>Play</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text-center">
                    <a href="#" class="btn wow fadeInUp m-3" data-wow-delay="1s" style="visibility: visible; animation-delay: 2.2s; animation-name: fadeInUp;">MORE GAMES</a>
                </div>

            </div>
        </section>
        <!-- latest-games-area-end -->
    </div>
    <!-- area-bg-one-end -->

@endsection
