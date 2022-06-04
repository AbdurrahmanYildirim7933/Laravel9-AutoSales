@extends('layouts.frontbase_3')

@section('title','User Comments & Reviews')


@section('content')
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li> <a href="{{route('home')}}">Home</a></li>
                <li class="active">User Comment</li>
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
                                            <h3 class="title">User Comments & Reviews</h3>
                                            <hr>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th style="width: 20px">ID</th>
                                                        <th>Car</th>
                                                        <th>Subject</th>
                                                        <th>Review</th>
                                                        <th>Rate</th>
                                                        <th>Status</th>
                                                        <th style="width: 40px">Delete</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach( $comments as $rs)
                                                        <tr>
                                                            <td>{{$rs->id}}</td>
                                                            <td><a href="{{route('car',['id' => $rs->car_id])}}">{{$rs->car->title}}</a></td>
                                                            <td>{{$rs->subject}}</td>
                                                            <td>{{$rs->review}}</td>
                                                            <td>{{$rs->rate}}</td>
                                                            <td>{{$rs->status}}</td>

                                                            <td><a href="{{route('userpanel.reviewdestroy',['id' => $rs->id])}}" class="btn btn-block btn-danger btn-sm"
                                                                   onclick="return confirm('Deleting !! Are u sure ?')">Delete<a/> </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
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

