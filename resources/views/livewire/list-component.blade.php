<div>

    <form>
        <input type="text" wire:model="name" placeholder="User name" class="form-control" />
        <input type="text" wire:model="email" placeholder="User Email" class="form-control" />

        @if($userId)
            <button wire:click.prevent="update" class="btn-sm">Update user</button>
        @else
            <button wire:click.prevent="create()" class="btn-sm btn-primary">Create user</button>
        @endif

        <input type="reset" wire:click.prevent="resetInputFields">

    </form>



    <table>
        <thead>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <livewire:update-user :userId="$user->id" :key="$user->id" /> |
                <button wire:click.prevent="edit({{ $user->id }})">Edit</button>|
                <button wire:click.prevent="delete({{ $user->id }})">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

