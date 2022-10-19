<?php

namespace App\Http\Livewire\Admin\Blog;

use Livewire\Component;
use App\Models\Category;
use Carbon\Carbon;
use App\Models\Blog;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use App\Models\Notification;
class BlogAddComponent extends Component
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


    $blog = new Blog();
   
     $blog->slug = $this->slug;
      $blog->title = $this->title;
      $blog->description = $this->description;




  
    $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
    $this->image->storeAs('public/blog', $imageName);
    $blog->image = $imageName; 

    $blog->category_id = $this->category_id;
    $blog->status = $this->status;

    $notification = new Notification();

    $notification->name = $this->title;
    $notification->notification = ' Blog Sayfasına Yeni Bir Blog Yazısı Başarıyla Eklendi!';
    $notification->color = 'info';

    $notification->save();

    $blog->save();

   

    session()->flash('message' ,'Haber Başarıyla Eklendi! ');


  }
    
    

    public function render()
    {
        $category = Category::all();
        return view('livewire.admin.blog.blog-add-component' , ['category' => $category])->layout('layouts.admin');
    }
}
