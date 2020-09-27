@extends('web.layouts.app')
@section('title' , 'Our Services')
@section('content')
@include('web.includes.bread_crumb', ['title' => 'Our Services' , 'class' => 'bradcam_bg_1'])
    <!-- service_area  -->
    <div class="service_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-70">
                        <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s" >Services</span>
                        <h3 class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">Creativity has no Boundaries</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".4s">
                        <div class="icon">
                            <img src="img/svg_icon/1.svg" alt="">
                        </div>
                        <h3>Graphic design</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="icon">
                            <img src="img/svg_icon/2.svg" alt="">
                        </div>
                        <h3>Web design</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center wow fadeInRight" data-wow-duration="1.2s" data-wow-delay=".4s">
                        <div class="icon">
                            <img src="img/svg_icon/3.svg" alt="">
                        </div>
                        <h3>Mobile app</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ service_area  -->

    <div class="how_we_work_area extra_margin_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="work_info">
                        <div class="section_title">
                            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">How we work</h3>
                            <p class="mid_text wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">“Function information without cross action media value.</p>
                            <p class="last_p wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">Efficiently unleash cross-media tour function information without cross action media value. Quickly maximize timely deliverables for real-time schemas.</p>
                        </div>
                        <div class="video_watch d-flex align-items-center">
                            <div class="play_btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                <a href="https://www.youtube.com/watch?v=D7tF-cY2M9o" class="video_icon popup-video"> <i class="fa fa-play"></i> </a>
                            </div>
                           <span class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".7s"> Watch Video</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop
