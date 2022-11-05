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
    public $name;
    public $title; 
    public $description;
    public $link;
    public $image;




  



    public function addSlider()
       {
           $slider = new Slider();
      
           $slider->title = $this->title;
           $slider->description = $this->description;
           $slider->link = $this->link;
    
      
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
