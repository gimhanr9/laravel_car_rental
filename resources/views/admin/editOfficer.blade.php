@extends('layouts.admindash')

@section('title')
    Edit Officer-ZineX
@endsection

@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Edit Officer</h1>
                            
    
                        </div>

                        <!-- Content Row -->
    <div class="container-fluid">

    <form action="{{ route('officer.update',$driver->id) }}" method="POST" >
        @csrf

        <div class="form-group">
            <label for="inputAddress">Name</label>
            <input type="text" class="form-control" id="inputTitle" value="{{$officer->name}}"
            name="name">
            @if ($errors->has('name'))
                          <span class="text-danger">{{ $errors->first('name') }}</span>
                      @endif
          </div>
        <div class="form-group">
          <label for="inputEmail4">Email</label>
          <input type="text" class="form-control" id="inputEmail4" value="{{$officer->email}}" name="email">
          @if ($errors->has('email'))
                          <span class="text-danger">{{ $errors->first('email') }}</span>
                      @endif
        </div>
        <div class="form-row">

        
          <div class="form-group col-md-6">
            <label for="inputEmail4">Phone</label>
            <input type="text" class="form-control" id="inputEmail4" value="{{$officer->phone}}" name="phone">
            @if ($errors->has('phone'))
                          <span class="text-danger">{{ $errors->first('phone') }}</span>
                      @endif
          </div>

        </div>
        @method('PATCH')
    <button type="submit" class="btn btn-success">Update</button>
        
    </form>
</div>
</div>

@endsection