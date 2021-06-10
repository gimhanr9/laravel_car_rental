@extends('layouts.admindash');

@section('title')
Officers-ZineX

@endsection

@section('content')
<div class="container-fluid">
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Officers</h1>
                        <a href="officer.create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Add Officer</a>

                    </div>

                    <!-- Content Row -->
					<div class="container-fluid">
                        @if (session('status'))
                        <div class="alert alert-danger">
                            {{session('status')}}
                        </div>  
                        @endif
                        <form action="{{ route('officer.post') }}" method="POST" >
                            @csrf
                    
                            <div class="form-group">
                                <label for="inputAddress">Name</label>
                                <input type="text" class="form-control" id="inputTitle" placeholder="Name"
                                name="name">
                                @if ($errors->has('name'))
                                              <span class="text-danger">{{ $errors->first('name') }}</span>
                                          @endif
                              </div>
                            <div class="form-group">
                              <label for="inputEmail4">Email</label>
                              <input type="text" class="form-control" id="inputEmail4" placeholder="Email" name="email">
                              @if ($errors->has('email'))
                                              <span class="text-danger">{{ $errors->first('email') }}</span>
                                          @endif
                            </div>
                            <div class="form-row">
                    
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">Password</label>
                              <input type="password" class="form-control" id="inputEmail4" placeholder="Password" name="password">
                              @if ($errors->has('password'))
                                              <span class="text-danger">{{ $errors->first('password') }}</span>
                                          @endif
                            </div>
                            
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Phone</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Phone"name="phone">
                                @if ($errors->has('phone'))
                                              <span class="text-danger">{{ $errors->first('phone') }}</span>
                                          @endif
                              </div>
                    
                            </div>
                        <button type="submit" class="btn btn-success">Add</button>
                            
                        </form>

                    <!-- Page Heading -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Officers</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @foreach ($officer as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td><a href="/edit-officer/{{$item->id}}" class="btn btn-success">Edit</a>
                                        <a href="/delete-officer/{{$item->id}}" class="btn btn-success">Delete</a>
                                        </td>
                                        
                                    </tr>
                                        
                                    @endforeach

                                </table>
                            </div>
                        </div>
                    </div>

</div>

@endsection
