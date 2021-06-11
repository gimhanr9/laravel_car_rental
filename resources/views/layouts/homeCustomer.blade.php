<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>@yield('title')</title>
    @livewireStyles
    
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

    <link  href="{{ asset('/css/home.css') }}" rel="stylesheet">
    
  </head>

  <body>



    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{ route('home') }}"><h2>ZineX</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="{{ route('vehicles.all') }}">Cars</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('customer.requestconfirmed') }}">Rentals</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('customer.requestunconfirmed') }}">Requests</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
   
    @yield('content')

    
    

    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-item">
            <h4>ZineX</h4>
            
            
          </div>
          
          
         
        </div>
      </div>
    </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>
                ZineX 2021
            </p>
          </div>
        </div>
      </div>
    </div>

 

  </body>
  @livewireScripts
</html>