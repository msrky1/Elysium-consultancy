<?php

namespace App\Http\Livewire\Admin\Galery;

use Livewire\Component;

class GaleryEditComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.galery.galery-edit-component')->layout('layouts.admin');
    }
}
