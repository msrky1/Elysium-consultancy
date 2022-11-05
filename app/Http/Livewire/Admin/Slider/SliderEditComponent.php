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
    public $description;
    public $link;
    public $image;  
    public $newimage;
    public $slider_id;

  

    public function mount($slider_id) {
  
        $slider = Slider::where('id', $slider_id)->first();
        $this->title =  $slider->title;
        $this->description =  $slider->description;
        $this->image =  $slider->image;
        $this->title =  $slider->title;
        $this->link =  $slider->link;
      
        $this->slider_id = $slider->id;


    }


  



    public function updateSlider()
       {
            $slider = Slider::find($this->slider_id);      
           $slider->title = $this->title;
           $slider->description = $this->description;
           $slider->link = $this->link;
    
      
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
