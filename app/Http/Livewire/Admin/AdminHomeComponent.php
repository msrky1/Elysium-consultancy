<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Visit;
class AdminHomeComponent extends Component
{
    public function render()
    {

        
        $visit = Visit::all();
        return view('livewire.admin.admin-home-component' , ['visit' => $visit ])->layout('layouts.admin');
    }
}
