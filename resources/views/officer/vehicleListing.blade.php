@extends('layouts.homeOffice')

@section('title')
    Vehicles-ZineX
@endsection

@section('content')
<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Vehicles</h1>
         
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <div>
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</div>
  <div class="container">
      <div class="row">
          <div class="col-md-8">
              
          </div>
      </div>
<div class="table-responsive">
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Image</th>
        <th scope="col">Title</th>
        <th scope="col">Brand</th>
        <th scope="col">Transmission</th>
        <th scope="col">Fuel</th>
        <th scope="col">Action</th>
      </tr>
    </thead>

    @foreach ($vehicleAdvertisement as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td><img src="{{ URL::to('/') }}/uploads/{{ $item->main_image }}" class="img-thumbnail" width="75" /></td>
        <td>{{ $item->title }}</td>
        <td>{{ $item->brand }}</td>
        <td>{{ $item->transmission }}</td>
        <td>{{ $item->fuel }}</td>
        <td><a href="{{ route('drivers.edit',$item->id) }}" class="btn btn-success">Edit</a>
    </tr>
        
    @endforeach
    
  </table>
</div>
  </div>
@endsection