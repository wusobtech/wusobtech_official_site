<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>@yield('title') :: WUSOB</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Wusob Technologies, NGO-Website Developent, Eccommerce-Website-Developmwnt with Payment Integration, Mobile-APp Development, Desktop-App Development" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="{{ asset('web/css/bootstrap.css') }}">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('web/css/portfolio.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/aos.css') }}">
    <link href="{{ asset('web/css/aos-animation.css') }}" rel='stylesheet prefetch' type="text/css" media="all" />

    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="{{ asset('web/css/font-awesome.css') }}" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700i" rel="stylesheet">
    <!-- //Fonts -->

</head>
<body>
    <!-- mian-content -->
    <div class="main-content" id="home">
        @include('web.includes.header')
    </div>

    @yield('content')
    @include('web.includes.footer')
    <!--//Register-->
    <script src="{{ asset('web/js/jquery-2.2.3.min.js') }}"></script>
    <!--/aos -->
    <script src="{{ asset('web/js/aos.js') }}"></script>
    <script>
        AOS.init({
            easing: 'ease-out-back',
            duration: 1000
        });

    </script>
    <!--//aos -->
    <!--/counter-->
    <script src="{{ asset('web/js/counternew.js') }}"></script>
    <!--//counter-->
    <!--/ start-smoth-scrolling -->
    <script src="{{ asset('web/js/move-top.js') }}"></script>
    <script src="{{ asset('web/js/easing.js') }}"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });

    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear'
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });

    </script>
    <!--// end-smoth-scrolling -->

    <!-- //js -->

    <script src="{{ asset('web/js/bootstrap.js') }}"></script>
</body>
</html>
