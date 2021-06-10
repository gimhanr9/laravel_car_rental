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
                  
              @endforeach
            <div class="col-md-4">
              <div class="service-item">
                <img src="uploads/images/product-1-720x480.jpg" alt="">
                <div class="down-content">
                  <h4>Lorem ipsum dolor sit amet</h4>
                  <div style="margin-bottom:10px;">
                    <span>
                        <del><sup>$</sup>11999 </del> &nbsp; <sup>$</sup>11779
                    </span>
                  </div>
    
                  <p>
                    <i class="fa fa-dashboard"></i> $item->distance km &nbsp;&nbsp;&nbsp;
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
        
</div>
