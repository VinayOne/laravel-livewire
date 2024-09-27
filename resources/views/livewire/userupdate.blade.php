<div>
    <p><strong>Update User</strong></p>
    <form wire:submit.prevent="updateuser">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" wire:model="name">
            @error('name')<div class="text-danger">Please enter the user name</div>@enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" wire:model="email">
            @error('email')<div class="text-danger">Please enter the user email</div>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a class="btn btn-danger" href="/dashboard" wire:navigate>Cancel</a>
    </form>
</div>
