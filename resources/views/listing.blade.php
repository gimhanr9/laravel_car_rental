@extends('layouts.homeCustomer')

@section('title')
Cars-ZineX
    
@endsection

@section('content')
<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Cars</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="services">
    <div class="container">
      <form action="#" id="contact">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Used/New:</label>
         
                     <select class="form-control">
                          <option value="">All</option>
                          <option value="new">New vehicle</option>
                          <option value="used">Used vehicle</option>
                     </select>
                </div>
            </div>
    
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Vehicle Type:</label>
         
                     <select class="form-control">
                          <option value="">--All --</option>
                          <option value="">--All --</option>
                          <option value="">--All --</option>
                          <option value="">--All --</option>
                          <option value="">--All --</option>
                     </select>
                </div>
            </div>
    
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Make:</label>
         
                     <select class="form-control">
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                     </select>
                </div>
            </div>
    
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Model:</label>
         
                     <select class="form-control">
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                     </select>
                </div>
            </div>
    
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Price:</label>
         
                     <select class="form-control">
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                     </select>
                </div>
            </div>
    
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Mileage:</label>
         
                     <select class="form-control">
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                     </select>
                </div>
            </div>
    
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Engine size:</label>
         
                     <select class="form-control">
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                     </select>
                </div>
            </div>
    
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Power:</label>
         
                     <select class="form-control">
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                     </select>
                </div>
            </div>
    
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Fuel:</label>
         
                     <select class="form-control">
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                     </select>
                </div>
            </div>
    
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Gearbox:</label>
         
                     <select class="form-control">
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                     </select>
                </div>
            </div>
    
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Doors:</label>
         
                     <select class="form-control">
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                     </select>
                </div>
            </div>
    
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>Number of seats:</label>
         
                     <select class="form-control">
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                          <option value="">-- All --</option>
                     </select>
                </div>
            </div>
        </div>
        
        <div class="col-sm-4 offset-sm-4">
          <div class="main-button text-center">
              <a href="#" class="filled-button">Search</a>
          </div>
        </div>
        <br>
        <br>
      </form>

      <div class="row">
        <div class="col-md-4">
          <div class="service-item">
            <img src="assets/images/product-1-720x480.jpg" alt="">
            <div class="down-content">
              <h4>Lorem ipsum dolor sit amet</h4>
              <div style="margin-bottom:10px;">
                <span>
                    <del><sup>$</sup>11999 </del> &nbsp; <sup>$</sup>11779
                </span>
              </div>

              <p>
                <i class="fa fa-dashboard"></i> 130 000km &nbsp;&nbsp;&nbsp;
                <i class="fa fa-cube"></i> 1800 cc &nbsp;&nbsp;&nbsp;
                <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
              </p>
              <a href="car-details.html" class="filled-button">View</a>
            </div>
          </div>

          <br>
        </div>

      <br>
      <br>
      <br>
      <br>
    </div>
  </div>
    
@endsection