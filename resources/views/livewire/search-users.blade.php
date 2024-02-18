<div>
    <input wire:model="search" type="text" placeholder="Search users..."/>
    <button wire:click.prevent="filter()" class="btn-sm btn-primary">Filter</button>
    <br/>
    <span>Search Result:</span>
    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
</div>
