<div class="mt-3">
    <div class="row">
        <div class="col-auto">
            <button wire:navigate href="/customers/create" class="btn btn-success btn-sm">Create</button>
        </div>
        <div class="col-auto">
            <input wire:model.live.debounce.150ms="search" placeholder="search customer..." type="text"
                class="form-control">
        </div>
    </div>

    <livewire:flash-message />
    @if ($customers->count() > 0)
        <table class="table table-sm mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone No.</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $index => $customer)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>
                            <button wire:navigate href="/customers/{{ $customer->id }}"
                                class="btn btn-sm btn-primary">view</button>
                            <button wire:navigate href="/customers/{{ $customer->id }}/edit"
                                class="btn btn-sm btn-secondary">Edit</button>
                            <button wire:click="delete({{ $customer->id }})"
                                class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-info">
            {{ $none }}
        </div>
    @endif

    {{ $customers->links() }}


</div>
