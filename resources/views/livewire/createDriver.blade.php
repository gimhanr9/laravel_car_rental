<div>
    <form wire:submit.prevent="submit" method="POST" >
      @csrf
  
          <div class="form-group">
              <label for="inputAddress">Name</label>
              <input type="text" class="form-control" id="inputTitle" placeholder="Name"
              wire:model="name">
              @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
          <div class="form-group">
            <label for="inputEmail4">License</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="License No." 
            wire:model="licenseNo">
            @error('licenseNo') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
          <div class="form-row">
  
          <div class="form-group col-md-6">
            <label for="inputEmail4">Phone</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Phone" 
            wire:model="phone">
            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
          
            <div class="form-group col-md-6">
              <label for="inputEmail4">DOB</label>
              <input type="date" class="form-control" id="inputEmail4" placeholder="Model"
              wire:model="dob">
              @error('dob') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
  
          </div>
      <button type="submit" class="btn btn-success">Add</button>
          
      </form>
  </div>