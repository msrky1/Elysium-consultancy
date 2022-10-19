<?php

namespace App\Http\Livewire\Test;

use Livewire\Component;
use App\Models\Setting;

class TestEditComponent extends Component
{
    
    public $name;
 
    public $setting_id;

 

    public function mount ($setting_id){


        $setting = Setting::where('id', $setting_id)->first();
        $this->name =  $setting->name;
      
        $this->setting_id = $setting->id;
    
    }




    public function updateSetting()
    {
            $setting = Setting::find($this->setting_id);
            $setting->name = $this->name;
         
           
            $setting->save();

            session()->flash('message' ,'Güncelleme Başarılı ');

    }
   
    public function render()
    {
        return view('livewire.test.test-edit-component')->layout('layouts.test');
    }
}
