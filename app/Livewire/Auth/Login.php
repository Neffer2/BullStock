<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\title;
use Livewire\Component;

#[title('Iniciar sesión')]
class Login extends Component
{
    // Models
    public $email, $pass;

    public function render()
    {
        return view('livewire.auth.login')->layout('components.layouts.auth');
    }

    public function updatedEmail(){
        $this->validate([
            'email' => 'required|email'
        ]);
    }

    public function updatedPass(){
        $this->validate([
            'pass' => 'required'
        ]);
    }
}
