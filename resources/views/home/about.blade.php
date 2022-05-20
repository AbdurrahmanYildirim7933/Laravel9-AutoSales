@extends('layouts.frontbase_2')

@section('title','About Us '. $setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))

@section('content')
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li> <a href="{{route('home')}}">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </div>

        <div class="cs-subheader center" style="background:url(assets/extra-images/bg-subheader.jpg) no-repeat 0 0 /cover; min-height:296px; padding:90px 0 0; margin-bottom:70px;">
            <div class="container">
                <div class="cs-page-title">
                    <h1 style="color:#fff !important;">About US</h1>
                    <p style="color:#fff;">If you think we might be a good fit for a project you’re working on and you’d like to get the feel of how we<br>
                        can work together please contact us using contact data.</p>
                </div>
            </div>
        </div>
        <!-- Main Start -->
        <div class="main-section">
            <div class="page-section" style="margin-bottom:30px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">{!! $setting->aboutus !!}</div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="cs-services">
                                <div class="cs-media"> <i class="icon-fuel1 cs-color" style="font-size:70px;"> </i> </div>
                                <div class="cs-text">
                                    <h6>OIL CHANGES </h6>
                                    <p>Vivamus erat diam, condimentum in aliquet sed, bibendum at quam. Phasellus lacus mauris.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="cs-services">
                                <div class="cs-media"> <i class="icon-car230 cs-color" style="font-size:40px"> </i> </div>
                                <div class="cs-text">
                                    <h6>AIR CONDITIONING</h6>
                                    <p>Nulla a gravida purus. Fusce at interdum libero, at. Vivamus erat diam, condimentum in bibendum                                            at quam.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="cs-services">
                                <div class="cs-media"> <i class="icon-energy42 cs-color" style="font-size:40px"> </i> </div>
                                <div class="cs-text">
                                    <h6>AUTO ELECTRIC </h6>
                                    <p>Etiam et maximus nisi, nec scelerisque neque. Nunc euismod iaculis urna, id eleifend lorem                                             aliquet at. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-section" style="margin-bottom:40px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="cs-column-text">
                                <h2 style="font-size:26px !important;">WELCOME TO THE AutoMotive</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur corporis lab. Architecto, maiores, similique, eos, ea doloribus nihil accusantium fuga numquam corporis nostrum eligendi nemo sapiente quibusdam consequuntur tempore. Suscipit.</p>
                                <ul class="cs-icon-list">
                                    <li><i class="icon-check2 cs-color"></i>Volutpat luctus lacus hendrerit taciti lobortis in.</li>
                                    <li><i class="icon-check2 cs-color"></i>Faucibus amet consectetur erat donec venenatis leo.</li>
                                    <li><i class="icon-check2 cs-color"></i>Ullamcorper conubia, aenean quisque mattis malesuada.</li>
                                    <li><i class="icon-check2 cs-color"></i>quam quisque ligula, maecenas ligula proin ut augue.</li>
                                </ul>
                                <a href="#" class="btn-contact cs-color csborder-color">Contact us</a> </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="cs-video-frame">
                                <iframe width="560" height="340" src="https://www.youtube.com/embed/21CY9RtMQkU" frameborder="0" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-section" style="margin-bottom:70px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="section-title" style="text-align:center; color:#333333; margin-bottom:45px;">
                                <h2 style="margin-bottom:5px; text-transform:uppercase !important;">Meet Our Team</h2>
                                <p>Goodness far this grimaced more domestically overrode bawled one much hello macaw spurious.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-team">
                                <div class="cs-media">
                                    <figure><a href="#"><img src="assets/extra-images/team-img-1.jpg" alt=""></a></figure>
                                    <div class="cs-caption"> <i class="icon-bars cs-top-icon"></i>
                                        <ul>
                                            <li><a href="#"><i class="icon-facebook2"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter2"></i></a></li>
                                            <li><a href="#"><i class="icon-google4"></i></a></li>
                                            <li><a href="#"><i class="icon-linkedin4"></i></a></li>
                                            <li><a href="#"><i class="icon-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cs-text">
                                    <h6><a href="#">Lennox Wardell</a></h6>
                                    <span>Chief Executive Officer </span> <em><i class="icon-phone4"></i>001-234-567-XXXX</em> </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-team">
                                <div class="cs-media">
                                    <figure><a href="#"><img src="assets/extra-images/team-img-2.jpg" alt=""></a></figure>
                                    <div class="cs-caption"> <i class="icon-bars cs-top-icon"></i>
                                        <ul>
                                            <li><a href="#"><i class="icon-facebook2"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter2"></i></a></li>
                                            <li><a href="#"><i class="icon-google4"></i></a></li>
                                            <li><a href="#"><i class="icon-linkedin4"></i></a></li>
                                            <li><a href="#"><i class="icon-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cs-text">
                                    <h6><a href="#">Sarah Odegard </a></h6>
                                    <span>President of Finance </span> <em><i class="icon-phone4"></i>001-234-567-XXXX</em> </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-team">
                                <div class="cs-media">
                                    <figure><a href="#"><img src="assets/extra-images/team-img-3.jpg" alt=""></a></figure>
                                    <div class="cs-caption"> <i class="icon-bars cs-top-icon"></i>
                                        <ul>
                                            <li><a href="#"><i class="icon-facebook2"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter2"></i></a></li>
                                            <li><a href="#"><i class="icon-google4"></i></a></li>
                                            <li><a href="#"><i class="icon-linkedin4"></i></a></li>
                                            <li><a href="#"><i class="icon-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cs-text">
                                    <h6><a href="#">Lars Jakuba </a></h6>
                                    <span>Executive Vice President </span> <em><i class="icon-phone4"></i>001-234-567-XXXX</em> </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-team">
                                <div class="cs-media">
                                    <figure><a href="#"><img src="assets/extra-images/team-img-4.jpg" alt=""></a></figure>
                                    <div class="cs-caption"> <i class="icon-bars cs-top-icon"></i>
                                        <ul>
                                            <li><a href="#"><i class="icon-facebook2"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter2"></i></a></li>
                                            <li><a href="#"><i class="icon-google4"></i></a></li>
                                            <li><a href="#"><i class="icon-linkedin4"></i></a></li>
                                            <li><a href="#"><i class="icon-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cs-text">
                                    <h6><a href="#">Mikey Diokles </a></h6>
                                    <span>Sales Manager </span> <em><i class="icon-phone4"></i>001-234-567-XXXX</em> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-section" style=" background:url(assets/extra-images/bg-counter.jpg) no-repeat 0 0 / cover; margin-bottom:50px; margin-top:20px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-counter">
                                <div class="cs-media">
                                    <figure> <i class="icon-truck2 cs-color"> </i> </figure>
                                </div>
                                <div class="cs-text" style="color:#fff;"> <strong class="counter">3,863</strong> <span>Car Sold</span> </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-counter">
                                <div class="cs-media">
                                    <figure> <i class="icon-car36  cs-color"> </i> </figure>
                                </div>
                                <div class="cs-text" style="color:#fff;"> <strong class="counter">89,897</strong> <span>Car Sold</span> </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-counter">
                                <div class="cs-media">
                                    <figure> <i class="icon-settings  cs-color"> </i> </figure>
                                </div>
                                <div class="cs-text" style="color:#fff;"> <strong class="counter">741</strong> <span>Registerd Agents</span> </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-counter">
                                <div class="cs-media">
                                    <figure> <i class="icon-directions_car cs-color"> </i> </figure>
                                </div>
                                <div class="cs-text" style="color:#fff;"> <strong class="counter">3289</strong> <span>Certified Agents</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-section" style="margin-bottom:70px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="section-title" style="color:#333333; margin-bottom:45px;">
                                        <h2 style="margin-bottom:5px; text-transform:uppercase !important;">OUR ADVANTAGES</h2>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="panel-group box" id="accordion5" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <h6 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion5" href="#collapse30" aria-expanded="true" aria-controls="collapse30"> <i class="icon-directions_car"></i>We go through extensive factory training so that we may provide </a> </h6>
                                            </div>
                                            <div id="collapse30" class="panel-collapse collapse in" role="tabpanel">
                                                <div class="panel-body"> We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your second mind, the hidden and mysterious subconscious. Our subconscious mind contains such power and
                                                    complexity that it literally staggers the imagination. We possess within us two minds. So far I have written only of
                                                    the conscious mind. I would now like to introduce you to your second mind. </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading31">
                                                <h6 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion5" href="#collapse31" aria-expanded="false" aria-controls="collapse31"> <i class="icon-key22"></i>You need to make an educated decision in choosing the vehicle </a> </h6>
                                            </div>
                                            <div id="collapse31" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading31">
                                                <div class="panel-body"> We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your second mind, the hidden and mysterious subconscious. Our subconscious mind contains such power and
                                                    complexity that it literally staggers the imagination. We possess within us two minds. So far I have written only of
                                                    the conscious mind. I would now like to introduce you to your second mind. </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading32">
                                                <h6 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion5" href="#collapse32" aria-expanded="false" aria-controls="collapse32"> <i class="icon-cog2"></i>Motors, we think you should also have pretty high expectations for your dealership. </a> </h6>
                                            </div>
                                            <div id="collapse32" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading32">
                                                <div class="panel-body"> We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your second mind, the hidden and mysterious subconscious. Our subconscious mind contains such power and
                                                    complexity that it literally staggers the imagination. We possess within us two minds. So far I have written only of
                                                    the conscious mind. I would now like to introduce you to your second mind. </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <ul class="cs-testimonial-slider slick-initialized slick-slider">
                                <div aria-live="polite" class="slick-list draggable" tabindex="0"><div class="slick-track" style="opacity: 1; width: 2051px; transform: translate3d(-1172px, 0px, 0px);"><li class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 293px;">
                                            <div class="cs-media">
                                                <figure> <img src="assets/extra-images/testimonial-slider-img-1.jpg" alt=""> </figure>
                                            </div>
                                            <div class="cs-text">
                                                <p> Litora torquent per conubia nostra Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                                                <h6>James Warson<span>Chief Executive Officer </span></h6>
                                            </div>
                                        </li><li class="slick-slide" data-slick-index="0" aria-hidden="true" style="width: 293px;">
                                            <div class="cs-media">
                                                <figure> <img src="assets/extra-images/testimonial-slider-img-1.jpg" alt=""> </figure>
                                            </div>
                                            <div class="cs-text">
                                                <p> Litora torquent per conubia nostra Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                                                <h6>James Warson<span>Chief Executive Officer </span></h6>
                                            </div>
                                        </li><li class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 293px;">
                                            <div class="cs-media">
                                                <figure> <img src="assets/extra-images/testimonial-slider-img-1.jpg" alt=""> </figure>
                                            </div>
                                            <div class="cs-text">
                                                <p> Litora torquent per conubia nostra Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                                                <h6>James Warson<span>Chief Executive Officer </span></h6>
                                            </div>
                                        </li><li class="slick-slide" data-slick-index="2" aria-hidden="true" style="width: 293px;">
                                            <div class="cs-media">
                                                <figure> <img src="assets/extra-images/testimonial-slider-img-1.jpg" alt=""> </figure>
                                            </div>
                                            <div class="cs-text">
                                                <p> Litora torquent per conubia nostra Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                                                <h6>James Warson<span>Chief Executive Officer </span></h6>
                                            </div>
                                        </li><li class="slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 293px;">
                                            <div class="cs-media">
                                                <figure> <img src="assets/extra-images/testimonial-slider-img-1.jpg" alt=""> </figure>
                                            </div>
                                            <div class="cs-text">
                                                <p> Litora torquent per conubia nostra Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                                                <h6>James Warson<span>Chief Executive Officer </span></h6>
                                            </div>
                                        </li><li class="slick-slide" data-slick-index="4" aria-hidden="true" style="width: 293px;">
                                            <div class="cs-media">
                                                <figure> <img src="assets/extra-images/testimonial-slider-img-1.jpg" alt=""> </figure>
                                            </div>
                                            <div class="cs-text">
                                                <p> Litora torquent per conubia nostra Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                                                <h6>James Warson<span>Chief Executive Officer </span></h6>
                                            </div>
                                        </li><li class="slick-slide slick-cloned" data-slick-index="5" aria-hidden="true" style="width: 293px;">
                                            <div class="cs-media">
                                                <figure> <img src="assets/extra-images/testimonial-slider-img-1.jpg" alt=""> </figure>
                                            </div>
                                            <div class="cs-text">
                                                <p> Litora torquent per conubia nostra Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                                                <h6>James Warson<span>Chief Executive Officer </span></h6>
                                            </div>
                                        </li></div></div>




                                <ul class="slick-dots" style="display: block;"><li class="" aria-hidden="true"><button type="button" data-role="none">1</button></li><li aria-hidden="true" class=""><button type="button" data-role="none">2</button></li><li aria-hidden="true" class=""><button type="button" data-role="none">3</button></li><li aria-hidden="false" class="slick-active"><button type="button" data-role="none">4</button></li><li aria-hidden="true" class=""><button type="button" data-role="none">5</button></li></ul></ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-section" style="margin-bottom:70px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="section-title" style="text-align:center; color:#333333; margin-bottom:45px;">
                                <h2 style="margin-bottom:5px;">MEDIA GALLERY</h2>
                                <p>It will help us find the Toyota you're looking for in your area.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-gallery">
                                <div class="cs-media">
                                    <figure><a href="assets/extra-images/gallery-img-1.jpg" class="thumbnail"><img src="assets/extra-images/gallery-img-1.jpg" alt=""></a>
                                        <figcaption><i class="icon-search2"></i><span>People will get clean water</span></figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-gallery">
                                <div class="cs-media">
                                    <figure><a href="assets/extra-images/gallery-img-2.jpg" class="thumbnail"><img src="assets/extra-images/gallery-img-2.jpg" alt=""></a>
                                        <figcaption><i class="icon-search2"></i><span>People will get clean water</span></figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-gallery">
                                <div class="cs-media">
                                    <figure><a href="assets/extra-images/gallery-img-3.jpg" class="thumbnail"><img src="assets/extra-images/gallery-img-3.jpg" alt=""></a>
                                        <figcaption><i class="icon-search2"></i><span>People will get clean water</span></figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-gallery">
                                <div class="cs-media">
                                    <figure><a href="assets/extra-images/gallery-img-4.jpg" class="thumbnail"><img src="assets/extra-images/gallery-img-4.jpg" alt=""></a>
                                        <figcaption><i class="icon-search2"></i><span>People will get clean water</span></figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-gallery">
                                <div class="cs-media">
                                    <figure><a href="assets/extra-images/gallery-img-5.jpg" class="thumbnail"><img src="assets/extra-images/gallery-img-5.jpg" alt=""></a>
                                        <figcaption><i class="icon-search2"></i><span>People will get clean water</span></figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-gallery">
                                <div class="cs-media">
                                    <figure><a href="assets/extra-images/gallery-img-6.jpg" class="thumbnail"><img src="assets/extra-images/gallery-img-6.jpg" alt=""></a>
                                        <figcaption><i class="icon-search2"></i><span>People will get clean water</span></figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-gallery">
                                <div class="cs-media">
                                    <figure><a href="assets/extra-images/gallery-img-7.jpg" class="thumbnail"><img src="assets/extra-images/gallery-img-7.jpg" alt=""></a>
                                        <figcaption><i class="icon-search2"></i><span>People will get clean water</span></figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="cs-gallery">
                                <div class="cs-media">
                                    <figure><a href="assets/extra-images/gallery-img-8.jpg" class="thumbnail"><img src="assets/extra-images/gallery-img-8.jpg" alt=""></a>
                                        <figcaption><i class="icon-search2"></i><span>People will get clean water</span></figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-section" style="margin-bottom:0; background:#edf0f5; padding:35px 0 ;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ul class="cs-partners-slider slick-initialized slick-slider">
                                <div aria-live="polite" class="slick-list draggable" tabindex="0"><div class="slick-track" style="opacity: 1; width: 3768px; transform: translate3d(-1256px, 0px, 0px);"><li class="slick-slide slick-cloned" data-slick-index="-6" aria-hidden="true" style="width: 77px;"><a href="#"><img src="assets/extra-images/partner-img-1.jpg" alt=""></a></li><li class="slick-slide slick-cloned" data-slick-index="-5" aria-hidden="true" style="width: 77px;"><a href="#"><img src="assets/extra-images/partner-img-2.jpg" alt=""></a></li><li class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" style="width: 77px;"><a href="#"><img src="assets/extra-images/partner-img-3.jpg" alt=""></a></li><li class="slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" style="width: 77px;"><a href="#"><img src="assets/extra-images/partner-img-4.jpg" alt=""></a></li><li class="slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" style="width: 77px;"><a href="#"><img src="assets/extra-images/partner-img-5.jpg" alt=""></a></li><li class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 77px;"><a href="#"><img src="assets/extra-images/partner-img-6.jpg" alt=""></a></li><li class="slick-slide" data-slick-index="0" aria-hidden="true" style="width: 77px;"><a href="#"><img src="assets/extra-images/partner-img-1.jpg" alt=""></a></li><li class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 77px;"><a href="#"><img src="assets/extra-images/partner-img-2.jpg" alt=""></a></li><li class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 77px;"><a href="#"><img src="assets/extra-images/partner-img-3.jpg" alt=""></a></li><li class="slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 77px;"><a href="#"><img src="assets/extra-images/partner-img-4.jpg" alt=""></a></li><li class="slick-slide slick-active" data-slick-index="4" aria-hidden="false" style="width: 77px;"><a href="#"><img src="assets/extra-images/partner-img-5.jpg" alt=""></a></li><li class="slick-slide slick-active" data-slick-index="5" aria-hidden="false" style="width: 77px;"><a href="#"><img src="assets/extra-images/partner-img-6.jpg" alt=""></a></li><li class="slick-slide slick-active" data-slick-index="6" aria-hidden="false" style="width: 77px;"><a href="#"><img src="assets/extra-images/partner-img-1.jpg" alt=""></a></li><li class="slick-slide slick-active" data-slick-index="7" aria-hidden="false" style="width: 77px;"><a href="#"><img src="assets/extra-images/partner-img-2.jpg" alt=""></a></li><li class="slick-slide" data-slick-index="8" aria-hidden="true" style="width: 77px;"><a href="#"><img src="assets/extra-images/partner-img-3.jpg" alt=""></a></li><li class="slick-slide" data-slick-index="9" aria-hidden="true" style="width: 77px;"><a href="#"><img src="assets/extra-images/partner-img-4.jpg" alt=""></a></li><li class="slick-slide" data-slick-index="10" aria-hidden="true" style="width: 77px;"><a href="#"><img src="assets/extra-images/partner-img-5.jpg" alt=""></a></li><li class="slick-slide" data-slick-index="11" aria-hidden="true" style="width: 77px;"><a href="#"><img src="assets/extra-images/partner-img-6.jpg" alt=""></a></li><li class="slick-slide slick-cloned" data-slick-index="12" aria-hidden="true" style="width: 77px;"><a href="#"><img src="assets/extra-images/partner-img-1.jpg" alt=""></a></li><li class="slick-slide slick-cloned" data-slick-index="13" aria-hidden="true" style="width: 77px;"><a href="#"><img src="assets/extra-images/partner-img-2.jpg" alt=""></a></li><li class="slick-slide slick-cloned" data-slick-index="14" aria-hidden="true" style="width: 77px;"><a href="#"><img src="assets/extra-images/partner-img-3.jpg" alt=""></a></li><li class="slick-slide slick-cloned" data-slick-index="15" aria-hidden="true" style="width: 77px;"><a href="#"><img src="assets/extra-images/partner-img-4.jpg" alt=""></a></li><li class="slick-slide slick-cloned" data-slick-index="16" aria-hidden="true" style="width: 77px;"><a href="#"><img src="assets/extra-images/partner-img-5.jpg" alt=""></a></li><li class="slick-slide slick-cloned" data-slick-index="17" aria-hidden="true" style="width: 77px;"><a href="#"><img src="assets/extra-images/partner-img-6.jpg" alt=""></a></li></div></div>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

@endsection

