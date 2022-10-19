<?php

namespace App\Http\Livewire\Admin\Galery;

use Livewire\Component;
use File;
use Livewire\WithFileUploads; 
use Carbon\Carbon;
use App\Models\Galery;
use App\Models\Image;
use App\Models\GaleryCategory;
class GaleryAddComponent extends Component
{ 

 
    use WithFileUploads;

    public $images = [];
    public $image_id;


     public function save() {
     

        // $this->validate([
        //     'images.*' => 'image|max:2048', // 1MB Max
        // ]);
 
          
        foreach ($this->images as $key => $image) {

            $this->images[$key] = $image->store('galery','public');

           $image_id = $this->image_id;
             
            Galery::create(['image' => $image->hashName() , 'image_id' => $image_id ]);
           

           
       
       
        }

    

        session()->flash('message' , 'Resimleriniz Galeriye Eklendi!');
        
     }
              
    public function render()
    {
        
        $image = Image::orderBy('id' , 'DESC')->simplePaginate(10);
        $category = GaleryCategory::all();

        return view('livewire.admin.galery.galery-add-component' , ['category' => $category , 'image' => $image])->layout('layouts.admin');
    }
}
