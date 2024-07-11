<div class="m-3">
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session('success')}}
    </div>
    @endif
</div>
