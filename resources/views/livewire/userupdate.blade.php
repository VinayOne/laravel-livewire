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
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <input type="text" class="form-control" wire:model="gender">
            @error('gender')<div class="text-danger">Please enter user gender</div>@enderror
        </div>
        <div class="mb-3">
            <label for="resident" class="form-label">Resident</label>
            <input type="text" class="form-control" wire:model="resident">
            @error('resident')<div class="text-danger">Please enter user resident</div>@enderror
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <input type="text" class="form-control" wire:model="country">
            @error('country')<div class="text-danger">Please enter user country</div>@enderror
        </div>
        <div class="mb-3">
            <label for="state" class="form-label">State</label>
            <input type="text" class="form-control" wire:model="state">
            @error('state')<div class="text-danger">Please enter user state</div>@enderror
        </div>
        <div class="mb-3">
            <label for="resident" class="form-label">Description</label>
            <textarea class="form-control" placeholder="User's Description" wire:model="description"></textarea>
            @error('description')<div class="text-danger">Please enter user description</div>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a class="btn btn-danger" href="/dashboard" wire:navigate>Cancel</a>
    </form>
</div>
