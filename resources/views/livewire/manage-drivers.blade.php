<div class="container">
    <div>
      @if(session()->has('message'))
          <div class="alert alert-success">
              {{ session('message') }}
          </div>
      @endif
  
      @if($updateMode)
          @include('livewire.updateDriver')
      @else
          @include('livewire.createDriver')
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
            <th scope="col">Name</th>
            <th scope="col">License No</th>
            <th scope="col">Phone</th>
            <th scope="col">DOB</th>
            <th scope="col">Car ID</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
    
        @foreach ($driver as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->licenseNo }}</td>
            <td>{{ $item->phone }}</td>
            <td>{{ $item->dob }}</td>
            <td>{{ $item->dob }}</td>
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
  