@extends('homePage.master')
@section('title')
    Latest Games
@endsection
@section('content')
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
                </div>
                <div class="row">
                    @foreach($games as $row)
                        <div class="col-lg-4 col-md-6">
                            <div class="upcoming-game-item mb-40">
                                <div class="upcoming-game-head">
                                    <div class="uc-game-head-title">
                                        <span> {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $row->created_at)->format('M d, Y h:i A')}}</span>
                                        <h4><a href="{{route('game.details',['slug'=>$row->slug])}}">{{$row->name}}</a></h4>
                                    </div>
                                </div>
                                <div class="upcoming-game-thumb">
                                    <img src="{{asset($row->image)}}" alt="">
                                    <div class="upcoming-game-cart">
                                        <a href="{{route('game.details',['slug'=>$row->slug])}}" class="btn transparent-btn"><i class="fas fa-play-circle"></i>Play</a>
                                    </div>
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
@endsection
