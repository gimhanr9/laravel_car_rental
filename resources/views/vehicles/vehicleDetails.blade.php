@extends('layouts.homeCustomer')

@section('title')
    Vehicle Details-ZineX
@endsection

@section('content')

<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1><sup>Rs&nbsp;</sup><?php echo $row['Price'];?></h1>
          
        </div>

     
      </div>
    </div>
  </div>

  <div class="services">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div>
            <img src="uploads/<?php echo $row['MainImage'];?>" alt="" class="img-fluid wc-image">
          </div>

          <br>

          <div class="row">
          <?php
 

          while($imageRow = mysqli_fetch_array($images)) {
              
          ?>

            <div class="col-sm-4 col-6">
              <div>
                <img src="uploads/<?php echo $imageRow['pathname'];?>" alt="" class="img-fluid">
              </div>
              <br>
            </div>
            <?php  }
      
      ?>
            
            
          </div>

          <br>
        </div>

        <div class="col-md-5">
          <form action="#" method="post" class="form">
            <ul class="list-group list-group-flush">
             <li class="list-group-item">
                  <div class="clearfix">
                       <span class="pull-left">Condition</span>

                       <strong class="pull-right"><?php echo $row['CarCondition'];?></strong>
                  </div>
             </li>

             <li class="list-group-item">
                  <div class="clearfix">
                       <span class="pull-left">Brand</span>

                       <strong class="pull-right"><?php echo $row['Brand'];?></strong>
                  </div>
             </li>

             <li class="list-group-item">
                  <div class="clearfix">
                       <span class="pull-left"> Model</span>

                       <strong class="pull-right"><?php echo $row['Model'];?></strong>
                  </div>
             </li>

             <li class="list-group-item">
                  <div class="clearfix">
                       <span class="pull-left">Year</span>

                       <strong class="pull-right"><?php echo $row['Year'];?></strong>
                  </div>
             </li>

             <li class="list-group-item">
                  <div class="clearfix">
                       <span class="pull-left">Mileage</span>

                       <strong class="pull-right"><?php echo $row['Mileage'];?></strong>
                  </div>
             </li>

             <li class="list-group-item">
                  <div class="clearfix">
                       <span class="pull-left">Fuel</span>

                       <strong class="pull-right"><?php echo $row['Fuel'];?></strong>
                  </div>
             </li>

             <li class="list-group-item">
                  <div class="clearfix">
                       <span class="pull-left">Engine Capacity</span>

                       <strong class="pull-right"><?php echo $row['EngineCapacity'];?></strong>
                  </div>
             </li>

             <li class="list-group-item">
                  <div class="clearfix">
                       <span class="pull-left">Body</span>

                       <strong class="pull-right"><?php echo $row['Body'];?></strong>
                  </div>
             </li>


             <li class="list-group-item">
                  <div class="clearfix">
                       <span class="pull-left">Transmission</span>

                       <strong class="pull-right"><?php echo $row['Transmission'];?></strong>
                  </div>
             </li>

             
            </ul>
          </form>

          <br>
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col-md-8">
          <div class="tabs-content">
            <h4>Vehicle Description</h4>

            <p><?php echo $row['Description'];?></p>

            <br>
          </div>
        </div>
        
      </div>
       
  </div> 

      <br>
      <br>
      <br>
    </div>
  </div>



@endsection