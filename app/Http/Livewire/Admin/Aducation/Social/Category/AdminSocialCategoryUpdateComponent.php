<?php

namespace App\Http\Livewire\Admin\Aducation\Social\Category;

use Livewire\Component;
use App\Models\SocialCategory;
use Illuminate\Support\Str; 



class AdminSocialCategoryUpdateComponent extends Component
{
    public $name;
    public $category_id;
    public $slug;

       
    public function generateSlug(){

        $this->slug  = Str::slug($this->name ,'-');

  }


    public function mount ($category_id) {
           
        $category = SocialCategory::where('id' , $category_id)->first();

        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->category_id = $category->id;





    }
     public function updateCategory() {


            $category = SocialCategory::find($this->category_id);
            $category->name = $this->name;
            $category->slug = $this->slug;
            $category->save();
            session()->flash('message' , 'Kategori Güncellendi');


     }
    public function render()
    {
        return view('livewire.admin.aducation.social.category.admin-social-category-update-component')->layout('layouts.admin');
    }
}
