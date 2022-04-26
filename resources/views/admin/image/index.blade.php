@extends('layouts.adminwindow')

@section('title', 'Product Image List')

@section('content')



        <h3>{{$car->title}}</h3>
        <hr>
        <form role="form" action="{{route('admin.image.store',['cid'=>$car->id])}}" method="post" enctype="multipart/form-data">
         @csrf
        <div class="input-group">
            <label for="exampleInputName1">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title">
            <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
            <div class="input-group-append">
            <input class="input-group-text" type="submit" value="Upload">
            </div>
        </div>
        </form>
        <h4 class="card-title">Car Image List</h4>
        <p class="card-description">
        </p>
         <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">ID</th>
                    <th>Title</th>
                    <th style="width: 400px">Image</th>
                    <th style="width: 40px">Update</th>
                    <th style="width: 40px">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $images as $rs)
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>{{$rs->title}}</td>

                        <td>
                            @if($rs->image)
                          <img src="{{Storage::url($rs->image)}}" style="height: 90px; width:90px" >
                            @endif
                        </td>
                        <td><a href="{{route('admin.image.update',['cid' => $car->id,'id' => $rs->id])}}" class="btn btn-block btn-info btn-sm">Edit<a/> </td>
                        <td><a href="{{route('admin.image.destroy',['cid' => $car->id,'id' => $rs->id])}}" class="btn btn-block btn-danger btn-sm"
                            onclick="return confirm('Deleting !! Are u sure ?')">Delete<a/></td>

                    </tr>
                    @endforeach
                    </tbody>
                </table>
         </div>



@endsection

