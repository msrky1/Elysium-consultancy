<?php

namespace App\Http\Livewire\Admin\Galery\Category;

use Livewire\Component;
use App\Models\GaleryCategory;
use Illuminate\Support\Str;
class AdminGaleryCategoryAddComponent extends Component
{
    
    public $name;
    public $slug;

    
 public function generateSlug(){

     $this->slug  = Str::slug($this->name ,'-');

}


    public function categoryAdd() {
            
        
        $category = new GaleryCategory();
        $category->name = $this->name;
        $category->slug = $this->slug;
        
        $category->save();
   

        session()->flash('message' , 'Kategori Eklendi');
               
    }

    


    public function render()
    {
        return view('livewire.admin.galery.category.admin-galery-category-add-component')->layout('layouts.admin');
    }
}
