@extends('layouts.homeCustomer');

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
    <form action="/request-post/{{$vehicle}}" method="POST" >
      @csrf

  
      <div class="form-row">
          <div class="form-group col-md-6">
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
              <label for="inputAddress">Rent Date</label>
              <input type="date" class="form-control" id="inputTitle" placeholder="Rent Date"
              name="dateTaken">
              @if ($errors->has('dateTaken'))
                            <span class="text-danger">{{ $errors->first('dateTaken') }}</span>
                        @endif
            </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Due Date</label>
            <input type="date" class="form-control" id="inputEmail4" placeholder="Return" name="dueDate">
            @if ($errors->has('dueDate'))
                            <span class="text-danger">{{ $errors->first('dueDate') }}</span>
                        @endif
          </div>
        </div>
          <div class="form-row">
  
          <div class="form-group col-md-6">
            <label for="inputEmail4">Distance</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Distance" name="distance">
            @if ($errors->has('distance'))
                            <span class="text-danger">{{ $errors->first('distance') }}</span>
                        @endif
          </div>
          
  
          </div>
        
      <button type="submit" class="btn btn-success">Add</button>
    
          
      </form>
      
  </div>
  

@endsection
