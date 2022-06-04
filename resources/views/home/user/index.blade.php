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
                                            <h3 class="title">USER PROFILE</h3>
                                            <hr>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                @include('profile.show')
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

