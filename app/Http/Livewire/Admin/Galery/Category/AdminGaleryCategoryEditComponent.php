<?php

namespace App\Http\Livewire\Admin\Galery\Category;

use Livewire\Component;
use App\Models\GaleryCategory;
use Illuminate\Support\Str;

class AdminGaleryCategoryEditComponent extends Component
{
    public $name;
    public $slug;
    public $category_id;

   

    public function mount ($category_id) {
           
        $category = GaleryCategory::where('id' , $category_id)->first();

        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->category_id = $category->id;





    }

    
    public function generateSlug(){


        $this->slug = Str::slug($this->name, '-');
    }
     public function updateCategory() {


            $category = GaleryCategory::find($this->category_id);
            $category->name = $this->name;
            $category->slug = $this->slug;

            $category->save();
          
            session()->flash('message' , 'Kategori Güncellendi');


     }
    public function render()
    {
        return view('livewire.admin.galery.category.admin-galery-category-edit-component')->layout('layouts.admin');
    }
}
