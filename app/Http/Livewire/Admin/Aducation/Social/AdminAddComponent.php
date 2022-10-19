<?php

namespace App\Http\Livewire\Admin\Aducation\Social;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Social;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use App\Models\SocialCategory;
 class AdminAddComponent extends Component
{
    use WithFileUploads;
    public $category_id;
    public $title;
    public $description;
    public $slug;
    public $image;
    public $status;
       


    public function generateSlug(){

        $this->slug  = Str::slug($this->title ,'-');

  }

  
  public function addBlog() {


    $blog = new Social();
   
     $blog->slug = $this->slug;
      $blog->title = $this->title;
      $blog->description = $this->description;




  
    $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
    $this->image->storeAs('public/social', $imageName);
    $blog->image = $imageName; 

    $blog->category_id = $this->category_id;
    $blog->status = $this->status;


    $blog->save();

   

    session()->flash('message' ,'Etkinlik Başarıyla Eklendi! ');


  }

     
    public function render()
    {
        $category = SocialCategory::all();
        return view('livewire.admin.aducation.social.admin-add-component', ['category' => $category])->layout('layouts.admin');
    }
}
