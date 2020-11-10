@extends('web.layouts.app')
@section('title' , 'Home')
@section('content')
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
            <div class="container">
                <div class="row align-items-center justify-content-start">
                    <div class="col-lg-12 col-md-12">
                        <div class="slider_text">
                            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">
                                We make <br> Ideas a Reality.
                            </h3>
                            <a class="boxed-btn3 btn-header wow fadeIn"  data-wow-duration="1s" data-wow-delay=".2s" href="{{ route('portfolio') }}">Visit Our Works</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

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
                        <h3>Creative Design</h3>
                        <p>Our Competent and reliable Engineers are always ready to think through your ideas and bring it to fruition with creative designs. All for your Business success.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="icon">
                            <img src="{{ $web_source }}/img/svg_icon/2.svg" alt="">
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
                        <p>Apple iOS, Android, Mobile Applications and Software that are built to scale and perform better on low specification devices.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ service_area  -->

    <div class="about_area">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-5 offset-lg-1">
                    <div class="about_info">
                        <div class="section_title white_text">
                            <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">About Us</span>
                            <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">WUSOB TECHNOLOGIES LIMITED</h3>
                            <p class="mid_text wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">An IT firm that specializes in the provision of high quality computer software and training services worldwide. Our vision is to provide high quality computer software that meets the needs and expectations of our clients, at a very affordable price.</p>
                            <p class="last_text wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">“Our Software are affordable, easy to use and we also ensure that after we develop any software, we give our clients special training so that they can easily and effectively use the software"</p>
                            <a href="#" class="boxed-btn3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- portfolio_image_area  -->
    <div class="portfolio_image_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-90">
                        <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">Featured Works</h3>
                        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">Check out some of our works and solutions</p>
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

    <div class="how_we_work_area">
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

    <!-- team_member_start -->
    <div class="team_area ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-90">
                        <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">Our Creative Team</h3>
                        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">Consists of talented Engineers who share a love for programming</p>
                        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">Would you like to meet the team?</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <a href="{{route('aboutUs')}}" class="boxed-btn wow fadeIn" data-wow-duration="1s" data-wow-delay=".7s">Meet the Team</a> 
                </div>
            </div>
        </div>
    </div>
    <!--/ team_member_end -->

    <!-- testimonial_area  -->
    <div class="testimonial_area ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                        <div class="quote">
                                            <img src="{{ $web_source }}/img/testmonial/quote.svg" alt="">
                                        </div>
                                        <p>“Everybody should learn to program a computer,<br>
                                            because it teaches you how to think.” </p>
                                        <div class="testmonial_author">
                                            <h3>Steve Jobs</h3>
                                        </div>
                                </div>
                        </div>
                        <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                        <div class="quote">
                                            <img src="{{ $web_source }}/img/testmonial/quote.svg" alt="">
                                        </div>
                                        <p> “Learning to write programs stretches your mind, and helps you think better,<br>
                                            creates a way of thinking about things that I think is helpful in all domains.” </p>
                                        <div class="testmonial_author">
                                            <h3>Bill Gates</h3>
                                        </div>
                                    </div>
                        </div>
                        <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                        <div class="quote">
                                            <img src="{{ $web_source }}/img/testmonial/quote.svg" alt="">
                                        </div>
                                        <p>Every problem has a creative solution.</p>
                                        <div class="testmonial_author">
                                            <h3>Donna Karan</h3>    
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->

    <div data-scroll-index="0" class="get_in_tauch_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-90">
                        <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">Get in Touch</h3>
                        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">Whether you have a question about services, trials, pricing, need a demo, or anything else, our team is ready to answer all your questions. We will be glad to provide your software solutions at your convinience and affordable price. Just contact us and we'll revert. Thanks! </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <a href="{{route('contactUs')}}" class="boxed-btn wow fadeIn" data-wow-duration="1s" data-wow-delay=".7s">Contact Us</a> 
                </div>
                <!--    <div class="col-lg-8">
                    <div class="touch_form">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single_input wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                                        <input type="text" placeholder="Your Name" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_input wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                                        <input type="email" placeholder="Email" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_input wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                        <input type="email" placeholder="Subject" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_input wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                       <textarea name="" id="" cols="30" placeholder="Message" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="submit_btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
                                        <button class="boxed-btn3" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                -->
            </div>
        </div>
    </div>

@stop
