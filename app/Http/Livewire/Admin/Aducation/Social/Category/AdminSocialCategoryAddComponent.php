<?php

namespace App\Http\Livewire\Admin\Aducation\Social\Category;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Social;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use App\Models\SocialCategory;



class AdminSocialCategoryAddComponent extends Component
{
    public $name;
       
    public $slug;

       
    public function generateSlug(){

        $this->slug  = Str::slug($this->name ,'-');

  }


       public function categoryAdd() {
               
           
           $category = new SocialCategory();
           $category->name = $this->name;
           $category->slug = $this->slug;
           $category->save();
           session()->flash('message' , 'Kategori Eklendi');
                  
       }

     
    public function render()
    {
        return view('livewire.admin.aducation.social.category.admin-social-category-add-component')->layout('layouts.admin');
    }
}
