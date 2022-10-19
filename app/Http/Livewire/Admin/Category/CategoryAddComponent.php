<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category;
use App\Models\Notification;
use Illuminate\Support\Str;
class CategoryAddComponent extends Component
{

       public $name;
       public $slug;

       
    public function generateSlug(){

        $this->slug  = Str::slug($this->name ,'-');

  }


       public function categoryAdd() {
               
           
           $category = new Category();
           $category->name = $this->name;
           $category->slug = $this->slug;
           
           $category->save();
      

           session()->flash('message' , 'Kategori Eklendi');
                  
       }

     
    public function render()
    {




        return view('livewire.admin.category.category-add-component')->layout('layouts.admin');
    }
}
