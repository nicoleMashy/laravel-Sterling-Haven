<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sterling Haven</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.7.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{ asset('/css/custom.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/pro.css') }}" type="text/css">



</head>
<body>
<div class="main-wrapper">

    <div class="navbar ">
        <a style="color: red" href="#home">STERLING HAVEN</a>
        <a  href="{{ url('welcome') }}">Home</a>
        <a  href="{{ url('tips') }}">product tips</a>
        <a  href="{{ url('gallery') }}">gallery</a>
        <a  href="{{ url('contact') }}">contact</a>
        <div class="dropdown">
            <button class="dropbtn">about
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="{{ url('contact') }}">sterling haven</a>
                <a href="{{ url('products') }}">products</a>
                <a href="{{ url('contact') }}">location</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">products
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="{{ url('dishwash') }}">dish wash</a>
                <a href="{{ url('toilet') }}">toilet cleaner</a>
                <a href="{{ url('powder') }}"> washing powder</a>
            </div>
        </div>
    </div>

    <section id="main" role="main"><div class="container " >
            <h2 style="text-align:center"><strong>our products</strong></h2>
        </div>
        <div class="container " >

            <div class="card-wrap">
            <div align="center" class="card category col col-container ">
                <img src="/images/dish.png" alt="John" style="width:300px">
                <h1>sterling haven dish wash</h1>
                <p class="title">sparkle clean dishes thaksjvh;snofliu IOIUFJJHBALIDIUH JKKJKSJDSOLDFUHJK,UWJFO GFKI,AKWFHIKWFHB JUUYEJYFHJWEFHWEK VUYJEKJHFIFJHNFYKDF TKGHFJEAWOFILFWON </p>
                <a href="{{ url('dishwash') }}"><button >view more</button></a>
            </div>
            </div>
             <div class="card-wrap">
            <div  align="center" class="card category">
                <img src="/images/powder.png" alt="John" style="width:300px">
                <h1>sterling haven washing powder</h1>
                <p class="title">sparkle clean laundry</p>

                <a href="{{ url('powder') }}"><button  >view more</button></a>
            </div>
            </div>
            <div class="card-wrap">
            <div  align="center" class="card category">
                <img src="/images/toilet.png" alt="John" style="width:300px">

                <h1>sterling haven toilet cleaner</h1>
                <p class="title">sparkle clean bathroom</p>
                <a  href="{{ url('toilet') }}"><button >view more</button></a>
            </div>
            </div>
        </div>
        </div>
    </section>

</div>

<footer id="footer" class="modern-footer"><div class="container">
        <nav id="footer_nav"><ul class="inline"><li class="footer-item-616 "> <a data-ct-action="Navigation Click" data-ct-category="Custom" data-ct-identifier="Footer_nav-616" data-ct-information="Footer Navigation-Terms of use" title="Terms of use" href="http://www.unilever.co.za/resource/legalnotice/" class="navItemLink">Terms of use</a></li><li class="footer-item-32 "> <a data-ct-action="Navigation Click" data-ct-category="Custom" data-ct-identifier="Footer_nav-32" data-ct-information="Footer Navigation-Privacy Notice" aria-label='' target="_blank" title="Privacy Notice" href="http://www.unilevernotices.com/south-africa/english/privacy-notice/notice.html" class="navItemLink">Privacy Notice</a></li><li class="footer-item-29 "> <a data-ct-action="Navigation Click" data-ct-category="Custom" data-ct-identifier="Footer_nav-29" data-ct-information="Footer Navigation-Cookie Notice" aria-label='' target="_blank" title="Cookie Notice" href="" class="navItemLink">Cookie Notice</a></li><li class="footer-item-617 "> <a data-ct-action="Navigation Click" data-ct-category="Custom" data-ct-identifier="Footer_nav-617" data-ct-information="Footer Navigation-Accessibility" title="Accessibility" href="http://www.unilever.co.za/resource/accessibility.aspx" class="navItemLink">Accessibility</a></li><li class="footer-item-1598 "> <a data-ct-action="Navigation Click" data-ct-category="Custom" data-ct-identifier="Footer_nav-1697" data-ct-information="Footer Navigation-About" title="About" href="https://www.sunlight.co.za/about-us" class="navItemLink">About</a></li><li class="footer-item-6 "> <a data-ct-action="Navigation Click" data-ct-category="Custom" data-ct-identifier="Footer_nav-11" data-ct-information="Footer Navigation-Contact" title="Contact" href="" class="navItemLink">Contact</a></li><li class="footer-item-927 "> <a data-ct-action="Navigation Click" data-ct-category="Custom" data-ct-identifier="Footer_nav-927" data-ct-information="Footer Navigation-Unilever" aria-label='' target="_blank" title="Unilever" href="" class="navItemLink">Sterling Haven</a></li><li class="footer-item-954 "> <a data-ct-action="Navigation Click" data-ct-category="Custom" data-ct-identifier="Footer_nav-956" data-ct-information="Footer Navigation-T's &amp; C's" title="T's &amp; C's" href="" class="navItemLink">T's &amp; C's</a></li><li class="footer-item-8 "> <a data-ct-action="Navigation Click" data-ct-category="Custom" data-ct-identifier="Footer_nav-1664" data-ct-information="Footer Navigation-Site Map" title="Site Map" href="" class="navItemLink">Site Map</a></li></ul>
            <a href="#"> <i class="fa fa-twitter"></i> <i class="fa fa-linkedin"></i> <i class="fa fa-instagram"></i> <i class="fa fa-facebook"></i></a>
        </nav> <aside class="footer-banner clearfix"><p>© Copyright 2019 star mashaishe All rights reserved</p><p class="site-footer"><a href="" target="_blank" class="fb_footer fa fa-facebook" rel="noopener">View our Facebook Page</a></p> </aside></div>
</footer>
<script type="text/javascript" src="{{ asset('/js/custom.js') }}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>
