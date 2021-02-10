<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '860848521426306');
    fbq('track', 'PageView');
    </script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=860848521426306&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
    <title>@yield('title')  - WusobTech</title>
    <meta name="description" content="Toward IT solutions, wusob technologies is a full customs services firm. In achieving that, it is our business to adapt quickly to meet our clients diverse needs and demands.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="Wusobtech"/> <!-- website name -->
    <meta property="og:site" content="https://wusobtech.com"/> <!-- website link -->
    <meta property="og:title" content="@yield('title')  - WusobTech"/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="Toward IT solutions, wusob technologies is a full customs services firm. In achieving that, it is our business to adapt quickly to meet our clients diverse needs and demands."/> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="{{ $web_source }}/img/wusob_logo.png"/> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content=""/> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article"/>


    <link rel="icon" type="image/png" sizes="32x32" href="{{ $web_source }}/img/wusob_logo.png">
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->
@include('web.includes.style')
</head>
<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        @include('web.includes.header')
        @yield('content')
        @include('web.includes.footer')
        @include('web.includes.script')
</body>

</html>
