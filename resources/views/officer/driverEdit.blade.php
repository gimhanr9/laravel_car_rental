@extends('layouts.homeOffice')

@section('title')
Edit Driver-ZineX
    
@endsection

@section('content')

<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Edit Driver</h1>
         
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <div class="container">
      <form action="{{ route('drivers.update',$id) }}" method="POST" >
        @csrf

          <div class="form-group">
              <label for="inputAddress">Name</label>
              <input type="text" class="form-control" id="inputTitle" value="{{$driver->name}}" 
              name="name">
              @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
            </div>
          <div class="form-group">
            <label for="inputEmail4">License</label>
            <input type="text" class="form-control" id="inputEmail4" value="{{$driver->licenseNo}}" name="licenseNo">
            @if ($errors->has('licenseNo'))
                            <span class="text-danger">{{ $errors->first('licenseNo') }}</span>
                        @endif
          </div>
          <div class="form-row">
  
          <div class="form-group col-md-6">
            <label for="inputEmail4">Phone</label>
            <input type="text" class="form-control" id="inputEmail4" value="{{$driver->phone}}" name="phone">
            @if ($errors->has('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif
          </div>
          
            <div class="form-group col-md-6">
              <label for="inputEmail4">DOB</label>
              <input type="date" class="form-control" id="inputEmail4" value="{{$driver->dob}}"name="dob">
              @if ($errors->has('dob'))
                            <span class="text-danger">{{ $errors->first('dob') }}</span>
                        @endif
            </div>

            @method('PUT')
  
            
      <button type="submit" class="btn btn-success">Update</button>
      </form>
  </div>

@endsection