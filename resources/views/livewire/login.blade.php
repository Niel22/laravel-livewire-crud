<div class="card offset-3 col-6 mt-4">
    <div class="card-header">
      Login
    </div>
    <div class="card-body">
        <form wire:submit="store">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input wire:model.blur="email" type="email" class="form-control" id="exampleInputEmail1">
              @error('email')
                    <span class="text-sm text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input wire:model.blur="password" type="password" class="form-control">
              @error('password')
                    <span class="text-sm text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn w-100 btn-primary">Login</button>
          </form>
    </div>
    <div class="card-footer text-body-secondary">
      Don't have an account? <button wire:navigate href="/register" class="btn btn-success btn-sm">Register</button>
    </div>
  </div>
