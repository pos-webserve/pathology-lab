<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class SearchUsers extends Component
{
    public $search = '';
    public $users = [];

    public function render()
    {
        return view('livewire.search-users',[
            'users' => $this->users,
        ]);
    }

    public function filter()
    {
        $this->users = User::where('name', 'like',$this->search.'%')->get();
    }
}
