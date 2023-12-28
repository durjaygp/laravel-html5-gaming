<aside class="blog-sidebar">
{{--    <div class="widget mb-45">--}}
{{--        <div class="sidebar-about">--}}
{{--            <div class="sidebar-about-thumb">--}}
{{--                <img src="{{asset('geco')}}/img/blog/sidebar_about_thumb.jpg" alt="">--}}
{{--            </div>--}}
{{--            <div class="sidebar-widget-title mb-15">--}}
{{--                <h4>ABOUT THE <span>AUTHOR</span></h4>--}}
{{--            </div>--}}
{{--            <div class="sidebar-about-content">--}}
{{--                <p>Donec orci enim, bibendum a augue quis, aliquet cursus quamPellentesq.</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="widget mb-45">
        <div class="sidebar-search">
            <form action="#">
                <input type="text" placeholder="Type and hit enter...">
                <button><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>
    @php
        $blogs = \App\Models\Blog::latest()->take(5)->get();
    @endphp
    <div class="widget mb-45">
        <div class="sidebar-widget-title mb-25">
            <h4>Recent <span>post</span></h4>
        </div>
        <div class="rc-post-list">
            <ul>
                @foreach($blogs as $row)
                <li>
                    <div class="rc-post-thumb">
                        <a href="#"><img src="{{asset($row->image)}}" alt="" class="img-fluid" width="150px" height="85px"></a>
                    </div>
                    <div class="rc-post-content">
                        <h5><a href="#">{{$row->name}}</a></h5>
                        <span>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $row->created_at)->format('M d, Y h:i A')}}</span>
                    </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>


</aside>
