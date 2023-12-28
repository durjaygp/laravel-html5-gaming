@extends('homePage.master')
@section('title')
    Contact Us
@endsection
@section('content')
    <!-- contact-area -->
    <section class="contact-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pl-45">
                    <div class="section-title title-style-three mb-20">
                        <h2><span>CONTACT US</span></h2>
                    </div>
                    <div class="contact-info-list mb-40">
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i>{{$website->address}}</li>
                            <li><i class="fas fa-envelope"></i><a href="">{{$website->email}}</a></li>
                        </ul>
                    </div>
                    <div class="contact-form">
                        <form action="{{route('contact.save')}}" method="post">
                            @csrf
                            <textarea name="message" id="message" placeholder="Write Message..."></textarea>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" placeholder="Your Name" name="name">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" placeholder="Your Mail" name="email">
                                </div>
                            </div>
                            <button>SEND MESSAGE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->
@endsection
