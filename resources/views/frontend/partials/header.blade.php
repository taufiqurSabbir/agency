<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Fanatech - We Build Your Dream</title>

    <meta name="description" content="Creative Agency, Marketing Agency Template">
    <meta name="keywords" content="Creative Agency, Marketing Agency">
    <meta name="author" content="SeparateWeb">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#111">

    <link href="{{asset('frontend/images/favicon.png')}}" rel="icon">

    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/blueket.plugin.css')}}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/colormode.css')}}" rel="stylesheet">
</head>
<body class="darkmode">

<!-- <div class="preloader">
<div class="preloader_inner">0%</div>
<div class="loaderlogo"><img src="images/b.png" alt="logo"></div>
</div> -->


<header class="header animation sticky">
    <div class="container">
        <div class="wrapper">

            <div class="header-item-left">
                <a href="{{route('home')}}" class="brandlogo">
                    <img src="{{asset('frontend/images/b.png')}}" alt="logo" class="light">
                    <img src="{{asset('frontend/images/b.png')}}" alt="logo" class="dark">
                </a>
            </div>

            <div class="header-item-center hic">
                <div class="overlay"></div>
                <nav class="menu animation" id="menu">
                    <div class="menu-mobile-header">
                        <button type="button" class="menu-mobile-arrow"><i class="fa-solid fa-angle-left"></i></button>
                        <div class="menu-mobile-title"></div>
                        <button type="button" class="menu-mobile-close"><i class="fa-solid fa-xmark"></i></button>
                    </div>
                    <ul class="menu-section">
                        <li class="menu-item-has-children">
                            <a href="{{route('home')}}">Home <i class="fa-solid"></i></a>

                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{route('about')}}">About Us <i class="fa-solid"></i></a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{route('service')}}">Services <i class="fa-solid"></i></a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{route('portfolio')}}">Portfolio <i class="fa-solid "></i></a>
                        </li>
                        <!-- <li class="menu-item-has-children">
                        <a href="#.">Blogs <i class="fa-solid fa-angle-down"></i></a>
                        <div class="menu-subs menu-column-1">
                        <ul>
                        <li><a href="blogs.html">Blog Page 1</a></li>
                        <li><a href="blogs-2.html">Blog Page 2</a></li>
                        <li><a href="blogs-details.html">Blog Details</a></li>
                        </ul>
                        </div>
                        </li> -->
                        <li class="menu-item-has-children">
                            <a href="{{route('contact')}}">Contact Us <i class="fa-solid"></i></a>
                        </li>
                        <li class="darkmodeswitch">
                            <div class="switch-wrapper"> <label class="switch" for="blueket"> <input type="checkbox" id="blueket" /> <span class="slider round"></span> </label> </div>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="header-item-right headeraction">
                <ul>
                    <li><a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" class="menu-icon"><i class="fa-solid fa-phone"></i></a> </li>
                    <li><a href="contact-1.html" class="sw-btn sw-orange-btn header-btn">Get Started <i class="fa-solid fa-arrow-trend-up"></i></a></li>
                    <li><button type="button" class="menu-mobile-toggle"> <span></span> <span></span> <span></span> <span></span> </button> </li>
                </ul>
            </div>
        </div>
    </div>
</header>
