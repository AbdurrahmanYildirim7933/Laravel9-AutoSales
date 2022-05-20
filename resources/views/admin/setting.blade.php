@extends('layouts.adminbase')

@section('title','Settings')

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
                       <h2>Settings</h2>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                           <li class="breadcrumb-item active">Settings</li>
                       </ol>
                   </div>
               </div>
           </div>
       </section>
       <form role="form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
       <section class="content">
        @csrf
           <div class="row">
               <div class="card-body">
                   <ul class="nav nav-pills nav-pills-danger" id="pills-tab" role="tablist">
                       <li class="nav-item">
                           <a class="nav-link active show" id="pills-general-tab" data-toggle="pill" href="#pills-general" role="tab" aria-controls="pills-general" aria-selected="true">General</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" id="pills-smtpemail-tab" data-toggle="pill" href="#pills-smtpemail" role="tab" aria-controls="pills-smtpemail" aria-selected="false">Smtp E-mail</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" id="pills-socialmedia-tab" data-toggle="pill" href="#pills-socialmedia" role="tab" aria-controls="pills-socialmedia" aria-selected="false">Social Media</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" id="pills-aboutus-tab" data-toggle="pill" href="#pills-aboutus" role="tab" aria-controls="pills-aboutus" aria-selected="false">About Us</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" id="pills-contactpage-tab" data-toggle="pill" href="#pills-contactpage" role="tab" aria-controls="pills-contactpage" aria-selected="false">Contact Page</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" id="pills-references-tab" data-toggle="pill" href="#pills-references" role="tab" aria-controls="pills-contact" aria-selected="false">References</a>
                       </li>
                   </ul>
                   <div class="tab-content" id="pills-tabContent">
                       <div class="tab-pane fade active show" id="pills-general" role="tabpanel" aria-labelledby="pills-general-tab">

                               <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                               <div class="form-group">
                                   <label for="exampleInputName1">Title</label>
                                   <input type="text" class="form-control" name="title" value="{{$data->title}}">
                               </div>
                               <div class="form-group">
                                   <label for="exampleInputName1">Keywords</label>
                                   <input type="text" class="form-control" id="title" name="keywords" value="{{$data->keywords}}">
                               </div>
                               <div class="form-group">
                                   <label for="exampleInputName1">Description</label>
                                   <input type="text" class="form-control" name="description" value="{{$data->description}}">
                               </div>
                               <div class="form-group">
                                   <label for="exampleInputName1">Company</label>
                                   <input type="text" class="form-control" name="company" value="{{$data->company}}">
                               </div>
                               <div class="form-group">
                                   <label for="exampleInputName1">Address</label>
                                   <input type="text" class="form-control" name="address" value="{{$data->address}}">
                               </div>
                               <div class="form-group">
                                   <label for="exampleInputName1">Phone</label>
                                   <input type="number" class="form-control" name="phone" value="{{$data->phone}}">
                               </div>
                               <div class="form-group">
                                   <label for="exampleInputName1">E-mail</label>
                                   <input type="text" class="form-control" name="email" value="{{$data->email}}">
                               </div>

                               <div class="form-group">
                                   <label>Status</label>
                                   <select class="form-control" name="status">
                                       <option selected="selected">{{$data->status}}</option>
                                       <option>True</option>
                                       <option>False</option>

                                   </select>
                               </div>
                           <div class="form-group">
                               <label for="exampleInputFile">Icon</label>
                               <div class="input-group">
                                   <div class="custom-file">
                                       <input type="file" class="custom-file-input" name="icon">
                                       <label class="custom-file-label" for="exampleInputFile">Choose icon file</label>
                                   </div>
                               </div>
                           </div>
                               <button type="submit" class="btn btn-inverse-warning btn-fw">Update Settings</button>
                               <button class="btn btn-light">Cancel</button>

                       </div>
                       <div class="tab-pane fade" id="pills-smtpemail" role="tabpanel" aria-labelledby="pills-smtpemail-tab">

                               <div class="form-group">
                                   <label for="exampleInputName1">Smtp Server</label>
                                   <input type="text" class="form-control" name="smtpserver" value="{{$data->smtpserver}}">
                               </div>
                               <div class="form-group">
                                   <label for="exampleInputName1">Smtp Server</label>
                                   <input type="text" class="form-control" id="title" name="smtpemail" value="{{$data->smtpemail}}">
                               </div>
                               <div class="form-group">
                                   <label for="exampleInputName1">Smtp Password</label>
                                   <input type="password" class="form-control" name="smtppassword" value="{{$data->smtppassword}}">
                               </div>
                               <div class="form-group">
                                   <label for="exampleInputName1">Smtp Port</label>
                                   <input type="number" class="form-control" name="smtpport" value="{{$data->smtpport}}">
                               </div>
                               <button type="submit" class="btn btn-inverse-warning btn-fw">Update Settings</button>
                               <button class="btn btn-light">Cancel</button>

                       </div>
                       <div class="tab-pane fade" id="pills-socialmedia" role="tabpanel" aria-labelledby="pills-socialmedia-tab">
                           <div class="form-group">
                               <label for="exampleInputName1">Fax</label>
                               <input type="text" class="form-control" name="fax" value="{{$data->fax}}">
                           </div>
                           <div class="form-group">
                               <label for="exampleInputName1">Facebook</label>
                               <input type="text" class="form-control" id="title" name="facebook" value="{{$data->facebook}}">
                           </div>
                           <div class="form-group">
                               <label for="exampleInputName1">Instagram</label>
                               <input type="text" class="form-control" name="instagram" value="{{$data->instagram}}">
                           </div>
                           <div class="form-group">
                               <label for="exampleInputName1">Twitter</label>
                               <input type="text" class="form-control" name="twitter" value="{{$data->twitter}}">
                           </div>
                           <div class="form-group">
                               <label for="exampleInputName1">Youtube</label>
                               <input type="text" class="form-control" name="youtube" value="{{$data->youtube}}">
                           </div>
                           <button type="submit" class="btn btn-inverse-warning btn-fw">Update Settings</button>
                           <button class="btn btn-light">Cancel</button>
                       </div>
                       <div class="tab-pane fade" id="pills-aboutus" role="tabpanel" aria-labelledby="pills-aboutus-tab">
                           <div class="form-group">
                               <label for="exampleInputName1">About Us</label>
                               <textarea class="form-control" id="aboutus" name="aboutus">{{ $data->aboutus }}</textarea>
                               <hr>
                               <button type="submit" class="btn btn-inverse-warning btn-fw">Update Settings</button>
                               <button class="btn btn-light">Cancel</button>
                           </div>
                       </div>
                       <div class="tab-pane fade" id="pills-contactpage" role="tabpanel" aria-labelledby="pills-contactpage-tab">
                           <div class="form-group">
                               <label for="exampleInputName1">Detail</label>
                               <textarea class="form-control" id="contact" name="contact">{{ $data->contact }}</textarea>
                               <hr>
                               <button type="submit" class="btn btn-inverse-warning btn-fw">Update Settings</button>
                               <button class="btn btn-light">Cancel</button>
                           </div>
                       </div>
                       <div class="tab-pane fade" id="pills-references" role="tabpanel" aria-labelledby="pills-references-tab">
                           <div class="form-group">
                               <label for="exampleInputName1">Detail</label>
                               <textarea class="form-control" id="references" name="references">{{ $data->references }}</textarea>
                               <hr>
                               <button type="submit" class="btn btn-inverse-warning btn-fw">Update Settings</button>
                               <button class="btn btn-light">Cancel</button>
                           </div>

                       </div>
                   </div>
               </div>
           </div>
       </section>
   </div>
@endsection

@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#aboutus').summernote();
            $('#contact').summernote();
            $('#references').summernote();
        });
    </script>
@endsection
