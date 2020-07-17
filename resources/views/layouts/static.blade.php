<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REUNIR</title>
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/lebrae.jpg') }}">
    <!--icofont icon css-->
    <link rel="stylesheet" href="{{ asset('css/icofont.min.css') }}">
    <!--magnific popup css-->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <!--google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <!--main css-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<!--Start Preloader-->
<div class="preloader" id="preloader"></div>
<!--End Preloader-->

<!-- header top begin -->
<header class="header-section" id="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex justify-content-start reunir-content-center">
                    <div class="header-left">
                        <ul>
                            <li class="header-left-list">
                                <p class="header-left-text">
                                    <span class="header-left-icon">
                                        <i class="icofont-headphone-alt"></i>
                                    </span>Support
                                </p>
                            </li>
                            <li class="header-left-list">
                                <p class="header-left-text">
                                    <span class="header-left-icon">
                                        <i class="icofont-email"></i>
                                    </span>info@lebrae.com
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-flex justify-content-end reunir-content-center">
                    <div class="header-right">
                        <ul>
                            <li class="header-right-list">
                                <div class="dropdown show header-dropdown">
                                    <span class="header-left-icon"><i class="icofont-web"></i></span>
                                    <select class="selectpicker" name="languages" tabindex="-98">
                                        <option value="">English</option>
                                        <option value="1">Bengali</option>
                                        <option value="2">Dutch</option>
                                    </select>
                                </div>
                            </li>
                            <li class="header-right-list">
                                <p class="header-right-text"><span class="header-right-icon carticon"><i class="icofont-shopping-cart"></i></span>My cart (0)</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- nav top begin -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light reunir-navbar">
        <div class="container">

            <div class="logo-section">
                <a class="logo-title navbar-brand" href="#"><img src="{{ asset('img/lebrae.jpg') }}" alt="logo">LEBRAE</a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="icofont-navigation-menu"></i>
            </button>
            <div class="collapse navbar-collapse nav-main justify-content-end" id="navbarNav">
                <ul class="navbar-nav" id="primary-menu">
                    <li class="nav-item active">
                        <a class="nav-link active" href="#header-section">HOME
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-section">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#affiliate-section">AFFILIATES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#investment-section">PLANS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact-us-section">CONTACT</a>
                    </li>
                </ul>
            </div>
            <div class="right-side-box">
                <a class="join-btn" href="{{ url('register') }}">JOIN US</a>
            </div>
        </div>
    </nav>
    <!-- nav top end -->
</header>
<!-- header top end -->

<!-- banner top begin -->
<section class="banner-section">
    <div class="overlay" style="background-image: url({{ asset('img/header-bg.jpg') }})">
        <div class="container">
            <div class="total-slide">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <div class="banner-text">
                            <h1 class="font-light">Take Your </h1>
                            <h1 class="font-bold">Invest Startegy</h1>
                            <h1 class="font-regular">to the next level</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3 class="banner-bottom-text">A Profitable platform for high-margin CASH investment</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="get-start">
                            <a href="{{ url('register') }}">GET STARTED NOW!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="statics-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                        <div class="single-statics no-border">
                            <div class="icon-box">
                                <i class="ren-reguser"></i>
                            </div>
                            <div class="text-box">
                                <span class="d-none counter">36967030</span>
                                <span class="counter">36967030</span>
                                <h4>Registered users</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                        <div class="single-statics">
                            <div class="icon-box">
                                <i class="ren-web"></i>
                            </div>
                            <div class="text-box">
                                <span class="counter">178</span>
                                <h4>Countries  supported</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                        <div class="single-statics">
                            <div class="icon-box">
                                <i class="ren-withdraw"></i>
                            </div>
                            <div class="text-box">
                                <span class="counter">10800000</span>
                                <h4>Withdrawn each month</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                        <div class="single-statics">
                            <div class="icon-box">
                                <i class="ren-people"></i>
                            </div>
                            <div class="text-box">
                                <span class="counter">1800000</span>
                                <h4>Active investors daily</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@yield('content')

<!-- footer section begin -->
<footer class="footer-section">
    <div class="overlay">

        <div class="waveWrapper waveAnimation">
            <div class="waveWrapperInner bgTop">
                <div class="wave waveTop"></div>
            </div>
            <div class="waveWrapperInner bgMiddle">
                <div class="wave waveMiddle"></div>
            </div>
            <div class="waveWrapperInner bgBottom">
                <div class="wave waveBottom"></div>
            </div>
        </div>

        <div class="footer-content">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <div class="social-icon">
                            <ul class="icon-area">
                                <li class="social-nav">
                                    <a href="#"><i class="icofont-facebook"></i></a>
                                </li>
                                <li class="social-nav">
                                    <a href="#"><i class="icofont-twitter"></i></a>
                                </li>
                                <li class="social-nav">
                                    <a href="#"><i class="icofont-pinterest"></i></a>
                                </li>
                                <li class="social-nav">
                                    <a href="#"><i class="icofont-rss"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-text">
                                <h5 class="footer-title">Subscribe to LebRae</h5>
                            <h2 class="footer-subtitle">To Get Exclusive benefits</h2>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-7">
                        <div class="subscribe">
                            <input type="email" name="email" placeholder="Your Email Address" class="input-subscribe">
                            <button class="subscribe-btn">Subscribe</button>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 col-md-12 d-flex justify-content-start reunir-content-center">
                            <div class="footer-bottom-left">
                                <p>Copyright © 2019.All Rights Reserved By <a href="#">Reunir</a></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 d-flex justify-content-end reunir-content-center">
                            <div class="footer-bottom-right">
                                <ul>
                                    <li>
                                        <a href="#">Privacy & Policy</a>
                                    </li>
                                    <li>
                                        <a href="#">Term Of Service</a>
                                    </li>
                                    <li>
                                        <a href="#">Affilate</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer section end -->

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
