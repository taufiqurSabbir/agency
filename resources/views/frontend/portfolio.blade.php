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
                        <a href="#"><i class="fa-solid fa-envelope mr10"></i> <span class="__cf_email__" data-cfemail="224a50625b4d5750554740514b56470c414d4f">[email&#160;protected]</span></a>
                        <a href="#"><i class="fa-solid fa-envelope mr10"></i> <span class="__cf_email__" data-cfemail="8be2e5ede4cbf2e4fef9fceee9f8e2ffeea5e8e4e6">[email&#160;protected]</span></a>
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


    <section class="breadcrum-area big-breadcrum-area bg-efffect-2">
        <div class="container index-up">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="breadcrum-area-content">
                        <ul class="list-h-styled mb30">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Portfolio</li>
                        </ul>
                        <h2 class="mb15">Some of our Best work that we are Proud of</h2>
                        <p>Expertise helps Fanatech tackle the world's most difficult challenges. Fanatech provides digital products for worldwide brands on the web.</p>
                    </div>
                </div>
                <div class="col-lg-5 flex-end mmt30">
                    <h5>Portfolio on Other Websites.</h5>
                    <div class="portfolio-source dashedbdr animation">
                        <div class="port-ref-link">
                            <a href="#"><img src="{{asset('frontend/images/icons/dribbble.svg')}}" alt="dribbble-logo"> <span>Dribbble</span> </a>
                        </div>
                        <div class="port-ref-link">
                            <a href="#"><img src="{{asset('frontend/images/icons/behance.svg')}}" alt="dribbble-logo"> <span>Behance</span> </a>
                        </div>
                        <div class="port-ref-link">
                            <a href="#"><img src="{{asset('frontend/images/icons/instagram.svg')}}" alt="dribbble-logo"> <span>Instagram</span> </a>
                        </div>
                        <div class="port-ref-link">
                            <a href="#"><img src="{{asset('frontend/images/icons/artstations.svg')}}" alt="dribbble-logo"> <span>Artstations</span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-space bg--2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h4>Our Selected <span class="light-et">Works</span></h4>
                    <p class="mt15">Your ingenious digital partner for expanding your brand globally.</p>
                </div>
            </div>

            <div class="row mt30 justify-content-between v-center">
                <div class="col-lg-6 order1 mt30 wow fadeIn" data-wow-delay=".2s">
                    <div class="card-img-round">
                        <img src="{{asset('frontend/images/portfolio/work-1.jpg')}}" alt="project">
                    </div>
                </div>
                <div class="col-lg-5 order2 mt30 wow fadeIn" data-wow-delay=".6s">
                    <div class="project-card-info">
                        <span class="scriptheading mb15">Figma, UI/UX, Android</span>
                        <h3>Multi-Vendor eCommerce Store Android App</h3>
                        <a href="#" class="sw-btn sw-blue-btn mt50">Live View <i class="fa-solid fa-arrow-trend-up"></i></a>

                        <div class="icon-label mt50">
                            <div class="icon-data">
                                <img src="{{asset('frontend/images/icons/python.svg')}}" alt="Python">
                                <p>Python</p>
                            </div>
                            <div class="icon-data">
                                <img src="{{asset('frontend/images/icons/react.svg')}}" alt="figma">
                                <p>React</p>
                            </div>
                            <div class="icon-data">
                                <img src="{{asset('frontend/images/icons/figma.svg')}}" alt="figma">
                                <p>Figma</p>
                            </div>
                            <div class="icon-data">
                                <img src="{{asset('frontend/images/icons/android.svg')}}" alt="Android">
                                <p>Android</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="row mt30 justify-content-between v-center">
                <div class="col-lg-5 order2 mt30 wow fadeIn" data-wow-delay=".2s">
                    <div class="project-card-info">
                        <span class="scriptheading mb15">Photoshop, PhP, HTML</span>
                        <h3>Restaurant Web Development</h3>
                        <a href="#" class="sw-btn sw-blue-btn mt50">Live View <i class="fa-solid fa-arrow-trend-up"></i></a>

                        <div class="icon-label mt50">
                            <div class="icon-data">
                                <img src="{{asset('frontend/images/icons/python.svg')}}" alt="Python">
                                <p>Python</p>
                            </div>
                            <div class="icon-data">
                                <img src="{{asset('frontend/images/icons/react.svg')}}" alt="figma">
                                <p>React</p>
                            </div>
                            <div class="icon-data">
                                <img src="{{asset('frontend/images/icons/figma.svg')}}" alt="figma">
                                <p>Figma</p>
                            </div>
                            <div class="icon-data">
                                <img src="{{asset('frontend/images/icons/android.svg')}}" alt="Android">
                                <p>Android</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 order1 mt30 wow fadeIn" data-wow-delay=".6s">
                    <div class="card-img-round">
                        <img src="{{asset('frontend/images/portfolio/work-2.jpg')}}" alt="project">
                    </div>
                </div>
            </div>


            <div class="row mt30 justify-content-between v-center">
                <div class="col-lg-6 order1 mt30 wow fadeIn" data-wow-delay=".2s">
                    <div class="card-img-round">
                        <img src="{{asset('frontend/images/portfolio/work-3.jpg')}}" alt="project">
                    </div>
                </div>
                <div class="col-lg-5 order2 mt30 wow fadeIn" data-wow-delay=".6s">
                    <div class="project-card-info">
                        <span class="scriptheading mb15">Adobe XD, Java, React</span>
                        <h3>Fashion Store iOs App & Web Design</h3>
                        <a href="#" class="sw-btn sw-blue-btn mt50">Live View <i class="fa-solid fa-arrow-trend-up"></i></a>

                        <div class="icon-label mt50">
                            <div class="icon-data">
                                <img src="{{asset('frontend/images/icons/python.svg')}}" alt="Python">
                                <p>Python</p>
                            </div>
                            <div class="icon-data">
                                <img src="{{asset('frontend/images/icons/react.svg')}}" alt="figma">
                                <p>React</p>
                            </div>
                            <div class="icon-data">
                                <img src="{{asset('frontend/images/icons/figma.svg')}}" alt="figma">
                                <p>Figma</p>
                            </div>
                            <div class="icon-data">
                                <img src="{{asset('frontend/images/icons/android.svg')}}" alt="Android">
                                <p>Android</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
