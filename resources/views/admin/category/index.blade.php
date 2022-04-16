@extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Category List</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active">Category List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
        <div class="card-body">
            <h4 class="card-title">Category List</h4>
            <p class="card-description">
                Add class <code>.table-bordered</code>
            </p>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Title</th>
                        <th>Keywords</th>
                        <th>Description</th>
                        <th>Image</th>
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
                        <td>{{$rs->title}}</td>
                        <td>{{$rs->keywords}}</td>
                        <td>{{$rs->description}}</td>
                        <td>{{$rs->image}}</td>
                        <td>{{$rs->status}}</td>
                        <td><a href="/admin/category/edit"{{$rs->id}}" class="btn btn-block btn-info btn-sm">Edit<a/> </td>
                        <td><a href="/admin/category/delete"{{$rs->id}}" class="btn btn-block btn-danger btn-sm">Delete<a/> </td>
                        <td><a href="/admin/category/show"{{$rs->id}}" class="btn btn-block btn-success btn-sm"> Show<a/> </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </section>
    </div>


@endsection
