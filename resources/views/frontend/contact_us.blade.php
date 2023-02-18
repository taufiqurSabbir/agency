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
                        <a href="#"><i class="fa-solid fa-envelope mr10"></i> <span class="__cf_email__" data-cfemail="7e160c3e07110b0c091b1c0d170a1b501d1113">[email&#160;protected]</span></a>
                        <a href="#"><i class="fa-solid fa-envelope mr10"></i> <span class="__cf_email__" data-cfemail="9cf5f2faf3dce5f3e9eeebf9feeff5e8f9b2fff3f1">[email&#160;protected]</span></a>
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


    <section class="breadcrum-area contactuspage bg-efffect-2">
        <div class="container index-up">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="breadcrum-area-content">
                        <ul class="list-h-styled mb30">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Contact</li>
                        </ul>
                        <h2 class="mb15">Contact Us</h2>
                        <p>If you have questions, need support, or anything else, please fill the form below. We are here to help you.</p>
                    </div>
                </div>
                <div class="col-lg-5 flex-end">
                    <div class="imginheader"> <img src="{{asset('frontend/images/common/contactsvg.svg')}}" alt="contact us"> </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contactblock section-space pb-0 bg--2">
        <div class="container">
            <div class="row justify-content-between v-center">
                <div class="col-lg-7">

                    <div class="contact-form-card-pr contact-block-sw iconin">
                        <h4>Have Question? Write a Message</h4>
                        <div class="form-block blueketform mt40">
                            <form action="#" id="contactform" method="post">
                                <div class="fieldsets row">
                                    <div class="col-md-6 form-group floating-label">
                                        <div class="formicon"><i class="fa-solid fa-user"></i></div>
                                        <input type="text" placeholder=" " required="required" id="name" class="floating-input" name="fullname">
                                        <label>Full Name*</label>
                                        <div class="error-label"></div>
                                    </div>
                                    <div class="col-md-6 form-group floating-label">
                                        <div class="formicon"><i class="fa-solid fa-phone"></i></div>
                                        <input type="tel" placeholder=" " required="required" id="mobile_number" class="floating-input" name="mobile_number">
                                        <label>Mobile Number*</label>
                                        <div class="error-label"></div>
                                    </div>
                                </div>
                                <div class="fieldsets row">
                                    <div class="col-md-6 form-group floating-label">
                                        <div class="formicon"><i class="fa-solid fa-envelope"></i></div>
                                        <input type="email" placeholder=" " required="required" id="email" class="floating-input" name="email">
                                        <label>Email Address*</label>
                                        <div class="error-label"></div>
                                    </div>
                                    <div class="col-md-6 form-group floating-label">
                                        <div class="formicon"><i class="fa-solid fa-rectangle-list"></i></div>
                                        <select required="required" id="interested_in" class="floating-select" name="interested_in">
                                            <option value="">&nbsp;</option>
                                            <option value="Graphic Design">Graphic Design</option>
                                            <option value="Web Design">Web Design</option>
                                            <option value="App Design">App Design</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <label>Interested In*</label>
                                        <div class="error-label"></div>
                                    </div>
                                </div>
                                <div class="fieldsets row">
                                    <div class="col-md-12 form-group floating-label">
                                        <div class="formicon"><i class="fa-solid fa-message"></i></div>
                                        <textarea placeholder=" " required="required" id="description" class="floating-input" name="description"></textarea>
                                        <label>Brief about the project*</label>
                                        <div class="error-label"></div>
                                    </div>
                                </div>
                                <div class="custom-control custom-checkbox customcheck">
                                    <input type="checkbox" class="custom-control-input ctminpt" id="agree" name="agree" checked="checked">
                                    <label class="custom-control-label ctmlabl" for="agree">By clicking the “Submit” button you agree to our <a href="javascript:void(0)">Terms &amp; Conditions</a>.</label>
                                </div>
                                <div class="fieldsets mt20"> <button type="submit" name="submit" class="porkai-btn"><span>Submit</span> <span class="loader"></span></button> </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-lg-5 mmt40 pad-left-70">
                    <div class="contactinfodivv">
                        <div class="con-block-sw-div">
                            <h2 class="mb10">Let's get in touch</h2>
                            <p>We will catch you as early as we receive the message</p>
                            <div class="contactinfodivsw mt30">
                                <div class="contactnumberdiv">
                                    <p class="mb5 linktitle">We're Available 24/7. Call Now.</p>
                                    <a href="#"><i class="fa-solid fa-tty mr10"></i> 91 123 4567 890</a>
                                    <a href="#"><i class="fa-brands fa-whatsapp mr10"></i> 91 123 4567 890</a>
                                </div>
                                <div class="contactnumberdiv mt30">
                                    <p class="mb5 linktitle">Send Us an Email:</p>
                                    <a href="#"><i class="fa-solid fa-envelope mr10"></i> <span class="__cf_email__" data-cfemail="93fbe1d3eafce6e1e4f6f1e0fae7f6bdf0fcfe">[email&#160;protected]</span></a>
                                    <a href="#"><i class="fa-solid fa-envelope mr10"></i> <span class="__cf_email__" data-cfemail="ddb4b3bbb29da4b2a8afaab8bfaeb4a9b8f3beb2b0">[email&#160;protected]</span></a>
                                </div>
                                <div class="contactnumberdiv mt30">
                                    <p class="mb5 linktitle">Chat on Skype:</p>
                                    <a href="#"><i class="fa-solid fa-envelope mr10"></i>Blueket:live</a>
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
            </div>
        </div>
    </section>


    <section class="office-block section-space bg--2">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <h2 class="text-gradient-1">Our Offices</h2>
                </div>
            </div>
            <div class="row justify-content-center mt30">
                <div class="col-xl-4 col-lg-4 col-md-12 col-12 mt30">
                    <div class="locaton-block-sw">
                        <div class="locationimg roundimg"><img src="{{asset('frontend/images/common/eiffel-tower-paris.jpg')}}" alt="img"></div>
                        <div class="address-div-sw">
                            <div class="addresstile footertitle"><img src="{{asset('frontend/images/icons/fr.svg')}}" alt="icon" class="w32"> France</div>
                            <div class="address-main">
                                <address class="mt15 mb15">
                                    Tom Extension, 1st Block 2nd Cross, Yello round circle, Jaipur, Rajasthan 123456
                                </address>
                                <div class="connectwithus sw-hover-2">
                                    <a href="#"><i class="fa-solid fa-tty mr10"></i> 91 123 4567 890</a>
                                    <a href="#"><i class="fa-solid fa-envelope mr10"></i> <span class="__cf_email__" data-cfemail="fb92959d94bb82948e898c9e9988928f9ed5989496">[email&#160;protected]</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-12 mt30">
                    <div class="locaton-block-sw">
                        <div class="locationimg roundimg"><img src="{{asset('frontend/images/common/india-taj.jpg')}}" alt="img"></div>
                        <div class="address-div-sw">
                            <div class="addresstile footertitle"><img src="{{asset('frontend/images/icons/in.svg')}}" alt="icon" class="w32"> India</div>
                            <div class="address-main">
                                <address class="mt15 mb15">
                                    Tom Extension, 1st Block 2nd Cross, Yello round circle, Jaipur, Rajasthan 123456
                                </address>
                                <div class="connectwithus sw-hover-2">
                                    <a href="#"><i class="fa-solid fa-tty mr10"></i> 91 123 4567 890</a>
                                    <a href="#"><i class="fa-solid fa-envelope mr10"></i> <span class="__cf_email__" data-cfemail="9af3f4fcf5dae3f5efe8edfff8e9f3eeffb4f9f5f7">[email&#160;protected]</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-12 mt30">
                    <div class="locaton-block-sw">
                        <div class="locationimg roundimg"><img src="{{asset('frontend/images/common/usa.jpg')}}" alt="img"></div>
                        <div class="address-div-sw">
                            <div class="addresstile footertitle"><img src="{{asset('frontend/images/icons/us.svg')}}" alt="icon" class="w32"> USA</div>
                            <div class="address-main">
                                <address class="mt15 mb15">
                                    Tom Extension, 1st Block 2nd Cross, Yello round circle, Jaipur, Rajasthan 123456
                                </address>
                                <div class="connectwithus sw-hover-2">
                                    <a href="#"><i class="fa-solid fa-tty mr10"></i> 91 123 4567 890</a>
                                    <a href="#"><i class="fa-solid fa-envelope mr10"></i> <span class="__cf_email__" data-cfemail="4920272f260930263c3b3e2c2b3a203d2c672a2624">[email&#160;protected]</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
