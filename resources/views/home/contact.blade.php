@extends('layouts.frontbase_3')

@section('title','Contact '. $setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))

@section('content')
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li> <a href="{{route('home')}}">Home</a></li>
                <li class="active">Contact</li>
            </ul>
        </div>
    </div>

    <div class="cs-subheader left" style="background:url(assets/extra-images/bg-subheader-01.jpg) no-repeat 0 0 /cover; min-height:296px; padding:90px 0 0; margin-bottom:50px;">
        <div class="container">
            <div class="cs-page-title">
                <h1 style="color:#fff !important;">Get in touch</h1>
                <p style="color:#fff;">If you think we might be a good fit for a project you’re working on and you’d like to get the<br /> feel of how we can work together please contact us using contact data.</p>
            </div>
        </div>
    </div>
    <!-- Main Start -->
    <div class="main-section">
        <div class="page-section" style=" padding-top:20px; padding-bottom:10px; ">
            <div class="container">
                <div class="row">
                    <div class="section-fullwidtht col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <!--Element Section Start-->
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="cs-contact-info left">
                                    <div class="cs-media"><i class="icon-map4 cs-color"></i></div>
                                    <div class="cs-text">
                                        <h6>Contact Info</h6>
                                        <p>Automotive inc. # O Office Address
                                            101 Gray's Inn Rd, London
                                            United Kingdom</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="cs-contact-info left">
                                    <div class="cs-media"><i class="icon-envelope2 cs-color"></i></div>
                                    <div class="cs-text">
                                        <h6>Emaill Address</h6>
                                        <p><a href="#">info@automotive.com</a>
                                            <a href="#">email-2@automotive.com</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="cs-contact-info left">
                                    <div class="cs-media"><i class="icon-phone4 cs-color"></i></div>
                                    <div class="cs-text">
                                        <h6>Phone Numbers</h6>
                                        <p><span>Telephone: 281-290-4755</span>
                                            <span>Fax: 281-290-4755</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="cs-contact-info left">
                                    <div class="cs-media"><i class="icon-briefcase3 cs-color"></i></div>
                                    <div class="cs-text">
                                        <h6>Office Timings</h6>
                                        <p><span>WEEK DAYS: 05:00 – 22:00</span>
                                            <span>SATURDAY: 08:00 – 18:00</span>
                                            <span>SUNDAY: CLOSED</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="cs-seprater" style="text-align:center;"> <span> <i class="icon-transport177"> </i> </span> </div>
                            <!--Element Section End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-section" style="padding-top:40px; padding-bottom:60px;">
            <div class="container">
                <div class="row">
                    <div class="section-fullwidtht col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <!--Element Section Start-->
                            <div class="cs-contact-form">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                    <div class="cs-section-title">
                                        <h3 style="text-transform:uppercase !important;">GET IN TOUCH WITH US</h3>
                                        <p style="text-transform:uppercase;font-size:11px;color:#999999 !important;">
                                            We possess within us two minds. So far I have written only of the conscious mind. I would now like to
                                            introduce you <br/>to your second mind, the hidden and mysterious subconscious.</p>
                                    </div>
                                </div>
                                <form id="checkout-form" action="{{route("storemessage")}}" class="clearfix" method="post">
                                    @csrf
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        <div class="section-title">
                                            <h3 class="title">Contact Form</h3>
                                            <hr>
                                        </div>
                                        @include('home.messages')
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="cs-form-holder">
                                                    <div class="input-holder"><input type="text" name="name" placeholder="Full Name"><i class=" icon-user"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="cs-form-holder">
                                                    <div class="input-holder"><input type="tel" name="phone" placeholder="Phone Number"><i class="icon-mobile2"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="cs-form-holder">
                                                    <div class="input-holder"><input type="email" name="email" placeholder="Email Address"><i class=" icon-envelope"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="cs-form-holder">
                                                    <div class="input-holder"><input type="text" name="subject" placeholder="Subject"><i class=" icon-envelope"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="cs-form-holder">
                                                    <div class="input-holder"><textarea type="text" name="message" placeholder="Your Message..."></textarea></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="cs-btn-submit cs-color">
                                                    <input type="submit" value="Send Message">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="section-title">
                                            <h3 class="title">Contact Information</h3>
                                            <hr>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="shiping-methods">
                                                    <div class="input-checkbox">{!! $setting->contact !!}</div>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--Element Section End-->
                </div>
            </div>
        </div>
        <div class="page-section" style=" margin-bottom:25px;">
            <div class="container">
                <div class="row">
                    <div class="section-fullwidtht col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="maps loader">
                                    <iframe height="350" frameborder="0" allowfullscreen="" style="border: 0px none; width: 100%; pointer-events: none;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d85325.03550975422!2d-1.957436106486313!3d53.45954307751346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x25a3b1142c791a9%3A0xc4f8a0433288257a!2sUnited+Kingdom!5e0!3m2!1sen!2s!4v1455785475576"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main End -->

@endsection

