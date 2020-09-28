
@extends('web.layouts.app')
@section('title' , 'About Us')
@section('content')
@include('web.includes.bread_crumb', ['title' => 'About Us' , 'class' => 'bradcam_bg_1'])    <!-- slider_area_start -->


    <div class="our_mission_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mission_text">
                        <h4>Our Mission</h4>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="mision_info">
                        <div class="single_mission">
                            <p>“To work with our clients in proposing an optimum and highly efficient solution required to
                                specifically meet their business needs”</p>
                        </div>
                        <div class="single_mission">
                            <p>“To build a clientele of highly satisfied customers around Africa, Europe and America region
who work with us as their preferred IT Consultants”</p>
                        </div>
                        <div class="single_mission">
                            <p>Efficiently train and mentor reputable developers for the oustide world.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about_area">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-5 offset-lg-1">
                    <div class="about_info">
                        <div class="section_title white_text">
                            <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">About Us</span>
                            <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">IT consulting and Software Development</h3>
                            <p class="mid_text wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Currently registered in Nigeria and operating from the above address. We’re confident that our staff of
                                experienced professionals can be a valuable to your needs of having your own custom made software solutions.
                                You have absolute right over your codes 100%. Yes that we can assure you!</p>
                            <p class="last_text wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">The information contained here Only provides you with a brief introduction
                                to who we are, what we do, and how WUSOB TECHNOLOGIES products and
                               services can be of value to your business and to you individually. For the accomplishment of this, we present an overview
                               of our services, highlight our capabilities, and offer some brief examples of our experience.</p>
                            <a href="{{route('portfolio')}}" class="boxed-btn3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">Our Portfolio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--
    <div class="how_we_work_area extra_margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="work_info">
                        <div class="section_title">
                            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">How we work</h3>
                            <p class="mid_text wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">“Function information without cross action media value.</p>
                            <p class="last_p wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">Efficiently unleash cross-media tour function information without cross action media value. Quickly maximize timely deliverables for real-time schemas.</p>
                        </div>
                        {{--}}
                        <div class="video_watch d-flex align-items-center">
                            <div class="play_btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                <a href="https://www.youtube.com/watch?v=D7tF-cY2M9o" class="video_icon popup-video"> <i class="fa fa-play"></i> </a>
                            </div>
                           <span class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".7s"> Watch Video</span>
                        </div>
                        {{--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
    <!-- team_member_start -->
    <div class="team_area ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-90">
                        <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">Our Creative Team</h3>
                        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">Consists of talented Engineers who share a love for programming</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-lg-3 col-md-6">
                    <div class="single_team wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="team_thumb">
                            <img src="https://res.cloudinary.com/wusobtech-com/image/upload/v1601234416/wusob_bod/wusa_ga8jtg.png" alt="" class="wusa">
                            <div class="team_hover">
                                <div class="hover_inner text-center">
                                    <ul>
                                        <li><a href="https://web.facebook.com/tadgbe"  target="_blank"> <i class="fa fa-facebook"></i> </a></li>
                                        <li><a href="https://twitter.com/tad_wusa" target="_blank"> <i class="fa fa-twitter"></i> </a></li>
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
                            <img src="https://res.cloudinary.com/wusobtech-com/image/upload/v1601234416/wusob_bod/confidence_mwhlhq.png" alt="">
                            <div class="team_hover">
                                <div class="hover_inner text-center">
                                    <ul>
                                        <li><a href="https://www.facebook.com/fejiro.ugolo" target="_blank"> <i class="fa fa-facebook"></i> </a></li>
                                        <li><a href="https://www.instagram.com/confi.fejiro/" target="_blank"> <i class="fa fa-instagram"></i> </a></li>
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
                    <div class="single_team wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                        <div class="team_thumb">
                            <img src="https://res.cloudinary.com/wusobtech-com/image/upload/v1601234417/wusob_bod/muyiwa_mxmzgy.png" alt="">
                            <div class="team_hover">
                                <div class="hover_inner text-center">
                                    <ul>
                                        <li><a href="https://www.instagram.com/muyi_waaaa/" target="_blank"> <i class="fa fa-instagram"></i> </a></li>
                                        <li><a href="https://twitter.com/god_mog" target="_blank"> <i class="fa fa-twitter"></i> </a></li>
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
                <div class="col-lg-3 col-md-6">
                    <div class="single_team wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
                        <div class="team_thumb">
                            <img src="https://res.cloudinary.com/wusobtech-com/image/upload/v1601249513/wusob_bod/mishael_ekromu.png" alt="">
                            <div class="team_hover">
                                <div class="hover_inner text-center">
                                    <ul>
                                        <li><a href="http://linkedin.com/in/mishael-abiola-nonymousray" target="_blank"> <i class="fa fa-linkedin"></i> </a></li>
                                        <li><a href="https://www.instagram.com/nonymous.ray" target="_blank"> <i class="fa fa-instagram"></i> </a></li>
                                        <li><a href="https://twitter.com/woroumishael"  target="_blank"> <i class="fa fa-twitter"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team_title text-center">
                            <h3>Abiola Mishael</h3>
                            <p>Chief Operations Officer (COO)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_team wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
                        <div class="team_thumb">
                            <img src="https://res.cloudinary.com/wusobtech-com/image/upload/v1601234417/wusob_bod/paul_ekf5v5.png" alt="">
                            <div class="team_hover">
                                <div class="hover_inner text-center">
                                    <ul>
                                        <li><a href="https://www.instagram.com/paul.emas/" target="_blank"> <i class="fa fa-instagram"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team_title text-center">
                            <h3>Paul Emas</h3>
                            <p>Frontend Director</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_team wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                        <div class="team_thumb">
                            <img src="https://res.cloudinary.com/wusobtech-com/image/upload/v1601249964/wusob_bod/tope_ahl2or.png" alt="">
                            <div class="team_hover">
                                <div class="hover_inner text-center">
                                    <ul>
                                        <li><a href="https://www.instagram.com/tees_qode/" target="_blank"> <i class="fa fa-instagram"></i> </a></li>
                                        <li><a href="https://twitter.com/tees_qode" target="_blank"> <i class="fa fa-twitter"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team_title text-center">
                            <h3>Olotu Tope</h3>
                            <p>Backend Director</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_team wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                        <div class="team_thumb">
                            <img src="https://res.cloudinary.com/wusobtech-com/image/upload/v1601248928/wusob_bod/danny_tyjzru.png" alt="">
                            <div class="team_hover">
                                <div class="hover_inner text-center">
                                    <ul>
                                        <li><a href="https://www.instagram.com/justchisom_/" target="_blank"> <i class="fa fa-instagram"></i> </a></li>
                                        <li><a href="https://twitter.com/niel_som" target="_blank"> <i class="fa fa-twitter"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team_title text-center">
                            <h3>Ikokoh Daniel</h3>
                            <p>COntent Manager Director</p>
                        </div>
                    </div>
                </div>
               <!-- <a href="#" class="boxed-btn wow fadeIn" data-wow-duration="1s" data-wow-delay=".7s">View The Team </a> -->
            </div>
        </div>
    </div>
    <!--/ team_member_end -->

    <!-- testimonial_area  -->
    <!--
    <div class="testimonial_area extra_margin_buttom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                        <div class="quote">
                                            <img src="img/testmonial/quote.svg" alt="">
                                        </div>
                                        <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                                sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.  <br>
                                                Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                    <img src="img/testmonial/thumb.png" alt="">
                                            </div>
                                            <h3>Robert Thomson</h3>
                                            <span>Business Owner</span>
                                        </div>
                                    </div>
                        </div>
                        <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                        <div class="quote">
                                            <img src="img/testmonial/quote.svg" alt="">
                                        </div>
                                        <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                                sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.  <br>
                                                Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                    <img src="img/testmonial/thumb.png" alt="">
                                            </div>
                                            <h3>Robert Thomson</h3>
                                            <span>Business Owner</span>
                                        </div>
                                    </div>
                        </div>
                        <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                        <div class="quote">
                                            <img src="img/testmonial/quote.svg" alt="">
                                        </div>
                                        <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                                sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.  <br>
                                                Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                    <img src="img/testmonial/thumb.png" alt="">
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
    -->
    <!-- /testimonial_area  -->
<!--
    <div class="get_in_tauch_area">
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
-->
@stop
