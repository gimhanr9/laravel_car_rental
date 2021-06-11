@extends('layouts.homeCustomer')

@section('title')
    Details-ZineX
@endsection

@section('content')

<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1><sup>Rs </sup>{{$vehicle->cost}}<sub>/Km</sub></h1>
         
        </div>
      </div>
    </div>
  </div>

  <div class="services">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div>
            <img src="{{ URL::to('/') }}/storage/{{ $vehicle->main_image }}" alt="" class="img-fluid wc-image">
          </div>

          <br>

          

          <br>
        </div>

        <div class="col-md-5">
          <form action="#" method="post" class="form">
            <ul class="list-group list-group-flush">
             

             <li class="list-group-item">
                  <div class="clearfix">
                       <span class="pull-left">Brand</span>

                       <strong class="pull-right">{{$vehicle->brand}}</strong>
                  </div>
             </li>

             <li class="list-group-item">
                  <div class="clearfix">
                       <span class="pull-left"> Model</span>

                       <strong class="pull-right">{{$vehicle->model}}</strong>
                  </div>
             </li>

             <li class="list-group-item">
                  <div class="clearfix">
                       <span class="pull-left">Year</span>

                       <strong class="pull-right">{{$vehicle->year}}</strong>
                  </div>
             </li>

             <li class="list-group-item">
                  <div class="clearfix">
                       <span class="pull-left">Fuel</span>

                       <strong class="pull-right">{{$vehicle->fuel}}</strong>
                  </div>
             </li>

             <li class="list-group-item">
                  <div class="clearfix">
                       <span class="pull-left">Engine Capacity</span>

                       <strong class="pull-right">{{$vehicle->engine_capacity}}</strong>
                  </div>
             </li>

             <li class="list-group-item">
                  <div class="clearfix">
                       <span class="pull-left">Body</span>

                       <strong class="pull-right">{{$vehicle->body}}</strong>
                  </div>
             </li>


             <li class="list-group-item">
                  <div class="clearfix">
                       <span class="pull-left">Transmission</span>

                       <strong class="pull-right">{{$vehicle->transmission}}</strong>
                  </div>
             </li>

     

            </ul>
          </form>
          <br>
          <br>
          <div class="request-link">
			<a href="/request-create/{{$vehicle->id}}">Request</a>
		</div>
          

          <br>
        </div>
        
      </div>

  

      <div class="row">
        <div class="col-md-8">
          <div class="tabs-content">
            <h4>Vehicle Description</h4>

            <p>{{$vehicle->description}}</p>

            <br>
          </div>
        </div>

      

      <br>
      <br>
      <br>
    </div>
  </div>
@endsection