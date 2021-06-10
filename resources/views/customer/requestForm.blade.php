@extends('layouts.admindash');

@section('title')
Request-ZineX

@endsection

@section('content')
<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Request Vehicle</h1>
         
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <div class="container">
    <form action="{{ route('drivers.post') }}" method="POST" >
      @csrf
  
      <div class="form-row col-md-6">
          <div class="form-group">
              <label for="inputAddress">Start</label>
              <input type="text" class="form-control" id="inputTitle" placeholder="Start"
              name="start">
              @if ($errors->has('start'))
                            <span class="text-danger">{{ $errors->first('start') }}</span>
                        @endif
            </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Destination</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Destination" name="destination">
            @if ($errors->has('destination'))
                            <span class="text-danger">{{ $errors->first('destination') }}</span>
                        @endif
          </div>
        </div>
          <div class="form-row">
  
          <div class="form-group col-md-6">
            <label for="inputEmail4">Phone</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Phone" name="phone">
            @if ($errors->has('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif
          </div>
          
            <div class="form-group col-md-6">
              <label for="inputEmail4">DOB</label>
              <input type="date" class="form-control" id="inputEmail4" placeholder="Model"name="dob">
              @if ($errors->has('dob'))
                            <span class="text-danger">{{ $errors->first('dob') }}</span>
                        @endif
            </div>
  
          </div>
      <button type="submit" class="btn btn-success">Add</button>
          
      </form>
  </div>
  

@endsection
