<div class="page-section" style="background: rgba(0, 0, 0, 0); padding-top:0px; padding-bottom:0px;">
    <ul class="blog-detail-slider">
        @foreach($sliderdata as $rs)
            @if($rs->status == 'True')
            <li>
                <div class="cs-blog-banner">
                    <a href="{{route('car',['id'=>$rs->id])}}"><img src="{{Storage::url($rs->image)}}" style="width=900px; height: 800px" alt=""/></a>
                    <div class="caption-text">
                        <a href="{{route('car',['id'=>$rs->id])}}"></a>
                    </div>
                    <div class="cs-banner-text">
                        <h1>{{$rs->title}}</h1>
                    </div>
                </div>
                @endif()
                @endforeach
    </ul>
</div>


