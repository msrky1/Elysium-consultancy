<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Slider;
use Livewire\WithFileUploads;
use File;

class AdminSliderComponent extends Component
{
    use WithFileUploads;
    public function deleteSlider($id)

    {
        $slider = Slider::find($id);
        File::Delete('storage/image/'.$slider->image);
        $slider->delete();
        session()->flash('message' , 'Slider Başarıyla Slindi!');
    
    
        

    }
    public function render()
    { 

        $slider = Slider::all();
        return view('livewire.admin.admin-slider-component', ['slider' => $slider])->layout('layouts.admin');
    }
}
