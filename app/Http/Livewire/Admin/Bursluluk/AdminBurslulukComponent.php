<?php

namespace App\Http\Livewire\Admin\Bursluluk;

use Livewire\Component;
use App\Models\Scholarship;

class AdminBurslulukComponent extends Component
{
    public function render()
    {

        $scholarship = Scholarship::all();
        return view('livewire.admin.bursluluk.admin-bursluluk-component' , ['scholarship' => $scholarship ])->layout('layouts.admin');
    }
}
