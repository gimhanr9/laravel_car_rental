@extends('layouts.homeOffice')
@section('title')
    Drivers-ZineX
@endsection

@section('content')
<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Drivers</h1>
         
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <div>
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</div>
<div>
  @livewire('manage-drivers')
  <br>
  <br>
  </div>
  @livewireScripts
@endsection