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
                                <h2>Latest Released Car Models</h2>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ul class="cs-auto-box-slider row">
                                @foreach($carlist1 as $rs)
                                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                        <div class="cs-media"> <span style="background: #89919f">{{$rs->title}}</span>
                                            <figure> <a href="{{route('car',['id'=>$rs->id])}}"> <img src="{{Storage::url($rs->image)}}" style="width:350px; height: 350px" alt=""/> </a>
                                                <figcaption> </figcaption>
                                            </figure>
                                            <div class="caption-text"> <a href="{{route('car',['id'=>$rs->id])}}">
                                                    <h2>{{$rs->title}}</h2>
                                                </a> </div>
                                        </div>
                                        @php
                                            $average = $rs->comment->average('rate');
                                        @endphp
                                        <div class="auto-text cs-bgcolor"> <span>${{$rs->price}}</span><del>${{$rs->price * 1.10}}  </del><small>
                                                <em>{{number_format($average,1)}} / ({{$rs->comment->count('id')}} customer review)</em>
                                            </small>
                                            <a href="{{route('car',['id'=>$rs->id])}}" class="cs-button pull-right"><i class="icon-arrow_forward"></i></a>

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

