@extends('layouts.adminbase')

@section('title', 'Show Category:'.$data->title)

@section('content')

    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <a href="/admin/category/edit/{{$data->id}}" class="btn btn-info btn-fw" style="width: 100px">Edit</a>
                        <a href="/admin/category/destroy/{{$data->id}}" onclick="return confirm('Deleting !! Are u sure ?')" class="btn btn-danger btn-fw" style="width: 100px">Delete</a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active">Show Category</li>
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
                        Add class <code>.table-bordered</code>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                             <th style="width: 150px">Id</th>
                             <th>{{$data->id}}</th>
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
                                <th style="width: 50px">Image</th>
                                <th></th>
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
