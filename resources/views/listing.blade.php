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

<div>
@livewire('vehicle-listing')
<br>
<br>
</div>
@livewireScripts
@endsection