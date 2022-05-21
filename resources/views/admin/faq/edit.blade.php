@extends('layouts.adminbase')

@section('title', 'Edit FAQ:'.$data->title)

@section('head')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')

    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit FAQ: {{$data->title}}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index',)}}">Home</a></li>
                            <li class="breadcrumb-item active">Edit FAQ</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">

        <div class="card">
                    <form role="form" action="{{route('admin.faq.update',['id' => $data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                      <div class="card-body">

                          <div class="form-group">
                        <label for="exampleInputName1">Question</label>
                        <input type="text" class="form-control" name="question" value="{{$data->question}}">
                    </div>
                    <div class="form-group">
                              <label for="exampleInputName1">Answer</label>
                              <textarea class="form-control" id="answer" name="answer">{!! $data->answer !!}</textarea>
                              <script>
                                  ClassicEditor
                                      .create( document.querySelector( '#answer' ) )
                                      .then( editor => {
                                          console.log( editor );
                                      } )
                                      .catch( error => {
                                          console.error( error );
                                      } );
                              </script>

                          </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status">
                                <option selected>{{$data->status}}</option>
                                <option>True</option>
                                <option>False</option>

                            </select>
                        </div>
                    <button type="submit" class="btn btn-primary mr-2">Update Data</button>
                    <button class="btn btn-light">Cancel</button>
                      </div>
                    </form>
        </div>

        </section>
    </div>

@endsection

@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(function () {
            //Summernote
            $('.textarea').summernote()
        })
    </script>
@endsection
})
