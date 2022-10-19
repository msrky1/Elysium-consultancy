<?php

namespace App\Http\Livewire\Admin\PopUp;

use Livewire\Component;
use App\Models\Popup;

class AdminPopupComponent extends Component
{
    public function render()
    {

        $popup = Popup::all();
        return view('livewire.admin.pop-up.admin-popup-component' , ['popup' => $popup])->layout('layouts.admin');
    }
}
