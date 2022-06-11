@extends('layouts.frontbase_3')

@section('title', 'Show My Car:'.$data->title)

@section('content')

    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <a href="{{route('userpanel.editcar',['id' => $data->id])}}" class="btn btn-info btn-fw" style="width: 100px">Edit</a>
                        <a href="{{route('userpanel.destroycar',['id' => $data->id])}}" onclick="return confirm('Deleting !! Are u sure ?')" class="btn btn-danger btn-fw" style="width: 100px">Delete</a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Show My Car</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Detail</h4>
                    <p class="card-description">
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                             <th style="width: 150px">Id</th>
                             <td>{{$data->id}}</td>
                            </tr>
                            <tr>
                                <th style="width: 50px">Category</th>
                                <td>
                                    {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category,$data->category->title)}}
                                    </td>
                            </tr>
                            <tr>
                                <th style="width: 50px">Title</th>
                                <td>{{$data->title}}</td>
                            </tr>
                            <tr>
                                <th style="width: 50px">Keywords</th>
                                <td>{{$data->keywords}}</td>
                            </tr>
                            <tr>
                                <th style="width: 50px">Description</th>
                                <td>{{$data->description}}</td>
                            </tr>
                            <tr>
                                <th style="width: 50px">Brand</th>
                                <td>@foreach($brands as $rs2)
                                        @if($rs2->id == $data->brand_id)
                                            {{$rs2->title}}
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 50px">Model</th>
                                <td>{{$data->model}}</td>
                            </tr>
                            <tr>
                                <th style="width: 50px">Price</th>
                                <td>{{$data->price}}</td>
                            </tr>
                            <tr>
                                <th style="width: 50px">Kilometer</th>
                                <td>{{$data->kilometer}}</td>
                            </tr>
                            <tr>
                                <th style="width: 50px">Year</th>
                                <td>{{$data->year}}</td>
                            </tr>
                            <tr>
                                <th style="width: 50px">Color</th>
                                <td>{{$data->Color}}</td>
                            </tr>

                            <tr>
                                <th style="width: 50px">Engine Power</th>
                                <td>{{$data->engine_power}}</td>
                            </tr>
                            <tr>
                                <th style="width: 50px">Engine Size</th>
                                <td>{{$data->engine_size}}</td>
                            </tr>
                            <tr>
                                <th style="width: 50px">Address</th>
                                <td>{{$data->address}}</td>
                            </tr>
                            <tr>
                                <th style="width: 50px">Body Type</th>
                                <td>{{$data->body_type}}</td>
                            </tr>
                            <tr>
                                <th style="width: 50px">Fuel Type</th>
                                <td>{{$data->fuel_type}}</td>
                            </tr>
                            <tr>
                                <th style="width: 50px">Gear Type</th>
                                <td>{{$data->gear_type}}</td>
                            </tr>
                            <tr>
                                <th style="width: 50px">Traction Type</th>
                                <td>{{$data->traction_type}}</td>
                            </tr>

                            <tr>
                                <th style="width: 50px">Detail(Damage Record-Extra Equiptments) Info</th>
                                <td>{!! $data->detail !!}</td>
                            </tr>
                            <tr>
                                <th style="width: 50px">Image</th>
                                <td>@if($data->image)
                                        <img src="{{Storage::url($data->image)}}" style="height: 70px; width:70px" >
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 50px">Status</th>
                                <td>{{$data->status}}</td>
                            </tr>
                            <tr>
                                <th style="width: 50px">Created Date</th>
                                <td>{{$data->created_at}}</td>
                            </tr>
                            <tr>
                                <th style="width: 50px">Updated Date</th>
                                <td>{{$data->updated_at}}</td>
                            </tr>

                        </table>
                </div>
                </div>
        </section>
    </div>

@endsection
