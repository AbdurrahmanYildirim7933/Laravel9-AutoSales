@extends('layouts.frontbase_2')

@section('title','User Login ')

@section('content')
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li> <a href="{{route('home')}}">Home</a></li>
                <li class="active">User Login</li>
            </ul>
        </div>
    </div>

        <div class="main-section">
            <div class="page-section" style="margin-bottom:30px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            @include('auth.login')
                        </div>

                </div>
            </div>


@endsection

