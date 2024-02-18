<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function login()
    {
//        dd('login livewire');
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            // Authentication passed
            return redirect()->intended('/dashboard');
        } else {
            // Authentication failed
            session()->flash('error', 'Invalid credentials');
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
