@extends('layouts.frontbase')

@section('title', $setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))

@section('slider')
    @include('home._slider')
@endsection

@section('content')
    <!--tabs section-->
    <div class="page-section" style="padding-top:70px; padding-bottom:65px;">
        <div class="container">
            <div class="row">
                <div class="section-fullwidtht col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 co-sm-12 col-xs-12"><!--Element Section Start-->
                            <div class="cs-section-title">
                                <h3 style="text-transform:uppercase !important;">Perfect Cars for you</h3>
                                <p style="text-transform:uppercase;font-size:11px;color:#999999 !important;">It will help us find the Toyota you're looking for in your area.</p>
                            </div>
                            <!--Tabs Start-->

                            <div class="cs-tabs full-width">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#home">New Cars</a></li>
                                    <li><a data-toggle="tab" href="#menu1">Used Cars</a></li>
                                    <li><a data-toggle="tab" href="#menu2">Featured Cars</a></li>
                                    <li><a data-toggle="tab" href="#menu3">Bikes and Trucks</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure> <img src="{{asset('assets')}}/extra-images/listing-Grid-img1.jpg" alt="#"/>
                                                            <figcaption> <span class="auto-featured">Featured</span> </figcaption>
                                                        </figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                        <div class="post-title">
                                                            <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="btn-list"> <a href="javascript:void(0)" class="btn btn-danger collapsed" data-toggle="collapse" data-target="#list-view"></a>
                                                            <div id="list-view" class="collapse">
                                                                <ul>
                                                                    <li>30/36 est. mpg 18</li>
                                                                    <li>Black front grille with chrome accent</li>
                                                                    <li>Cruise control</li>
                                                                    <li>Remote keyless entry system</li>
                                                                    <li>Tilt 3-spoke steering wheel with audio controls</li>
                                                                    <li>15-in. alloy wheels</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list">
                                                            <label for="check-list">Compare</label>
                                                        </div>
                                                        <a href="#" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure> <img src="{{asset('assets')}}/extra-images/listing-Grid-img2.jpg" alt="#"/></figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                        <div class="post-title">
                                                            <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="btn-list"> <a href="javascript:void(0)" class="btn btn-danger collapsed" data-toggle="collapse" data-target="#list-view1"></a>
                                                            <div id="list-view1" class="collapse">
                                                                <ul>
                                                                    <li>30/36 est. mpg 18</li>
                                                                    <li>Black front grille with chrome accent</li>
                                                                    <li>Cruise control</li>
                                                                    <li>Remote keyless entry system</li>
                                                                    <li>Tilt 3-spoke steering wheel with audio controls</li>
                                                                    <li>15-in. alloy wheels</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list1">
                                                            <label for="check-list1">Compare</label>
                                                        </div>
                                                        <a href="#" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure> <img src="{{asset('assets')}}/extra-images/listing-Grid-img3.jpg" alt="#"/></figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                        <div class="post-title">
                                                            <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="btn-list"> <a href="javascript:void(0)" class="btn btn-danger collapsed" data-toggle="collapse" data-target="#list-view2"></a>
                                                            <div id="list-view2" class="collapse">
                                                                <ul>
                                                                    <li>30/36 est. mpg 18</li>
                                                                    <li>Black front grille with chrome accent</li>
                                                                    <li>Cruise control</li>
                                                                    <li>Remote keyless entry system</li>
                                                                    <li>Tilt 3-spoke steering wheel with audio controls</li>
                                                                    <li>15-in. alloy wheels</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list2">
                                                            <label for="check-list2">Compare</label>
                                                        </div>
                                                        <a href="#" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure> <img src="{{asset('assets')}}/extra-images/listing-Grid-img4.jpg" alt="#"/></figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                        <div class="post-title">
                                                            <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list3">
                                                            <label for="check-list3">Compare</label>
                                                        </div>
                                                        <a href="#" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure> <img src="{{asset('assets')}}/extra-images/listing-Grid-img5.jpg" alt="#"/></figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                        <div class="post-title">
                                                            <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list4">
                                                            <label for="check-list4">Compare</label>
                                                        </div>
                                                        <a href="#" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure> <img src="{{asset('assets')}}/extra-images/listing-Grid-img6.jpg" alt="#"/></figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                        <div class="post-title">
                                                            <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list5">
                                                            <label for="check-list5">Compare</label>
                                                        </div>
                                                        <a href="#" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure> <img src="{{asset('assets')}}/extra-images/listing-Grid-img7.jpg" alt="#"/></figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                        <div class="post-title">
                                                            <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list6">
                                                            <label for="check-list6">Compare</label>
                                                        </div>
                                                        <a href="#" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure> <img src="{{asset('assets')}}/extra-images/listing-Grid-img8.jpg" alt="#"/></figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                        <div class="post-title">
                                                            <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list8">
                                                            <label for="check-list8">Compare</label>
                                                        </div>
                                                        <a href="#" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure> <img src="{{asset('assets')}}/extra-images/listing-Grid-img1.jpg" alt="#"/></figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                        <div class="post-title">
                                                            <h6><a href="#">-Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="btn-list"> <a href="javascript:void(0)" class="btn btn-danger collapsed" data-toggle="collapse" data-target="#list-view-01"></a>
                                                            <div id="list-view-01" class="collapse">
                                                                <ul>
                                                                    <li>30/36 est. mpg 18</li>
                                                                    <li>Black front grille with chrome accent</li>
                                                                    <li>Cruise control</li>
                                                                    <li>Remote keyless entry system</li>
                                                                    <li>Tilt 3-spoke steering wheel with audio controls</li>
                                                                    <li>15-in. alloy wheels</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list-01">
                                                            <label for="check-list-01">Compare</label>
                                                        </div>
                                                        <a href="#" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure> <img src="{{asset('assets')}}/extra-images/listing-Grid-img2.jpg" alt="#"/></figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                        <div class="post-title">
                                                            <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="btn-list"> <a href="javascript:void(0)" class="btn btn-danger collapsed" data-toggle="collapse" data-target="#list-view-02"></a>
                                                            <div id="list-view-02" class="collapse">
                                                                <ul>
                                                                    <li>30/36 est. mpg 18</li>
                                                                    <li>Black front grille with chrome accent</li>
                                                                    <li>Cruise control</li>
                                                                    <li>Remote keyless entry system</li>
                                                                    <li>Tilt 3-spoke steering wheel with audio controls</li>
                                                                    <li>15-in. alloy wheels</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list-02">
                                                            <label for="check-list-02">Compare</label>
                                                        </div>
                                                        <a href="#" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure> <img src="{{asset('assets')}}/extra-images/listing-Grid-img3.jpg" alt="#"/></figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                        <div class="post-title">
                                                            <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="btn-list"> <a href="javascript:void(0)" class="btn btn-danger collapsed" data-toggle="collapse" data-target="#list-view-03"></a>
                                                            <div id="list-view-03" class="collapse">
                                                                <ul>
                                                                    <li>30/36 est. mpg 18</li>
                                                                    <li>Black front grille with chrome accent</li>
                                                                    <li>Cruise control</li>
                                                                    <li>Remote keyless entry system</li>
                                                                    <li>Tilt 3-spoke steering wheel with audio controls</li>
                                                                    <li>15-in. alloy wheels</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list-03">
                                                            <label for="check-list-03">Compare</label>
                                                        </div>
                                                        <a href="#" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure> <img src="{{asset('assets')}}/extra-images/listing-Grid-img4.jpg" alt="#"/></figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                        <div class="post-title">
                                                            <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list-003">
                                                            <label for="check-list-003">Compare</label>
                                                        </div>
                                                        <a href="#" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure> <img src="{{asset('assets')}}/extra-images/listing-Grid-img5.jpg" alt="#"/></figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                        <div class="post-title">
                                                            <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list-04">
                                                            <label for="check-list-04">Compare</label>
                                                        </div>
                                                        <a href="#" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure> <img src="{{asset('assets')}}/extra-images/listing-Grid-img6.jpg" alt="#"/></figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                        <div class="post-title">
                                                            <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list-05">
                                                            <label for="check-list-05">Compare</label>
                                                        </div>
                                                        <a href="#" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure> <img src="{{asset('assets')}}/extra-images/listing-Grid-img7.jpg" alt="#"/></figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                        <div class="post-title">
                                                            <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list-06">
                                                            <label for="check-list-06">Compare</label>
                                                        </div>
                                                        <a href="#" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure> <img src="{{asset('assets')}}/extra-images/listing-Grid-img8.jpg" alt="#"/></figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                        <div class="post-title">
                                                            <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list-08">
                                                            <label for="check-list-08">Compare</label>
                                                        </div>
                                                        <a href="#" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="menu2" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure> <img src="{{asset('assets')}}/extra-images/listing-Grid-img1.jpg" alt="#"/></figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                        <div class="post-title">
                                                            <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="btn-list"> <a href="javascript:void(0)" class="btn btn-danger collapsed" data-toggle="collapse" data-target="#list-view-11"></a>
                                                            <div id="list-view-11" class="collapse">
                                                                <ul>
                                                                    <li>30/36 est. mpg 18</li>
                                                                    <li>Black front grille with chrome accent</li>
                                                                    <li>Cruise control</li>
                                                                    <li>Remote keyless entry system</li>
                                                                    <li>Tilt 3-spoke steering wheel with audio controls</li>
                                                                    <li>15-in. alloy wheels</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list-11">
                                                            <label for="check-list-11">Compare</label>
                                                        </div>
                                                        <a href="#" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure> <img src="{{asset('assets')}}/extra-images/listing-Grid-img2.jpg" alt="#"/></figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                        <div class="post-title">
                                                            <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="btn-list"> <a href="javascript:void(0)" class="btn btn-danger collapsed" data-toggle="collapse" data-target="#list-view-12"></a>
                                                            <div id="list-view-12" class="collapse">
                                                                <ul>
                                                                    <li>30/36 est. mpg 18</li>
                                                                    <li>Black front grille with chrome accent</li>
                                                                    <li>Cruise control</li>
                                                                    <li>Remote keyless entry system</li>
                                                                    <li>Tilt 3-spoke steering wheel with audio controls</li>
                                                                    <li>15-in. alloy wheels</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list-12">
                                                            <label for="check-list-12">Compare</label>
                                                        </div>
                                                        <a href="#" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure> <img src="{{asset('assets')}}/extra-images/listing-Grid-img3.jpg" alt="#"/></figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                        <div class="post-title">
                                                            <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="btn-list"> <a href="javascript:void(0)" class="btn btn-danger collapsed" data-toggle="collapse" data-target="#list-view-13"></a>
                                                            <div id="list-view-13" class="collapse">
                                                                <ul>
                                                                    <li>30/36 est. mpg 18</li>
                                                                    <li>Black front grille with chrome accent</li>
                                                                    <li>Cruise control</li>
                                                                    <li>Remote keyless entry system</li>
                                                                    <li>Tilt 3-spoke steering wheel with audio controls</li>
                                                                    <li>15-in. alloy wheels</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list-13">
                                                            <label for="check-list-13">Compare</label>
                                                        </div>
                                                        <a href="#" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure> <img src="{{asset('assets')}}/extra-images/listing-Grid-img4.jpg" alt="#"/></figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                        <div class="post-title">
                                                            <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list-14">
                                                            <label for="check-list-14">Compare</label>
                                                        </div>
                                                        <a href="#" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure> <img src="{{asset('assets')}}/extra-images/listing-Grid-img5.jpg" alt="#"/></figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                        <div class="post-title">
                                                            <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list-15">
                                                            <label for="check-list-15">Compare</label>
                                                        </div>
                                                        <a href="#" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure> <img src="{{asset('assets')}}/extra-images/listing-Grid-img6.jpg" alt="#"/></figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                        <div class="post-title">
                                                            <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list-16">
                                                            <label for="check-list-16">Compare</label>
                                                        </div>
                                                        <a href="#" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure> <img src="{{asset('assets')}}/extra-images/listing-Grid-img7.jpg" alt="#"/></figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                        <div class="post-title">
                                                            <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list-17">
                                                            <label for="check-list-17">Compare</label>
                                                        </div>
                                                        <a href="#" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure> <img src="{{asset('assets')}}/extra-images/listing-Grid-img8.jpg" alt="#"/></figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                        <div class="post-title">
                                                            <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list-18">
                                                            <label for="check-list-18">Compare</label>
                                                        </div>
                                                        <a href="#" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="menu3" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure> <img src="{{asset('assets')}}/extra-images/listing-Grid-img1.jpg" alt="#"/></figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                        <div class="post-title">
                                                            <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="btn-list"> <a href="javascript:void(0)" class="btn btn-danger collapsed" data-toggle="collapse" data-target="#list-view-21"></a>
                                                            <div id="list-view-21" class="collapse">
                                                                <ul>
                                                                    <li>30/36 est. mpg 18</li>
                                                                    <li>Black front grille with chrome accent</li>
                                                                    <li>Cruise control</li>
                                                                    <li>Remote keyless entry system</li>
                                                                    <li>Tilt 3-spoke steering wheel with audio controls</li>
                                                                    <li>15-in. alloy wheels</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list-21">
                                                            <label for="check-list-21">Compare</label>
                                                        </div>
                                                        <a href="#" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure> <img src="{{asset('assets')}}/extra-images/listing-Grid-img2.jpg" alt="#"/></figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                        <div class="post-title">
                                                            <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="btn-list"> <a href="javascript:void(0)" class="btn btn-danger collapsed" data-toggle="collapse" data-target="#list-view-22"></a>
                                                            <div id="list-view-22" class="collapse">
                                                                <ul>
                                                                    <li>30/36 est. mpg 18</li>
                                                                    <li>Black front grille with chrome accent</li>
                                                                    <li>Cruise control</li>
                                                                    <li>Remote keyless entry system</li>
                                                                    <li>Tilt 3-spoke steering wheel with audio controls</li>
                                                                    <li>15-in. alloy wheels</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list-22">
                                                            <label for="check-list-22">Compare</label>
                                                        </div>
                                                        <a href="#" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure> <img src="{{asset('assets')}}/extra-images/listing-Grid-img3.jpg" alt="#"/></figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                        <div class="post-title">
                                                            <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="btn-list"> <a href="javascript:void(0)" class="btn btn-danger collapsed" data-toggle="collapse" data-target="#list-view-250"></a>
                                                            <div id="list-view-250" class="collapse">
                                                                <ul>
                                                                    <li>30/36 est. mpg 18</li>
                                                                    <li>Black front grille with chrome accent</li>
                                                                    <li>Cruise control</li>
                                                                    <li>Remote keyless entry system</li>
                                                                    <li>Tilt 3-spoke steering wheel with audio controls</li>
                                                                    <li>15-in. alloy wheels</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list-23">
                                                            <label for="check-list-23">Compare</label>
                                                        </div>
                                                        <a href="#" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure> <img src="{{asset('assets')}}/extra-images/listing-Grid-img4.jpg" alt="#"/></figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                        <div class="post-title">
                                                            <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list24">
                                                            <label for="check-list24">Compare</label>
                                                        </div>
                                                        <a href="#" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure> <img src="{{asset('assets')}}/extra-images/listing-Grid-img5.jpg" alt="#"/></figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                        <div class="post-title">
                                                            <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list-25">
                                                            <label for="check-list-25">Compare</label>
                                                        </div>
                                                        <a href="#" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure> <img src="{{asset('assets')}}/extra-images/listing-Grid-img6.jpg" alt="#"/></figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                        <div class="post-title">
                                                            <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list-26">
                                                            <label for="check-list-26">Compare</label>
                                                        </div>
                                                        <a href="#" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure> <img src="{{asset('assets')}}/extra-images/listing-Grid-img7.jpg" alt="#"/></figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                        <div class="post-title">
                                                            <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list-27">
                                                            <label for="check-list-27">Compare</label>
                                                        </div>
                                                        <a href="#" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure> <img src="{{asset('assets')}}/extra-images/listing-Grid-img8.jpg" alt="#"/></figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                        <div class="post-title">
                                                            <h6><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list-027">
                                                            <label for="check-list-027">Compare</label>
                                                        </div>
                                                        <a href="#" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Tabs End-->
                            <!--Element Section End--></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--tabs section-->
    <div class="page-section" style="background:#19171a;;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="cs-ad" style="text-align:center; padding:55px 0 25px;">
                        <div class="cs-media">
                            <figure> <a href="#"><img alt="" src="{{asset('assets')}}/extra-images/cs-ad-img.jpg"></a> </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

