@extends('web.layouts.app')
@section('title')
Home
@endsection
@section('content')
    <section class="about py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-wthree py-lg-5 py-3">
                <h3 class="tittle text-uppercase text-center mb-lg-5 mb-3"><span class="sub-tittle">About.</span> Creativity has no Boundaries</h3>
                <div class="feature-grids row mb-lg-5 mb-3">
                    <div class="col-lg-4 p-0" data-aos="fade-up">
                        <div class="bottom-gd p-5">

                            <h3 class="my-3"> <span class="fa fa-crosshairs" aria-hidden="true"></span> Web Interactive</h3>
                            <p>Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 p-0" data-aos="fade-up">
                        <div class="bottom-gd2-active p-5">

                            <h3 class="my-3"> <span class="fa fa-clone" aria-hidden="true"></span> Unique design</h3>
                            <p>Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 p-0" data-aos="fade-up">
                        <div class="bottom-gd p-5">

                            <h3 class="my-3"> <span class="fa fa-laptop" aria-hidden="true"></span> Supporting</h3>
                            <p>Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.</p>
                        </div>
                    </div>

                </div>
                <!-- services -->
                <div class="fetured-info pt-lg-5">
                    <h3 class="tittle text-uppercase text-center my-lg-5 my-3"><span class="sub-tittle">What we do</span> Our Featured Services</h3>
                    <div class="row fetured-sec mt-lg-5">

                        <div class="col-lg-6 serv_bottom">
                            <div class="featured-left text-center">
                                <div class="bottom-gd fea p-5 my-3" data-aos="fade-left">
                                    <span class="fa fa-lightbulb-o" aria-hidden="true"></span>
                                    <h3 class="my-3 text-uppercase">Creative Design</h3>
                                    <p class="px-lg-3">Integer sit amet mattis quam, sit amet ultricies velit.convallis at tellus. Nulla quis lorem ipnut libero malesuada feugiat. Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="bottom-gd fea active p-5" data-aos="fade-left">
                                    <span class="fa fa-laptop" aria-hidden="true"></span>
                                    <h3 class="my-3 text-uppercase">100% Responsive</h3>
                                    <p class="px-lg-3">Integer sit amet mattis quam, sit amet ultricies velit.convallis at tellus. Nulla quis lorem ipnut libero malesuada feugiat. Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0">
                            <img src="{{ asset('web/images/img1.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <!-- //services -->
            </div>
        </div>
    </section>
    <!-- //ab -->
    <!--/counter-->
    <section class="stats py-lg-5 py-4">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <div class="counter">
                        <h3 class="timer count-title count-number" data-to="100" data-speed="1500"></h3>
                        <p class="count-text ">Support</p>
                    </div>
                </div>
                <div class="col">
                    <div class="counter">
                        <h3 class="timer count-title count-number" data-to="1700" data-speed="1500"></h3>
                        <p class="count-text ">Happy Hours</p>
                    </div>
                </div>
                <div class="col">
                    <div class="counter">
                        <h3 class="timer count-title count-number" data-to="11900" data-speed="1500"></h3>
                        <p class="count-text ">Project Complete</p>
                    </div>
                </div>
                <div class="col">
                    <div class="counter">
                        <h3 class="timer count-title count-number" data-to="157" data-speed="1500"></h3>
                        <p class="count-text ">Cups of Coffee</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//counter-->
    <!--//team -->
    <section class="banner-w3layouts-bottom py-lg-5 py-4">
        <div class="container">
            <div class="inner-sec-wthree py-lg-5 py-4 speak">
                <h3 class="tittle text-uppercase text-center my-lg-5 my-3"><span class="sub-tittle">Amazing People</span> Our Great Team</h3>
                <div class="row mt-lg-5 mt-4">
                    <div class="col-md-4 team-gd text-center" data-aos="fade-right">
                        <div class="team-img mb-4">
                            <img src="{{ asset('web/images/team.jpg') }}" class="img-fluid rounded-circle" alt="user-image">
                        </div>
                        <div class="team-info">
                            <h3 class="mt-md-4 mt-3"><span class="sub-tittle-team">Designer</span> Jason Donoghue</h3>
                            <p>Lorem Ipsum has been the industry's standard since the 1500s.</p>
                            <ul class="social_section_1info mt-md-4 mt-3">
                                <li class="mb-2 facebook"><a href="#"><i class="fa fa-facebook mr-1"></i>facebook</a></li>
                                <li class="mb-2 twitter"><a href="#"><i class="fa fa-twitter mr-1"></i>twitter</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 team-gd second text-center">
                        <div class="team-img mb-4">
                            <img src="{{ asset('web/images/team1.jpg') }}" class="img-fluid rounded-circle" alt="user-image">
                        </div>
                        <div class="team-info">
                            <h3 class="mt-md-4 mt-3"><span class="sub-tittle-team">Designer</span> Mariana Noe</h3>
                            <p>Lorem Ipsum has been the industry's standard since the 1500s.</p>
                            <ul class="social_section_1info mt-md-4 mt-3">
                                <li class="google"><a href="#"><i class="fa fa-google-plus mr-1"></i>google</a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin mr-1"></i>linkedin</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 team-gd text-center" data-aos="fade-left">
                        <div class="team-img mb-4">
                            <img src="{{ asset('web/images/team2.jpg') }}" class="img-fluid rounded-circle" alt="user-image">
                        </div>
                        <div class="team-info">
                            <h3 class="mt-md-4 mt-3"><span class="sub-tittle-team">Designer</span> Daniel Doe</h3>
                            <p>Lorem Ipsum has been the industry's standard since the 1500s.</p>
                            <ul class="social_section_1info mt-md-4 mt-3">
                                <li class="mb-2 facebook"><a href="#"><i class="fa fa-facebook mr-1"></i>facebook</a></li>
                                <li class="mb-2 twitter"><a href="#"><i class="fa fa-twitter mr-1"></i>twitter</a></li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--//team -->
    <!-- middle section -->
    <div class="middle-tem-insidel pt-lg-5">
        <div class="progress-info">

            <div class="right-side-img-tem-inside">

            </div>
            <div class="left-build-main-temps">
                <h3 class="tittle text-uppercase text-left my-lg-5 my-3"><span class="sub-tittle">WOrk Abilities</span> Our Skills</h3>
                <div class="progress-one my-lg-5" data-aos="fade-up">
                    <h4 class="progress-tittle">Web Design</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="progress-one" data-aos="fade-up">
                    <h4 class="progress-tittle">Branding</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="progress-one my-lg-5" data-aos="fade-up">
                    <h4 class="progress-tittle">PHP Development</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="progress-one" data-aos="fade-up">
                    <h4 class="progress-tittle">Marketing</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--/model-->
    <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-left">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100 gal-img pb-3">
                        <img class="img-fluid col-md-12" src="{{ asset('web/images/n1.jpg') }}" alt="Slog">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-left">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pb-3">
                    <div class="login px-4 mx-auto mw-100 gal-img pb-3">
                        <img class="img-fluid col-md-12" src="{{ asset('web/images/n2.jpg') }}" alt="Slog">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-left">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pb-3">
                    <div class="login px-4 mx-auto mw-100 gal-img pb-3">
                        <img class="img-fluid col-md-12" src="{{ asset('web/images/n3.jpg') }}" alt="Slog">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-left">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pb-3">
                    <div class="login px-4 mx-auto mw-100 gal-img pb-3">
                        <img class="img-fluid col-md-12" src="{{ asset('web/images/n4.jpg') }}" alt="Slog">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter9" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-left">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pb-3">
                    <div class="login px-4 mx-auto mw-100 gal-img pb-3">
                        <img class="img-fluid col-md-12" src="{{ asset('web/images/n9.jpg') }}" alt="Slog">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter10" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-left">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pb-3">
                    <div class="login px-4 mx-auto mw-100 gal-img pb-3">
                        <img class="img-fluid col-md-12" src="{{ asset('web/images/n5.jpg') }}" alt="Slog">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalCenter11" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-left">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pb-3">
                    <div class="login px-4 mx-auto mw-100 gal-img pb-3">
                        <img class="img-fluid col-md-12" src="{{ asset('web/images/n7.jpg') }}" alt="Slog">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter12" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-left">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pb-3">
                    <div class="login px-4 mx-auto mw-100 gal-img pb-3">
                        <img class="img-fluid col-md-12" src="{{ asset('web/images/n8.jpg') }}" alt="Slog">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter13" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-left">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pb-3">
                    <div class="login px-4 mx-auto mw-100 gal-img pb-3">
                        <img class="img-fluid col-md-12" src="{{ asset('web/images/n6.jpg') }}" alt="Slog">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//model-->

    <!--//portfolio-->

    <!-- /hand-crafted -->
    <section class="hand-crafted py-4">
        <div class="container py-xl-5 py-lg-3">
            <div class="row banner-w3layouts-grids">
                <div class="col-lg-6 banner-w3layouts-image">
                    <div class="effect-w3">
                        <img src="{{ asset('web/images/img2.jpg') }}" alt="" class="img-fluid image1">
                        <img src="{{ asset('web/images/img2.jpg') }}" alt="" class="img-fluid image2">
                        <img src="{{ asset('web/images/img2.jpg') }}" alt="" class="img-fluid image3">
                        <img src="{{ asset('web/images/img2.jpg') }}" alt="" class="img-fluid image4">
                    </div>

                </div>
                <div class="col-lg-6 banner-w3layouts-info pl-md-5">

                    <h3 class="mb-3" data-aos="fade-up">Design Great Again</h3>
                    <p class="mb-4" data-aos="fade-up"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis. Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.</p>
                    <p class="mb-4" data-aos="fade-up">Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis. Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.</p>
                    <a href="single.html" class="btn">Read More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //hand-crafted -->

    <!-- testimonials -->
    <div class="testimonials py-md-5 py-5">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="tittle text-uppercase text-center mb-lg-5 mb-3"><span class="sub-tittle">See what people are saying</span> Testimonials</h3>
            <div id="carouselExampleIndicators" class="carousel slide pb-5" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-lg-6 testimonials_grid" data-aos="fade-up">
                                <div class="bg-white rounded p-md-5 p-4">
                                    <p class="sub-test"><i class="fa fa-quote-left" aria-hidden="true"></i> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod possimus, omnis voluptas.
                                    </p>
                                    <div class="row mt-4">
                                        <div class="col-3 testi-img-res">
                                            <img src="{{ asset('web/images/te1.jpg') }}" alt=" " class="img-fluid rounded-circle" />
                                        </div>
                                        <div class="col-9 testi_grid mt-xl-3 mt-lg-2 mt-md-4 mt-2">
                                            <h5 class="mb-2">Thomas Carl</h5>
                                            <p>Company Name</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 testimonials_grid mt-lg-0 mt-4" data-aos="fade-up">
                                <div class="bg-white rounded p-md-5 p-4">
                                    <p class="sub-test"><i class="fa fa-quote-left" aria-hidden="true"></i> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod possimus, omnis voluptas.
                                    </p>
                                    <div class="row mt-4">
                                        <div class="col-3 testi-img-res">
                                            <img src="{{ asset('web/images/te2.jpg') }}" alt=" " class="img-fluid rounded-circle" />
                                        </div>
                                        <div class="col-9 testi_grid  mt-xl-3 mt-lg-2 mt-md-4 mt-2">
                                            <h5 class="mb-2">Adam Ster</h5>
                                            <p>Company Name</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-6 testimonials_grid" data-aos="fade-up">
                                <div class="bg-white rounded p-md-5 p-4">
                                    <p class="sub-test"><i class="fa fa-quote-left" aria-hidden="true"></i> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod possimus, omnis voluptas.
                                    </p>
                                    <div class="row mt-4">
                                        <div class="col-3 testi-img-res">
                                            <img src="{{ asset('web/images/te3.jpg') }}" alt=" " class="img-fluid rounded-circle" />
                                        </div>
                                        <div class="col-9 testi_grid  mt-xl-3 mt-lg-2 mt-md-4 mt-2">
                                            <h5 class="mb-2">Thomas Carl</h5>
                                            <p>Company Name</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 testimonials_grid mt-lg-0 mt-4" data-aos="fade-up">
                                <div class="bg-white rounded p-md-5 p-4">
                                    <p class="sub-test"><i class="fa fa-quote-left" aria-hidden="true"></i> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod possimus, omnis voluptas.
                                    </p>
                                    <div class="row mt-4">
                                        <div class="col-3 testi-img-res">
                                            <img src="{{ asset('web/images/te1.jpg') }}" alt=" " class="img-fluid rounded-circle" />
                                        </div>
                                        <div class="col-9 testi_grid  mt-xl-3 mt-lg-2 mt-md-4 mt-2">
                                            <h5 class="mb-2">Adam Ster</h5>
                                            <p>Company Name</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-6 testimonials_grid">
                                <div class="bg-white rounded p-md-5 p-4">
                                    <p class="sub-test"><i class="fa fa-quote-left" aria-hidden="true"></i> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod possimus, omnis voluptas.
                                    </p>
                                    <div class="row mt-4">
                                        <div class="col-3 testi-img-res">
                                            <img src="{{ asset('web/images/te2.jpg') }}" alt=" " class="img-fluid rounded-circle" />
                                        </div>
                                        <div class="col-9 testi_grid  mt-xl-3 mt-lg-2 mt-md-4  mt-2">
                                            <h5 class="mb-2">Thomas Carl</h5>
                                            <p>Company Name</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 testimonials_grid mt-lg-0 mt-4" data-aos="fade-up">
                                <div class="bg-white rounded p-md-5 p-4">
                                    <p class="sub-test"><i class="fa fa-quote-left" aria-hidden="true"></i> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod possimus, omnis voluptas.
                                    </p>
                                    <div class="row mt-4">
                                        <div class="col-3 testi-img-res">
                                            <img src="{{ asset('web/images/te3.jpg') }}" alt=" " class="img-fluid rounded-circle" />
                                        </div>
                                        <div class="col-9 testi_grid mt-xl-3 mt-lg-2 mt-md-4 mt-2">
                                            <h5 class="mb-2">Adam Ster</h5>
                                            <p>Company Name</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //testimonials -->
    <!--/newsletter -->
    <section class="subscribe-main py-lg-5 py-4">
        <div class="container">
            <div class="newsletter-info text-center p-md-5 py-md-0 py-5 px-md-0 px-4">
                <form action="#" method="post" class="d-flex">
                    <input type="email" name="email" placeholder="Enter your Email..." required="">
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </section>
@endsection
