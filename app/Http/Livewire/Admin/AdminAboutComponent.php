<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\About;

class AdminAboutComponent extends Component
{
    public function render()
    {
        $about = About::all();
        return view('livewire.admin.admin-about-component' , ['abouts' => $about])->layout('layouts.admin');
    }
}
