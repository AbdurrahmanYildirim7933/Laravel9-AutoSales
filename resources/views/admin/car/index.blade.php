@extends('layouts.adminbase')

@section('title', 'Car List')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <a href="{{route('admin.car.create')}}" class="btn btn-info btn-fw" style="width: 200px">Add Car</a>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Car List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
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
                        <th>Model</th>
                        <th>Detail</th>
                        <th style="width: 400px">Image</th>
                        <th>Image Gallery</th>
                        <th>Price</th>
                        <th>Kilometer</th>
                        <th>Year</th>
                        <th>Color</th>
                        <th>Status</th>
                        <th style="width: 40px">Edit</th>
                        <th style="width: 40px">Delete</th>
                        <th style="width: 40px">Show</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $data as $rs)
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>{{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                        <td>{{$rs->title}}</td>
                        <td>{{$rs->model}}</td>
                        <td>{{$rs->detail}}</td>
                        <td>
                        @if($rs->image)
                          <img src="{{Storage::url($rs->image)}}" style="height: 100px; width:100px" >
                            @endif
                        </td>
                        <td><a href="{{route('admin.image.index',['cid' => $rs->id])}}"
                               onclick="return !window.open(this.href,'','top=50 left=100 width=1100 height=700')">
                            <img src="{{asset('assets')}}/admin/images/gallery.png" style="height: 90px; width:85px">
                            </a>
                        </td>
                        <td>{{$rs->price}}</td>
                        <td>{{$rs->kilometer}}</td>
                        <td>{{$rs->year}}</td>
                        <td>{{$rs->color}}</td>

                        <td>{{$rs->status}}</td>
                        <td><a href="{{route('admin.car.edit',['id' => $rs->id])}}" class="btn btn-block btn-info btn-sm">Edit<a/> </td>
                        <td><a href="{{route('admin.car.destroy',['id' => $rs->id])}}" class="btn btn-block btn-danger btn-sm"
                            onclick="return confirm('Deleting !! Are u sure ?')">Delete<a/></td>
                        <td><a href="{{route('admin.car.show',['id' => $rs->id])}}" class="btn btn-block btn-success btn-sm"> Show<a/> </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </section>
    </div>


@endsection
