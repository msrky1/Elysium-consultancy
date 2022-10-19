<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category;
use App\Models\Notification;
use Illuminate\Support\Str;
class CategoryEditComponent extends Component
{ 

    public $name;
    public $slug;
    public $category_id;

   

    public function mount ($category_id) {
           
        $category = Category::where('id' , $category_id)->first();

        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->category_id = $category->id;





    }

    
    public function generateSlug(){


        $this->slug = Str::slug($this->name, '-');
    }
     public function updateCategory() {


            $category = Category::find($this->category_id);
            $category->name = $this->name;
            $category->slug = $this->slug;

            $category->save();
            $notification = new Notification();
            $notification->name = $this->name;
            $notification->notification = 'Yeni bir Kategori Düzenlendi!';
            $notification->color = 'info';
            $notification->save();
            session()->flash('message' , 'Kategori Güncellendi');


     }

    public function render()
    {
        return view('livewire.admin.category.category-edit-component')->layout('layouts.admin');
    }
}
