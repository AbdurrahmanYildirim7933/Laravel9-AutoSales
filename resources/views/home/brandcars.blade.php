@extends('layouts.frontbase_3')

@section('title', $brand->title . ' Cars')

@section('content')
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li> <a href="{{route('home')}}">Home</a></li>
                <li class="active">{{$brand->title}}</li>
            </ul>
        </div>
    </div>

    <div class="page-section">
            <div class="container">
                <div class="row">
                    <aside class="section-sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="cs-listing-filters">
                            <div class="cs-search">
                                <form class="search-form">
                                    <div class="loction-search">
                                        <input type="text" placeholder="Select Location">
                                        <a href="#"><i class="icon-hair-cross cs-color"></i></a>
                                    </div>
                                    <div class="select-input">
                                        <select data-placeholder="Select Make" tabindex="-1" class="chosen-select" style="display: none;">
                                            <option>Select make</option>
                                            <option>Select make</option>
                                            <option>Select make</option>
                                            <option>Select make</option>
                                        </select><div class="chosen-container chosen-container-single" style="width: 100%;" title=""><a class="chosen-single" tabindex="-1"><span>Select make</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off" tabindex="1"></div><ul class="chosen-results"></ul></div></div>
                                    </div>
                                </form>
                            </div>
                            <div class="cs-select-model">
                                <div class="cs-filter-title"><h6>Select Model</h6></div>
                                <form>
                                    <ul class="cs-checkbox-list mCustomScrollbar _mCS_1" data-mcs-theme="dark"><div id="mCSB_1" class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container" style="position: relative; top: -68px; left: 0px;" dir="ltr">
                                                <li>
                                                    <div class="checkbox">
                                                        <input id="checkbox" type="checkbox" value="Speed">
                                                        <label for="checkbox">5-Speed Automatic</label>
                                                        <span>(34)</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <input id="checkbox1" type="checkbox" value="Speed">
                                                        <label for="checkbox1">5-Speed Manual</label>
                                                        <span>(12)</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <input id="checkbox2" type="checkbox" value="Speed">
                                                        <label for="checkbox2">6-Speed Automatic</label>
                                                        <span>(45)</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <input id="checkbox3" type="checkbox" value="Speed">
                                                        <label for="checkbox3">6-Speed Manual</label>
                                                        <span>(32)</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <input id="checkbox4" type="checkbox" value="Speed">
                                                        <label for="checkbox4">6-Speed Semi-Auto</label>
                                                        <span>(102)</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <input id="checkbox5" type="checkbox" value="Speed">
                                                        <label for="checkbox5">7-Speed PDK</label>
                                                        <span>(122)</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <input id="checkbox6" type="checkbox" value="Speed">
                                                        <label for="checkbox6">8-Speed Automatic</label>
                                                        <span>(34)</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <input id="checkbox7" type="checkbox" value="Speed">
                                                        <label for="checkbox7">8-Speed Tiptronic</label>
                                                        <span>(12)</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <input id="checkbox8" type="checkbox" value="Speed">
                                                        <label for="checkbox8">5-Speed Automatic</label>
                                                        <span>(34)</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <input id="checkbox9" type="checkbox" value="Speed">
                                                        <label for="checkbox9">5-Speed Automatic</label>
                                                        <span>(34)</span>
                                                    </div>
                                                </li>
                                            </div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-dark mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 170px; max-height: 212px; top: 52px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></ul>
                                </form>
                            </div>
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <a role="button" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Model year
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <div class="cs-model-year">
                                                <div class="cs-select-filed">
                                                    <select data-placeholder="Recent Added" class="chosen-select-no-single" tabindex="-1" style="display: none;">
                                                        <option>2003</option>
                                                        <option>2004</option>
                                                        <option>2005</option>
                                                        <option>2006</option>
                                                    </select><div class="chosen-container chosen-container-single chosen-container-single-nosearch" style="width: 100%;" title=""><a class="chosen-single" tabindex="-1"><span>2003</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off" readonly="" tabindex="5"></div><ul class="chosen-results"></ul></div></div>
                                                </div>
                                                <span>to</span>
                                                <div class="cs-select-filed">
                                                    <select data-placeholder="Recent Added" class="chosen-select-no-single" tabindex="-1" style="display: none;">
                                                        <option>2006</option>
                                                        <option>2005</option>
                                                        <option>2004</option>
                                                        <option>2003</option>
                                                    </select><div class="chosen-container chosen-container-single chosen-container-single-nosearch" style="width: 100%;" title=""><a class="chosen-single" tabindex="-1"><span>2006</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off" readonly="" tabindex="5"></div><ul class="chosen-results"></ul></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Body Style
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <div class="cs-carbody-style">
                                                <form>
                                                    <ul class="cs-checkbox-list">
                                                        <li>
                                                            <div class="checkbox">
                                                                <input id="checkbox10" type="checkbox" value="Speed">
                                                                <label for="checkbox10">
                                                                    <img src="{{asset('assets')}}/extra-images/car-select-img1.jpg" alt="">
                                                                    <span>Medium Cars</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="checkbox">
                                                                <input id="checkbox11" type="checkbox" value="Speed">
                                                                <label for="checkbox11">
                                                                    <img src="{{asset('assets')}}/extra-images/car-select-img2.jpg" alt="">
                                                                    <span>Large Cars</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="checkbox">
                                                                <input id="checkbox12" type="checkbox" value="Speed">
                                                                <label for="checkbox12">
                                                                    <img src="{{asset('assets')}}/extra-images/car-select-img3.jpg" alt="">
                                                                    <span>Sports Cars</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="checkbox">
                                                                <input id="checkbox13" type="checkbox" value="Speed">
                                                                <label for="checkbox13">
                                                                    <img src="{{asset('assets')}}/extra-images/car-select-img4.jpg" alt="">
                                                                    <span>People Movers</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="checkbox">
                                                                <input id="checkbox14" type="checkbox" value="Speed">
                                                                <label for="checkbox14">
                                                                    <img src="{{asset('assets')}}/extra-images/car-select-img5.jpg" alt="">
                                                                    <span>Covertibles</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="checkbox">
                                                                <input id="checkbox15" type="checkbox" value="Speed">
                                                                <label for="checkbox15">
                                                                    <img src="{{asset('assets')}}/extra-images/car-select-img6.jpg" alt="">
                                                                    <span>Luxury Cars</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            PRICE RANGE
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <div class="cs-price-range">
                                                <form>
                                                    <div class="slider slider-horizontal" id=""><div class="slider-track"><div class="slider-track-low" style="left: 0px; width: 19.1919%;"></div><div class="slider-selection" style="left: 19.1919%; width: 40.404%;"></div><div class="slider-track-high" style="right: 0px; width: 40.404%;"></div><div class="slider-handle min-slider-handle round" role="slider" aria-valuemin="10" aria-valuemax="1000" aria-valuenow="600" tabindex="0" style="left: 59.596%;"></div><div class="slider-handle max-slider-handle round" role="slider" aria-valuemin="10" aria-valuemax="1000" aria-valuenow="200" tabindex="0" style="left: 19.1919%;"></div></div><div class="tooltip tooltip-main top" role="presentation" style="left: 39.3939%; margin-left: -33px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">600 : 200</div></div><div class="tooltip tooltip-min top" role="presentation" style="left: 59.596%; margin-left: -18px; display: none;"><div class="tooltip-arrow"></div><div class="tooltip-inner">600</div></div><div class="tooltip tooltip-max bottom" role="presentation" style="left: 19.1919%; margin-left: -18px; top: 18px; display: none;"><div class="tooltip-arrow"></div><div class="tooltip-inner">200</div></div></div><input id="price" type="text" class="span2" value="600,200" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[600,200]" data-value="600,200" style="display: none;">
                                                    <div class="selector-value">
                                                        <span>$60,000</span>
                                                        <span class="pull-right">$20,000</span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingfoure">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapsefoure" aria-expanded="false" aria-controls="collapsefoure">
                                            Transmission
                                        </a>
                                    </div>
                                    <div id="collapsefoure" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingfoure">
                                        <div class="panel-body">
                                            <div class="cs-select-transmission">
                                                <form>
                                                    <ul class="cs-checkbox-list">
                                                        <li>
                                                            <div class="checkbox">
                                                                <input id="checkbox16" type="checkbox" value="Speed">
                                                                <label for="checkbox16">5-Speed Automatic</label>
                                                                <span>(34)</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="checkbox">
                                                                <input id="checkbox17" type="checkbox" value="Speed">
                                                                <label for="checkbox17">5-Speed Manual</label>
                                                                <span>(12)</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="checkbox">
                                                                <input id="checkbox18" type="checkbox" value="Speed">
                                                                <label for="checkbox18">6-Speed Automatic</label>
                                                                <span>(45)</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="checkbox">
                                                                <input id="checkbox19" type="checkbox" value="Speed">
                                                                <label for="checkbox19">6-Speed Manual</label>
                                                                <span>(32)</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="checkbox">
                                                                <input id="checkbox20" type="checkbox" value="Speed">
                                                                <label for="checkbox20">6-Speed Semi-Auto</label>
                                                                <span>(102)</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="checkbox">
                                                                <input id="checkbox21" type="checkbox" value="Speed">
                                                                <label for="checkbox21">7-Speed PDK</label>
                                                                <span>(122)</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="checkbox">
                                                                <input id="checkbox22" type="checkbox" value="Speed">
                                                                <label for="checkbox22">8-Speed Automatic</label>
                                                                <span>(34)</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="checkbox">
                                                                <input id="checkbox23" type="checkbox" value="Speed">
                                                                <label for="checkbox23">8-Speed Tiptronic</label>
                                                                <span>(12)</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingfive">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                            Transmission
                                        </a>
                                    </div>
                                    <div id="collapsefive" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingfive">
                                        <div class="panel-body">
                                            <div class="cs-select-transmission">
                                                <form>
                                                    <ul class="cs-checkbox-list">
                                                        <li>
                                                            <div class="checkbox">
                                                                <input id="checkbox24" type="checkbox" value="Speed">
                                                                <label for="checkbox24">Brand New</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="checkbox">
                                                                <input id="checkbox25" type="checkbox" value="Speed">
                                                                <label for="checkbox25">Slightly Used</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="checkbox">
                                                                <input id="checkbox26" type="checkbox" value="Speed">
                                                                <label for="checkbox26">Used</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingsix">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                            Engine Capacity(cc)
                                        </a>
                                    </div>
                                    <div id="collapsesix" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingsix">
                                        <div class="panel-body">
                                            <div class="cs-engine-capacity">
                                                <form>
                                                    <div class="slider slider-horizontal" id=""><div class="slider-track"><div class="slider-track-low" style="left: 0px; width: 19.1919%;"></div><div class="slider-selection" style="left: 19.1919%; width: 40.404%;"></div><div class="slider-track-high" style="right: 0px; width: 40.404%;"></div><div class="slider-handle min-slider-handle round" role="slider" aria-valuemin="10" aria-valuemax="1000" aria-valuenow="600" tabindex="0" style="left: 59.596%;"></div><div class="slider-handle max-slider-handle round" role="slider" aria-valuemin="10" aria-valuemax="1000" aria-valuenow="200" tabindex="0" style="left: 19.1919%;"></div></div><div class="tooltip tooltip-main top" role="presentation" style="left: 39.3939%; margin-left: -33px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">600 : 200</div></div><div class="tooltip tooltip-min top" role="presentation" style="left: 59.596%; margin-left: -18px; display: none;"><div class="tooltip-arrow"></div><div class="tooltip-inner">600</div></div><div class="tooltip tooltip-max bottom" role="presentation" style="left: 19.1919%; margin-left: -18px; top: 18px; display: none;"><div class="tooltip-arrow"></div><div class="tooltip-inner">200</div></div></div><input id="engine" type="text" class="span2" value="600,200" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[600,200]" data-value="600,200" style="display: none;">
                                                    <div class="selector-value">
                                                        <span>800CC</span>
                                                        <span class="pull-right">5500CC</span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <div class="section-content col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="auto-sort-filter">
                                    <div class="auto-show-resuilt"><span>SHOWING <em>25</em> RESULTS FOR YOUR SEARCH</span></div>
                                    <div class="auto-list">
                                        <span>Sort</span>
                                        <ul>
                                            <li>
                                                <div class="cs-select-post">
                                                    <select data-placeholder="Recent Added" class="chosen-select-no-single" tabindex="-1" style="display: none;">
                                                        <option>Recent Added</option>
                                                        <option>Recent Added</option>
                                                        <option>Recent Added</option>
                                                        <option>Recent Added</option>
                                                    </select><div class="chosen-container chosen-container-single chosen-container-single-nosearch" style="width: 100%;" title=""><a class="chosen-single chosen-default" tabindex="-1"><span>Recent Added</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off" readonly="" tabindex="5"></div><ul class="chosen-results"></ul></div></div>
                                                </div>
                                            </li>
                                            <li><a href="#"><i class=" icon-view_module"></i></a></li>
                                            <li><a href="#"><i class="icon-view_array"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="auto-your-search">
                                    <ul class="filtration-tags">
                                        <li><a href="#">Hybrid <i class="icon-cross2"></i></a></li>
                                        <li><a href="#">Bmw<i class="icon-cross2"></i></a></li>
                                        <li><a href="#">Compact hatchbac<i class="icon-cross2"></i></a></li>
                                    </ul>
                                    <a href="#" class="clear-tags cs-color">Clear Filters</a>
                                </div>
                            </div>
                            @foreach($cars as $rs)
                                @if($rs->status == 'True')
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                                    <div class="auto-listing auto-grid">
                                        <div class="cs-media">
                                            <figure> <img  src="{{Storage::url($rs->image)}}" alt=""/></figure>
                                        </div>
                                        <div class="auto-text">
                                            <span class="cs-categories"><a href="#"></a></span>
                                            <div class="post-title">
                                                <h4><a href="{{route('car',['id'=>$rs->id])}}">{{$rs->title}}</a></h4>
                                                <h6><a href="{{route('car',['id'=>$rs->id])}}">{{$rs->title}}</a></h6>
                                                <div class="auto-price"><span class="cs-color">${{$rs->price}}</span> <em>${{$rs->price*1.10}}</em></div>
                                                <a href="{{route('car',['id'=>$rs->id])}}"><img  src="{{Storage::url($rs->image)}}" alt=""/></a>
                                            </div>
                                            <ul class="auto-info-detail">
                                                <li>Year<span>2002</span></li>
                                                <li>Mileage<span>121,899</span></li>
                                                <li>Trans<span>Auto</span></li>
                                                <li>Fuel Type<span>Hybrid</span></li>
                                            </ul>
                                            <div class="btn-list">
                                                <a href="javascript:void(0)" class="btn btn-danger collapsed" data-toggle="collapse" data-target="#list-view1"></a><div id="list-view1" class="collapse">
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
                                            <p>Start by a group of maverick Nissan engineers heights of Nissan performance almost...<a href="#" class="read-more cs-color">+ More</a></p>
                                            <div class="cs-checkbox">
                                                <input type="checkbox" name="list" value="check-listn" id="check-list1">
                                                <label for="check-list1">Compare</label>
                                            </div>
                                            <a href="#" class="short-list cs-color"><i class="icon-heart-o"></i>ShortList</a>
                                            <a  href="{{route('car',['id'=>$rs->id])}}" class="View-btn">View Detail<i class=" icon-arrow-long-right"></i></a>
                                        </div>
                                    </div>

                                </div>
                                @endif
                            @endforeach

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <nav>
                                    <ul class="pagination">
                                        <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="icon-angle-left"></i></span></a></li>
                                        <li><a class="active">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="icon-angle-right"></i></span></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-section" style="background:#19171a;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="cs-ad" style="text-align:center; padding:55px 0 32px;">
                            <div class="cs-media">
                                <figure>
                                    <img src="{{asset('assets')}}/extra-images/cs-ad-img.jpg" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
