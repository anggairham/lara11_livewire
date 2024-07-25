<div class="card col-6 offset-3">
    <div class="card-header">
        Edit Customer
    </div>
    <div class="card-body">
        <form wire:submit="updateCustomer">
            <div class="mb-3">
                <label for="form-label">Name</label>
                <input type="text" wire:model="name" class="form-control">
                <div>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="form-label">Email</label>
                <input type="email" wire:model="email" class="form-control">
                <div>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

            </div>
            <div class="mb-3">
                <label for="form-label">Phone</label>
                <input type="phone" wire:model="phone" class="form-control">
                <div>
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

            </div>
            <button wire:navigate href="/customers" class="btn btn-sm btn-warning">Back</button>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
