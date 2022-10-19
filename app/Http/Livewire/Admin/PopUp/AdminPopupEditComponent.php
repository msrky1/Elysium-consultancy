<?php

namespace App\Http\Livewire\Admin\PopUp;

use Livewire\Component;
use App\Models\Popup;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use App\Models\Notification;

class AdminPopupEditComponent extends Component
{

    
    
    use WithFileUploads;

    public $name; 
    public $url; 
    public $durum; 
    public $image; 
    public $newimage;
    public $popup_id;

  

    public function mount($popup_id) {
  
        $slider = Popup::where('id', $popup_id)->first();
        $this->name =  $slider->name;
      
        $this->url =  $slider->url;
        $this->durum =  $slider->durum;
        $this->image =  $slider->image;
      
      
      
        $this->popup_id = $slider->id;


    }


  



    public function updateSlider()
       {
            $slider = Popup::find($this->popup_id);      
           $slider->name = $this->name;
           $slider->url = $this->url;
           $slider->durum = $this->durum;
           $slider->image = $this->image;
     
     
      
           if ($this->newimage){
            $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
            $this->newimage->storeAs('public/popup', $imageName);   
            $slider->image = $imageName; 


        }


           $slider->save();
           
     

           session()->flash('message' ,'Popup başarıyla Güncellendi ');



     }

    public function render()
    {
        return view('livewire.admin.pop-up.admin-popup-edit-component')->layout('layouts.admin');
    }
}
