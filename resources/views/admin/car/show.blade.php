@extends('layouts.adminbase')

@section('title', 'Show Car:'.$data->title)

@section('content')

    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <a href="{{route('admin.car.edit',['id' => $data->id])}}" class="btn btn-info btn-fw" style="width: 100px">Edit</a>
                        <a href="{{route('admin.car.destroy',['id' => $data->id])}}" onclick="return confirm('Deleting !! Are u sure ?')" class="btn btn-danger btn-fw" style="width: 100px">Delete</a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Show Car</li>
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
                             <th>{{$data->id}}</th>
                            </tr>
                            <tr>
                                <th style="width: 50px">Category</th>
                                <th>
                                    {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category,$data->category->title)}}
                                    </th>
                            </tr>
                            <tr>
                                <th style="width: 50px">Title</th>
                                <th>{{$data->title}}</th>
                            </tr>
                            <tr>
                                <th style="width: 50px">Keywords</th>
                                <th>{{$data->keywords}}</th>
                            </tr>
                            <tr>
                                <th style="width: 50px">Description</th>
                                <th>{{$data->description}}</th>
                            </tr>
                            <tr>
                                <th style="width: 50px">Model</th>
                                <th>{{$data->model}}</th>
                            </tr>
                            <tr>
                                <th style="width: 50px">Price</th>
                                <th>{{$data->price}}</th>
                            </tr>
                            <tr>
                                <th style="width: 50px">Kilometer</th>
                                <th>{{$data->kilometer}}</th>
                            </tr>
                            <tr>
                                <th style="width: 50px">Year</th>
                                <th>{{$data->year}}</th>
                            </tr>
                            <tr>
                                <th style="width: 50px">Color</th>
                                <th>{{$data->Color}}</th>
                            </tr>
                            <tr>
                                <th style="width: 50px">Detail Info</th>
                                <th>{{$data->detail}}</th>
                            </tr>
                            <tr>
                                <th style="width: 50px">Image</th>
                                <th>@if($data->image)
                                        <img src="{{Storage::url($data->image)}}" style="height: 70px; width:70px" >
                                    @endif
                                </th>
                            </tr>
                            <tr>
                                <th style="width: 50px">Status</th>
                                <th>{{$data->status}}</th>
                            </tr>
                            <tr>
                                <th style="width: 50px">Created Date</th>
                                <th>{{$data->created_at}}</th>
                            </tr>
                            <tr>
                                <th style="width: 50px">Updated Date</th>
                                <th>{{$data->updated_at}}</th>
                            </tr>

                        </table>
                </div>
                </div>
        </section>
    </div>

@endsection
