<?php

namespace App\Http\Livewire\Admin\Aducation\Social;

use Livewire\Component;

use App\Models\Social;
use App\Models\SocialCategory;
use File;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AdminUpdateComponent extends Component
{
    
    use WithFileUploads;
    public $category_id;
    public $title;
    public $description;
    public $slug;
    public $image;
    public $status;
    public $newimage;
    

    public $blog_id;
    public function mount($blog_id) {

        $blog = Social::where('id', $blog_id)->first();
        $this->title =  $blog->title;
        $this->slug =  $blog->slug;
        $this->description =  $blog->description;
        $this->image =  $blog->image;
        $this->status =  $blog->status;
 
        $this->category_id =  $blog->category_id;
       
      
        $this->blog_id = $blog->id;

     }

     public function generateSlug(){


        $this->slug = Str::slug($this->title, '-');
    }
     

     public function updateBlog()
     {
       $blog = Social::find($this->blog_id);      
       $blog->title = $this->title;
       $blog->description = $this->description;
       $blog->slug = $this->slug;
       $blog->status = $this->status;
       $blog->category_id = $this->category_id;

  
       if ($this->newimage){
        $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
        $this->newimage->storeAs('public/social', $imageName);
        $blog->image = $imageName; 


    }

       $blog->save();

       session()->flash('message' ,'Etkinlik Başarıyla Güncellendi ');



 }

    public function render()
    {
        $category = SocialCategory::all();

        return view('livewire.admin.aducation.social.admin-update-component' , ['category' => $category])->layout('layouts.admin');
    }
}
