<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UpdateUser extends Component
{
    public $user;
    public $name;
    public $email;

    public function mount($userId)
    {
        $this->user = User::findOrFail($userId);
        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|email',
        ]);

        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        session()->flash('message', 'User updated successfully.');

        $this->emit('userUpdated');
    }

    public function render()
    {
        return view('livewire.update-user');
    }
}
