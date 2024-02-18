<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ListComponent extends Component
{
    public $users, $name, $email, $userId;

    public function render()
    {
        $this->users = User::all();
        return view('livewire.list-component',['title' => 'fff']);
    }

    public function create()
    {
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt('123456'),
        ]);

        $this->resetInputFields();
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->userId = $id;
    }

    public function update()
    {
        $user = User::findOrFail($this->userId);
        $user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        $this->resetInputFields();
    }

    public function delete($id)
    {
        User::find($id)->delete();
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->userId = null;
    }

}
