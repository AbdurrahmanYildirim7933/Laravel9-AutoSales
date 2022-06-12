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
                                        <h3 class="title">MY CAR EDIT PAGE</h3>
                                        <hr>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <section class="content">

                                                <div class="card">
                                                    <form role="form" action="{{route('userpanel.updatecar',['id' => $data->id])}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label >Parent Category</label>
                                                                <select class="form-control select2" name="category_id" style="100px" >
                                                                    <option value="0" selected="selected">Main Car</option>
                                                                    @foreach($datalist as $rs)
                                                                        <option value="{{$rs->id}}" @if($rs->id == $data->category_id) selected="selected" @endif>
                                                                            {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputName1">Title</label>
                                                                <input type="text" class="form-control" name="title" value="{{$data->title}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputName1">Keywords</label>
                                                                <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputName1">Description</label>
                                                                <input type="text" class="form-control" name="description" value="{{$data->description}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label >Brand</label>

                                                                <select class="form-control select2" name="brand_id" style="100px" >

                                                                    @foreach($brands as $rs)
                                                                        <option value="{{$rs->id}}">{{$rs->title}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputName1">Model</label>
                                                                <input type="text" class="form-control" name="model" value="{{$data->model}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputName1">Price</label>
                                                                <input type="number" class="form-control" name="price" value="{{$data->price}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputName1">Kilometer</label>
                                                                <input type="number" class="form-control" name="kilometer" value="{{$data->kilometer}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputName1">Year</label>
                                                                <input type="number" class="form-control" name="year" value="{{$data->year}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputName1">Color</label>
                                                                <input type="text" class="form-control" name="color" value="{{$data->color}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputName1">Engine Power</label>
                                                                <input type="text" class="form-control" name="engine_power" placeholder="Engine Power" value="{{$data->engine_power}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputName1">Engine Size</label>
                                                                <input type="text" class="form-control" name="engine_size" placeholder="Engine_size" value="{{$data->engine_size}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputName1">Adress</label>
                                                                <input type="text" class="form-control" name="address" placeholder="Adress" value="{{$data->address}}">
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Body Type
                                                                </label>
                                                                <select class="form-control" name="body_type">
                                                                    <option selected>{{$data->body_type}}</option>
                                                                    <option>Hatchback</option>
                                                                    <option>Sedan</option>
                                                                    <option>MUV/SUV</option>
                                                                    <option>Coupe</option>
                                                                    <option>Convertible</option>
                                                                    <option>Wagon</option>
                                                                    <option>Van</option>
                                                                    <option>Jeep</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Fuel Type</label>
                                                                <select class="form-control" name="fuel_type">
                                                                    <option selected>{{$data->fuel_type}}</option>
                                                                    <option>Gasoline</option>
                                                                    <option>Diesel</option>
                                                                    <option>LPG</option>
                                                                    <option>Hybrid</option>
                                                                    <option>Electric</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Gear Type</label>
                                                                <select class="form-control" name="gear_type">
                                                                    <option selected>{{$data->gear_type}}</option>
                                                                    <option>Automatic</option>
                                                                    <option>Semi-automatic</option>
                                                                    <option>Manuel</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Traction Type</label>
                                                                <select class="form-control" name="traction_type">
                                                                    <option selected>{{$data->traction_type}}</option>
                                                                    <option>All-Wheel-Drive (AWD)</option>
                                                                    <option>Front Wheel Drive (FWD),</option>
                                                                    <option>Rear Wheel Drive (RWD)</option>
                                                                    <option>4WD(4 wheel drive).</option>
                                                                </select>
                                                            </div>


                                                            <div class="form-group">
                                                                <label for="exampleInputName1">Detail(Damage Record-Extra Equiptments)</label>
                                                                <textarea class="form-control" id="detail" name="detail">
                                  {{ $data->detail }}"
                            </textarea>
                                                                <script>
                                                                    ClassicEditor
                                                                        .create( document.querySelector( '#detail' ) )
                                                                        .then( editor => {
                                                                            console.log( editor );
                                                                        } )
                                                                        .catch( error => {
                                                                            console.error( error );
                                                                        } );
                                                                </script>

                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputFile">Image</label>
                                                                <div class="input-group">
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" name="image">
                                                                        <label class="custom-file-label" for="exampleInputFile">Choose image file</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary mr-2">Update Data</button>
                                                            <button class="btn btn-light">Cancel</button>
                                                        </div>
                                                    </form>
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

