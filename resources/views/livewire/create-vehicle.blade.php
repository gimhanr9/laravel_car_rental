<div>
    <form wire:submit.prevent="submit" enctype="multipart/form-data">

            <div class="form-group">
                <label for="inputAddress">Title</label>
                <input type="text" class="form-control" id="inputTitle" placeholder="Title"
                wire:model="title">
                @error('title') <span class="text-danger">{{ $message }}</span> @enderror
              </div>


              <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Model</label>
              <input type="text" class="form-control" id="inputEmail4" placeholder="Model"wire:model="model">
              @error('model') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-md-6">
                <label for="inputState">Brand</label>
                <select id="inputState" class="form-control" wire:model="brand">
                  <option selected>Select</option>
                  <option> Honda </option>
            <option> Toyota </option>
            <option> BMW </option>
            <option> Mercedes Benz </option>
            <option> Audi </option>
            <option> Chrylser </option>
            
                </select>
                @error('brand') <span class="text-danger">{{ $message }}</span> @enderror
              </div>
              </div>

              <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Cost</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Cost in Rs."
                wire:model="cost">
                @error('cost') <span class="text-danger">{{ $message }}</span> @enderror
              </div>
  
              <div class="form-group col-md-6">
                <label for="inputEmail4">Year</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Year"wire:model="year">
                @error('year') <span class="text-danger">{{ $message }}</span> @enderror
              </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputState">Transmission</label>
                    <select id="inputState" class="form-control" wire:model="transmission">
                      <option selected>Select</option>
                      <option> Manual </option>
            <option> Automatic </option>
                    </select>
                    @error('transmission') <span class="text-danger">{{ $message }}</span> @enderror
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputState">Fuel</label>
                    <select id="inputState" class="form-control" wire:model="fuel">
                      <option selected>Select</option>
                      <option> Petrol </option>
            <option> Diesel </option>
            <option> CNG </option>
            <option> Hybrid </option>
            <option> Electric </option>
                    </select>
                    @error('fuel') <span class="text-danger">{{ $message }}</span> @enderror
                  </div>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputState">Body</label>
                    <select id="inputState" class="form-control" wire:model="body">
                      <option selected>Select</option>
                      <option> Hatchback </option>
            <option> Sedan </option>
            <option> SUV </option>
            <option> Coupe </option>
            <option> Convertible </option>
            <option> Wagon </option>
            <option> Saloon </option>
            <option> MPV </option>
                    </select>
                    @error('body') <span class="text-danger">{{ $message }}</span> @enderror
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Engine Capacity</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Engine Capacity"
                    wire:model="engine_capacity">
                    @error('engine_capacity') <span class="text-danger">{{ $message }}</span> @enderror
                  </div>
              </div>
                  <div class="form-group">
                    <label for="exampleInputbody">Description</label>
                    <textarea class="form-control" id="exampleInputbody" placeholder="Enter Description" wire:model="description"></textarea>
                    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                
        
                <div class="form-group">
                    <label for="exampleInputName">File:</label>
                    <input type="file" class="form-control" id="exampleInputName" wire:model="main_image">
                    @error('main_image') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                
          
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>