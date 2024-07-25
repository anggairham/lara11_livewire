<div>
    <livewire:flash-message />
    <button wire:navigate href="customers/create" class="btn btn-sm btn-primary">Create</button>
    <table class="table table-responsive table-bordered">
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->phone }}</td>
                    <td>
                        <button wire:navigate href="customers/view/{{ $value->id }}" class="btn btn-sm btn-success">View</button>
                        <button wire:navigate href="customers/edit/{{ $value->id }}" class="btn btn-sm btn-warning">Edit</button>
                        <button wire:click="deleteCustomer({{ $value->id }})" class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
