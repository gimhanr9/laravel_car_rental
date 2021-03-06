@extends('layouts.admindash')

@section('title')
    Add Officer-ZineX
@endsection

@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Add Officer</h1>
                            
    
                        </div>

                        <!-- Content Row -->
    <div class="container-fluid">

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
</div>
</div>

@endsection