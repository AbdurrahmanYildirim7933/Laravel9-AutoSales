@extends('layouts.frontbase_3')

@section('title','User Panel')


@section('content')
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li> <a href="{{route('home')}}">Home</a></li>
                <li class="active">User Panel</li>
            </ul>
        </div>
    </div>

    <!-- Main Start -->
    <div class="main-section">
        <div class="page-section" style="padding-top:40px; padding-bottom:60px;">
            <div class="container">
                <div class="row">
                    <div class="section-fullwidtht col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <!--Element Section Start-->
                            <div class="cs-contact-form">
                                <div class="col-lg-12 col-md-2 col-sm-12 col-xs-12">
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <div class="section-title">
                                        <h3 class="title">USER MENU</h3>
                                        <hr>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            @include('home.user.usermenu')
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <div class="section-title">
                                        <h3 class="title">MY POSTED CARS</h3>
                                        <hr>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <section class="content">
                                                <div class="card-body">
                                                    <h4 class="card-title">Car List</h4>
                                                    <p class="card-description">
                                                    </p>
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                            <tr>
                                                                <th style="width: 10px">ID</th>
                                                                <th>Category</th>
                                                                <th>Title</th>
                                                                <th>Brand</th>
                                                                <th>Model</th>
                                                                <th style="width: 400px">Image</th>
                                                                <th>Image Gallery</th>
                                                                <th>Price</th>
                                                                <th>Kilometer</th>
                                                                <th>Year</th>
                                                                <th>Color</th>
                                                                <th>Engine_power</th>
                                                                <th>Engine_size</th>
                                                                <th>Address</th>
                                                                <th>Body_type</th>
                                                                <th>Fuel_type</th>
                                                                <th>Gear_type</th>
                                                                <th>Traction_type</th>
                                                                <th>Status</th>
                                                                <th style="width: 40px">Edit</th>
                                                                <th style="width: 40px">Delete</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach( $data as $rs)
                                                                @if($rs->user_id == Auth::id())
                                                                    <tr>
                                                                        <td>{{$rs->id}}</td>
                                                                        <td>{{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                                                                        <td>{{$rs->title}}</td>
                                                                        <td>@foreach($brands as $rs2)
                                                                                @if($rs2->id == $rs->brand_id)
                                                                                    {{$rs2->title}}
                                                                                @endif
                                                                            @endforeach
                                                                        </td>
                                                                        <td>{{$rs->model}}</td>
                                                                        <td>
                                                                            @if($rs->image)
                                                                                <img src="{{Storage::url($rs->image)}}" style="height: 100px; width:100px" >
                                                                            @endif
                                                                        </td>
                                                                        <td><a href="{{route('userpanel.image',['cid' => $rs->id])}}"
                                                                               onclick="return !window.open(this.href,'','top=50 left=100 width=1100 height=700')">
                                                                                <img src="{{asset('assets')}}/admin/images/gallery.png" style="height: 90px; width:85px">
                                                                            </a>
                                                                        </td>
                                                                        <td>{{$rs->price}}</td>
                                                                        <td>{{$rs->kilometer}}</td>
                                                                        <td>{{$rs->year}}</td>
                                                                        <td>{{$rs->color}}</td>
                                                                        <td>{{$rs->engine_power}}</td>
                                                                        <td>{{$rs->engine_size}}</td>
                                                                        <td>{{$rs->address}}</td>
                                                                        <td>{{$rs->body_type}}</td>
                                                                        <td>{{$rs->fuel_type}}</td>
                                                                        <td>{{$rs->gear_type}}</td>
                                                                        <td>{{$rs->traction_type}}</td>

                                                                        <td>{{$rs->status}}</td>
                                                                        <td><a href="{{route('userpanel.editcar',['id' => $rs->id])}}" class="btn btn-block btn-info btn-sm">Edit<a/> </td>
                                                                        <td><a href="{{route('userpanel.destroycar',['id' => $rs->id])}}" class="btn btn-block btn-danger btn-sm"
                                                                               onclick="return confirm('Deleting !! Are u sure ?')">Delete<a/></td>
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </section>
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

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main End -->

@endsection

