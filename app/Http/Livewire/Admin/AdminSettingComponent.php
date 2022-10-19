<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Setting;
use Carbon\Carbon;
use Livewire\WithFileUploads;


class AdminSettingComponent extends Component
{
  


    public function render()
    {
        $setting = Setting::all();
        return view('livewire.admin.admin-setting-component' , [  'settings' => $setting] )->layout('layouts.admin');
    }
}
