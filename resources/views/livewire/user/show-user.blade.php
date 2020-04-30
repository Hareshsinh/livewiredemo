<div class="container" wire:init="loadUsers">
    <h2>Register user information</h2>
    <div class="form-group">
        <button for="title" class="btn btn-primary" wire:click="goToAddPage">Add register</button>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
    @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td><button for="title" class="btn btn-primary" wire:click="editRegister({{ $user->id }})">Edit</button></td>
            </tr>
    @endforeach
        </tbody>
    </table>
</div>
