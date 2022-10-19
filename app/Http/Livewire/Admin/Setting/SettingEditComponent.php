<?php

namespace App\Http\Livewire\Admin\Setting;

use Livewire\Component;
use App\Models\Setting;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use App\Models\Notification;


class SettingEditComponent extends Component
{ 

    use WithFileUploads;
    public $name;
    public $contact;
    public $email;
    public $whatsapp;
    public $address;
    public $image;

    public $newimage;
 
    
 
    public $setting_id;

 

    public function mount ($setting_id){


        $setting = Setting::where('id', $setting_id)->first();
        $this->name =  $setting->name;
        $this->contact =  $setting->contact;
        $this->email =  $setting->email;
        $this->whatsapp =  $setting->whatsapp;
        $this->address =  $setting->address;
        $this->image =  $setting->image;
      
        $this->setting_id = $setting->id;
    
    }




    public function updateSetting()
    {
            $setting = Setting::find($this->setting_id);
            $setting->name = $this->name;
            $setting->email = $this->email;
            $setting->contact = $this->contact;
            $setting->whatsapp = $this->whatsapp;
            $setting->address = $this->address;
          

            if ($this->newimage){
                $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
                $this->newimage->storeAs('public/image', $imageName);
                $setting->image = $imageName; 


            }
         
           
            $setting->save();

            $notification = new Notification();
            $notification->name = $this->name;
            $notification->notification = 'Ayarlar Düzenlendi!';
            $notification->color = 'secondary';
            $notification->save();
          

            session()->flash('message' ,'Güncelleme Başarılı ');

    }
   

    public function render()
    {
        return view('livewire.admin.setting.setting-edit-component')->layout('layouts.admin');
    }
}
