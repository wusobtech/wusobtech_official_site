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
                                        <h5 class="card-title"><a class="b-post text-dark" href="single.html">{!! $post->title !!}</a></h5>
                                        <p class="card-text">
                                            {!! $post->description !!}
                                        </p>
                                        <a class="btn btn-banner-w3layouts text-capitalize my-3" href="single.html">Read More</a>
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
                            <div class="single-gd" data-aos="fade-up">
                                <h4>Our Progress</h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="single-gd tech-btm" data-aos="fade-down">
                                <h4>Top stories of the week </h4>
                                <div class="blog-grids">
                                    <div class="blog-grid-left">
                                        <a href="single.html">
                                    <img src="{{ $web_source }}/images/b1.jpg" class="img-fluid" alt="">
                                </a>
                                    </div>
                                    <div class="blog-grid-right">

                                        <h5>
                                            <a href="single.html">Pellentesque dui, non felis. Maecenas male</a>
                                        </h5>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="blog-grids">
                                    <div class="blog-grid-left">
                                        <a href="single.html">
                                    <img src="{{ $web_source }}/images/b2.jpg" class="img-fluid" alt="">
                                </a>
                                    </div>
                                    <div class="blog-grid-right">

                                        <h5>
                                            <a href="single.html">Pellentesque dui, non felis. Maecenas male</a>
                                        </h5>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="blog-grids">
                                    <div class="blog-grid-left">
                                        <a href="single.html">
                                    <img src="{{ $web_source }}/images/b3.jpg" class="img-fluid" alt="">
                                </a>
                                    </div>
                                    <div class="blog-grid-right">

                                        <h5>
                                            <a href="single.html">Pellentesque dui, non felis. Maecenas male</a>
                                        </h5>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>

                            </div>
                            <div class="single-gd">
                                <h4>Accordion example</h4>
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Collapsible Group Item #1
                                        </button>
                                            </h5>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Collapsible Group Item #2
                                        </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Collapsible Group Item #3
                                        </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                                Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
