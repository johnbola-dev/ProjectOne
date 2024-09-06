<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Layout;
use Livewire\Component;

class AuthRegister extends Component
{
    #[Layout('components.layouts.student')]
    public function render()
    {
        return view('livewire.auth.auth-register');
    }
}
