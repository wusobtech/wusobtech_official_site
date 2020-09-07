<footer>
    <section class="footer footer_1its py-5">
        <div class="container py-md-4">

            <div class="row footer-top mb-md-5 mb-4">
                <div class="col-lg-4 col-md-6 footer-grid_section_1its" data-aos="fade-right">
                    <div class="footer-title-w3ls">
                        <h3>Address</h3>
                    </div>
                    <div class="footer-text">
                        <p>Address : Suite 4, Jabita Complex, Owode bus-stop Ajah, Lekki, Lagos Nigeria</p>
                        <p>Mobile : +234 7059421153</p>
                        <p>Phone : +234 8112716233</p>
                        <p>Email : <a href="mailto:contact@wusobtech.com">contact@wusobtech.com</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4 footer-grid_section_1its">
                    <div class="footer-title-w3ls">
                        <h3>Quick Links</h3>
                    </div>
                    <div class="row">
                        <ul class="col-12 links">
                            <li><a href="{{ route('aboutUs') }}">Why Choose Us </a></li>
                            <li><a href="{{ route('services') }}">Services</a></li>
                            <li><a href="{{ route('contactUs') }}">Contact </a></li>
                            <li><a href="{{ route('our_blog') }}">Blog </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mt-lg-0 mt-4 col-sm-12 footer-grid_section_1its" data-aos="fade-left">
                    <div class="footer-title-w3ls">
                        <h3>Newsletter</h3>
                    </div>
                    <div class="footer-text">
                        <p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
                        <form action="{{ route('subscribe') }}" method="post" id="subscribe_form">@csrf

                            <input type="email" name="email" placeholder="Enter your email..." required="">
                            <button type="submit" id="subscribe_btn" class="btn1"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                            <div class="clearfix"> </div>


                    </div>
                    <p id="subscribe_btn_text">Signup to get the updates on email from the city & town affairs!</p>
                </form>
                </div>
            </div>
            <div class="footer-grid_section text-center">
                <div class="footer-title-w3ls mb-3" data-aos="fade-up">
                    <a href="{{ url('/') }}" class="text-uppercase"><img height="90px" width="90px" src="{{ $web_source }}/images/wusob_logo.png" /> WUSOB</a>
                </div>
                <div class="footer-text">
                    <p data-aos="fade-up">WUSOB TECHNOLOGIES is an IT firm that specializes in the provision
                         of high quality computer software and training services worldwide. Our vision is to
                          provide high quality computer software that meets the needs and expectations of our clients, at a very affordable price.
                    </p>
                </div>
                <ul class="social_section_1info" data-aos="fade-up">
                    <li class="mb-2 facebook"><a href="https://facebook.com/wusobtechnologies/" target="_blank"><i class="fa fa-facebook mr-1"></i>facebook</a></li>
                    <li class="mb-2 twitter"><a href="https://twitter.com/wusobtech" target="_blank"><i class="fa fa-twitter mr-1" target="_blank"></i>twitter</a></li>
                    <li class="mb-2 instagram"><a href="https://instagram.com/wusobtechnologies/" target="_blank"><i class="fa fa-instagram mr-1"></i>instagram</a></li>
                </ul>
            </div>

        </div>
    </section>
</footer>

<div class="cpy-right text-center py-3">
    <p class="copy-w3layouts">Copyright &copy;<script>document.write(new Date().getFullYear());</script> WUSOB TECHNOLOGIES. All rights reserved.</a>
    </p>
</div>
