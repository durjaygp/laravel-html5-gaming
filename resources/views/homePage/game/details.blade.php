@extends('homePage.master')
@section('title')
{{$game->name}}
@endsection
@section('content')
    <!-- breadcrumb-area -->
    <div class="breadcrumb-area breadcrumb-bg game-overview-breadcrumb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-6">
                    <div class="game-overview-img">
                        <img src="{{asset($game->image)}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-xl-8 col-lg-6">
                    <div class="breadcrumb-content text-center text-lg-left pl-80">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{route('games.home')}}">Game</a></li>
                            </ol>
                        </nav>
                        <h2>{{$game->name}} <span>2020</span></h2>
                        <a href="{{$game->link}}" class="btn btn-style-two">play now</a>
                        <form action="{{route('favorite.save')}}" method="post">
                            @csrf
                            <input type="hidden" name="game_id" value="{{$game->id}}">
                            <div class="m-1">
                                <button type="submit" href="{{$game->link}}" class="btn btn-style-three">Add To Favorite list</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- game-single-area -->
    <section class="game-single-area pt-120 pb-180">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="game-single-content game-overview-content">
                        <p>{!! $game->description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- game-single-area-end -->
@endsection
