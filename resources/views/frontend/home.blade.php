@extends('frontend.partials.usermaster')

@section('content')

    <div class="offcanvas offcanvas-end sidebar-offcanvas" tabindex="-1" id="offcanvasRight">
        <div class="offcanvas-header">
            <div class="sidebarlogooff">
                <img src="{{asset('frontend/images/logo-white.svg')}}" alt="logo" class="sidewhitelogo">
                <img src="{{asset('frontend/images/logo-black.svg')}}" alt="logo" class="sidedarklogo">
            </div>
            <div class="cbtn">
                <div class="btnclose"> <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
            </div>
        </div>
        <div class="offcanvas-body">
            <div class="sidebarbody">
                <h4 class="mb10">Get In Touch</h4>
                <p>Please fill out the form below if you have a plan or project in mind that you'd like to share with us.</p>
                <div class="sidebarcontactblock mt50">
                    <div class="contactnumberdiv">
                        <p class="mb5 linktitle">We're Available 24/7. Call Now.</p>
                        <a href="#"><i class="fa-solid fa-tty mr10"></i> 91 123 4567 890</a>
                        <a href="#"><i class="fa-brands fa-whatsapp mr10"></i> 91 123 4567 890</a>
                    </div>
                    <div class="contactnumberdiv mt30">
                        <p class="mb5 linktitle">Send Us an Email:</p>
                        <a href="#"><i class="fa-solid fa-envelope mr10"></i> <span class="__cf_email__" data-cfemail="69011b2910061c1b1e0c0b1a001d0c470a0604">[email&#160;protected]</span></a>
                        <a href="#"><i class="fa-solid fa-envelope mr10"></i> <span class="__cf_email__" data-cfemail="563f383039162f392324213334253f22337835393b">[email&#160;protected]</span></a>
                    </div>
                    <div class="social-link-sw mt30">
                        <span class="linktitle">Follow Us</span>
                        <ul class="footer-social-sw mt10 sw-hover-2">
                            <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li> <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                            <li> <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="demo-2-hero bggrdient">
        <div class="blur-bg-blocks">
            <aside class="blur-bg-set">
                <div class="blur-bg blur-bg-a"></div>
                <div class="blur-bg blur-bg-b"></div>
            </aside>
        </div>
        <div class="container zup">
            <div class="row v-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="mb20 wow fadeInUp splitspan" data-wow-delay=".2s">
                            <span class="">Big Ideas.</span>
                            <span>Creative People.</span>
                            <span>New Technology.</span>
                        </h1>
                        <p class="wow fadeInUp" data-wow-delay=".4s">A full-service digital marketing firm that specialises in human-centered experiences. We bring companies and people together.</p>
                        <div class="mt30">
                            <a href="{{route('contact')}}" class="sw-btn sw-blue-btn wow fadeInUp" data-wow-delay=".6s">Get Started <i class="fa-solid fa-arrow-trend-up"></i></a>
                        </div>
                        <div class="uniqpont cardaclr wow fadeInUp" data-wow-delay=".6s">
                            <div class="mediablock">
                                <div class="icondiv"><a href="#."><img src="{{asset('frontend/images/icons/thumbs-up.png')}}" alt="icon"></a></div>
                                <div class="mediainfoblock">
                                    <a href="#.">
                                        <p class="linktitle">Quality Work<br> Read Review</p>
                                    </a>
                                </div>
                            </div>
                            <div class="mediablock">
                                <div class="icondiv"><a href="#."><img src="{{asset('frontend/images/icons/winner.png')}}" alt="icon"></a></div>
                                <div class="mediainfoblock">
                                    <a href="#.">
                                        <p class="linktitle">#1 Award-Winning<br> Web Services</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card-img-round mmt40 wow fadeIn" data-wow-delay=".6s">
                        <img src="{{asset('frontend/images/common/hero-banner-2a.svg')}}" alt="web design">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="aboutblock section-space bkbg0 black-bg-1">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="about-conent paragraph">
                        <span class="scriptheading dashbefore mb15 wow fadeIn" data-wow-delay=".2s" data-wow-duration="1500ms">WHO WE ARE</span>
                        <h2 class="mb20 wow fadeIn" data-wow-delay=".4s" data-wow-duration="1500ms">Hire the Best Web and Mobile App Developers For Your Project</h2>
                        <p class="wow fadeIn" data-wow-delay=".6s" data-wow-duration="1500ms">Expertise helps Fanatech tackle the world's most difficult challenges. Fanatech provides digital products for worldwide brands on the web, mobile, and linked platforms. Expertise helps Fanatech tackle the world's most difficult challenges. Fanatech provides digital products for worldwide brands on the web, mobile, and linked platforms.</p>
                        <p class="wow fadeIn" data-wow-delay=".8s" data-wow-duration="1500ms">Expertise helps Fanatech tackle the world's most difficult challenges. Fanatech provides digital products for worldwide brands on the web.</p>
                        <div class="company-budges mt40">
                            <div class="img-budges"><img src="{{asset('frontend/images/icons/google.svg')}}" alt="Awards badges" class="img-fluid"></div>
                            <div class="img-budges"><img src="{{asset('frontend/images/icons/clutch.svg')}}" alt="Awards badges" class="img-fluid"></div>
                            <div class="img-budges"><img src="{{asset('frontend/images/icons/goodfirm.svg')}}" alt="Awards badges" class="img-fluid"></div>
                        </div>
                        <a href="{{route('about')}}" class="sw-btn sw-blue-btn mt40">About Us</a>
                    </div>
                </div>
                <div class="col-lg-5 mmt40">
                    <div class="row blockcntr">
                        <div class="counter-numbers  demo2counter col-lg-6 col-md-12">
                            <div class="counter-setdiv shadow wow fadeIn" data-wow-delay=".2s">
                                <span class="ttf">PROJECTS</span>
                                <p> <span data-count-to="150" class="odometer"></span>+</p>
                                <span class="countertag">considerable expertise in providing IT solutions and services.</span>
                            </div>
                            <div class="counter-setdiv shadow wow fadeIn" data-wow-delay=".8s">
                                <span class="ttf">CLIENTS</span>
                                <p><span data-count-to="25" class="odometer"></span>+</p>
                                <span class="countertag">Our team consists of highly qualified, and knowledgeable.</span>
                            </div>
                        </div>
                        <div class="counter-numbers  demo2counter col-lg-6 col-md-12 seccnt">
                            <div class="counter-setdiv shadow wow fadeIn" data-wow-delay=".5s">
                                <span class="ttf">TEAM</span>
                                <p><span data-count-to="50" class="odometer"></span>k</p>
                                <span class="countertag">Delivered the Thousands of Successful projects around the world.</span>
                            </div>
                            <div class="counter-setdiv shadow wow fadeIn" data-wow-delay="1.1s">
                                <span class="ttf">YEARS</span>
                                <p><span data-count-to="5" class="odometer"></span>k</p>
                                <span class="countertag">Clients across the globe witness our quality, processes and work.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="word-block-div no-pb section-space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 text-center">
                    <h2 class="text-gradient-1 mb15 wow fadeIn" data-wow-delay=".2s">Services We Provide</h2>
                    <p class="wow fadeIn" data-wow-delay=".4s">Fanatech overcomes challenges, achieves results, and adds value to our clients and partners. Take a look at some of our clients' success stories.</p>
                </div>
            </div>
            <div class="row mt30 cardaclr">
                <div class="col-lg-3 col-sm-6 mt30 wow fadeIn" data-wow-delay=".5s">
                    <div class="sw-card swbdr p-0">
                        <div class="cardicon-bg"><img src="{{asset('frontend/images/service/android-service.jpg')}}" alt="icon" class="w-100"></div>
                        <div class="sw-cardinfo srvcc">
                            <p class="swbttitle">App Development</p>
                            <ul class="servicelist blueketlist licircle sw-hover-2">
                                <li><a href="#">Android Development</a></li>
                                <li><a href="#">iOs Development</a></li>
                                <li><a href="#">Flutter Development</a></li>
                                <li><a href="#">Cross Platform Development</a></li>
                                <li><a href="#">React Native Development</a></li>
                                <li><a href="#">On Demand App Solutions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt30 wow fadeIn" data-wow-delay=".7s">
                    <div class="sw-card swbdr p-0">
                        <div class="cardicon-bg"><img src="{{asset('frontend/images/service/webdesign.jpg')}}" alt="icon" class="w-100"></div>
                        <div class="sw-cardinfo srvcc">
                            <p class="swbttitle">Web Development</p>
                            <ul class="servicelist blueketlist licircle sw-hover-2">
                                <li><a href="#">PHP Development </a></li>
                                <li><a href="#">Nodejs Development</a></li>
                                <li><a href="#">Angular Development</a></li>
                                <li><a href="#">Python Development</a></li>
                                <li><a href="#">CodeIgniter Development </a></li>
                                <li><a href="#">Laravel Developmentn</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt30 wow fadeIn" data-wow-delay=".9s">
                    <div class="sw-card swbdr p-0">
                        <div class="cardicon-bg"><img src="{{asset('frontend/images/service/digitalmarketing.jpg')}}" alt="icon" class="w-100"></div>
                        <div class="sw-cardinfo srvcc">
                            <p class="swbttitle">Digital Marketing</p>
                            <ul class="servicelist blueketlist licircle sw-hover-2">
                                <li><a href="#">SEO Service</a></li>
                                <li><a href="#">SMO Service</a></li>
                                <li><a href="#">PPC Campaign</a></li>
                                <li><a href="#">ORM Program</a></li>
                                <li><a href="#">Content Marketing </a></li>
                                <li><a href="#">Email Marketing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.1s">
                    <div class="sw-card swbdr p-0">
                        <div class="cardicon-bg"><img src="{{asset('frontend/images/service/ecommercestore.jpg')}}" alt="icon" class="w-100"></div>
                        <div class="sw-cardinfo srvcc">
                            <p class="swbttitle">CMS & Ecommerce</p>
                            <ul class="servicelist blueketlist licircle sw-hover-2">
                                <li><a href="#">WordPress Development</a></li>
                                <li><a href="#">Magento Development</a></li>
                                <li><a href="#">Joomla Development</a></li>
                                <li><a href="#">Opencart Development</a></li>
                                <li><a href="#">Drupal Development</a></li>
                                <li><a href="#">E-commerce Development</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="cta-block-sw-bkt mmt40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-design-block-sw gradient-1 v-center">
                        <div class="cta-info-div-bkt">
                            <h3 class="mb15">Let's Create an Amazing Project Together!</h3>
                            <p>Web design app development for Android & iOS. We have over 5 years of experience in helping companies.</p>
                            <a href="{{route('contact')}}" class="sw-btn sw-white-btn mt30">Get Started <i class="fa-solid fa-arrow-trend-up"></i></a>
                        </div>
                        <div class="cta-img-div-bkt"><img src="{{asset('frontend/images/common/app-mockup-2.svg')}}" alt="img"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="project-block-div section-space">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <span class="scriptheading dashbefore mb15">Our Work</span>
                    <h2 class="text-gradient-1">Latest Projects</h2>
                </div>
                <div class="col-lg-5 mmt30 flex-end">
                    <div class="portfoliostatus">
                        <div class="counter-numbers row-blocks">
                            <div class="counter-setdiv">
                                <p> <span data-count-to="1500" class="odometer"></span>+</p>
                                <span class="countertag">Projects Delivered</span>
                            </div>
                            <div class="counter-setdiv">
                                <p><span data-count-to="1000" class="odometer"></span>+</p>
                                <span class="countertag">Happy Clients</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt60">
            <div class="work-slider owl-carousel full-button">
                <div class="sw-card2 fwc">
                    <div class="fullworkcard">
                        <div class="divinfo">
                            <span class="mb15">Android</span>
                            <h2>MyFlight</h2>
                            <p class="mt15">Best translation and messaging app designed to simplify international communications</p>
                            <div class="icon-labels mt30">
                                <div class="icon-data">
                                    <img src="{{asset('frontend/images/icons/python.svg')}}" alt="Python">
                                </div>
                                <div class="icon-data">
                                    <img src="{{asset('frontend/images/icons/react.svg')}}" alt="figma">
                                </div>
                                <div class="icon-data">
                                    <img src="{{asset('frontend/images/icons/figma.svg')}}" alt="figma">
                                </div>
                                <div class="icon-data">
                                    <img src="{{asset('frontend/images/icons/android.svg')}}" alt="Android">
                                </div>
                            </div>
                            <a href="#" class="inline-btn mt50">Live View <i class="fa-solid fa-right-long"></i></a>
                        </div>
                        <div class="divviewwork">
                            <img src="{{asset('frontend/images/service/groceryapp.png')}}" alt="img">
                        </div>
                    </div>
                </div>
                <div class="sw-card2 fwc">
                    <div class="fullworkcard">
                        <div class="divinfo">
                            <span class="mb15">Web Design</span>
                            <h2>Ole Bakery</h2>
                            <p class="mt15">Best translation and messaging app designed to simplify international communications</p>
                            <div class="icon-labels mt30">
                                <div class="icon-data">
                                    <img src="{{asset('frontend/images/icons/python.svg')}}" alt="Python">
                                </div>
                                <div class="icon-data">
                                    <img src="{{asset('frontend/images/icons/react.svg')}}" alt="figma">
                                </div>
                                <div class="icon-data">
                                    <img src="{{asset('frontend/images/icons/figma.svg')}}" alt="figma">
                                </div>
                                <div class="icon-data">
                                    <img src="{{asset('frontend/images/icons/android.svg')}}" alt="Android">
                                </div>
                            </div>
                            <a href="#" class="inline-btn mt50">Live View <i class="fa-solid fa-right-long"></i></a>
                        </div>
                        <div class="divviewwork">
                            <img src="{{asset('frontend/images/service/mockup-web.jpg')}}" alt="img">
                        </div>
                    </div>
                </div>
                <div class="sw-card2 fwc">
                    <div class="fullworkcard">
                        <div class="divinfo">
                            <span class="mb15">Marketing</span>
                            <h2>Oleaster Bakery</h2>
                            <p class="mt15">Best translation and messaging app designed to simplify international communications</p>
                            <div class="icon-labels mt30">
                                <div class="icon-data">
                                    <img src="{{asset('frontend/images/icons/python.svg')}}" alt="Python">
                                </div>
                                <div class="icon-data">
                                    <img src="{{asset('frontend/images/icons/react.svg')}}" alt="figma">
                                </div>
                                <div class="icon-data">
                                    <img src="{{asset('frontend/images/icons/figma.svg')}}" alt="figma">
                                </div>
                                <div class="icon-data">
                                    <img src="{{asset('frontend/images/icons/android.svg')}}" alt="Android">
                                </div>
                            </div>
                            <a href="#" class="inline-btn mt50">Live View <i class="fa-solid fa-right-long"></i></a>
                        </div>
                        <div class="divviewwork">
                            <img src="{{asset('frontend/images/service/banner-design.jpg')}}" alt="img">
                        </div>
                    </div>
                </div>
                <div class="sw-card2 fwc">
                    <div class="fullworkcard">
                        <div class="divinfo">
                            <span class="mb15">iOs</span>
                            <h2>Smart Home</h2>
                            <p class="mt15">Best translation and messaging app designed to simplify international communications</p>
                            <div class="icon-labels mt30">
                                <div class="icon-data">
                                    <img src="{{asset('frontend/images/icons/python.svg')}}" alt="Python">
                                </div>
                                <div class="icon-data">
                                    <img src="{{asset('frontend/images/icons/react.svg')}}" alt="figma">
                                </div>
                                <div class="icon-data">
                                    <img src="{{asset('frontend/images/icons/figma.svg')}}" alt="figma">
                                </div>
                                <div class="icon-data">
                                    <img src="{{asset('frontend/images/icons/android.svg')}}" alt="Android">
                                </div>
                            </div>
                            <a href="#" class="inline-btn mt50">Live View <i class="fa-solid fa-right-long"></i></a>
                        </div>
                        <div class="divviewwork">
                            <img src="{{asset('frontend/images/service/app-ui.jpg')}}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="workslidercontrol">
                <div class="item-number">
                    <span id="counter">1/3</span>
                </div>
                <div class="btnforportfolio">
                    <a href="portfolio.html" class="inline-btn mt20">View all Projects <i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
    </section>


    <section class="tech-block bkbg2 section-space position-relative overflow-hidden">
        <div class="sw-half-circle-block1 shcb index-down"></div>
        <div class="sw-half-circle-block2 shcb index-down"></div>
        <div class="container index-up">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-gradient-1 mb15 wow fadeIn" data-wow-delay=".2s">Our Workplace Technologies</h2>
                    <h5 class="mb15 italic wow fadeIn" data-wow-delay=".4s">Our Workplace Technologies" section of the Human Resources Department's website.</h5>
                    <p class="wow fadeIn" data-wow-delay=".6s">Our Workplace Technologies Center is focused on working with business leaders to help them maximize their productivity, reduce costs and meet social needs in the 21st century. Our Workplace Technologies Center is focused on working with business leaders to help them maximize their productivity, reduce costs and meet social needs in the 21st century.</p>
                </div>
            </div>
            <div class="row index-up wow fadeIn" data-wow-delay=".8s">
                <div class="col-lg-12">
                    <div class="tech-slider mt60">
                        <div class="sw-icon-slider owl-carousel">
                            <div class="icon-slider-block">
                                <div class="slider-icon"> <img src="{{asset('frontend/images/icons/tech-icons/android.svg')}}" alt="Android"> </div>
                                <div class="slider-icon-text">
                                    <p>Android </p>
                                </div>
                            </div>
                            <div class="icon-slider-block">
                                <div class="slider-icon"> <img src="{{asset('frontend/images/icons/tech-icons/aws.svg')}}" alt="aws"> </div>
                                <div class="slider-icon-text">
                                    <p>aws</p>
                                </div>
                            </div>
                            <div class="icon-slider-block">
                                <div class="slider-icon"> <img src="{{asset('frontend/images/icons/tech-icons/figma.svg')}}" alt="figma"> </div>
                                <div class="slider-icon-text">
                                    <p>figma</p>
                                </div>
                            </div>
                            <div class="icon-slider-block">
                                <div class="slider-icon"> <img src="{{asset('frontend/images/icons/tech-icons/firebase.svg')}}" alt="firebase"> </div>
                                <div class="slider-icon-text">
                                    <p>firebase</p>
                                </div>
                            </div>
                            <div class="icon-slider-block">
                                <div class="slider-icon"> <img src="{{asset('frontend/images/icons/tech-icons/flutter.svg')}}" alt="flutter"> </div>
                                <div class="slider-icon-text">
                                    <p>flutter</p>
                                </div>
                            </div>
                            <div class="icon-slider-block">
                                <div class="slider-icon"> <img src="{{asset('frontend/images/icons/tech-icons/Google-cloud.svg')}}" alt="Google-cloud"> </div>
                                <div class="slider-icon-text">
                                    <p>Google-cloud</p>
                                </div>
                            </div>
                            <div class="icon-slider-block">
                                <div class="slider-icon"> <img src="{{asset('frontend/images/icons/tech-icons/java.svg')}}" alt="java">
                                </div>
                                <div class="slider-icon-text">
                                    <p>Java</p>
                                </div>
                            </div>
                            <div class="icon-slider-block">
                                <div class="slider-icon"> <img src="{{asset('frontend/images/icons/tech-icons/Kotlin.svg')}}" alt="Kotlin"> </div>
                                <div class="slider-icon-text">
                                    <p>Kotlin</p>
                                </div>
                            </div>
                            <div class="icon-slider-block">
                                <div class="slider-icon"> <img src="{{asset('frontend/images/icons/tech-icons/magento.svg')}}" alt="magento"> </div>
                                <div class="slider-icon-text">
                                    <p>magento</p>
                                </div>
                            </div>
                            <div class="icon-slider-block">
                                <div class="slider-icon"> <img src="{{asset('frontend/images/icons/tech-icons/Node.js.svg')}}" alt="Node.js">
                                </div>
                                <div class="slider-icon-text">
                                    <p>Node.js</p>
                                </div>
                            </div>
                            <div class="icon-slider-block">
                                <div class="slider-icon"> <img src="{{asset('frontend/images/icons/tech-icons/python.svg')}}" alt="python">
                                </div>
                                <div class="slider-icon-text">
                                    <p>python</p>
                                </div>
                            </div>
                            <div class="icon-slider-block">
                                <div class="slider-icon"> <img src="{{asset('frontend/images/icons/tech-icons/react.svg')}}" alt="react">
                                </div>
                                <div class="slider-icon-text">
                                    <p>react</p>
                                </div>
                            </div>
                            <div class="icon-slider-block">
                                <div class="slider-icon"> <img src="{{asset('frontend/images/icons/tech-icons/sketch.svg')}}" alt="sketch">
                                </div>
                                <div class="slider-icon-text">
                                    <p>sketch</p>
                                </div>
                            </div>
                            <div class="icon-slider-block">
                                <div class="slider-icon"> <img src="{{asset('frontend/images/icons/tech-icons/sqlite.svg')}}" alt="sqlite">
                                </div>
                                <div class="slider-icon-text">
                                    <p>sqlite</p>
                                </div>
                            </div>
                            <div class="icon-slider-block">
                                <div class="slider-icon"> <img src="{{asset('frontend/images/icons/tech-icons/swift.svg')}}" alt="swift">
                                </div>
                                <div class="slider-icon-text">
                                    <p>swift</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-space">
        <div class="container">
            <div class="row justify-content-between v-center">
                <div class="col-lg-6">
                    <div class="img-collage-set row ">
                        <div class="blueketshape1 shapesw shapecontrol-1"></div>
                        <div class="col-4 index-up ">
                            <div class="imgcover roundimg"> <img src="{{asset('frontend/images/common/developer.jpg')}}" alt="img" class="w-100"></div>
                        </div>
                        <div class="col-6 index-up  flex-end">
                            <div class="imgcover roundimg"> <img src="{{asset('frontend/images/common/developer-2.jpg')}}" alt="img"></div>
                        </div>
                        <div class="col-6 index-up  offset-md-1 mt30">
                            <div class="imgcover roundimg"> <img src="{{asset('frontend/images/common/compute-1.jpg')}}" alt="img"></div>
                        </div>
                        <div class="col-4 index-up align-self-start mt30">
                            <div class="imgcover roundimg"> <img src="{{asset('frontend/images/common/computer.jpg')}}" alt="img" class="w-100"></div>
                        </div>
                        <div class="blueketshape2 shapesw shapecontrol-2"></div>
                    </div>
                </div>
                <div class="col-lg-6 mmt40">
                    <span class="scriptheading dashbefore mb15">Why Fanatech?</span>
                    <h4>Why Hire The Fanatech As Your Development Company?</h4>
                    <div class="medialist mt40">
                        <div class="mediablock">
                            <div class="icondiv"><img src="{{asset('frontend/images/icons/experience.png')}}" alt="icon"></div>
                            <div class="mediainfoblock">
                                <h5 class="mb10">Experienced & Skilled Resources </h5>
                                <p>Fanatech is a company that specialises in risk management and general safety. We will bring value to your business farm while also ensuring.</p>
                            </div>
                        </div>
                        <div class="mediablock mt30">
                            <div class="icondiv"><img src="{{asset('frontend/images/icons/on-time.png')}}" alt="icon"></div>
                            <div class="mediainfoblock">
                                <h5 class="mb10">Cost-effective & On-time Delivery</h5>
                                <p>If you think to have a better outcome with low cost then Fanatech is the one. We are offering the best technology solution at an affordable price.</p>
                            </div>
                        </div>
                        <div class="mediablock mt30">
                            <div class="icondiv"><img src="{{asset('frontend/images/icons/investment.png')}}" alt="icon"></div>
                            <div class="mediainfoblock">
                                <h5 class="mb10">Flexible Pricing & Working Models</h5>
                                <p>We always ensure that our task is handed over within the given time. Our main priority is customers gratification.</p>
                            </div>
                        </div>
                        <div class="mediablock mt30">
                            <div class="icondiv"><img src="{{asset('frontend/images/icons/online-learning.png')}}" alt="icon"></div>
                            <div class="mediainfoblock">
                                <h5 class="mb10">No Expenses on Training & Retaining</h5>
                                <p>We always ensure that our task is handed over within the given time. Our main priority is customers gratification.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="industry-work section-space bg-efffect-1 bkbg3 pb300">
        <div class="container index-up">
            <div class="row">
                <div class="col-lg-10">
                    <span class="scriptheading dashbefore mb15">We Work In</span>
                    <h2 class="text-gradient-1">Our Industry Wise Solution</h2>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-12">
                    <div class="cate-with-img-main">
                        <div class="roundiconwithdata wow fadeIn" data-wow-delay=".1s"> <div class="imgimg"><img src="{{asset('frontend/images/icons/house.svg')}}" alt="img"> </div> <p>Real Estate</p> </div>
                        <div class="roundiconwithdata wow fadeIn" data-wow-delay=".4s"> <div class="imgimg"><img src="{{asset('frontend/images/icons/travel-luggage.svg')}}" alt="img"> </div> <p>Tour & Travels</p> </div>
                        <div class="roundiconwithdata wow fadeIn" data-wow-delay=".7s"> <div class="imgimg"><img src="{{asset('frontend/images/icons/magistrate.svg')}}" alt="img"> </div> <p>Education</p> </div>
                        <div class="roundiconwithdata wow fadeIn" data-wow-delay="1s"> <div class="imgimg"><img src="{{asset('frontend/images/icons/car.svg')}}" alt="img"> </div> <p>Transport</p> </div>
                        <div class="roundiconwithdata wow fadeIn" data-wow-delay="1.3s"> <div class="imgimg"><img src="{{asset('frontend/images/icons/calendar.svg')}}" alt="img"> </div> <p>Event</p> </div>
                        <div class="roundiconwithdata wow fadeIn" data-wow-delay="1.6s"> <div class="imgimg"><img src="{{asset('frontend/images/icons/online-shop.svg')}}" alt="img"> </div> <p>eCommerce</p> </div>
                        <div class="roundiconwithdata wow fadeIn" data-wow-delay="1.9s"> <div class="imgimg"><img src="{{asset('frontend/images/icons/game-controller.svg')}}" alt="img"> </div> <p>Game</p> </div>
                        <div class="roundiconwithdata wow fadeIn" data-wow-delay="2.2s"> <div class="imgimg"><img src="{{asset('frontend/images/icons/healthcare.svg')}}" alt="img"> </div> <p>Healthcare</p> </div>
                        <div class="roundiconwithdata wow fadeIn" data-wow-delay="2.5s"> <div class="imgimg"><img src="{{asset('frontend/images/icons/piggy-bank.svg')}}" alt="img"> </div> <p>Finance</p> </div>
                        <div class="roundiconwithdata wow fadeIn" data-wow-delay="2.8s"> <div class="imgimg"><img src="{{asset('frontend/images/icons/restaurant.svg')}}" alt="img"> </div> <p>Restaurant</p> </div>
                        <div class="roundiconwithdata wow fadeIn" data-wow-delay="3.1s"> <div class="imgimg"><img src="{{asset('frontend/images/icons/layers.svg')}}" alt="img"> </div> <p>On-Demand</p> </div>
                        <div class="roundiconwithdata wow fadeIn" data-wow-delay="3.4s"> <div class="imgimg"><img src="{{asset('frontend/images/icons/grocery-bag.svg')}}" alt="img"> </div> <p>Grocery</p> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="office-interior imageoutofbox pb100">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="imageoutbox">
                        <img src="{{asset('frontend/images/common/office-building.jpg')}}" alt="office" class="card-img-round  wow fadeIn" data-wow-delay=".2s">
                    </div>
                </div>
            </div>
            <div class="row mt60 mmt40">
                <div class="col-lg-6">
                    <div class="title-heading wow fadeIn" data-wow-delay=".4s">
                        <h2>Trusted Web Design Company Since 2018</h2>
                    </div>
                </div>
                <div class="col-lg-6 mmt30">
                    <div class="title-paragraph wow fadeIn" data-wow-delay=".6s">
                        <p>We are a Web development company. we provide web design, app development, digital marketing services. As you can imagine, the market is evolving with every new platform and feature added to an website. The number of developers jumping into this field has grown over time which means more users need responsive websites in order for them not only stand out from other ones but also have fast response times when visitors click on your site.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="clients-section section-space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <span class="scriptheading mb15 wow fadeIn" data-wow-delay=".2s">Review/Feedback</span>
                    <h2 class="text-gradient-1 wow fadeIn" data-wow-delay=".4s">Happy Clients With Digital Transformation</h2>
                </div>
            </div>
            <div class="row mt60">
                <div class="col-lg-12">
                    <div class="review-slider owl-carousel full-button">
                        <div class="blueket-card-noise card-img-round pt30">
                            <div class="review-img-block">
                                <div class="user-image"><img src="{{asset('frontend/images/common/user-image.jpg')}}" alt="review"></div>
                                <div class="user-content">
                                    <h5>Karan Kumar</h5>
                                    <p>CTO @ Amber Fund</p>
                                </div>
                            </div>
                            <div class="review-content mt30 mb30">
                                <p>When it comes to website development and SEO, Fanatech has been the best company I've worked with so far. We hired them for both of our businesses and have seen a drastic increase in our customer base.</p>
                            </div>
                            <div class="review-footer pair-block">
                                <div class="image-icon">
                                    <a href="#"><img src="{{asset('frontend/images/icons/google.png')}}" alt="icon"></a>
                                </div>
                                <div class="starrating">
                                    <ul>
                                        <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="blueket-card-noise card-img-round pt30">
                            <div class="review-img-block">
                                <div class="user-image"><img src="{{asset('frontend/images/common/user-image-2.jpg')}}" alt="review"></div>
                                <div class="user-content">
                                    <h5>Mike Smith</h5>
                                    <p>Business Man</p>
                                </div>
                            </div>
                            <div class="review-content mt30 mb30">
                                <p>When it comes to website development and SEO, Fanatech has been the best company I've worked with so far. We hired them for both of our businesses and have seen a drastic increase in our customer base.</p>
                            </div>
                            <div class="review-footer pair-block">
                                <div class="image-icon">
                                    <a href="#"><img src="{{asset('frontend/images/icons/google.png')}}" alt="icon"></a>
                                </div>
                                <div class="starrating">
                                    <ul>
                                        <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="blueket-card-noise card-img-round pt30">
                            <div class="review-img-block">
                                <div class="user-image"><img src="{{asset('frontend/images/common/user-image-3.jpg')}}" alt="review"></div>
                                <div class="user-content">
                                    <h5>Riya Smily</h5>
                                    <p>CEO @ Tema Security</p>
                                </div>
                            </div>
                            <div class="review-content mt30 mb30">
                                <p>When it comes to website development and SEO, Fanatech has been the best company I've worked with so far. We hired them for both of our businesses and have seen a drastic increase in our customer base.</p>
                            </div>
                            <div class="review-footer pair-block">
                                <div class="image-icon">
                                    <a href="#"><img src="{{asset('frontend/images/icons/google.png')}}" alt="icon"></a>
                                </div>
                                <div class="starrating">
                                    <ul>
                                        <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="blueket-card-noise card-img-round pt30">
                            <div class="review-img-block">
                                <div class="user-image"><img src="{{asset('frontend/images/common/user-image-4.jpg')}}" alt="review"></div>
                                <div class="user-content">
                                    <h5>Oliver Kanjorva</h5>
                                    <p>Business Man</p>
                                </div>
                            </div>
                            <div class="review-content mt30 mb30">
                                <p>When it comes to website development and SEO, Fanatech has been the best company I've worked with so far. We hired them for both of our businesses and have seen a drastic increase in our customer base.</p>
                            </div>
                            <div class="review-footer pair-block">
                                <div class="image-icon">
                                    <a href="#"><img src="{{asset('frontend/images/icons/google.png')}}" alt="icon"></a>
                                </div>
                                <div class="starrating">
                                    <ul>
                                        <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt60 v-center">
                <div class="col-lg-4">
                    <h4>Read More Review on</h4>
                    <p class="mt15">Read our client's testimonials all around the web. We deliver quality service that loves everyone.</p>
                </div>
                <div class="col-lg-8">
                    <div class="review-links mt30">
                        <a href="#" class="wow fadeIn" data-wow-delay=".2s"><img src="{{asset('frontend/images/clients/trustplot.svg')}}" alt="#"> </a>
                        <a href="#" class="wow fadeIn" data-wow-delay=".4s"><img src="{{asset('frontend/images/clients/clutchreview.svg')}}" alt="#"> </a>
                        <a href="#" class="wow fadeIn" data-wow-delay=".6s"><img src="{{asset('frontend/images/clients/appstore.svg')}}" alt="#"> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-space bkbg2 black-bg-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <span class="scriptheading mb15 wow fadeIn" data-wow-delay=".2s">Partners</span>
                    <h2 class="text-gradient-1 wow fadeIn" data-wow-delay=".4s">We Work With Leading Firms </h2>
                </div>
            </div>
            <div class="row mt60">
                <div class="col-lg-12">
                    <div class="clients-logos">
                        <ul class="text-center">
                            <li class=" wow fadeIn" data-wow-delay=".1s">
                                <div class="brand-logo"><img src="{{asset('frontend/images/clients/Alldritt Land logo.jpeg')}}" alt="clients" class="img-fluid"></div>
                            </li>
                            <li class=" wow fadeIn" data-wow-delay=".4s">
                                <div class="brand-logo"><img src="{{asset('frontend/images/clients/2 copy.png')}}" alt="clients" class="img-fluid"></div>
                            </li>
                            <li class=" wow fadeIn" data-wow-delay=".7s">
                                <div class="brand-logo"><img src="{{asset('frontend/images/clients/Attachment_1640361725 (1).png')}}" alt="clients" class="img-fluid"></div>
                            </li>
                            <li class=" wow fadeIn" data-wow-delay="1s">
                                <div class="brand-logo"><img src="{{asset('frontend/images/clients/Attachment_1640365932.png')}}" alt="clients" class="img-fluid"></div>
                            </li>
                            <li class=" wow fadeIn" data-wow-delay="1.3s">
                                <div class="brand-logo"><img src="{{asset('frontend/images/clients/Attachment_1640361725 (1).png')}}" alt="clients" class="img-fluid"></div>
                            </li>
                            <li class=" wow fadeIn" data-wow-delay="1.6s">
                                <div class="brand-logo"><img src="{{asset('frontend/images/clients/Attachment_1640446776.png')}}" alt="clients" class="img-fluid"></div>
                            </li>
                            <li class=" wow fadeIn" data-wow-delay="1.9s">
                                <div class="brand-logo"><img src="{{asset('frontend/images/clients/Attachment_1628093977.png')}}" alt="clients" class="img-fluid"></div>
                            </li>
                            <li class=" wow fadeIn" data-wow-delay="2.2s">
                                <div class="brand-logo"><img src="{{asset('frontend/images/clients/fdxcbv-1024x702.png')}}" alt="clients" class="img-fluid"></div>
                            </li>
                            <li class=" wow fadeIn" data-wow-delay="2.5s">
                                <div class="brand-logo"><img src="{{asset('frontend/images/clients/fitzu Black png (1).png')}}" alt="clients" class="img-fluid"></div>
                            </li>
                            <li class=" wow fadeIn" data-wow-delay="2.8s">
                                <div class="brand-logo"><img src="{{asset('frontend/images/clients/logo-china-edge-vertical_2x.png')}}" alt="clients" class="img-fluid"></div>
                            </li>
                            <li class=" wow fadeIn" data-wow-delay="3.1s">
                                <div class="brand-logo"><img src="{{asset('frontend/images/clients/LOGO RE azzurro BIG.png')}}" alt="clients" class="img-fluid"></div>
                            </li>
                            <li class=" wow fadeIn" data-wow-delay="3.4s">
                                <div class="brand-logo"><img src="{{asset('frontend/images/clients/NR_logo-01.png')}}" alt="clients" class="img-fluid"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="newsandblogs section-space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <span class="scriptheading mb15 wow fadeIn" data-wow-delay=".2s">Stay Updated</span>
                    <h2 class="text-gradient-1 wow fadeIn" data-wow-delay=".4s">News & blog Updates</h2>
                </div>
            </div>
            <div class="row mt30 g-0 bdrwor roundimg">
                <div class="col-lg-4 bdrwor-rt cardaclr wow fadeIn" data-wow-delay=".2s">
                    <a href="blogs-details.html">
                        <div class="swbluketcard animation">
                            <div class="div-card-img-info">
                                <div class="dateandvieicon mb20">
                                    <p>March 7, 2022</p>
                                    <p>20 <i class="fa-solid fa-eye"></i></p>
                                </div>
                                <div class="img-div-sw-bkt"><img src="{{asset('frontend/images/blogs/uiuxdesign.jpg')}}" alt="blogs"></div>
                                <div class="info-div-sw-btk">
                                    <h4 class="blogtitle txt-white">Free UI/UX Tutorials & Tools: The Learn UI Design Blog</h4>
                                    <p class="blogsubdata">A design blog by Tom Smile on typography, color, layout, UX, design process.</p>
                                </div>
                            </div>
                            <div class="cardlinkfooter">
                                <p class="buttontext">Read Article</p>
                                <div class="linkiconsw"><i class="fa-solid fa-arrow-right-long"></i></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 bdrwor-rt cardaclr wow fadeIn" data-wow-delay=".4s">
                    <a href="blogs-details.html">
                        <div class="swbluketcard animation">
                            <div class="div-card-img-info">
                                <div class="dateandvieicon mb20">
                                    <p>March 4, 2022</p>
                                    <p>110 <i class="fa-solid fa-eye"></i></p>
                                </div>
                                <div class="img-div-sw-bkt"><img src="{{asset('frontend/images/blogs/marketing.jpg')}}" alt="blogs"></div>
                                <div class="info-div-sw-btk">
                                    <h4 class="blogtitle txt-white">5 Marketing Tips to Follow for Their Expertise & Best Practices</h4>
                                    <p class="blogsubdata">When doing research for your own publications or simply educating oneself on</p>
                                </div>
                            </div>
                            <div class="cardlinkfooter">
                                <p class="buttontext">Read Article</p>
                                <div class="linkiconsw"><i class="fa-solid fa-arrow-right-long"></i></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 cardaclr wow fadeIn" data-wow-delay=".6s">
                    <a href="blogs-details.html">
                        <div class="swbluketcard animation">
                            <div class="div-card-img-info">
                                <div class="dateandvieicon mb20">
                                    <p>March 1, 2022</p>
                                    <p>150 <i class="fa-solid fa-eye"></i></p>
                                </div>
                                <div class="img-div-sw-bkt"><img src="{{asset('frontend/images/blogs/app-design.jpg')}}" alt="blogs"></div>
                                <div class="info-div-sw-btk">
                                    <h4 class="blogtitle txt-white">How Technology Trends are Changing the app Industry</h4>
                                    <p class="blogsubdata">The app sector, particularly the grocery market, is quite unpredictable.</p>
                                </div>
                            </div>
                            <div class="cardlinkfooter">
                                <p class="buttontext">Read Article</p>
                                <div class="linkiconsw"><i class="fa-solid fa-arrow-right-long"></i></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection

