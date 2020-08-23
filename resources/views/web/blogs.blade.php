@extends('web.layouts.app1')
@section('title')
Blogs
@endsection
@section('content')
    <section class="ab-info-main py-md-5 py-5">
        <div class="container py-md-5 py-5">
            <div class="ab-info-grids pt-md-5 pt-0">
                <div class="blog-sec pt-md-3 pt-3">
                    <h3 class="tittle text-uppercase text-center mb-lg-5 mb-3 inner-tittle"><span class="sub-tittle">Recent </span> Blog Posts</h3>
                    <div class="row mt-lg-5 mt-3">
                        <div class="col-lg-8 blog-left-content">
                            @foreach ($posts as $post)
                                <div class="card" data-aos="fade-up">
                                <a href="{{ route('blog_info' , ['id' => $post->id , 'slug' => $post->slug ]) }}"> <img class="card-img-top" src="{{ asset('post_images/'.$post->image) }}" alt=""></a>
                                    <div class="card-body">
                                        <h6 class="date"><span>
                                        By: Admin</span> {{ date('M d, Y',strtotime($post->created_at)) }}</h6>
                                        <h5 class="card-title"><a class="b-post text-dark" href="{{ route('blog_info',['id'=>$post->id,'slug'=>$post->slug])}}">{!! $post->title !!}</a></h5>

                                        <a class="btn btn-banner-w3layouts text-capitalize my-3" href="{{ route('blog_info',['id'=>$post->id,'slug'=>$post->slug])}}">Read</a>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                            @endforeach

                            <nav aria-label="Page navigation example mt-5">
                                <ul class="pagination">
                                    {!! $posts->links() !!}
                                </ul>
                            </nav>
                        </div>
                        <aside class="col-lg-4 blog-sldebar-right">
                            <div class="single-gd">
                                <img src="{{ $web_source }}/images/banner-w3layouts1.jpg" class="img-fluid" alt="">
                                <h4>Sign up to our newsletter</h4>
                                <form action="#" method="post">

                                    <input type="email" name="Email" placeholder="Email" required="">
                                    <div class="button">

                                        <input type="submit" value="Subscribe">

                                    </div>
                                </form>
                            </div>
                            <div class="single-gd tech-btm" data-aos="fade-down">
                                <h4>Top stories of the week </h4>
                                @foreach($mostpopular as $post)
                                    <div class="blog-grids">
                                        <div class="blog-grid-left">
                                            <a href="{{ route('blog_info',['id'=>$post->id,'slug'=>$post->slug])}}">
                                                <img src="{{ asset('post_images/'.$post->image) }}" class="img-fluid" alt="{{$post->title}}">
                                            </a>
                                        </div>
                                        <div class="blog-grid-right">

                                            <h5>
                                                <a href="{{ route('blog_info',['id'=>$post->id,'slug'=>$post->slug])}}">{{$post->title}}</a>
                                            </h5>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                @endforeach
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
