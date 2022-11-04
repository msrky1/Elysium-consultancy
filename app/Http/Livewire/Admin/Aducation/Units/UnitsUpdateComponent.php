<?php

namespace App\Http\Livewire\Admin\Aducation\Units;

use Livewire\Component;
use App\Models\Unit;
use App\Models\SocialCategory;
use File;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Carbon\Carbon;
class UnitsUpdateComponent extends Component
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

        $blog = Unit::where('id', $blog_id)->first();
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
       $blog = Unit::find($this->blog_id);      
       $blog->title = $this->title;
       $blog->description = $this->description;
       $blog->slug = $this->slug;

  
       if ($this->newimage){
        $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
        $this->newimage->storeAs('public/units', $imageName);
        $blog->image = $imageName; 


    }

       $blog->save();

       session()->flash('message' ,'KVKK Başarıyla Güncellendi ');



 }
    public function render()
    {
        return view('livewire.admin.aducation.units.units-update-component')->layout('layouts.admin');
    }
}
