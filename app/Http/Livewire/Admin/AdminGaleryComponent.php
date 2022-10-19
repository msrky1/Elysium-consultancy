<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Galery;
use App\Models\Image;
use App\Models\GaleryCategory;
use File;


class AdminGaleryComponent extends Component
{
 
    
    public function deleteImage($id)

    {
        $galery = Image::find($id);
        File::Delete('storage/galery/kapak/'.$galery->image);
        $galery->delete();
       session()->flash('message-2' , 'Galery Başarıyla Slindi!');
    
    
        

    }

    public function deleteGalery($id)

    {
        $galery = Galery::find($id);
        File::Delete('storage/galery/kapak/'.$galery->image);
        $galery->delete();
      //  session()->flash('message' , 'Slider Başarıyla Slindi!');
    
    
        

    }

    
    public function render()
    {
       
        $category = GaleryCategory::all();
        
        $galery = Galery::all();
        
        $image =  Image::orderBy('id' , 'DESC')->simplePaginate(10);


        return view('livewire.admin.admin-galery-component' , ['galery' => $galery , 'category' => $category , 'image' => $image])->layout('layouts.admin');
    }
}
