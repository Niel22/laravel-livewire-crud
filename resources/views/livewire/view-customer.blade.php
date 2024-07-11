<div class="card mt-3">
    <div class="card-header">
      Customer Details
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$customer->name}}</h5>
      <p class="card-text">{{$customer->email}}</p>
      <p class="card-text">{{$customer->phone}}</p>
      <button wire:navigate href="/customers" class="btn btn-secondary">Back</button>
    </div>
  </div>
