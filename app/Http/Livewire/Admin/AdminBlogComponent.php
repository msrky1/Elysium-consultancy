<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\Blog;
use File;


class AdminBlogComponent extends Component
{

    public function deleteBlog($id)

    {

        
        $blog = Blog::find($id);    
        File::Delete('storage/blog/'.$blog->image);
        $blog->delete();
        session()->flash('message' , 'Blog  Başarıyla Slindi!');
    
    
        

    }

    public function render()
    {

        $category = Category::all();
        $blog = Blog::orderBy('id' , 'DESC')->simplePaginate(12);
        return view('livewire.admin.admin-blog-component' , ['category' => $category , 'blog' => $blog])->layout('layouts.admin');
    }
}
