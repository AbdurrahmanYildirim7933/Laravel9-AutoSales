@extends('layouts.frontbase_3')

@section('title','Frequently Ask Questions '. $setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))

@section('content')
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li> <a href="{{route('home')}}">Home</a></li>
                <li class="active">Frequently Ask Questions</li>
            </ul>
        </div>
    </div>

    <div class="main-section">
        <div class="page-section">
            <div class="container">
                <div class="row">
                    <div class="section-content col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="content-area">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="cs-section-title alignleft">
                                        <h3>Frequently Ask Questions</h3>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                    <div class="panel-group box" id="accordion" role="tablist" aria-multiselectable="false">

                                        <div class="panel panel-default">
                                            @foreach($datalist as $rs)
                                            <div class="panel-heading" role="tab" id="">
                                                <h6 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$loop->iteration}}" aria-expanded="true" aria-controls="">
                                                        <i class="icon-directions_car"></i>{{$rs->question}}</a>
                                                </h6>
                                            </div>
                                            <div id="collapse{{$loop->iteration}}" class="collapse @once show @endonce" role="tabpanel" data-parent="#accordion">
                                                <div class="panel-body">{!!$rs->answer!!}</div>
                                            </div>
                                            @endforeach
                                        </div>

                                    </div>

                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="cs-section-title alignleft">
                                                <h3>Frequent Questions?</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="cs-services top-center has-border">
                                                <div class="cs-media"> <i class=" icon-speedometer cs-color" style="font-size:60px"> </i> </div>
                                                <div class="cs-text">
                                                    <h4>Need support?</h4>
                                                    <p>Make sure your customer sees this but also be careful to spray in the opposite direction. The Cool Care spray is a coolant? </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="cs-services top-center has-border">
                                                <div class="cs-media"> <i class="icon-transport177 cs-color" style="font-size:60px"> </i> </div>
                                                <div class="cs-text">
                                                    <h4>CHECK FORUM?</h4>
                                                    <p>Make sure your customer sees this but also be careful to spray in the opposite direction. The Cool Care spray is a coolant? </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <aside class="section-sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="widget widget-search">
                            <h6>Recent Posts</h6>
                            <div class="input-holder">
                                <form>
                                    <input type="text" placeholder="Enter any keyword">
                                    <label><input type="submit" value=""></label>
                                </form>
                            </div>
                        </div>
                        <div class="widget widget-text">
                            <h6>ONE MORE QUESTION ?</h6>
                            <p>Visit our Contact Page...</p>
                            <a href="{{route('contact')}}" class="contact-btn cs-color">Contact us</a>
                        </div>
                        <div class="widget widget-comments">
                            <h6>rECENT COMMENTS</h6>
                            <ul>
                                <li><a href="#"><i class="icon-keyboard_arrow_right"></i>Prueba on Happy Ninja Hoodie</a></li>
                                <li><a href="#"><i class="icon-keyboard_arrow_right"></i>me on This is a Gallery Post</a></li>
                                <li><a href="#"><i class="icon-keyboard_arrow_right"></i>wholesale bags on This is a Sticky.</a></li>
                            </ul>
                        </div>
                        <div class="widget widget-archives">
                            <h6>ARCHIVES</h6>
                            <ul>
                                <li><a href="#"><i class="icon-keyboard_arrow_right"></i>December 2015</a>(2)</li>
                                <li><a href="#"><i class="icon-keyboard_arrow_right"></i>November 2015</a>(1)</li>
                                <li><a href="#"><i class="icon-keyboard_arrow_right"></i>October 2015</a>(1)</li>
                                <li><a href="#"><i class="icon-keyboard_arrow_right"></i>September 2015</a>(1)</li>
                                <li><a href="#"><i class="icon-keyboard_arrow_right"></i>August 2015</a>(1)</li>
                                <li><a href="#"><i class="icon-keyboard_arrow_right"></i>July 2015</a>(1)</li>
                                <li><a href="#"><i class="icon-keyboard_arrow_right"></i>April 2015</a>(3)</li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- Main End -->
@endsection

