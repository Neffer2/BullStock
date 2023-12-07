<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\title;
use Livewire\Component;
use Illuminate\Validation\Rules;

#[title('Registro')]
class Register extends Component
{
    // Models
    public $name, $email, $pass, $passConfirm;

    public function render()
    {
        return view('livewire.auth.register')->layout('components.layouts.auth');
    }

    public function updatedName(){
        $this->validate([
            'name' => 'required|max:250'
        ]);
    }

    public function updatedEmail(){
        $this->validate([
            'email' => 'required|email|unique:users'
        ]);
    }

    public function updatedPass(){
        $this->validate(['pass' => ['required', 'same:passConfirm', Rules\Password::defaults()]]);
    }

    public function updatedPassConfirm(){
        $this->validate(['pass' => ['required', 'same:passConfirm', Rules\Password::defaults()]]);
    }
}
