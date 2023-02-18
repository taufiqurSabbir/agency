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
                        <a href="#"><i class="fa-solid fa-envelope mr10"></i> <span class="__cf_email__" data-cfemail="39514b7940564c4b4e5c5b4a504d5c175a5654">[email&#160;protected]</span></a>
                        <a href="#"><i class="fa-solid fa-envelope mr10"></i> <span class="__cf_email__" data-cfemail="e0898e868fa0998f959297858293899485ce838f8d">[email&#160;protected]</span></a>
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
                            <li class="active">Contact</li>
                        </ul>
                        <h2 class="mb15">About Us</h2>
                        <p>We are a multi-award-winning digital consulting and engineering firm that provides end-to-end software solutions to enterprises, independent software vendors, digital agencies, and startups.</p>
                        <p>Since our inception in 2008, we have served over 6800 consumers from over 38 countries. Our agile/DevOps development methodology, SLA-driven strategy, and on-time project delivery have earned us a strong reputation among our clients.</p>
                    </div>
                </div>
                <div class="col-lg-5 flex-end">
                    <div class="img-collage-set row centershape mmt30">
                        <div class="col-6 flex-end">
                            <div class="imgcover roundimg"><img src="{{asset('frontend/images/common/office-1.jpg')}}" alt="img"></div>
                        </div>
                        <div class="col-6 flex-end mmt30">
                            <div class="imgcover roundimg"> <img src="{{asset('frontend/images/common/office-talk.jpg')}}" alt="img"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-space">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="text-conent paragraph">
                        <h3>To bring inspiration and innovation to every business in the world.</h3>
                        <img src="{{asset('frontend/images/common/team.svg')}}" alt="Mission" class="mt30">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-conent paragraph mmt30">
                        <h5 class="scriptheading dashbefore">Mission</h5>
                        <p class="mt20">We are a multi-award-winning digital consulting and engineering firm that provides end-to-end Online solutions to enterprises, independent firms.</p>
                        <h4 class="mt20 mb20">We are a multi-award-winning digital consulting and engineering firm that provides end-to-end software solutions to enterprises, independent software vendors, digital agencies, and startups.</h4>
                        <p>Expertise helps Fanatech tackle the world's most difficult challenges. Fanatech provides digital products for worldwide brands on the web.</p>
                    </div>
                </div>
            </div>
            <div class="row immt100">
                <div class="col-lg-12">
                    <div class="paralleximg roundimg"><img src="{{asset('frontend/images/common/office-view.jpg')}}" alt="office view"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="counter-numbers row-blocks overtheimg fourcounter">
                        <div class="counter-setdiv">
                            <p> <span data-count-to="150" class="odometer"></span>+</p>
                            <span class="countertag">Professionals Team</span>
                        </div>
                        <div class="counter-setdiv">
                            <p><span data-count-to="010" class="odometer"></span>+</p>
                            <span class="countertag">Years of Average Experience</span>
                        </div>
                        <div class="counter-setdiv">
                            <p><span data-count-to="120" class="odometer"></span>k</p>
                            <span class="countertag">Successful Projects Delivered</span>
                        </div>
                        <div class="counter-setdiv">
                            <p><span data-count-to="050" class="odometer"></span>k</p>
                            <span class="countertag">Happy Clients</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="text-conent paragraph">
                        <h5 class="scriptheading dashbefore">Vision</h5>
                        <h4 class="mt20 mb20">We are a multi-award-winning digital consulting and engineering firm that provides end-to-end Online solutions to enterprises, independent firms.</h4>
                        <p>We are a multi-award-winning digital consulting and engineering firm that provides end-to-end software solutions to enterprises, independent software vendors, digital agencies, and startups.</p>
                    </div>
                    <div class="quote-text dashedbdr animation mt60">
                        Our Team is Our Biggest Asset, And We Like Challenging Ourselves.
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="text-conent paragraph mmt30">
                        <h3>To bring inspiration and innovation to every business in the world.</h3>
                        <img src="{{asset('frontend/images/common/achievements.svg')}}" alt="Mission" class="mt30">
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{asset('frontend/images/common/our-team.svg')}}" alt="ourteam">
                </div>
                <div class="col-lg-6 mmt40">
                    <span class="scriptheading dashbefore mb15">Why Fanatech?</span>
                    <h4>Here are some reasons why customers choose Fanatech over a competitor</h4>
                    <div class="medialist mt40">
                        <div class="mediablock">
                            <div class="icondiv"><img src="{{asset('frontend/images/icons/thumbs-up.png')}}" alt="icon"></div>
                            <div class="mediainfoblock">
                                <h5 class="mb10">Assured services </h5>
                                <p>Fanatech is a company that specialises in risk management and general safety. We will bring value to your business farm while also ensuring.</p>
                            </div>
                        </div>
                        <div class="mediablock mt30">
                            <div class="icondiv"><img src="{{asset('frontend/images/icons/budget.png')}}" alt="icon"></div>
                            <div class="mediainfoblock">
                                <h5 class="mb10">Cost-effective Solution</h5>
                                <p>If you think to have a better outcome with low cost then Fanatech is the one. We are offering the best technology solution at an affordable price.</p>
                            </div>
                        </div>
                        <div class="mediablock mt30">
                            <div class="icondiv"><img src="{{asset('frontend/images/icons/clipboard.png')}}" alt="icon"></div>
                            <div class="mediainfoblock">
                                <h5 class="mb10">On-time Delivery</h5>
                                <p>We always ensure that our task is handed over within the given time. Our main priority is customers gratification.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="cta-block-sw-bkt mb80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-design-block-sw gradient-2 v-center">
                        <div class="cta-info-div-bkt">
                            <h3 class="mb15">Want to Hire Resources to Work With You?</h3>
                            <p>Web design app development for Android & iOS. We have over 5 years of experience in helping companies.</p>
                            <a href="#" class="sw-btn sw-white-btn mt30">Get Started <i class="fa-solid fa-arrow-trend-up"></i></a>
                        </div>
                        <div class="cta-img-div-bkt"><img src="{{asset('frontend/images/common/app-mockup-2.svg')}}" alt="img"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
