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
                                <p style="text-transform:uppercase;font-size:11px;color:#999999 !important;">It will help us find the AUTO-SALES you're looking for in your area.</p>
                            </div>
                            <!--Tabs Start-->

                            <div class="cs-tabs full-width">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#home">Sport Cars</a></li>
                                    <li><a data-toggle="tab" href="#menu1">SUVs</a></li>
                                    <li><a data-toggle="tab" href="#menu2">Hatchbacks</a></li>
                                    <li><a data-toggle="tab" href="#menu3">Sedan</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active">
                                        <div class="row">
                                            @foreach($cars as $rs)
                                                @if($rs->category->title == "Sport")
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="auto-listing auto-grid">
                                                    <div class="cs-media">
                                                        <figure><a href="{{route('car',['id'=>$rs->id])}}"><img src="{{Storage::url($rs->image)}}" alt="#"/>
                                                            <figcaption> <span class="auto-featured">On Sale Now...</span> </figcaption></a>
                                                        </figure>
                                                    </div>
                                                    <div class="auto-text"> <span class="cs-categories">{{$rs->user->name}}</span>
                                                        <div class="post-title">
                                                            <h6><a href="{{route('car',['id'=>$rs->id])}}">{{$rs->title}}</a></h6>
                                                            <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                        </div>
                                                        <div class="btn-list"> <a href="javascript:void(0)" class="btn btn-danger collapsed" data-toggle="collapse" data-target="#list-view"></a>
                                                            <div id="list-view" class="collapse">
                                                                <ul>
                                                                    <li>Model: {{$rs->model}}</li>
                                                                    <li>Year: {{$rs->year}}</li>
                                                                    <li>Color: {{$rs->color}}</li>
                                                                    <li>Kilometer: {{$rs->kilometer}}</li>
                                                                    <li>Engine Power/Size : {{$rs->engine_power}}/{{$rs->engine_size}}</li>
                                                                    <li>Location: {{$rs->address}}</li>
                                                                    <li>Fuel type: {{$rs->fuel_type}}</li>
                                                                    <li>Gear Type:{{$rs->gear_type}}</li>
                                                                    <li>Traction: {{$rs->traction_type}}</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="cs-checkbox">
                                                            <input type="checkbox" name="list" value="check-listn" id="check-list">
                                                            <label for="check-list">Compare</label>
                                                        </div>
                                                        <a href="{{route('car',['id'=>$rs->id])}}" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                </div>
                                            </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">
                                        <div class="row">
                                            @foreach($cars as $rs)
                                                @if($rs->category->title == "SUV")
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                        <div class="auto-listing auto-grid">
                                                            <div class="cs-media">
                                                                <figure><a href="{{route('car',['id'=>$rs->id])}}"><img src="{{Storage::url($rs->image)}}" alt="#"/>
                                                                        <figcaption> <span class="auto-featured">On Sale Now...</span> </figcaption></a>
                                                                </figure>
                                                            </div>
                                                            <div class="auto-text"> <span class="cs-categories">{{$rs->user->name}}</span>
                                                                <div class="post-title">
                                                                    <h6><a href="{{route('car',['id'=>$rs->id])}}">{{$rs->title}}</a></h6>
                                                                    <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                                </div>
                                                                <div class="btn-list"> <a href="javascript:void(0)" class="btn btn-danger collapsed" data-toggle="collapse" data-target="#list-view"></a>
                                                                    <div id="list-view" class="collapse">
                                                                        <ul>
                                                                            <li>Model: {{$rs->model}}</li>
                                                                            <li>Year: {{$rs->year}}</li>
                                                                            <li>Color: {{$rs->color}}</li>
                                                                            <li>Kilometer: {{$rs->kilometer}}</li>
                                                                            <li>Engine Power/Size : {{$rs->engine_power}}/{{$rs->engine_size}}</li>
                                                                            <li>Location: {{$rs->address}}</li>
                                                                            <li>Fuel type: {{$rs->fuel_type}}</li>
                                                                            <li>Gear Type:{{$rs->gear_type}}</li>
                                                                            <li>Traction: {{$rs->traction_type}}</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="cs-checkbox">
                                                                    <input type="checkbox" name="list" value="check-listn" id="check-list">
                                                                    <label for="check-list">Compare</label>
                                                                </div>
                                                                <a href="{{route('car',['id'=>$rs->id])}}" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div id="menu2" class="tab-pane fade">
                                        <div class="row">
                                            @foreach($cars as $rs)
                                                @if($rs->category->title == "Hatchback")
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                        <div class="auto-listing auto-grid">
                                                            <div class="cs-media">
                                                                <figure><a href="{{route('car',['id'=>$rs->id])}}"><img src="{{Storage::url($rs->image)}}" alt="#"/>
                                                                        <figcaption> <span class="auto-featured">On Sale Now...</span> </figcaption></a>
                                                                </figure>
                                                            </div>
                                                            <div class="auto-text"> <span class="cs-categories"><a href="#">Timlers Motors</a></span>
                                                                <div class="post-title">
                                                                    <h6><a href="{{route('car',['id'=>$rs->id])}}">{{$rs->title}}</a></h6>
                                                                    <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                                </div>
                                                                <div class="btn-list"> <a href="javascript:void(0)" class="btn btn-danger collapsed" data-toggle="collapse" data-target="#list-view"></a>
                                                                    <div id="list-view" class="collapse">
                                                                        <ul>
                                                                            <li>Model: {{$rs->model}}</li>
                                                                            <li>Year: {{$rs->year}}</li>
                                                                            <li>Color: {{$rs->color}}</li>
                                                                            <li>Kilometer: {{$rs->kilometer}}</li>
                                                                            <li>Engine Power/Size : {{$rs->engine_power}}/{{$rs->engine_size}}</li>
                                                                            <li>Location: {{$rs->address}}</li>
                                                                            <li>Fuel type: {{$rs->fuel_type}}</li>
                                                                            <li>Gear Type:{{$rs->gear_type}}</li>
                                                                            <li>Traction: {{$rs->traction_type}}</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="cs-checkbox">
                                                                    <input type="checkbox" name="list" value="check-listn" id="check-list">
                                                                    <label for="check-list">Compare</label>
                                                                </div>
                                                                <a href="{{route('car',['id'=>$rs->id])}}" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div id="menu3" class="tab-pane fade">
                                        <div class="row">
                                            @foreach($cars as $rs)
                                                @if($rs->category->title == "Sedan")
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                        <div class="auto-listing auto-grid">
                                                            <div class="cs-media">
                                                                <figure><a href="{{route('car',['id'=>$rs->id])}}"><img src="{{Storage::url($rs->image)}}" alt="#"/>
                                                                        <figcaption> <span class="auto-featured">On Sale Now...</span> </figcaption></a>
                                                                </figure>
                                                            </div>
                                                            <div class="auto-text"> <span class="cs-categories"><a href="#">USERNAME</a></span>
                                                                <div class="post-title">
                                                                    <h6><a href="{{route('car',['id'=>$rs->id])}}">{{$rs->title}}</a></h6>
                                                                    <div class="auto-price"><span class="cs-color">$25,000</span> <em>MSRP $27,000</em></div>
                                                                </div>
                                                                <div class="btn-list"> <a href="javascript:void(0)" class="btn btn-danger collapsed" data-toggle="collapse" data-target="#list-view"></a>
                                                                    <div id="list-view" class="collapse">
                                                                        <ul>
                                                                            <li>Model: {{$rs->model}}</li>
                                                                            <li>Year: {{$rs->year}}</li>
                                                                            <li>Color: {{$rs->color}}</li>
                                                                            <li>Kilometer: {{$rs->kilometer}}</li>
                                                                            <li>Engine Power/Size : {{$rs->engine_power}}/{{$rs->engine_size}}</li>
                                                                            <li>Location: {{$rs->address}}</li>
                                                                            <li>Fuel type: {{$rs->fuel_type}}</li>
                                                                            <li>Gear Type:{{$rs->gear_type}}</li>
                                                                            <li>Traction: {{$rs->traction_type}}</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="cs-checkbox">
                                                                    <input type="checkbox" name="list" value="check-listn" id="check-list">
                                                                    <label for="check-list">Compare</label>
                                                                </div>
                                                                <a href="{{route('car',['id'=>$rs->id])}}" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a> </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
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


@endsection

