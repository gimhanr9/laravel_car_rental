<div>
  <div class="services">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label>Search</label>
     
                 <input type="text" class="form-control" placeholder="Search..." wire:model="searchTerm"/>
            </div>
        </div>
  </div>

      <div class="row">
          @foreach ($vehicleAdvertisement as $item)
              
          
        <div class="col-md-4">
          <div class="service-item">
            <img src="{{ URL::to('/') }}/storage/{{ $item->main_image }}" alt="">
            <div class="down-content">
              <h4>{{$item->title}}</h4>
              <div style="margin-bottom:10px;">
                <span>
                    <sup>Rs</sup>{{$item->cost}}/Km
                </span>
              </div>

              <p>
                <i class="fa fa-cube"></i> {{$item->engine_capacity}}cc &nbsp;&nbsp;&nbsp;
                <i class="fa fa-cog"></i> {{$item->transmission}} &nbsp;&nbsp;&nbsp;
              </p>
              <a href="/details/{{$item->id}}" class="filled-button">View</a>
            </div>
          </div>

          <br>
        </div>
        @endforeach

      <br>
      <br>
      <br>
      <br>
    </div>
  </div>
    
</div>
