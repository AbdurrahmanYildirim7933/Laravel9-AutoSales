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
                                <th style="width: 50px">Detail Info</th>
                                <td>{{!! $data->detail !!}}</td>
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
