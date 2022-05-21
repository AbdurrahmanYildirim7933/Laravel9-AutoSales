@extends('layouts.frontbase_2')

@section('title', $data->title )

@section('content')

    <div class="main-section">
        <div class="page-section">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">{{$data->category->title}}</a></li>
                    <li class="active">{{$data->title}}</li>
                </ul>
                <div class="row">
                    <div class="section-fullwidth col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="page-content col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                <div class="site-main">
                                    <div class=" product type-product has-post-thumbnail product-type-simple">
                                        <div class="images">
                                            <div class="blog-listing medium-view">
                                                <div class="cs-media blog-medium-slider">
                                                    <figure><img style="width: 100%; height: 300px" src="{{Storage::url($data->image)}}" alt="" /></figure>

                                                @foreach($images as $rs)
                                                        <div class="thumbnails columns-4">
                                                            <a href="#"><img style="width: 100%; height: 300px" src="{{Storage::url($rs->image )}}" alt="shop" /></a>

                                                        </div>
                                                        @endforeach
                                                </div>
                                                <div class="post-option"><em>8 Photos</em></div>

                                            </div>
                                        </div>
                                        <div class="summary entry-summary">
                                            @include('home.messages')
                                            <div class="star-rating" title="Rated 5 out of 5">
                                                <span style="width:66%"><strong class="rating">5</strong> out of 5</span>
                                            </div>
                                            <em>(1 customer review)</em>
                                            <span class="stock_wrapper">Availability: <span class="stock cs-color">In stock</span></span>
                                            <h3>{{$data->title}}</h3>
                                            <span class="price">
                                                <ins><span class="amount cs-color">₺{{$data->price}}</span></ins>
                                                <del><span class="amount">₺{{$data->price * 1.20}}</span></del>
                                            </span>
                                            <div class="description">
                                                <p>{{$data->description}}</p>
                                            </div>
                                            <form id='myform' method='POST' action='#' class="cart">
                                                <div class="quantity">
                                                    <input type='button' value='-' class='qtyminus' field='quantity' />
                                                    <input type='text' name='quantity' value='0' class='qty' />
                                                    <input type='button' value='+' class='qtyplus' field='quantity' />
                                                </div>
                                                <button class="single_add_to_cart_button button alt cs-bgcolor" type="submit">Add to cart</button>
                                            </form>
                                            <div class="product_meta">
                                            	<span class="posted_in">
                                                	Category:
                                                	<a rel="tag" href="#">Oil &amp; Filters</a>,
                                                    <a rel="tag" href="#">Parts</a>,
                                                    <a rel="tag" href="#">Exterior</a>
                                                </span>
                                                <span class="posted_in">
                                                	tags:
                                                	<a rel="tag" href="#">Hybrid</a>,
                                                    <a rel="tag" href="#">Radiator</a>,
                                                    <a rel="tag" href="#">Wheel Hub</a>,
                                                    <a rel="tag" href="#">BMW</a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="woocommerce-tabs wc-tabs-wrapper">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs wc-tabs" role="tablist">
                                                <li role="presentation" class="active">
                                                    <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Additional Detail</a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Reviews</a>
                                                </li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="home">
                                                    <h5>Product Description</h5>
                                                    <p>{{$data->description}}</p>
                                                    <ul class="list-style">
                                                        <li><i class="icon-check3"></i>A</li>
                                                        <li><i class="icon-check3"></i>B</li>
                                                        <li><i class="icon-check3"></i>C</li>
                                                        <li><i class="icon-check3"></i>D</li>
                                                        <li><i class="icon-check3"></i>E</li>
                                                    </ul>

                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="profile">
                                                    <h5>Product Detail</h5>
                                                    <p>{!! $data->detail !!}</p>
                                                    <ul class="list-style">
                                                        <li><i class="icon-check3"></i>A</li>
                                                        <li><i class="icon-check3"></i>B</li>
                                                        <li><i class="icon-check3"></i>C</li>
                                                        <li><i class="icon-check3"></i>D</li>
                                                        <li><i class="icon-check3"></i>E</li>
                                                    </ul>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="messages">
                                                    <div id="reviews">
                                                        <div id="comments">
                                                            <h5>Car Reviews</h5>
                                                            <ol class="commentlist">
                                                                @foreach($reviews as $rs)
                                                                <li class="comment even thread-even depth-1">
                                                                    <div class="comment_container">
                                                                        <img src="{{asset('assets')}}/extra-images/Shop-comment1.jpg" alt="#" />
                                                                        <div class="comment-text">
                                                                            <p class="meta">
                                                                                <em>{{$rs->user->name}}</em>
                                                                                {{$rs->created_at}}
                                                                            </p>
                                                                            <div class="star-rating">
                                                                                <span style="width=(widthratio{{$rs->rate}}*20)% "><strong itemprop="ratingValue">{{$rs->rate}}</strong> {{$rs->rate}}</span>
                                                                            </div>
                                                                            <div class="description">
                                                                                <strong>{{$rs->subject}}</strong>
                                                                                <p> {{$rs->review}}</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                @endforeach
                                                            </ol>
                                                        </div>
                                                        <div id="review_form_wrapper">
                                                            <div id="review_form">
                                                                <div class="comment-respond" id="respond">
                                                                    <h5 class="comment-reply-title" id="reply-title">Add a Review  <small><a style="display:none;" href="#" id="cancel-comment-reply-link" rel="nofollow">Cancel reply</a></small></h5>
                                                                    <form class="comment-form" id="commentform" method="post" action="{{route('storecomment')}}">
                                                                        @csrf
                                                                        <p class="comment-form-rating"><p class="stars"><span><a class="star-1">1</a><a href="#" class="star-2">2</a><a href="#" class="star-3">3</a><a href="#" class="star-4">4</a><a href="#" class="star-5">5</a></span></p><select id="rate" name="rate" style="display: none;" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                                                                            <option value="">Rate…</option>
                                                                            <option value="5">Perfect</option>
                                                                            <option value="4">Good</option>
                                                                            <option value="3">Average</option>
                                                                            <option value="2">Not that bad</option>
                                                                            <option value="1">Very Poor</option>
                                                                        </select>
                                                                        <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;">
                                <span class="selection">
                                <span aria-expanded="false" aria-haspopup="true" aria-autocomplete="list" role="combobox" class="select2-selection select2-selection--single" tabindex="0" aria-labelledby="select2-rating-container">
                                <span class="select2-selection__rendered" id="select2-rating-container" title="Rate…">Give Rating</span>
                                <span role="presentation" class="select2-selection__arrow"><b role="presentation"></b></span></span>
                                </span><span aria-hidden="true" class="dropdown-wrapper"></span></span></p>
                                                                        <div class="rating">

                                                                            <input type="radio" name="rate" value="5" id="5"><label for="5">5-☆</label>
                                                                            <input type="radio" name="rate" value="4" id="4"><label for="4">4-☆</label>
                                                                            <input type="radio" name="rate" value="3" id="3"><label for="3">3-☆</label>
                                                                            <input type="radio" name="rate" value="2" id="2"><label for="2">2-☆</label>
                                                                            <input type="radio" name="rate" value="1" id="1"><label for="1">1-☆</label>

                                                                        </div>
                                                                        <div class="row">
                                                                            <input class="input" type="hidden" name="car_id" value="{{$data->id}}" />

                                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                                <p class="comment-form-author">
                                                                                    <input type="text" name="subject" placeholder="Subject" />
                                                                                </p>
                                                                            </div>

                                                                        </div>
                                                                        <p class="comment-form-comment">
                                                                            <textarea name="review" placeholder="Your Review"></textarea>
                                                                        </p>
                                                                        @auth
                                                                        <p class="form-submit">
                                                                            <input type="submit" value="Submit Message" class="submit cs-bgcolor">
                                                                            <input type="hidden" />
                                                                            <input type="hidden" />
                                                                        </p>
                                                                        @else
                                                                            <p class="form-submit">
                                                                                <input type="submit" value="For Submit Your Review, Please Login" class="submit cs-bgcolor">
                                                                                <input type="hidden" />
                                                                                <input type="hidden" />
                                                                            </p>
                                                                        @endauth
                                                                        <p style="display: none;">
                                                                            <input type="hidden" />
                                                                        </p>
                                                                        <p style="display: none;" class="stm-hidden"></p>
                                                                        <input type="hidden" />
                                                                    </form>
                                                                </div>
                                                                <!-- #respond -->
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="columns-3">
                                            <div class="shop-sec-title">
                                                <h3>Related Cars</h3>
                                            </div>
                                            <ul class="products">
                                                <li class="product">
                                                    <a href="#">
                                                        <img alt="shop" src="{{asset('assets')}}/extra-images/shop4.jpg">
                                                        <h5>Air Filter</h5>
                                                        <span class="price">
                                                            <span class="amount">$2,000.00</span>
                                                        </span>
                                                        <div class="star-rating" title="Rated 5 out of 5">
                                                            <span style="width:66%"><strong class="rating">5</strong> out of 5</span>
                                                        </div>
                                                    </a>
                                                    <div class="product-action-button">
                                                        <a class="cs-color btn btn-flat button product_type_simple add_to_cart_button ajax_add_to_cart" href="#">
                                                            <i class="icon-shopping-cart2 cs-bgcolor"></i>
                                                            Add to cart
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="product">
                                                    <a href="#">
                                                        <img alt="shop" src="{{asset('assets')}}/extra-images/shop5.jpg">
                                                        <h5>Car brush</h5>
                                                        <span class="price">
                                                            <span class="amount">$2,000.00</span>
                                                        </span>
                                                        <div class="star-rating" title="Rated 5 out of 5">
                                                            <span style="width:66%"><strong class="rating">5</strong> out of 5</span>
                                                        </div>
                                                    </a>
                                                    <div class="product-action-button">
                                                        <a class="cs-color btn btn-flat button product_type_simple add_to_cart_button ajax_add_to_cart" href="#">
                                                            <i class="icon-shopping-cart2 cs-bgcolor"></i>
                                                            Add to cart
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="product">
                                                    <a href="#">
                                                        <img alt="shop" src="{{asset('assets')}}/extra-images/shop6.jpg">
                                                        <h5>Car mats for BMW F10</h5>
                                                        <span class="price">
                                                            <ins><span class="amount">$99.00</span></ins>
                                                            <del><span class="amount">$150.00</span></del>
                                                        </span>
                                                        <div class="star-rating" title="Rated 5 out of 5">
                                                            <span style="width:66%"><strong class="rating">5</strong> out of 5</span>
                                                        </div>
                                                    </a>
                                                    <div class="product-action-button">
                                                        <a class="cs-color btn btn-flat button product_type_simple add_to_cart_button ajax_add_to_cart" href="#">
                                                            <i class="icon-shopping-cart2 cs-bgcolor"></i>
                                                            Add to cart
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <aside class="page-sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="widget woocommerce widget_product_categories">
                                    <h6>Car Categories</h6>
                                    <ul>
                                        <li class="cat-item cat-item-3 cat-parent">
                                            <a href="#">Clothes &amp; Footwear <span>(17)</span></a>
                                            <ul class="children">
                                                <li><a href="#">Footwear <span>(3)</span></a></li>
                                                <li><a href="#">Hoodies <span>(7)</span></a></li>
                                                <li><a href="#">T-shirts <span>(7)</span></a></li>
                                            </ul>
                                        <li><a href="#">Digital goods <span>(3)</span></a></li>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget woocommerce widget_top_rated_products">
                                    <h6>Latest Cars</h6>
                                    <ul class="product_list_widget">
                                        <li>
                                            <a href="#">
                                                <img src="{{asset('assets')}}/extra-images/Shop-widget1.jpg" alt="shop" />
                                                <span class="product-title">USB Air Compressor</span>
                                            </a>
                                            <span class="amount cs-color">$500.00</span>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{asset('assets')}}/extra-images/Shop-widget2.jpg" alt="shop" />
                                                <span class="product-title">Ninja Sound</span>
                                            </a>
                                            <span class="amount cs-color">$800.00</span>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{asset('assets')}}/extra-images/Shop-widget3.jpg" alt="shop" />
                                                <span class="product-title">Car mats for BMW</span>
                                            </a>
                                            <span class="amount cs-color">$900.00</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget woocommerce widget_shopping_cart">
                                    <h6>Top Rated Cars</h6>
                                    <div class="widget_shopping_cart_content">
                                        <ul class="cart_list product_list_widget">
                                            <li class="mini_cart_item">
                                                <a href="#">
                                                    <img src="{{asset('assets')}}/extra-images/Shop-widget4.jpg" alt="shop" />
                                                    Brembo Sport Brakes
                                                </a>
                                                <span class="amount">$500.00</span>
                                                <div title="Rated 5 out of 5" class="star-rating">
                                                    <span style="width:66%"><strong class="rating">5</strong> out of 5</span>
                                                </div>
                                            </li>
                                            <li class="mini_cart_item">
                                                <a href="#">
                                                    <img src="{{asset('assets')}}/extra-images/Shop-widget5.jpg" alt="shop" />
                                                    Custom spark-plug
                                                </a>
                                                <span class="amount">$800.00</span>
                                                <div title="Rated 5 out of 5" class="star-rating">
                                                    <span style="width:66%"><strong class="rating">5</strong> out of 5</span>
                                                </div>
                                            </li>
                                            <li class="mini_cart_item">
                                                <a href="#">
                                                    <img src="{{asset('assets')}}/extra-images/Shop-widget6.jpg" alt="shop" />
                                                    Air Filter
                                                </a>
                                                <span class="amount">$900.00</span>
                                                <div title="Rated 5 out of 5" class="star-rating">
                                                    <span style="width:66%"><strong class="rating">5</strong> out of 5</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget widget-tags woocommerce">
                                    <h6>CARS TAG</h6>
                                    <a href="#">Houses</a>
                                    <a href="#">Apartment</a>
                                    <a href="#">Rates</a>
                                    <a href="#">Commercial</a>
                                    <a href="#">Building</a>
                                    <a href="#">Rates</a>
                                    <a href="#">Flats</a>
                                    <a href="#">People</a>
                                    <a href="#">United Kingdom</a>
                                    <a href="#">Commercial</a>
                                    <a href="#">Building</a>
                                    <a href="#">Flats</a>
                                    <a href="#">Houses</a>
                                    <a href="#">Apartment</a>
                                    <a href="#">Rates</a>
                                    <a href="#">Commercial</a>
                                    <a href="#">Building</a>
                                    <a href="#">Road</a>
                                    <a href="#">Flats</a>
                                    <a href="#">People</a>
                                    <a href="#">United Kingdom</a>
                                    <a href="#">Commercial</a>
                                    <a href="#">Building</a>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-section" style="background:#19171a;;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="cs-ad" style="text-align:center; padding:55px 0 25px;">
                            <div class="cs-media">
                                <figure>
                                    <a href="#"><img alt="" src="{{asset('assets')}}/extra-images/cs-ad-img.jpg"></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

