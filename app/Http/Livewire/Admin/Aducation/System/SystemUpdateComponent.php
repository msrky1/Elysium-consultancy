<?php

namespace App\Http\Livewire\Admin\Aducation\System;

use Livewire\Component;
use App\Models\System;
use App\Models\SocialCategory;
use File;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Carbon\Carbon;
class SystemUpdateComponent extends Component
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

        $blog = System::where('id', $blog_id)->first();
        $this->title =  $blog->title;
        $this->slug =  $blog->slug;
        $this->description =  $blog->description;
        $this->image =  $blog->image;
 
       
       
      
        $this->blog_id = $blog->id;

     }

     public function generateSlug(){


        $this->slug = Str::slug($this->title, '-');
    }
     

     public function updateBlog()
     {
       $blog = System::find($this->blog_id);      
       $blog->title = $this->title;
       $blog->description = $this->description;
       $blog->slug = $this->slug;

  
       if ($this->newimage){
        $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
        $this->newimage->storeAs('public/system', $imageName);
        $blog->image = $imageName; 


    }

       $blog->save();

       session()->flash('message' ,'Eğitim Sistemi Başarıyla Güncellendi ');



 }

    public function render()
    {
        return view('livewire.admin.aducation.system.system-update-component')->layout('layouts.admin');
    }
}
