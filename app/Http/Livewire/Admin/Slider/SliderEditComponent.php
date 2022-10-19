<?php

namespace App\Http\Livewire\Admin\Slider;

use Livewire\Component;
use App\Models\Slider;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use App\Models\Notification;


class SliderEditComponent extends Component
{

    
    use WithFileUploads;

    public $title; 
    public $title1; 
    public $title2; 
    public $title3; 
    public $title4; 
    public $title5; 
    public $description;
    public $link;
    public $image;  
    public $newimage;
    public $slider_id;

  

    public function mount($slider_id) {
  
        $slider = Slider::where('id', $slider_id)->first();
        $this->title =  $slider->title;
      
        $this->title2 =  $slider->title2;
        $this->title3 =  $slider->title3;
        $this->title4 =  $slider->title4;
        $this->title5 =  $slider->title5;
       
        $this->image =  $slider->image;
 
      
        $this->slider_id = $slider->id;


    }


  



    public function updateSlider()
       {
            $slider = Slider::find($this->slider_id);      
           $slider->title = $this->title;
           $slider->title2 = $this->title2;
           $slider->title3 = $this->title3;
           $slider->title4 = $this->title4;
           $slider->title5 = $this->title5;
     
      
           if ($this->newimage){
            $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
            $this->newimage->storeAs('public/image', $imageName);
            $slider->image = $imageName; 


        }


           $slider->save();
           
        $notification = new Notification();
        $notification->name = $this->title;
        $notification->notification = 'Bir Slider Düzenlendi!';
        $notification->color = 'info';
        $notification->save();

           session()->flash('message' ,'Slider başarıyla Güncellendi ');



     }

          
    public function render()
    {
        return view('livewire.admin.slider.slider-edit-component')->layout('layouts.admin');
    }
}
