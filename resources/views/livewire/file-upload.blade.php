
<div class="container">
  <div>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if($updateMode)
        @include('livewire.update-vehicle')
    @else
        @include('livewire.create-vehicle')
    @endif
</div>
<br>
<br>
<div>
  <div class="row">
      <div class="col-md-8">
          
      </div>
  </div>
<div class="table-responsive">
<table class="table table-bordered">
<thead>
  <tr>
    <th scope="col">ID</th>
    <th scope="col">Image</th>
    <th scope="col">Title</th>
    <th scope="col">Brand</th>
    <th scope="col">Transmission</th>
    <th scope="col">Fuel</th>
    <th scope="col">Action</th>
  </tr>
</thead>

@foreach ($vehicleAdvertisement as $item)
<tr>
    <td>{{ $item->id }}</td>
    <td><img src="{{ URL::to('/') }}/storage/{{ $item->main_image }}" class="img-thumbnail" width="75" /></td>
    <td>{{ $item->title }}</td>
    <td>{{ $item->brand }}</td>
    <td>{{ $item->transmission }}</td>
    <td>{{ $item->fuel }}</td>
    <td>
    <button wire:click="edit({{ $item->id }})" class="btn btn-primary btn-sm">Edit</button>
    <button wire:click="delete({{ $item->id }})" class="btn btn-danger btn-sm">Delete</button>
    </td>
</tr>
    
@endforeach

</table>
</div>
</div>



</div>
