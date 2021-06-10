@extends('layouts.admindash');

@section('title')
Customers-ZineX

@endsection

@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    
                        </div>
                        
                        <!-- Content Row -->
                        <div class="container-fluid">
    
                        <!-- Page Heading -->
    
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Vehicles</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Image</th>
                                                <th>Title</th>
                                                <th>Model</th>
                                                <th>Brand</th>
                                                <th>Description</th>
                                                <th>Cost</th>
                                                <th>Year</th>
                                                <th>Transmission</th>
                                                <th>Fuel</th>
                                                <th>Body</th>
                                                <th>Engine Capacity</th>
                                                <th>Description</th>
                                                <th>Rented</th>
                                             
                                            </tr>
                                        </thead>
                                        @foreach ($vehicleAdvertisement as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td><img src="{{ URL::to('/') }}/storage/uploads/{{ $item->main_image }}" class="img-thumbnail" width="75" /></td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->model }}</td>
                                            <td>{{ $item->brand }}</td>
                                            <td>{{ $item->description }}</td>
                                            <td>{{ $item->cost }}</td>
                                            <td>{{ $item->year }}</td>
                                            <td>{{ $item->transmission }}</td>
                                            <td>{{ $item->fuel }}</td>
                                            <td>{{ $item->body }}</td>
                                            <td>{{ $item->engine_capacity }}</td>
                                            <td>{{ $item->rented }}</td>
                                            
                                        </tr>
                                            
                                        @endforeach
    
                                    </table>
                                </div>
                            </div>
                        </div>
    
    </div>

@endsection
