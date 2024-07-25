<div class="card">
    <div class="card-header">
        Customer Views
    </div>
    <div class="card-body">
        <h5 class="card-title">ID : {{ $getRecord->id }}</h5>
        <h5 class="card-title">Name : {{ $getRecord->name }}</h5>
        <h5 class="card-title">Email : {{ $getRecord->email }}</h5>
        <h5 class="card-title">Phone : {{ $getRecord->phone }}</h5>
        <button wire:navigate href="/customers" class="btn btn-sm btn-warning">Back</button>
    </div>
</div>
