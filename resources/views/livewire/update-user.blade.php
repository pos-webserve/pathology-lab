<div>
    <button wire:click="$emit('openModal')">Edit User</button>

    <x-jet-dialog-modal wire:model="showModal">
        <x-slot name="title">
            Edit User
        </x-slot>

        <x-slot name="content">
            <!-- Update form -->
            <form wire:submit.prevent="update">
                <input type="text" wire:model="name">
                <input type="email" wire:model="email">

                <button type="submit">Update</button>
            </form>
        </x-slot>

        <x-slot name="footer">
            <button wire:click="$toggle('showModal')">Close</button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
