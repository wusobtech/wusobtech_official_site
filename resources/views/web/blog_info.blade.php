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
                                    <div class="social-link">
                                        <span> <i class="fa fa-link"></i> Share Post: </span>
                                        @foreach($post->social_links as $platform)
                                             <a href="{{$platform['shareUrl']}}" target="{{$platform['shareIn']}}"> <i class="{{$platform['logo']}}"></i></a>
                                        @endforeach
                                    </div>
                                    <p class="card-text">{!! $post->description !!}</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>


                            <div class="comment-top">
                                <h4>Comments on Post (<span class="comment_count">{{$post->comments->count()}}</span> )</h4>
                                @foreach($comments as $comment)
                                        <div class="media" id="comment-{{$comment->id}}">
                                            <img src="{{ $web_source }}/images/avatar.png" alt="" class="img-fluid" />
                                            <div class="media-body">
                                                <h5 class="mt-0">{{ $comment->name}}</h5>
                                                {{ $comment->body }}
                                                <hr>Posted:{{ date('M d, Y',strtotime($comment->created_at))}}<hr>
                                            </div>
                                        </div>
                                @endforeach
                            </div>
                            <div class="comment-top contact">
                                <h4>Leave a Comment</h4>
                                <div id="form_field" class=""></div>
                                <form name="contactform " id="comment_form" method="post" action="{{ route('make_comment') }}">@csrf
                                    <div class="row">
                                        <input type="hidden" name="blog_id"  value="{{$post->id}}" required>
                                        <div class="col-lg-6" data-aos="fade-up">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group" data-aos="fade-up">
                                        <label>Comment</label>
                                        <textarea class="form-control" name="body" id="comment_field"  placeholder="Enter Your Message Here" required></textarea>
                                    </div>
                                    <button type="submit" id="comment_btn" class="btn btn-primary">Submit</button>
                                </form>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
