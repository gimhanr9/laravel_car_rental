@extends('layouts.admindash');

@section('title')
Confirmed Requests-ZineX

@endsection

@section('content')
<div class="container-fluid">
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Confirmed Requests</h1>

                    </div>

                    
                    <!-- Content Row -->
					<div class="container-fluid">
                        @if (session('status'))
                        <div class="alert alert-danger">
                            {{session('status')}}
                        </div>  
                        @endif

         

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Requests</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>CustomerID</th>
                                            <th>VehicleID</th>
                                            <th>Customer Name</th>
                                            <th>Brand</th>
                                            <th>Start</th>
                                            <th>Destination</th>
                                            <th>Distance</th>
                                            <th>Price</th>
                                            <th>Date Taken</th>
                                            <th>Due Date</th>
                                            <th>Approved</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    @foreach ($rentals as $item)
                                    <tr>
                                        <td>{{ $item->customerId }}</td>
                                        <td>{{ $item->vehicleId }}</td>
                                        <td>{{ $item->customerName }}</td>
                                        <td>{{ $item->vehicleBrand }}</td>
                                        <td>{{ $item->start }}</td>
                                        <td>{{ $item->destination }}</td>
                                        <td>{{ $item->distance }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->dateTaken }}</td>
                                        <td>{{ $item->dueDate }}</td>
                                        <td>{{ $item->approved }}</td>
                                        <td><a href="/request-return/{{$item->id}}" class="btn btn-success">Return</a>
                                    </tr>
                                        
                                    @endforeach

                                </table>
                            </div>
                        </div>
                    </div>

</div>




@endsection
