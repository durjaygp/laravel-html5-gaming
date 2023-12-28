@extends('homePage.master')
@section('title')
{{$blog->name}}
@endsection
@section('content')
    <!-- blog-area -->
    <section class="blog-area primary-bg pt-120 pb-175">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-list-post blog-details-wrap">
                        <div class="blog-list-post-content">
                            <img src="{{asset($blog->image)}}" alt="" class="img-fluid">
                            <div class="blog-list-post-tag mb-25">
                            </div>
                            <h2>{{$blog->name}}</h2>
                            <div class="blog-meta">
                                <ul>
                                    <li>bY <a href="#">{{$blog->user->name}}</a>
                                        {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $blog->created_at)->format('M d, Y h:i A')}}</li>
                                </ul>
                            </div>
                            <p>{{$blog->description}}</p>
                            <p>{{$blog->main_content}}</p>
                        </div>
                    </div>
                    <div class="blog-comment mb-75">
                        <div class="sidebar-widget-title blog-details-title mb-35">
                            <h4>COMMENTS <span>({{$comments->count()}})</span></h4>
                        </div>
                        <ul>
                            @foreach($comments as $row)
                                <li>
                                    <div class="comment-avatar-thumb">
                                        <img src="{{asset('geco')}}/img/blog/comment_thumb01.jpg" alt="">
                                    </div>
                                    <div class="comment-text">
                                        <div class="comment-avatar-info">
                                            <h4><a href="#">{{$row->user->name}}</a><span class="comment-time">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $blog->created_at)->format('M d, Y h:i A')}}</span></h4>
                                        </div>
                                        <p>{{$row->comment}}</p>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                    @if(auth()->check())
                        <div class="comment-reply-box">
                            <div class="sidebar-widget-title blog-details-title mb-35">
                                <h4>LEAVE A <span>COMMENT</span></h4>
                            </div>
                            <form action="{{ route('comment.save') }}" class="comment-form" method="post">
                                @csrf
                                <textarea name="comment" id="comment-message" placeholder="Your Comment"></textarea>
                                <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                <button class="btn btn-style-two">Submit</button>
                            </form>
                        </div>
                    @else
                        <div class="comment-reply-box">
                            <div class="sidebar-widget-title blog-details-title mb-35">
                                <h4>Please <a href="{{ route('login') }}"><span>Login</span></a> for <span>COMMENT</span></h4>
                            </div>
                        </div>
                    @endauth


                </div>

                <div class="col-lg-4">
                    @include('homePage.blog.sidebar')
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area-end -->
@endsection
