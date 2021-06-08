@extends('layouts.homeCustomer')

@section('title')
    My Rentals-ZineX
@endsection

@section('content')
<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>My Rentals</h1>
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

        <table id="custom-data-table">
            <thead>
            <tr>
              <th>Vehicle ID</th>
              <th>Brand</th>
              <th>Driver ID</th>
              <th>Distance</th>
              <th>Price</th>
              <th>Date Taken</th>
              <th>Due Date</th>
              <th>Action</th>
            </tr>
            <tr>
                <td>North/South</td>
                <td>Simon Crowther</td>
                <td>UK</td>
                <td>North/South</td>
                <td>Simon Crowther</td>
                <td>UK</td>
                <td>Simon Crowther</td>
                <td>
                    <button class="edit-modal btn btn-info">
                        <span class="glyphicon glyphicon-edit"></span> Approve
                    </button>

                    <button class="edit-modal btn btn-info">
                        <span class="glyphicon glyphicon-trash"></span> Reject
                    </button>


                </td>

              </tr>
             
            </thead>
          </table>

     

        
  </div>
  </div>
  <br>
  <br><br><br>
@endsection