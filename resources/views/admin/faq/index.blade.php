@extends('layouts.adminbase')

@section('title', 'FAQ List')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <a href="{{route('admin.faq.create')}}" class="btn btn-warning btn-fw" style="width: 200px">Add Question</a>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">FAQ List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
        <div class="card-body">
            <h4 class="card-title">FAQ List</h4>
            <hr>
            <p class="card-description">
            </p>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Question</th>
                        <th>Answer</th>
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
                        <td>{{$rs->question}}</td>
                        <td>{!! $rs->answer !!}</td>
                        <td>{{$rs->status}}</td>
                        <td><a href="{{route('admin.faq.edit',['id' => $rs->id])}}" class="btn btn-block btn-info btn-sm">Edit<a/> </td>
                        <td><a href="{{route('admin.faq.destroy',['id' => $rs->id])}}" class="btn btn-block btn-danger btn-sm"
                            onclick="return confirm('Deleting !! Are u sure ?')">Delete<a/></td>
                        <td><a href="{{route('admin.faq.show',['id' => $rs->id])}}" class="btn btn-block btn-success btn-sm"> Show<a/> </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </section>
    </div>
    </div>
@endsection
