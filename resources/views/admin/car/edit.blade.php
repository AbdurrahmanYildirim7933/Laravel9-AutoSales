@extends('layouts.adminbase')

@section('title', 'Edit Car:'.$data->title)

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
                        <h1>Edit Car: {{$data->title}}</h1>
                        <h3>Dealer-{{$data->user->name}}</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index',)}}">Home</a></li>
                            <li class="breadcrumb-item active">Edit Car</li>

                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">

        <div class="card">
                    <form role="form" action="{{route('admin.car.update',['id' => $data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                      <div class="card-body">
                          <div class="form-group">
                              <label >Parent Category</label>
                              <select class="form-control select2" name="category_id" style="100px" >
                                  <option value="0" selected="selected">Main Car</option>
                                  @foreach($datalist as $rs)
                                      <option value="{{$rs->id}}" @if($rs->id == $data->category_id) selected="selected" @endif>
                                          {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}
                                      </option>
                                  @endforeach
                              </select>
                          </div>
                          <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" class="form-control" name="title" value="{{$data->title}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Keywords</label>
                        <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Description</label>
                        <input type="text" class="form-control" name="description" value="{{$data->description}}">
                    </div>
                          <div>
                              <label >Brand</label>

                              <select class="form-control select2" name="brand_id" style="100px" >

                                  @foreach($brands as $rs)
                                      <option value="{{$rs->id}}">{{$rs->title}}</option>
                                  @endforeach
                              </select>
                          </div>
                          <div class="form-group">
                              <label for="exampleInputName1">Model</label>
                              <input type="text" class="form-control" name="model" value="{{$data->model}}">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputName1">Price</label>
                              <input type="number" class="form-control" name="price" value="{{$data->price}}">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputName1">Kilometer</label>
                              <input type="number" class="form-control" name="kilometer" value="{{$data->kilometer}}">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputName1">Year</label>
                              <input type="number" class="form-control" name="year" value="{{$data->year}}">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputName1">Color</label>
                              <input type="text" class="form-control" name="color" value="{{$data->color}}">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputName1">Engine Power</label>
                              <input type="text" class="form-control" name="engine_power" placeholder="Engine Power" value="{{$data->engine_power}}">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputName1">Engine Size</label>
                              <input type="text" class="form-control" name="engine_size" placeholder="Engine_size" value="{{$data->engine_size}}">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputName1">Adress</label>
                              <input type="text" class="form-control" name="address" placeholder="Adress" value="{{$data->address}}">
                          </div>

                          <div class="form-group">
                              <label>Body Type
                              </label>
                              <select class="form-control" name="body_type">
                                  <option selected>{{$data->body_type}}</option>
                                  <option>Hatchback</option>
                                  <option>Sedan</option>
                                  <option>MUV/SUV</option>
                                  <option>Coupe</option>
                                  <option>Convertible</option>
                                  <option>Wagon</option>
                                  <option>Van</option>
                                  <option>Jeep</option>
                              </select>
                          </div>

                          <div class="form-group">
                              <label>Fuel Type</label>
                              <select class="form-control" name="fuel_type">
                                  <option selected>{{$data->fuel_type}}</option>
                                  <option>Gasoline</option>
                                  <option>Diesel</option>
                                  <option>LPG</option>
                                  <option>Hybrid</option>
                                  <option>Electric</option>
                              </select>
                          </div>

                          <div class="form-group">
                              <label>Gear Type</label>
                              <select class="form-control" name="gear_type">
                                  <option selected>{{$data->gear_type}}</option>
                                  <option>Automatic</option>
                                  <option>Semi-automatic</option>
                                  <option>Manuel</option>
                              </select>
                          </div>

                          <div class="form-group">
                              <label>Traction Type</label>
                              <select class="form-control" name="traction_type">
                                  <option selected>{{$data->traction_type}}</option>
                                  <option>All-Wheel-Drive (AWD)</option>
                                  <option>Front Wheel Drive (FWD),</option>
                                  <option>Rear Wheel Drive (RWD)</option>
                                  <option>4WD(4 wheel drive).</option>
                              </select>
                          </div>


                          <div class="form-group">
                              <label for="exampleInputName1">Detail(Damage Record-Extra Equiptments)</label>
                              <textarea class="form-control" id="detail" name="detail">
                                  {{ $data->detail }}"
                            </textarea>
                              <script>
                                  ClassicEditor
                                      .create( document.querySelector( '#detail' ) )
                                      .then( editor => {
                                          console.log( editor );
                                      } )
                                      .catch( error => {
                                          console.error( error );
                                      } );
                              </script>

                          </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image">
                                    <label class="custom-file-label" for="exampleInputFile">Choose image file</label>
                        </div>
                            </div>
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
