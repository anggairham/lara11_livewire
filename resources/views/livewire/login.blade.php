<div class="card col-6 offset-3">
    <div class="card-header">
        Add Customer
    </div>
    <div class="card-body">
        <form wire:submit="loginUser">
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
                <label for="form-label">Password</label>
                <input type="password" wire:model="password" class="form-control">
                <div>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
    <div class="card-footer text-body-secondary">
        Dont have an account
        <button wire:navigate href="/register" class="btn btn-success">Register</button>
    </div>
</div>
