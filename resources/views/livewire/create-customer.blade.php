<div class="card offset-3 col-6 mt-3">
    <div class="card-header">
        Create Customer
    </div>
    <div class="card-body">
        <form wire:submit="store">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input wire:model="name" type="text" class="form-control" id="exampleInputEmail1">
                @error('name')
                    <span class="text-sm text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input wire:model="email" type="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                @error('email')
                    <span class="text-sm text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="phonenumber" class="form-label">Phone Number</label>
                <input wire:model="phone" type="text" class="form-control" id="exampleInputPassword1">
                @error('phone')
                    <span class="text-sm text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button wire:navigate href="/customers" class="btn btn-secondary">Back</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
