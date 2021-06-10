@extends('layouts.admindash');

@section('title')
Officers-ZineX

@endsection

@section('content')
<div class="container-fluid">
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Officers</h1>

                    </div>

                        

                    <!-- Content Row -->
					<div class="container-fluid">

                    <!-- Page Heading -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Officers</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Level</th>
                                        </tr>
                                    </thead>
                                    @foreach ($request as $item)
                                    <tr>
                                        <td>{{ $item->customerId }}</td>
                                        <td>{{ $item->vehicleId }}</td>
                                        <td>{{ $item->customerName }}</td>
                                        <td>{{ $item->vehicleBrand }}</td>
                                        <td>{{ $item->distance }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->dateTaken }}</td>
                                        <td>{{ $item->dueDate }}</td>
                                        <td><a href="{{ route('drivers.edit',$item->id) }}" class="btn btn-success">Edit</a>
                                        
                                    </tr>
                                        
                                    @endforeach

                                </table>
                            </div>
                        </div>
                    </div>

</div>

@endsection
