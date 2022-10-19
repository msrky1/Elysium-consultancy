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
   
    public $title; 
    public $title2; 
    public $title3; 
    public $title4; 
    public $title5; 
   
    public $image;




  



    public function addSlider()
       {
           $slider = new Slider();
      
           $slider->title = $this->title;
           $slider->title2 = $this->title2;
           $slider->title3 = $this->title3;
           $slider->title4 = $this->title4;
           $slider->title5 = $this->title5;
         
    
      
           $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
           $this->image->storeAs('public/image', $imageName);
           $slider->image = $imageName; 

           $notification = new Notification();
           $notification->name = $this->title;
           $notification->notification = 'Yeni Bir Slider Eklendi!';
           $notification->color = 'info';
           $notification->save();
        
         

           $slider->save();

           session()->flash('message' ,'Slider başarıyla Eklendi ');



          }

          



    
    public function render()
    {
        
        return view('livewire.admin.slider.slider-add-component')->layout('layouts.admin');
    }
}
