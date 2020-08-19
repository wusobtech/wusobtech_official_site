@extends('web.layouts.app1')
@section('title')
Services
@endsection
@section('content')
    <section class="about py-lg-5 py-md-5 py-5">
        <div class="container py-md-5 ">
            <div class="inner-sec-wthree py-lg-5 py-5">
                <h3 class="tittle text-uppercase text-center mb-lg-5 mb-3 inner-tittle py-md-3"><span class="sub-tittle">Features.</span> Creativity has no Boundaries</h3>
                <div class="feature-grids row mb-lg-3 mb-3">
                    <div class="col-lg-4 p-0" data-aos="zoom-in">
                        <div class="bottom-gd p-5">
                            <h3 class="my-3"> <span class="fa fa-crosshairs" aria-hidden="true"></span> WEB APPLICATION</h3>
                            <p>Web Design, Web development, Web Application, Portal and Customized solutions, If it's going to run on the web, Our team will bring it to life.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 p-0" data-aos="zoom-in">
                        <div class="bottom-gd2-active p-5">

                            <h3 class="my-3"> <span class="fa fa-clone" aria-hidden="true"></span> ENTERPRISE SOLUTIONS</h3>
                            <p>Banks, Schools, Financial Institutes, Payment Gateways, NGO, Large Firms, Medium and Small Business and more, just name  it, We deliever it all at very affordable price.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 p-0" data-aos="zoom-in">
                        <div class="bottom-gd p-5">

                            <h3 class="my-3"> <span class="fa fa-android" aria-hidden="true"></span> MOBILE APPLICATION</h3>
                            <p>Apple iOS, Android, Mobile Applications and Software that are build to scale and perform better on low specification devices.</p>
                        </div>
                    </div>

                </div>
                <div class="feature-grids row mb-lg-3 mb-3">
                    <div class="col-lg-4 p-0" data-aos="zoom-in">
                        <div class="bottom-gd p-5">

                            <h3 class="my-3"> <span class="fa fa-line-chart" aria-hidden="true"></span>
                                WORLD-CLASS SOLUTIONS
                                </h3>
                            <p>Fast, Scalable, Safe and Secure architecture, Our Software development team are the best.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 p-0" data-aos="zoom-in">
                        <div class="bottom-gd2-active p-5">

                            <h3 class="my-3"> <span class="fa fa-comments-o" aria-hidden="true"></span> TECHNICAL SUPPORT.</h3>
                            <p>Whatever your project, we support your project whenever you contact us base on the agreement mode. Support or Maintenance, it is our happiness to always  help.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 p-0" data-aos="zoom-in">
                        <div class="bottom-gd p-5">

                            <h3 class="my-3"> <span class="fa fa-thumbs-o-up" aria-hidden="true"></span> USER EXPERIENCE AND FRIENDLINESS</h3>
                            <p>Softwares with capacity to appeal to it users and make it easy for users to navigate.</p>
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
                            <img src="{{ $web_source }}/images/img1.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <!-- //services -->

            </div>
        </div>
    </section>
    <section class="subscribe-main py-lg-5 py-4 d-none">
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
