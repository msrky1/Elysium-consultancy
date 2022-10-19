<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminHelpComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-help-component')->layout('layouts.admin');
    }
}
