@extends('layouts.adminwindow')

@section('title', 'Show Message:'.$data->title)

@section('content')

    <div class="content-wrapper">


        <section class="content">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Detail Message Data</h4>
                    <p class="card-description">
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                             <th style="width: 150px">Id</th>
                             <td>{{$data->id}}</td>
                            </tr>
                            <tr>
                                <th style="width: 50px">Car</th>
                                <td>{{$data->car->title}}</td>
                            </tr>
                            <tr>
                                <th style="width: 50px">Full Name</th>
                                <td>{{$data->user->name}}</td>
                            </tr>
                            <tr>
                                <th style="width: 50px">Subject</th>
                                <td>{{$data->subject}}</td>
                            </tr>
                            <tr>
                                <th style="width: 50px">Review</th>
                                <td>{{$data->review}}</td>
                            </tr>
                            <tr>
                                <th style="width: 50px">Rate</th>
                                <td>{{$data->rate}}</td>
                            </tr>
                            <tr>
                                <th style="width: 50px">Ip Number</th>
                                <td>{{$data->IP}}</td>
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
                            <tr>
                                <th style="width: 50px">Admin Note</th>
                                <td>
                                    <form role="form" action="{{route('admin.comment.update',['id' => $data->id])}}" method="post" >
                                        @csrf
                                  <select name="status">
                                      <option selected >{{$data->status}}</option>
                                      <option>True</option>
                                      <option>False</option>
                                  </select>
                                        <hr>
                      <div>
                     <button type="submit" class="btn btn-primary mr">Update Comment</button>
                     <button class="btn btn-light">Cancel</button>
                      </div>
                                    </form>
                                </td>
                            </tr>

                        </table>
                </div>
                </div>
        </section>
    </div>

@endsection
