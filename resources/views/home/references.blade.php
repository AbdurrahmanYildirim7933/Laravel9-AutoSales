@extends('layouts.frontbase_2')

@section('title','References '. $setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))

@section('content')
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li> <a href="{{route('home')}}">Home</a></li>
                <li class="active">References</li>
            </ul>
        </div>
    </div>

        <!-- Main Start -->
        <div class="main-section">
            <div class="page-section" style="margin-bottom:30px;">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">{!! $setting->references !!}</div>

                    </div>
                </div>
            </div>
        </div>

@endsection

