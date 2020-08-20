@extends('web.layouts.app1')
@section('title')
Blogs
@endsection
@section('content')
    <section class="ab-info-main py-md-5 py-5">
        <div class="container py-md-5 py-5">
            <div class="ab-info-grids pt-md-5 pt-0">
                <div class="blog-sec pt-md-3 pt-0">
                    <h3 class="tittle text-uppercase text-center mb-lg-5 mb-3 inner-tittle"><span class="sub-tittle">Recent </span> Blog Page</h3>
                    <div class="row mt-lg-5 mt-3">
                        <div class="col-lg-12">
                            <div class="card" data-aos="fade-up">
                                <img class="card-img-top" src="{{ asset('post_images/'.$post->image) }}" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="date"><span>
                                    By: Admin</span> {{ date('M d, Y',strtotime($post->created_at)) }}</h6>
                                    <h5 class="card-title"><a class="b-post text-dark" href="{{ url('/post/'.$post->id) }}">{!! $post->title !!}</a></h5>
                                    <p class="card-text">{!! $post->description !!}</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>


                            <div class="comment-top">
                                <h4>Comments</h4>
                                <div class="media">
                                    <img src="{{ $web_source }}/images/te1.jpg" alt="" class="img-fluid" />
                                    <div class="media-body">
                                        <h5 class="mt-0">Joseph Goh</h5>
                                        <p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. id dignissim sapien velit id felis ac cursus eros. Cras a ornare elit.</p>

                                        <div class="media mt-3">
                                            <a class="d-flex pr-3" href="#">
                                        <img src="{{ $web_source }}/images/te2.jpg" alt="" class="img-fluid" />
                                    </a>
                                            <div class="media-body" data-aos="fade-up">
                                                <h5 class="mt-0">Richard Spark</h5>
                                                <p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. id dignissim sapien velit id felis ac cursus eros. Cras a ornare elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-top contact">
                                <h4>Leave a Comment</h4>
                                <form name="contactform " id="contactform" method="post" action="#" onsubmit="return(validate());" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-lg-6" data-aos="fade-up">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" id="name" placeholder="Enter Email" name="email">
                                            </div>

                                        </div>
                                        <div class="col-lg-6" data-aos="fade-up">

                                            <div class="form-group">
                                                <label>Phone No.</label>
                                                <input type="text" class="form-control" id="phone" placeholder="Enter Phone no." name="phone">
                                            </div>
                                            <div class="form-group">
                                                <label>Subject</label>
                                                <input type="text" class="form-control" id="name" placeholder="Subject" name="subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" data-aos="fade-up">
                                        <label>How can we help?</label>
                                        <textarea name="issues" class="form-control" id="iq" placeholder="Enter Your Message Here"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
