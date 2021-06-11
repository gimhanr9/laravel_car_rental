@extends('layouts.homeCustomer')

@section('title')
    Unconfirmed Rentals-ZineX
@endsection

@section('content')
<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Confirmed Rentals</h1>
        </div>
      </div>
    </div>
  </div>

  <br>
  <br>
  <br>
  <br>
  <div class="services">
    <div class="container">
      <div class="table-responsive">
        <table class="table table-bordered">
        <thead>
          <tr>
            <th>Vehicle ID</th>
              <th scope="col">Brand</th>
              <th scope="col">Start</th>
              <th scope="col">Destination</th>
              <th scope="col">Distance</th>
              <th scope="col">Price</th>
              <th scope="col">Date Taken</th>
              <th scope="col">Due Date</th>
              <th scope="col">Action</th>
            
          </tr>
        </thead>
        
        @foreach ($rentals as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->vehicleBrand }}</td>
            <td>{{ $item->start }}</td>
            <td>{{ $item->destination }}</td>
            <td>{{ $item->distance }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->dateTaken }}</td>
            <td>{{ $item->dueDate }}</td>
            <td><a href="/invoice-download/{{$item->id}}" class="btn btn-success">Download</a></td>
           
            
        </tr>
            
        @endforeach
        
        </table>
        </div>
        </div>
     
  </div>
  </div>
  <br>
  <br><br><br>
@endsection