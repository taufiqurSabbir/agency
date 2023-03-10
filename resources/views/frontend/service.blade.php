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
                        <a href="#"><i class="fa-solid fa-envelope mr10"></i> <span class="__cf_email__" data-cfemail="9bf3e9dbe2f4eee9ecfef9e8f2effeb5f8f4f6">[email&#160;protected]</span></a>
                        <a href="#"><i class="fa-solid fa-envelope mr10"></i> <span class="__cf_email__" data-cfemail="147d7a727b546d7b6166637176677d60713a777b79">[email&#160;protected]</span></a>
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
                <div class="blueketcotactform-sw-blogpage mt50">
                    <span class="scriptheading mb30">Request a Quote</span>
                    <form class="row">
                        <div class="col-lg-12 mb20">
                            <div class="form-inputs">
                                <input type="text" class="form-controls" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-lg-12 mb20">
                            <div class="form-inputs">
                                <input type="email" class="form-controls" placeholder="Mobile Number">
                            </div>
                        </div>
                        <div class="col-lg-12 mb20">
                            <div class="form-inputs">
                                <textarea class="form-controls sw-textarea" rows="3" placeholder="Enter Message"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 mb20 mt20">
                            <div class="form-inputs plus-terms">
                                <button type="submit" class="sw-btn sw-orange-btn">Submit <i class="fa-solid fa-arrow-trend-up"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <section class="breadcrum-area bgimg" data-background="{{asset('frontend/images/service/service-banner-1.jpg')}}">
        <div class="container index-up">
            <div class="row v-center justify-content-between">
                <div class="col-lg-6">
                    <div class="breadcrum-area-content crdbkt">
                        <div class="bradecrumborderdesign-sw">
                            <span class="vtextonborder">Web Design & Development</span>
                            <h1>Creative Web Design Service</h1>
                            <p>Our creative web development firm has been creating apps that are specifically adapted to our clients' needs.</p>
                            <a href="#" class="sw-btn sw-orange-btn mt30">Get A Quote <i class="fa-solid fa-arrow-trend-up"></i></a>
                        </div>
                        <ul class="list-h-styled mt10">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="index.html">Service</a></li>
                            <li class="active">Android Development</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-space">
        <div class="container">
            <div class="row justify-content-between v-center">
                <div class="col-lg-6">
                    <div class="paragraph-block">
                        <span class="scriptheading dashbefore mb15">Overview</span>
                        <h2>Web Design Agency</h2>
                        <h5><em>Design and development of high-quality web and mobile applications that will help you reach new heights in your business.</em></h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="img-collage-set row mmt40">
                        <div class="blueketshape1 shapesw shapecontrol-4"></div>
                        <div class="col-6 index-up">
                            <div class="imgcover roundimg"> <img src="{{asset('frontend/images/portfolio/website--1.jpg')}}" alt="img"></div>
                        </div>
                        <div class="col-6 index-up">
                            <div class="imgcover roundimg"> <img src="{{asset('frontend/images/portfolio/website--2.jpg')}}" alt="img"></div>
                        </div>
                        <div class="blueketshape2 shapesw shapecontrol-3"></div>
                    </div>
                </div>
            </div>
            <div class="row mt60">
                <div class="col-lg-12">
                    <div class="counter-numbers row-blocks fourcounter mt-0 mb-0">
                        <div class="counter-setdiv">
                            <p> <span data-count-to="25" class="odometer"></span>+</p>
                            <span class="countertag">Professionals Team</span>
                        </div>
                        <div class="counter-setdiv">
                            <p><span data-count-to="010" class="odometer"></span>+</p>
                            <span class="countertag">Years of Average Experience</span>
                        </div>
                        <div class="counter-setdiv">
                            <p><span data-count-to="1500" class="odometer"></span>+</p>
                            <span class="countertag">Successful Projects Delivered</span>
                        </div>
                        <div class="counter-setdiv">
                            <p><span data-count-to="1000" class="odometer"></span>+</p>
                            <span class="countertag">Happy Clients</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-space bkbg2 darkbg2">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <span class="scriptheading dashbefore mb15">Our Service</span>
                    <h2>Our Mobile App Development Services</h2>
                </div>
            </div>
            <div class="row mt30">
                <div class="col-lg-4 col-sm-6 mt30">
                    <div class="sw-card swbdr">
                        <div class="cardicon"><img src="{{asset('frontend/images/icons/android.svg')}}" alt="icon"></div>
                        <h4>iOS App Development</h4>
                        <p>Fanatech develops web applications for leading companies in India and around the world. If you're looking for Web App Development in India, you've come to the right place.</p>
                        <div class="techusedin-sw">
                            <span>React JS</span>
                            <span>Angular JS</span>
                            <span>Vue JS</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt30">
                    <div class="sw-card swbdr">
                        <div class="cardicon"><img src="{{asset('frontend/images/icons/ios.png')}}" alt="icon"></div>
                        <h4>iOS App Development</h4>
                        <p>Fanatech develops web applications for leading companies in India and around the world. If you're looking for Web App Development in India, you've come to the right place.</p>
                        <div class="techusedin-sw">
                            <span>React JS</span>
                            <span>Angular JS</span>
                            <span>Vue JS</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt30">
                    <div class="sw-card swbdr">
                        <div class="cardicon"><img src="{{asset('frontend/images/icons/search-engine-optimization.png')}}" alt="icon"></div>
                        <h4>Digital Marketing</h4>
                        <p>Fanatech develops web applications for leading companies in India and around the world. If you're looking for Web App Development in India, you've come to the right place.</p>
                        <div class="techusedin-sw">
                            <span>React JS</span>
                            <span>Angular JS</span>
                            <span>Vue JS</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt30">
                    <div class="sw-card swbdr">
                        <div class="cardicon"><img src="{{asset('frontend/images/icons/copywriting.png')}}" alt="icon"></div>
                        <h4>Content Marketing</h4>
                        <p>Fanatech develops web applications for leading companies in India and around the world. If you're looking for Web App Development in India, you've come to the right place.</p>
                        <div class="techusedin-sw">
                            <span>React JS</span>
                            <span>Angular JS</span>
                            <span>Vue JS</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt30">
                    <div class="sw-card swbdr">
                        <div class="cardicon"><img src="{{asset('frontend/images/icons/shop.png')}}" alt="icon"></div>
                        <h4>eCommerce Development</h4>
                        <p>Fanatech develops web applications for leading companies in India and around the world. If you're looking for Web App Development in India, you've come to the right place.</p>
                        <div class="techusedin-sw">
                            <span>React JS</span>
                            <span>Angular JS</span>
                            <span>Vue JS</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt30">
                    <div class="sw-card swbdr">
                        <div class="cardicon"><img src="{{asset('frontend/images/icons/cloud-data.png')}}" alt="icon"></div>
                        <h4>Cloud Solution</h4>
                        <p>Fanatech develops web applications for leading companies in India and around the world. If you're looking for Web App Development in India, you've come to the right place.</p>
                        <div class="techusedin-sw">
                            <span>React JS</span>
                            <span>Angular JS</span>
                            <span>Vue JS</span>
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
                        <div class="col-4 ">
                            <div class="imgcover roundimg"> <img src="{{asset('frontend/images/common/developer.jpg')}}" alt="img" class="w-100"></div>
                        </div>
                        <div class="col-6  flex-end">
                            <div class="imgcover roundimg"> <img src="{{asset('frontend/images/common/developer-2.jpg')}}" alt="img"></div>
                        </div>
                        <div class="col-6  offset-md-1 mt30">
                            <div class="imgcover roundimg"> <img src="{{asset('frontend/images/common/compute-1.jpg')}}" alt="img"></div>
                        </div>
                        <div class="col-4 align-self-start mt30">
                            <div class="imgcover roundimg"> <img src="{{asset('frontend/images/common/computer.jpg')}}" alt="img" class="w-100"></div>
                        </div>
                        <div class="blueketshape2 shapesw shapecontrol-2"></div>
                    </div>
                </div>
                <div class="col-lg-6 mmt40">
                    <span class="scriptheading dashbefore mb15">Hire Us</span>
                    <h4>Why Hire The Fanatech As Your Mobile App Development Company?</h4>
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


    <section class="tech-block bkbg0  section-space position-relative overflow-hidden">
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


    <section class="industry-work section-space bg-efffect-1">
        <div class="container index-up">
            <div class="row">
                <div class="col-lg-10">
                    <span class="scriptheading dashbefore mb15">We Work In</span>
                    <h2 class="text-gradient-1">Our Industry Wise Solution</h2>
                </div>
            </div>
            <div class="row justify-content-between mt30">
                <div class="col-lg-3 mt30">
                    <div class="sw-tabs-links stickyposition-sw">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="sw1-tab" data-bs-toggle="tab" data-bs-target="#sw1" type="button" role="tab" aria-controls="sw1" aria-selected="true"><i class="fa-solid fa-cart-shopping"></i> Retails Industry</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="sw2-tab" data-bs-toggle="tab" data-bs-target="#sw2" type="button" role="tab" aria-controls="sw2" aria-selected="false"><i class="fa-solid fa-stethoscope"></i> Health Care</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="sw3-tab" data-bs-toggle="tab" data-bs-target="#sw3" type="button" role="tab" aria-controls="sw3" aria-selected="false"><i class="fa-solid fa-dumbbell"></i> Fitness</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="sw4-tab" data-bs-toggle="tab" data-bs-target="#sw4" type="button" role="tab" aria-controls="sw4" aria-selected="false"><i class="fa-solid fa-pizza-slice"></i> Food Delivery</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="sw5-tab" data-bs-toggle="tab" data-bs-target="#sw5" type="button" role="tab" aria-controls="sw5" aria-selected="false"><i class="fa-solid fa-house-chimney"></i> Real Estate</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="sw6-tab" data-bs-toggle="tab" data-bs-target="#sw6" type="button" role="tab" aria-controls="sw6" aria-selected="false"><i class="fa-solid fa-users"></i> Social Networking</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="sw7-tab" data-bs-toggle="tab" data-bs-target="#sw7" type="button" role="tab" aria-controls="sw7" aria-selected="false"><i class="fa-solid fa-graduation-cap"></i> Education</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="sw8-tab" data-bs-toggle="tab" data-bs-target="#sw8" type="button" role="tab" aria-controls="sw8" aria-selected="false"><i class="fa-solid fa-guitar"></i> Entertainment</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 mt30">
                    <div class="sw-tabs-data">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="sw1" role="tabpanel" aria-labelledby="sw1-tab">
                                <div class="sw-work-data">
                                    <div class="work-title-block">
                                        <h3 class="mb15">Retails Industry</h3>
                                        <p>A smart workflow remains at the center of any excellent experience. With a powerful digital solution, you can accelerate your digital transformation to match the particular demands of your industry.</p>
                                        <div class="servicetags mt30">
                                            <a href="#" class="btgs dotinswbdr">Customers Assistance</a>
                                            <a href="#" class="btgs dotinswbdr">Admin Dashboard</a>
                                            <a href="#" class="btgs dotinswbdr">Properties Listing</a>
                                            <a href="#" class="btgs dotinswbdr">Photo Editor Software</a>
                                            <a href="#" class="btgs dotinswbdr">Content Marketing</a>
                                            <a href="#" class="btgs dotinswbdr">Website Optimization</a>
                                        </div>
                                    </div>
                                    <div class="sw-work-preview mt45">
                                        <div class="sw-left-slot"><img src="{{asset('frontend/images/portfolio/retail-1.jpg')}}" alt="work" class="w-100 roundimg"></div>
                                        <div class="sw-right-slot"><img src="{{asset('frontend/images/portfolio/retail-2.jpg')}}" alt="work" class="w-100 roundimg"> <img src="{{asset('frontend/images/portfolio/retail-3.jpg')}}" alt="work" class="w-100 roundimg"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sw2" role="tabpanel" aria-labelledby="sw2-tab">
                                <div class="sw-work-data">
                                    <div class="work-title-block">
                                        <h3 class="mb15">Health Care</h3>
                                        <p>A smart workflow remains at the center of any excellent experience. With a powerful digital solution, you can accelerate your digital transformation to match the particular demands of your industry.</p>
                                        <div class="servicetags mt30">
                                            <a href="#" class="btgs dotinswbdr">Customers Assistance</a>
                                            <a href="#" class="btgs dotinswbdr">Admin Dashboard</a>
                                            <a href="#" class="btgs dotinswbdr">Properties Listing</a>
                                            <a href="#" class="btgs dotinswbdr">Photo Editor Software</a>
                                            <a href="#" class="btgs dotinswbdr">Content Marketing</a>
                                            <a href="#" class="btgs dotinswbdr">Website Optimization</a>
                                        </div>
                                    </div>
                                    <div class="sw-work-preview mt45">
                                        <div class="sw-left-slot"><img src="{{asset('frontend/images/portfolio/healthCare-1.jpg')}}" alt="work" class="w-100 roundimg"></div>
                                        <div class="sw-right-slot"><img src="{{asset('frontend/images/portfolio/healthCare-2.jpg')}}" alt="work" class="w-100 roundimg"> <img src="{{asset('frontend/images/portfolio/healthCare-3.jpg')}}" alt="work" class="w-100 roundimg"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sw3" role="tabpanel" aria-labelledby="sw3-tab">
                                <div class="sw-work-data">
                                    <div class="work-title-block">
                                        <h3 class="mb15">Fitness</h3>
                                        <p>A smart workflow remains at the center of any excellent experience. With a powerful digital solution, you can accelerate your digital transformation to match the particular demands of your industry.</p>
                                        <div class="servicetags mt30">
                                            <a href="#" class="btgs dotinswbdr">Customers Assistance</a>
                                            <a href="#" class="btgs dotinswbdr">Admin Dashboard</a>
                                            <a href="#" class="btgs dotinswbdr">Properties Listing</a>
                                            <a href="#" class="btgs dotinswbdr">Photo Editor Software</a>
                                            <a href="#" class="btgs dotinswbdr">Content Marketing</a>
                                            <a href="#" class="btgs dotinswbdr">Website Optimization</a>
                                        </div>
                                    </div>
                                    <div class="sw-work-preview mt45">
                                        <div class="sw-left-slot"><img src="{{asset('frontend/images/portfolio/fitness-1.jpg')}}" alt="work" class="w-100 roundimg"></div>
                                        <div class="sw-right-slot"><img src="{{asset('frontend/images/portfolio/fitness-2.jpg')}}" alt="work" class="w-100 roundimg"> <img src="{{asset('frontend/images/portfolio/fitness-3.jpg')}}" alt="work" class="w-100 roundimg"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sw4" role="tabpanel" aria-labelledby="sw4-tab">
                                <div class="sw-work-data">
                                    <div class="work-title-block">
                                        <h3 class="mb15">Food Delivery</h3>
                                        <p>A smart workflow remains at the center of any excellent experience. With a powerful digital solution, you can accelerate your digital transformation to match the particular demands of your industry.</p>
                                        <div class="servicetags mt30">
                                            <a href="#" class="btgs dotinswbdr">Customers Assistance</a>
                                            <a href="#" class="btgs dotinswbdr">Admin Dashboard</a>
                                            <a href="#" class="btgs dotinswbdr">Properties Listing</a>
                                            <a href="#" class="btgs dotinswbdr">Photo Editor Software</a>
                                            <a href="#" class="btgs dotinswbdr">Content Marketing</a>
                                            <a href="#" class="btgs dotinswbdr">Website Optimization</a>
                                        </div>
                                    </div>
                                    <div class="sw-work-preview mt45">
                                        <div class="sw-left-slot"><img src="{{asset('frontend/images/portfolio/food-delivery-1.jpg')}}" alt="work" class="w-100 roundimg"></div>
                                        <div class="sw-right-slot"><img src="{{asset('frontend/images/portfolio/food-delivery-2.jpg')}}" alt="work" class="w-100 roundimg"> <img src="{{asset('frontend/images/portfolio/food-delivery-3.jpg')}}" alt="work" class="w-100 roundimg"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sw5" role="tabpanel" aria-labelledby="sw5-tab">
                                <div class="sw-work-data">
                                    <div class="work-title-block">
                                        <h3 class="mb15">Real Estate</h3>
                                        <p>A smart workflow remains at the center of any excellent experience. With a powerful digital solution, you can accelerate your digital transformation to match the particular demands of your industry.</p>
                                        <div class="servicetags mt30">
                                            <a href="#" class="btgs dotinswbdr">Customers Assistance</a>
                                            <a href="#" class="btgs dotinswbdr">Admin Dashboard</a>
                                            <a href="#" class="btgs dotinswbdr">Properties Listing</a>
                                            <a href="#" class="btgs dotinswbdr">Photo Editor Software</a>
                                            <a href="#" class="btgs dotinswbdr">Content Marketing</a>
                                            <a href="#" class="btgs dotinswbdr">Website Optimization</a>
                                        </div>
                                    </div>
                                    <div class="sw-work-preview mt45">
                                        <div class="sw-left-slot"><img src="{{asset('frontend/images/portfolio/realestate-1.jpg')}}" alt="work" class="w-100 roundimg"></div>
                                        <div class="sw-right-slot"><img src="{{asset('frontend/images/portfolio/realestate-2.jpg')}}" alt="work" class="w-100 roundimg"> <img src="{{asset('frontend/images/portfolio/realestate-3.jpg')}}" alt="work" class="w-100 roundimg"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sw6" role="tabpanel" aria-labelledby="sw6-tab">
                                <div class="sw-work-data">
                                    <div class="work-title-block">
                                        <h3 class="mb15">Social Networking</h3>
                                        <p>A smart workflow remains at the center of any excellent experience. With a powerful digital solution, you can accelerate your digital transformation to match the particular demands of your industry.</p>
                                        <div class="servicetags mt30">
                                            <a href="#" class="btgs dotinswbdr">Customers Assistance</a>
                                            <a href="#" class="btgs dotinswbdr">Admin Dashboard</a>
                                            <a href="#" class="btgs dotinswbdr">Properties Listing</a>
                                            <a href="#" class="btgs dotinswbdr">Photo Editor Software</a>
                                            <a href="#" class="btgs dotinswbdr">Content Marketing</a>
                                            <a href="#" class="btgs dotinswbdr">Website Optimization</a>
                                        </div>
                                    </div>
                                    <div class="sw-work-preview mt45">
                                        <div class="sw-left-slot"><img src="{{asset('frontend/images/portfolio/socialnetworking-1.jpg')}}" alt="work" class="w-100 roundimg"></div>
                                        <div class="sw-right-slot"><img src="{{asset('frontend/images/portfolio/retail-3.jpg')}}" alt="work" class="w-100 roundimg"> <img src="{{asset('frontend/images/portfolio/socialnetworking-2.jpg')}}" alt="work" class="w-100 roundimg"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sw7" role="tabpanel" aria-labelledby="sw7-tab">
                                <div class="sw-work-data">
                                    <div class="work-title-block">
                                        <h3 class="mb15">Education</h3>
                                        <p>A smart workflow remains at the center of any excellent experience. With a powerful digital solution, you can accelerate your digital transformation to match the particular demands of your industry.</p>
                                        <div class="servicetags mt30">
                                            <a href="#" class="btgs dotinswbdr">Customers Assistance</a>
                                            <a href="#" class="btgs dotinswbdr">Admin Dashboard</a>
                                            <a href="#" class="btgs dotinswbdr">Properties Listing</a>
                                            <a href="#" class="btgs dotinswbdr">Photo Editor Software</a>
                                            <a href="#" class="btgs dotinswbdr">Content Marketing</a>
                                            <a href="#" class="btgs dotinswbdr">Website Optimization</a>
                                        </div>
                                    </div>
                                    <div class="sw-work-preview mt45">
                                        <div class="sw-left-slot"><img src="{{asset('frontend/images/portfolio/education-1.jpg')}}" alt="work" class="w-100 roundimg"></div>
                                        <div class="sw-right-slot"><img src="{{asset('frontend/images/portfolio/education-2.jpg')}}" alt="work" class="w-100 roundimg"> <img src="{{asset('frontend/images/portfolio/education-3.jpg')}}" alt="work" class="w-100 roundimg"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sw8" role="tabpanel" aria-labelledby="sw8-tab">
                                <div class="sw-work-data">
                                    <div class="work-title-block">
                                        <h3 class="mb15">Entertainment</h3>
                                        <p>A smart workflow remains at the center of any excellent experience. With a powerful digital solution, you can accelerate your digital transformation to match the particular demands of your industry.</p>
                                        <div class="servicetags mt30">
                                            <a href="#" class="btgs dotinswbdr">Customers Assistance</a>
                                            <a href="#" class="btgs dotinswbdr">Admin Dashboard</a>
                                            <a href="#" class="btgs dotinswbdr">Properties Listing</a>
                                            <a href="#" class="btgs dotinswbdr">Photo Editor Software</a>
                                            <a href="#" class="btgs dotinswbdr">Content Marketing</a>
                                            <a href="#" class="btgs dotinswbdr">Website Optimization</a>
                                        </div>
                                    </div>
                                    <div class="sw-work-preview mt45">
                                        <div class="sw-left-slot"><img src="{{asset('frontend/images/portfolio/entertainment-1.jpg')}}" alt="work" class="w-100 roundimg"></div>
                                        <div class="sw-right-slot"><img src="{{asset('frontend/images/portfolio/entertainment-2.jpg')}}" alt="work" class="w-100 roundimg"> <img src="{{asset('frontend/images/portfolio/entertainment-3.jpg')}}" alt="work" class="w-100 roundimg"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pricing-block section-space bkbg3 black-bg-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <span class="scriptheading mb15">Our Pricing Plan</span>
                    <h2 class="text-gradient-1">Choose a Plan That Works For You</h2>
                </div>
            </div>
            <div class="row mt60">
                <div class="col-lg-12">
                    <div class="pricing-table-with-cta">

                        <div class="pricing-table">
                            <div class="pricing-column gradient-1 tblfirst">
                                <div class="p-head-sw">
                                    <h3>Basic</h3>
                                    <p>For startups and enterprises with on-going design needs.</p>
                                    <h2 class="pricemain"><sup>$</sup><span>1,999</span>/m</h2>
                                </div>
                                <div class="p-btn-cta-sw">
                                    <div class="blueketbtn"><a href="#" class="sw-btn sw-white-btn">Buy Now <i class="fa-solid fa-right-long"></i></a></div>
                                    <a href="#" class="inline-btn txt-white mt15">Book a call <i class="fa-solid fa-square-phone-flip"></i></a>
                                </div>
                                <div class="what-in-plan-sw">
                                    <h5>What's included:</h5>
                                    <ul class="mt15">
                                        <li>Unlimited requests</li>
                                        <li>Unlimited revisions</li>
                                        <li>Unlimited brands</li>
                                        <li>Unlimited team members</li>
                                        <li>Free stock photos</li>
                                        <li>Native source files included</li>
                                        <li>Cancel anytime</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pricing-column gradient-2">
                                <div class="recomnd-block-sw">
                                    <div>MOST POPULAR</div>
                                </div>
                                <div class="p-head-sw">
                                    <h3>Deluxe</h3>
                                    <p>For startups and enterprises with on-going design needs.</p>
                                    <h2 class="pricemain"><sup>$</sup><span>2,999</span>/m</h2>
                                </div>
                                <div class="p-btn-cta-sw">
                                    <div class="blueketbtn"><a href="#" class="sw-btn sw-white-btn">Buy Now <i class="fa-solid fa-right-long"></i></a></div>
                                    <a href="#" class="inline-btn txt-white mt15">Book a call <i class="fa-solid fa-square-phone-flip"></i></a>
                                </div>
                                <div class="what-in-plan-sw">
                                    <h5>What's included:</h5>
                                    <ul class="mt15">
                                        <li>Unlimited requests</li>
                                        <li>Unlimited revisions</li>
                                        <li>Unlimited brands</li>
                                        <li>Unlimited team members</li>
                                        <li>Free stock photos</li>
                                        <li>Native source files included</li>
                                        <li>Cancel anytime</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pricing-column gradient-3 tblend">
                                <div class="p-head-sw">
                                    <h3>Ultimate</h3>
                                    <p>For startups and enterprises with on-going design needs.</p>
                                    <h2 class="pricemain"><sup>$</sup><span>5,999</span>/m</h2>
                                </div>
                                <div class="p-btn-cta-sw">
                                    <div class="blueketbtn"><a href="#" class="sw-btn sw-white-btn">Buy Now <i class="fa-solid fa-right-long"></i></a></div>
                                    <a href="#" class="inline-btn txt-white mt15">Book a call <i class="fa-solid fa-square-phone-flip"></i></a>
                                </div>
                                <div class="what-in-plan-sw">
                                    <h5>What's included:</h5>
                                    <ul class="mt15">
                                        <li>Unlimited requests</li>
                                        <li>Unlimited revisions</li>
                                        <li>Unlimited brands</li>
                                        <li>Unlimited team members</li>
                                        <li>Free stock photos</li>
                                        <li>Native source files included</li>
                                        <li>Cancel anytime</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="customersupportsecion">
                            <div class="customersupportblock">
                                <div class="block-asw"><img src="{{asset('frontend/images/common/customer-support.svg')}}" alt="img"></div>
                                <h5 class="mb15 mt20">Request a Call Back</h5>
                                <p>Read more about how Fanatech works and how it can help you.</p>
                            </div>
                            <div class="conactinfoblock mt60">
                                <h5>Have Questions?</h5>
                                <div class="mediablock mt30">
                                    <div class="icondiv"><img src="{{asset('frontend/images/icons/whatsapp-chat.png')}}" alt="icon"></div>
                                    <div class="mediainfoblock">
                                        <p class="linktitle">Connect on WhatsApp</p>
                                        <a href="#" class="contactlink">+91 1234567900</a>
                                    </div>
                                </div>
                                <div class="mediablock mt30">
                                    <div class="icondiv"><img src="{{asset('frontend/images/icons/chat.png')}}" alt="icon"></div>
                                    <div class="mediainfoblock">
                                        <p class="linktitle">Begin a Quick Discussion</p>
                                        <a href="#" class="contactlink">Live Chat With Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-space white-bg darkbg2">
        <div class="container">
            <div class="row v-center justify-content-between">
                <div class="col-lg-5">
                    <img src="{{asset('frontend/images/common/doubt.svg')}}" alt="img">
                </div>
                <div class="col-lg-6 mmt40">
                    <span class="scriptheading dashbefore mb15">Have a Doubt?</span>
                    <h3>Frequently Asked Question</h3>
                    <div class="faq-sw1 mt30">
                        <div class="accordion" id="accordionExample">

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-sw-1" aria-expanded="true" aria-controls="faq-sw-1">
                                        Why do I need a mobile-friendly website?
                                    </button>
                                </h2>
                                <div id="faq-sw-1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        This is the second item's accordion body. It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-sw-2" aria-expanded="false" aria-controls="faq-sw-2">
                                        Which Technology or Tools used for Website Designing?
                                    </button>
                                </h2>
                                <div id="faq-sw-2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        This is the second item's accordion body. It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-sw-3" aria-expanded="false" aria-controls="faq-sw-3">
                                        What is the difference between custom and ready-to-use software?
                                    </button>
                                </h2>
                                <div id="faq-sw-3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        This is the second item's accordion body. It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-sw-4" aria-expanded="false" aria-controls="faq-sw-4">
                                        Which is the best custom software development company in India?
                                    </button>
                                </h2>
                                <div id="faq-sw-4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        This is the second item's accordion body. It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-sw-5" aria-expanded="false" aria-controls="faq-sw-5">
                                        What are the RCM challenges faced by hospitals?
                                    </button>
                                </h2>
                                <div id="faq-sw-5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        This is the second item's accordion body. It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
