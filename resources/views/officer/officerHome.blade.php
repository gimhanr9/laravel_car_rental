@extends('layouts.homeOffice')

@section('title')
    Home-ZineX
@endsection

@section('content')
<div class="main-banner header-text" id="top">
    <div class="image-slider">
      <!-- Item -->
      <div class="item item-1">
        <div class="img-fill">
            <div class="text-content">
              <h6>lorem ipsum dolor sit amet!</h6>
              <h4>Quam temporibus accusam <br> hic ducimus quia</h4>
              <p>Magni deserunt dolorem consectetur adipisicing elit. Corporis molestiae optio, laudantium odio quod rerum maiores, omnis unde quae illo.</p>
              <a href="cars.html" class="filled-button">Cars</a>
            </div>
        </div>
      </div>
      <!-- // Item -->
      
    </div>
</div>


<div class="services">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Featured <em>Cars</em></h2>
          <span>Aliquam id urna imperdiet libero mollis hendrerit</span>
        </div>
      </div>
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
            <a href="car-details.html" class="filled-button">View More</a>
          </div>
        </div>
        
        <br>
      </div>
      <div class="col-md-4">
        <div class="service-item">
          <img src="assets/images/product-2-720x480.jpg" alt="">
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
            <a href="car-details.html" class="filled-button">View More</a>
          </div>
        </div>

        <br>
      </div>
      <div class="col-md-4">
        <div class="service-item">
          <img src="assets/images/product-3-720x480.jpg" alt="">
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
            <a href="car-details.html" class="filled-button">View More</a>
          </div>
        </div>

        <br>
      </div>
    </div>
  </div>
</div>

<div class="fun-facts">
  <div class="container">
    <div class="more-info-content">
      <div class="row">
        <div class="col-md-6">
          <div class="left-image">
            <img src="assets/images/about-1-570x350.jpg" class="img-fluid" alt="">
          </div>
        </div>
        <div class="col-md-6 align-self-center">
          <div class="right-content">
            <span>Who we are</span>
            <h2>Get to know about <em>our company</em></h2>
            <p>Curabitur pulvinar sem a leo tempus facilisis. Sed non sagittis neque. Nulla conse quat tellus nibh, id molestie felis sagittis ut. Nam ullamcorper tempus ipsum in cursus</p>
            <a href="about.html" class="filled-button">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection