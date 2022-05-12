<div class="page-section" style="background: rgba(0, 0, 0, 0); padding-top:0px; padding-bottom:0px;">
    <ul class="blog-detail-slider">
        @foreach($sliderdata as $rs)
        <li>
            <div class="cs-blog-banner">
                <a href="{{route('car',['id'=>$rs->id])}}"> <img src="{{Storage::url($rs->image)}}" style="width=900px; height: 900px" alt=""/> </a>
                <div class="caption-text">
                    <a href="{{route('car',['id'=>$rs->id])}}"> <h2>{{$rs->title}}</h2> </a>
                  </div>
            </div>
            @endforeach
        </li>
    </ul>
        </div>
    </div>
</div>

<!--Latest Model Auto Slider Start-->
<div class="page-section" style="background: rgba(237, 240, 245, 1); padding-top:70px; padding-bottom:70px;">
    <div class="container">
        <div class="row">
            <div class="section-fullwidtht col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <!--Element Section Start-->
                    <div class="cs-auto-listing cs-auto-box">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="cs-element-title">
                                    <h2></h2>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <ul class="cs-auto-box-slider row">
                                    @foreach($sliderdata as $rs)
                                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                        <div class="cs-media"> <span class=""></span>
                                            <figure> <a href="#"> <img src="{{Storage::url($rs->image)}}" style="width=400px; height: 400px" alt=""/> </a>
                                                <figcaption> </figcaption>
                                            </figure>
                                            <div class="caption-text"> <a href="#">
                                                    <h2>{{$rs->title}}</h2>
                                                </a> </div>
                                        </div>
                                        @endforeach
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!--Element Section End-->
                </div>
            </div>
        </div>
    </div>
</div>

<!--Latest Model Auto Slider End-->

