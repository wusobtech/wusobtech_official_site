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
                        <p>Phone : +234 8112716233</p>
                        <p>Email : <a href="mailto:contact@wusobtech.com">contact@wusobtech.com</a></p>
                        <p>Mobile : +234 7059421153</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4 footer-grid_section_1its">
                    <div class="footer-title-w3ls">
                        <h3>Quick Links</h3>
                    </div>
                    <div class="row">
                        <ul class="col-12 links">
                            <li><a href="{{ route('aboutUs') }}">Why Choose Us </a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="contact.html">Contact </a></li>
                            <li><a href="#">Privacy Policy </a></li>
                            <li><a href="#">General Terms </a></li>
                            <li><a href="#faq" class="scroll">Faq's </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mt-lg-0 mt-4 col-sm-12 footer-grid_section_1its" data-aos="fade-left">
                    <div class="footer-title-w3ls">
                        <h3>Newsletter</h3>
                    </div>
                    <div class="footer-text">
                        <p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
                        <form action="#" method="post">
                            <input type="email" name="Email" placeholder="Enter your email..." required="">
                            <button class="btn1"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                            <div class="clearfix"> </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-grid_section text-center">
                <div class="footer-title-w3ls mb-3" data-aos="fade-up">
                    <a href="index.html" class="text-uppercase"><img height="90px" width="90px" src="{{ $web_source }}/images/wusob_logo.png" /> WUSOB</a>
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

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-left">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="login px-4 mx-auto mw-100">
                    <h5 class="text-left mb-4">Login Now</h5>
                    <form action="#" method="post">
                        <div class="form-group">
                            <label class="mb-2">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label class="mb-2">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                        </div>
                        <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary submit mb-4">Sign In</button>
                        <p class="text-left pb-4">
                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter2"> Don't have an account?</a>
                        </p>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-left">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login px-4 mx-auto mw-100">
                    <h5 class="text-left mb-4">Register Now</h5>
                    <form action="#" method="post">
                        <div class="form-group">
                            <label>First name</label>

                            <input type="text" class="form-control" id="validationDefault01" placeholder="" required="">
                        </div>
                        <div class="form-group">
                            <label>Last name</label>
                            <input type="text" class="form-control" id="validationDefault02" placeholder="" required="">
                        </div>

                        <div class="form-group">
                            <label class="mb-2">Password</label>
                            <input type="password" class="form-control" id="password1" placeholder="" required="">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" id="password2" placeholder="" required="">
                        </div>

                        <button type="submit" class="btn btn-primary submit mb-4">Register</button>
                        <p class="text-left pb-4">
                            <a href="#">By clicking Register, I agree to your terms</a>
                        </p>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
