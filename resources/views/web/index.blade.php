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
                        <p>Our softwares are responsive, user friendly and geard towards providing solutions to your Business problems.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="icon">
                            <img src="{{ $web_source }}/img/svg_icon/2.svg" alt="">
                        </div>
                        <h3>Web development</h3>
                        <p>Our softwares are responsive, user friendly and geard towards providing solutions to your Business problems.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center wow fadeInRight" data-wow-duration="1.2s" data-wow-delay=".4s">
                        <div class="icon">
                            <img src="{{ $web_source }}/img/svg_icon/3.svg" alt="">
                        </div>
                        <h3>Mobile App</h3>
                        <p>Our softwares are responsive, user friendly and geard towards providing solutions to your Business problems.</p>
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
                        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">Tour function information without cross action media value quickly maximize timely deliverables.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="single_Portfolio wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="portfolio_thumb">
                            <img src="{{ $web_source }}/img/portfolio/1.png" alt="">
                        </div>
                        <div class="portfolio_hover">
                            <div class="title">
                                <span>App Design</span>
                                    <h3>Colorlib Mobile App</h3>
                                    <a class="boxed-btn3" href="portfolio_details.html">View</a>
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
                                <span>App Design</span>
                                    <h3>Colorlib Mobile App</h3>
                                    <a class="boxed-btn3" href="portfolio_details.html">View</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-lg-4">
                    <div class="single_Portfolio wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="portfolio_thumb">
                            <img src="{{ $web_source }}/img/portfolio/3.png" alt="">
                        </div>
                        <div class="portfolio_hover">
                            <div class="title">
                                <span>App Design</span>
                                    <h3>Colorlib Mobile App</h3>
                                    <a class="boxed-btn3" href="portfolio_details.html">View</a>
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
                                <span>App Design</span>
                                    <h3>Colorlib Mobile App</h3>
                                    <a class="boxed-btn3" href="portfolio_details.html">View</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-lg-4">
                    <div class="single_Portfolio wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
                        <div class="portfolio_thumb">
                            <img src="{{ $web_source }}/img/portfolio/5.png" alt="">
                        </div>
                        <div class="portfolio_hover">
                            <div class="title">
                                <span>App Design</span>
                                    <h3>Colorlib Mobile App</h3>
                                    <a class="boxed-btn3" href="portfolio_details.html">View</a>
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
                            <p class="mid_text wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">“Information is key.</p>
                            <p class="last_p wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">WUSOB TECHNOLOGIES is a full custom services firm. In achieving that, it’s our business to quickly adapt to meet our clients’ diverse needs… and we have a proven track record of doing just that.</p>
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

    <!-- team_member_start -->
    <div class="team_area ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-90">
                        <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">Our Creative Team</h3>
                        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">Tour function information without cross action media value quickly maximize timely deliverables.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single_team wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="team_thumb">
                            <img src="https://res.cloudinary.com/dnjoewu0k/image/upload/v1600468201/wusob/Homepage/team/1ee110db-f8f2-43ea-82ee-aa29f5d0828d-removebg-preview_jcndqa.png" alt="" class="wusa">
                            <div class="team_hover">
                                <div class="hover_inner text-center">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team_title text-center">
                            <h3>WUSA, I. Tadagbe</h3>
                            <p>Founder & C.E.O</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_team wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="team_thumb">
                            <img src="https://res.cloudinary.com/dnjoewu0k/image/upload/v1600903287/wusob/Homepage/team/WhatsApp_Image_2020-09-23_at_10.26.54_PM-removebg-preview_n9nm2k.png" alt="">
                            <div class="team_hover">
                                <div class="hover_inner text-center">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team_title text-center">
                            <h3>Confidence Ugolo</h3>
                            <p>Chief Technical Officer (CTO)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_team wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
                        <div class="team_thumb">
                            <img src="https://res.cloudinary.com/dnjoewu0k/image/upload/v1600465942/wusob/Homepage/team/IMG_0094-removebg-preview_cv6rgn.png" alt="">
                            <div class="team_hover">
                                <div class="hover_inner text-center">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team_title text-center">
                            <h3>Paul Emas</h3>
                            <p>Frontend Engineer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_team wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                        <div class="team_thumb">
                            <img src="https://res.cloudinary.com/dnjoewu0k/image/upload/v1600903689/wusob/Homepage/team/WhatsApp_Image_2020-09-20_at_8.54.47_PM-removebg-preview_psnyly.png" alt="">
                            <div class="team_hover">
                                <div class="hover_inner text-center">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team_title text-center">
                            <h3>Muyiwa Yombo</h3>
                            <p>Chief Financial Officer (C.F.O)</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="boxed-btn wow fadeIn" data-wow-duration="1s" data-wow-delay=".7s">View The Team </a>
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
                                        <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                                sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.  <br>
                                                Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                    <img src="{{ $web_source }}/img/testmonial/thumb.png" alt="">
                                            </div>
                                            <h3>Robert Thomson</h3>
                                            <span>Business Owner</span>
                                        </div>
                                    </div>
                        </div>
                        <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                        <div class="quote">
                                            <img src="{{ $web_source }}/img/testmonial/quote.svg" alt="">
                                        </div>
                                        <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                                sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.  <br>
                                                Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                    <img src="{{ $web_source }}/img/testmonial/thumb.png" alt="">
                                            </div>
                                            <h3>Robert Thomson</h3>
                                            <span>Business Owner</span>
                                        </div>
                                    </div>
                        </div>
                        <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                        <div class="quote">
                                            <img src="{{ $web_source }}/img/testmonial/quote.svg" alt="">
                                        </div>
                                        <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                                sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.  <br>
                                                Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                    <img src="{{ $web_source }}/img/testmonial/thumb.png" alt="">
                                            </div>
                                            <h3>Robert Thomson</h3>
                                            <span>Business Owner</span>
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
                        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">Tour function information without cross action media value quickly maximize timely deliverables.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
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
            </div>
        </div>
    </div>

@stop
