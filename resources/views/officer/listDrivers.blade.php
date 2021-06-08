@extends('layouts.homeOffice')
@section('title')
    Drivers-ZineX
@endsection

@section('content')
<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Add Driver</h1>
         
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
<div class="table-responsive">
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">License No</th>
        <th scope="col">Phone</th>
        <th scope="col">DOB</th>
        <th scope="col">Action</th>
      </tr>
    </thead>

    @foreach ($drivers as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->licenseNo }}</td>
        <td>{{ $item->phone }}</td>
        <td>{{ $item->dob }}</td>
        <td><a href="{{ route('drivers.edit',$item->id) }}" class="btn btn-success">Edit</a>
    </tr>
        
    @endforeach
    
  </table>
</div>
  </div>
@endsection