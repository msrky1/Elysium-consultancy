<?php

namespace App\Http\Livewire\Admin\Blog;

use Livewire\Component;
use App\Models\Blog;
use App\Models\Category;
use File;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Notification;


class BlogEditComponent extends Component
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

        $blog = Blog::where('id', $blog_id)->first();
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
       $blog = Blog::find($this->blog_id);      
       $blog->title = $this->title;
       $blog->description = $this->description;
       $blog->slug = $this->slug;
       $blog->status = $this->status;
       $blog->category_id = $this->category_id;

  
       if ($this->newimage){
        $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
        $this->newimage->storeAs('public/blog', $imageName);
        $blog->image = $imageName; 


    }
    
    $notification = new Notification();

    $notification->name = $this->title;
    $notification->notification = ' Blog Sayfasında Yeni Bir Yazı Düzenlendi!';
    $notification->color = 'warning';
    $notification->save();

       $blog->save();

       session()->flash('message' ,'Blog Başarıyla Güncellendi ');



 }


     


    public function render()
    {

        $category = Category::all();
        return view('livewire.admin.blog.blog-edit-component', ['category' => $category])->layout('layouts.admin');
    } 
}
