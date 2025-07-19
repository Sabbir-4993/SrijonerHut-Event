<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>@yield('title')</title>
    <meta name="title" content="Srijoner Hut - Bengali Film Festival">
    <meta name="description" content="We are designing a safe and accessible Festival where our audiences and artists can come together to celebrate and discover DFW, and each other. We can’t wait to return — and beyond — for next year’s 5th Bengali Film Festival of Dallas. The 2022 Festival will take place in person July 29–31. ">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Srijoner Hut - Bengali Film Festival">
    <meta property="og:description" content="We are designing a safe and accessible Festival where our audiences and artists can come together to celebrate and discover DFW, and each other. We can’t wait to return — and beyond — for next year’s 5th Bengali Film Festival of Dallas. The 2022 Festival will take place in person July 29–31. ">
    <meta property="og:image" content="https://srijonerhut.com/assets/images/logo/logo.png">
    <meta property="og:url" content="https://srijonerhut.com">
    <meta property="og:type" content="website">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://srijonerhut.com">
    <meta property="twitter:title" content="Srijoner Hut - Bengali Film Festival">
    <meta property="twitter:description" content="We are designing a safe and accessible Festival where our audiences and artists can come together to celebrate and discover DFW, and each other. We can’t wait to return — and beyond — for next year’s 5th Bengali Film Festival of Dallas. The 2022 Festival will take place in person July 29–31. ">
    <meta property="twitter:image" content="https://srijonerhut.com/assets/images/logo/logo.png">

    <!-- Stylesheets -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">

    <!--Color Switcher Mockup-->
    <link href="{{asset('assets/css/color-switcher-design.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('assets/images/logo/logo-200x70.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">

    @yield('css')


    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2TX0YSY8LL"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-2TX0YSY8LL');
    </script>

    <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '186655522431158');
        fbq('track', 'PageView');

    </script>
    <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=186655522431158&ev=PageView&noscript=1"/>
    </noscript>
        <!-- End Meta Pixel Code -->

</head>
