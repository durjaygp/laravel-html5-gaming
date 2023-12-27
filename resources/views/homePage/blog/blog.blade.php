@extends('homePage.master')
@section('title')
    Blog
@endsection
@section('content')
    <!-- blog-area -->
    <section class="blog-area primary-bg pt-120 pb-175">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @foreach($blogs as $row)
                        <div class="blog-list-post">
                            <div class="blog-list-post-thumb">
                                <a href="{{route('home.blogDetails',$row->slug)}}"><img src="{{asset($row->image)}}" alt=""></a>
                            </div>
                            <div class="blog-list-post-content">
                                <h2><a href="#">{{$row->name}}</a></h2>
                                <div class="blog-meta">
                                    <ul>
                                        <li>bY <a href="#">{{$row->user->name}}</a> {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $row->created_at)->format('M d, Y h:i A')}}</li>
                                    </ul>
                                </div>
                                <p>{{$row->description}}</p>
                            </div>
                            <div class="blog-list-post-bottom">
                                <ul>
                                    <li><a href="{{route('home.blogDetails',$row->slug)}}">more reding<i class="fas fa-angle-double-right"></i></a></li>
                                    <li>
                                        <span>SHARE :</span>
                                        <div class="blog-post-share">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
{{--                    <div class="pagination-wrap mt-60">--}}
{{--                        <ul>--}}
{{--                            <li><a href="#">first</a></li>--}}
{{--                            <li><a href="#">1</a></li>--}}
{{--                            <li><a href="#">2</a></li>--}}
{{--                            <li><a href="#">next</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>
                <div class="col-lg-4">
                    @include('homePage.blog.sidebar')
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area-end -->
@endsection
