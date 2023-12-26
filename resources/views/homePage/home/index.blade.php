@extends('homePage.master')
@section('title')
    Home Page
@endsection
@section('content')
    <!-- slider-area -->
    <section class="slider-area slider-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="slider-content text-center">
                        <h6 class="wow fadeInDown" data-wow-delay=".2s">islands</h6>
                        <h2 class="tlt fix" data-in-effect="fadeInLeft">hunter <span>killer</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="2s">Find technology or people for digital projects in public sector and Find an individual specialist develope researcher.</p>
                        <a href="#" class="btn wow fadeInUp" data-wow-delay="2.2s">READ MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider-area-end -->

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

        <!-- about-us-area -->
        <section class="about-us-area pt-90 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 order-0 order-lg-2">
                        <div class="about-img">
                            <img src="{{asset('geco')}}/img/images/about_us_img.jpg" alt="">
                            <a href="https://www.youtube.com/watch?v=_LTiEXMc5J0" class="popup-video"><img src="{{asset('geco')}}/img/icon/play_btn.png"  alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-title title-style-two mb-45">
                            <span>about story</span>
                            <h2>Noob Dia <span>Paradiso</span> Tournament</h2>
                        </div>
                        <div class="about-content">
                            <p>Find technology or people for digital projects in public sector and Find an individual specialist develo researcher.</p>
                            <p>Consectur adipiscing elit, sed do eiusmod tempor incididunt labore dolore mana aliqua. Unimd minim venam quis nostrud
                                exercitation ullamco laboris nisi ut aliquip commodo cpsam.</p>
                            <div class="about-btn">
                                <a href="#" class="btn">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-us-area-end -->

    </div>
    <!-- area-bg-one-end -->
    <!-- blog-area -->
    <section class="blog-area pt-115 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title title-style-three text-center mb-70">
                        <h2>Latest News <span>Articles</span></h2>
                        <p>Compete with 100 players on a remote island for winner takes showdown
                            known issue where certain skin strategic</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-post blog-style-two mb-50">
                        <div class="blog-thumb mb-30">
                            <a href="#"><img src="{{asset('geco')}}/img/blog/s_blog_thumb01.jpg" alt=""></a>
                        </div>
                        <div class="blog-post-content">
                            <h4><a href="#">Shooter action video game</a></h4>
                            <div class="blog-meta">
                                <ul>
                                    <li><i class="far fa-clock"></i>July 4, 2020</li>
                                    <li><i class="fas fa-tag"></i><a href="#">Shooter</a></li>
                                </ul>
                            </div>
                            <p>Compete with 100 players on a remote island for winner takes showdown known for issue where
                                certain skin strategic [...]</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-post blog-style-two mb-50">
                        <div class="blog-thumb mb-30">
                            <a href="#"><img src="{{asset('geco')}}/img/blog/s_blog_thumb02.jpg" alt=""></a>
                        </div>
                        <div class="blog-post-content">
                            <h4><a href="#">multiplayer environments</a></h4>
                            <div class="blog-meta">
                                <ul>
                                    <li><i class="far fa-clock"></i>July 4, 2020</li>
                                    <li><i class="fas fa-tag"></i><a href="#">Shooter</a></li>
                                </ul>
                            </div>
                            <p>Compete with 100 players on a remote island for winner takes showdown known for issue where
                                certain skin strategic [...]</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-post blog-style-two mb-50">
                        <div class="blog-thumb mb-30">
                            <a href="#"><img src="{{asset('geco')}}/img/blog/s_blog_thumb03.jpg" alt=""></a>
                        </div>
                        <div class="blog-post-content">
                            <h4><a href="#">Bullet Force Multiplayer</a></h4>
                            <div class="blog-meta">
                                <ul>
                                    <li><i class="far fa-clock"></i>July 4, 2020</li>
                                    <li><i class="fas fa-tag"></i><a href="#">Shooter</a></li>
                                </ul>
                            </div>
                            <p>Compete with 100 players on a remote island for winner takes showdown known for issue where
                                certain skin strategic [...]</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area-end -->
@endsection
