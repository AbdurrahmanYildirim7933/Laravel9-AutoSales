@extends('layouts.adminwindow')

@section('title', 'User Detail:'.$data->title)

@section('content')

    <div class="content-wrapper">


        <section class="content">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Detail User Data</h4>
                    <p class="card-description">
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                             <th style="width: 150px">Id</th>
                             <td>{{$data->id}}</td>
                            </tr>
                            <tr>
                                <th style="width: 50px">Full Name</th>
                                <td>{{$data->name}}</td>
                            </tr>
                            <tr>
                                <th style="width: 50px">Email</th>
                                <td>{{$data->email}}</td>
                            </tr>
                            <tr>
                                <th style="width: 50px">E-mail</th>
                                <td>{{$data->email}}</td>
                            </tr>
                            <tr>
                                <th style="width: 50px">Roles</th>
                                <td>@foreach ($data->roles as $role)
                                        {{$role->name}}
                                        <a href="{{route('admin.user.destroyrole',['uid' => $data->id,'rid' => $role->id])}}"  class="fas fa-trash"
                                           onclick="return confirm('Deleting !! Are u sure ?')"><a/>
                                    @endforeach

                                </td>
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
                                <th style="width: 50px">Add Role</th>
                                <td>
                                    <form role="form" action="{{route('admin.user.addrole',['id' => $data->id])}}" method="post" >
                                        @csrf
                                  <select name="role_id">
                                      @foreach ($roles as $role)
                                          <option value="{{$role->id}}">{{$role->name}}</option>
                                      @endforeach
                                  </select>
                                        <hr>
                      <div>
                     <button type="submit" class="btn btn-primary mr">Add Role</button>
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
