<?php

namespace App\Http\Livewire\Test;

use Livewire\Component;
use App\Models\Setting;

class TestComponent extends Component
{
    public function render()
    {
 

        $setting = Setting::all();

        return view('livewire.test.test-component' , ['setting' => $setting])->layout('layouts.test');
    }
}
