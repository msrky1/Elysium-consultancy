<?php

namespace App\Http\Livewire\Admin\Slider;

use Livewire\Component;
use App\Models\Slider;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use App\Models\Notification;


class SliderAddComponent extends Component
{

    use WithFileUploads;
   
  
   
    public $image;




  



    public function addSlider()
       {
           $slider = new Slider();
      
        
         
    
      
           $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
           $this->image->storeAs('public/image', $imageName);
           $slider->image = $imageName; 

        
        
         

           $slider->save();

           session()->flash('message' ,'Slider başarıyla Eklendi ');



          }

          



    
    public function render()
    {
        
        return view('livewire.admin.slider.slider-add-component')->layout('layouts.admin');
    }
}
