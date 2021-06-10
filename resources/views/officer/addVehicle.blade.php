@extends('layouts.homeOffice')

@section('title')
    Add Vehicle-ZineX
@endsection

@section('content')
<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Vehicles</h1>
         
        </div>
      </div>
    </div>
  </div>
  <br>
<br>

<div>
@livewire('file-upload')
<br>
<br>
</div>

@livewireScripts

@endsection