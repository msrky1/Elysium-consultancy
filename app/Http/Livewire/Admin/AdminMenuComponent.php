<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminMenuComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-menu-component')->layout('layouts.admin');
    }
}
