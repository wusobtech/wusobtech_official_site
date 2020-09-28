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
                            <img src="{{ $web_source }}/img/svg_icon/1.svg" alt="">
                        </div>
                        <h3>Consulting Services</h3>
                        <p>We are actively involved in delivering consulting services across several IT fields. Our expertise in different IT subject
                            areas come to fore as we engage on new or existing IT fields.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="icon">
                            <img src="{{ $web_source }}/img/svg_icon/2.svg" alt="">
                        </div>
                        <h3>Business Applications</h3>
                        <p>Businesses need applications to drive their processes and operations. Our Business Applications offering
                            empowers any business to have off-the-shelf applications readily integrated or custom-built applications delivered in
                            record time</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".4s">
                        <div class="icon">
                            <img src="{{ $web_source }}/img/svg_icon/1.svg" alt="">
                        </div>
                        <h3>Hardware Platforms</h3>
                        <p>Hardware requirements are changing from the traditional physical servers to cloud based computer resources.  As the technology evolves, we continue to build optimum systems for Data Centre Infrastructure</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="icon">
                            <img src="{{ $web_source }}/img/svg_icon/3.svg" alt="">
                        </div>
                        <h3>Web development</h3>
                        <p>Our WebSites are responsive, user friendly and geard towards providing solutions to your Business problems.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center wow fadeInRight" data-wow-duration="1.2s" data-wow-delay=".4s">
                        <div class="icon">
                            <img src="{{ $web_source }}/img/svg_icon/3.svg" alt="">
                        </div>
                        <h3>Mobile App</h3>
                        <p>Apple iOS, Android, Mobile Applications and Software that are build to scale and perform better on low specification devices.</p>
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
                            <p class="mid_text wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">“Information is key"</p>
                            <p class="last_p wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">WUSOB TECHNOLOGIES is a full custom services firm. In achieving that, it’s our business to quickly adapt to meet our clients’ diverse needs… and we have a proven track record of doing just that.
                            <br>To support these solutions and extend our expertise, we constantly train resources to thoroughly
                            understand the solutions and come up with best of breed designs. Through rigorous testing in our laboratories and
                            software testbeds, we emulate these designs in controlled environments and build stable, ready-to-deploy solutions for
                            production environments.
                            </p>
                        </div>
                        <div class="video_watch d-flex align-items-center">
                            <!--  <div class="play_btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                <a href="https://www.youtube.com/watch?v=D7tF-cY2M9o" class="video_icon popup-video"> <i class="fa fa-play"></i> </a>
                            </div>
                            <span class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".7s"> Watch Video</span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop
