
@extends('web.layouts.app')
@section('title' , 'Our Portfolio')
@section('content')
@include('web.includes.bread_crumb', ['title' => 'Our Portfolio' , 'class' => 'breadcam_bg_2'])

    <!-- portfolio_image_area  -->
    <div class="portfolio_image_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-90">
                        <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">Featured Works</h3>
                        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">Tour function information without cross action media value quickly maximize timely deliverables.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="single_Portfolio wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="portfolio_thumb">
                            <img src="{{ $web_source }}/img/portfolio/7.png" alt="">
                        </div>
                        <div class="portfolio_hover">
                            <div class="title">
                                <span>Mobile App Design</span>
                                    <h3>Frenzo</h3>
                                <!--    <a class="boxed-btn3" href="portfolio_details.html">View</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_Portfolio wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="portfolio_thumb">
                            <img src="{{ $web_source }}/img/portfolio/2.png" alt="">
                        </div>
                        <div class="portfolio_hover">
                            <div class="title">
                                <span>Website Design</span>
                                    <h3>Africa United Forum</h3>
                                <!--    <a class="boxed-btn3" href="portfolio_details.html">View</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-lg-4">
                    <div class="single_Portfolio wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="portfolio_thumb">
                            <img src="{{ $web_source }}/img/portfolio/1.png" alt="">
                        </div>
                        <div class="portfolio_hover">
                            <div class="title">
                                <span>Mobile App Design</span>
                                    <h3>Biometric Scanner and Register</h3>
                                <!--    <a class="boxed-btn3" href="portfolio_details.html">View</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-lg-4">
                    <div class="single_Portfolio wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                        <div class="portfolio_thumb">
                            <img src="{{ $web_source }}/img/portfolio/4.png" alt="">
                        </div>
                        <div class="portfolio_hover">
                            <div class="title">
                                <span>Ecommerce Website Design</span>
                                    <h3>Greener Norah</h3>
                                <!--    <a class="boxed-btn3" href="portfolio_details.html">View</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-lg-4">
                    <div class="single_Portfolio wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
                        <div class="portfolio_thumb">
                            <img src="{{ $web_source }}/img/portfolio/6.png" alt="">
                        </div>
                        <div class="portfolio_hover">
                            <div class="title">
                                <span>Software Design</span>
                                    <h3>Financial Software Solution</h3>
                                <!--    <a class="boxed-btn3" href="#">View</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ portfolio_image_area  -->

@stop
