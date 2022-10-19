<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class LoginComponent extends Component
{
    public function render()
    {
        
        return view('livewire.admin.login-component')->layout('layouts.base');
    }
}
