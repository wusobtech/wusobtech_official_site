
    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center no-gutters logo-box">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="{{ route('homepage') }}">
                                    <img src="https://res.cloudinary.com/dnjoewu0k/image/upload/v1600457896/wusob/Homepage/Capture2-removebg-preview_az6sei.png" alt="" class="dn-sm">
                                    <img src="{{ $logo_img }}" alt="" srcset="{{ $logo_img }}" class="dn-lg">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="main-menu  d-none d-lg-block text-center">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="{{ route('homepage') }}">home</a></li>
                                        <li><a href="{{ route('services') }}">Services</a></li>
                                        <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                                        <li><a href="{{ route('aboutUs') }}">About</a></li>
                                        <!-- <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="portfolio_details.html">Portfolio details</a></li>

                                                <li><a href="elements.html">elements</a></li>
                                            </ul>
                                        </li> -->

                                        <!-- <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul>
                                        </li> -->
                                        <li><a href="{{ route('contactUs') }}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        {{-- <div class="col-lg-2 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-end">
                                <a href="#" data-scroll-nav="0" class="say_hi">Say Hello</a>
                            </div>
                        </div> --}}
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
